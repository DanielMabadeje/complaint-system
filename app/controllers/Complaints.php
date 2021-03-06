<?php
class Complaints extends Controller
{
    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }
        $this->postModel = $this->model('Post');
        $this->userModel = $this->model('User');
    }
    public function index()
    {
        $posts = $this->postModel->getPosts();
        $data = [
            'posts' => $posts
        ];
        $this->view('posts/index', $data);
    }
    public function show($id)
    {
        $post = $this->postModel->show($id);
        $user = $this->userModel->getUserbyId($post->user_id);
        $comments=$this->postModel->getPostsComments($id);
        $data = [
            'post' => $post,
            'user' => $user,
            'comments' => $comments,
        ];
        $this->view('posts/show', $data);
    }
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'user_id' => $_SESSION['user_id'],
                'title_err' => '',
                'body_err' => '',
            ];

            //validate title
            if (empty($data['title'])) {
                $data['title_err'] = 'Please enter title';
            }
            if (empty($data['body'])) {
                $data['body_err'] = 'Please enter body text';
            }

            if (empty($data['title_err']) && empty($data['body_err'])) {
                // die('success');
                if ($this->postModel->addPost($data)) {
                    flash('post_message', 'Complaint Added');
                    redirect('complaints');
                } else {
                    die('somethin went wrong');
                }
            } else {
                $this->view('posts/add', $data);
            }
        } else {
            $data = [
                'title' => '',
                'body' => ''
            ];
            $this->view('posts/add', $data);
        }
    }
    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'id' => $id,
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'title_err' => '',
                'body_err' => '',
            ];

            //validate title
            if (empty($data['title'])) {
                $data['title_err'] = 'Please enter title';
            }
            if (empty($data['body'])) {
                $data['body_err'] = 'Please enter body text';
            }

            if (empty($data['title_err']) && empty($data['body_err'])) {
                // die('success');
                if ($this->postModel->updatePost($data)) {
                    flash('post_message', 'Complaint Edited');
                    redirect("complaints");
                } else {
                    die('something went wrong');
                }
            } else {
                $this->view('posts/edit', $data);
            }
        } else {
            $post = $this->postModel->show($id);
            if ($post->user_id != $_SESSION['user_id']) {
                redirect('complaints');
            }
            $data = [
                'id' => $id,
                'title' => $post->title,
                'body' => $post->body,
                'title_err' => '',
                'body_err' => '',
            ];
            $this->view('posts/edit', $data);
        }
    }
    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $post = $this->postModel->show($id);
            if ($post->user_id != $_SESSION['user_id']) {
                redirect('complaints');
            }
            if ($this->postModel->deletePost($id)) {
                flash('post_message', 'Complaint Removed');
                redirect('posts');
            }
        } else {
            redirect('posts');
        }
    }
}
