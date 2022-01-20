<?php
class Admins extends Controller
{
    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }

        if (!isAdmin()) {
            redirect('complaints');
        }
        $this->postModel = $this->model('Post');
        $this->userModel = $this->model('User');
    }
    public function index()
    {
        $posts = $this->postModel->getPosts();
        $data = [
            'posts' => $posts,
        ];
        $this->view('admins/posts/index', $data);
    }
    public function show($id)
    {
        $post = $this->postModel->show($id);
        $comments=$this->postModel->getPostsComments($id);
        $user = $this->userModel->getUserbyId($post->user_id);
        $data = [
            'post' => $post,
            'user' => $user,
            'comments' => $comments,
        ];
        $this->view('admins/posts/show', $data);
    }
    
    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $post = $this->postModel->show($id);
            if ($post->user_id != $_SESSION['user_id']) {
                redirect('posts');
            }
            if ($this->postModel->deletePost($id)) {
                flash('post_message', 'Post Removed');
                redirect('posts');
            }
        } else {
            redirect('posts');
        }
    }

    public function addcomment($id)
    {
        # code...
    }
}
