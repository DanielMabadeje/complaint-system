<?php

/**
 * Every page loads from view folder
 * in order to load a view inside a folder of the view folder
 * the folder/filename must be parsed
 */
class Pages extends Controller
{
    public function __construct()
    {}
    public function about()
    {
        $data = [
            'title' => 'About',
            'description' => "A simple Bank complaint system to help serve customers better",
        ];
        $this->view('pages/about', $data);
    }
    public function Index()
    {
        if (isLoggedIn()) {
            redirect('complaints');
        }
        $data = [
            'title' => 'Complaint System',
            'description' => "A simple Bank complaint system to help serve customers better",
        ];
        $this->view('pages/index', $data);
    }

    public function faq()
    {
        $data = [
            'title' => 'Complaint System',
            'description' => "A simple Bank complaint system to help serve customers better",
        ];
        $this->view('pages/faq', $data);
    }
}
