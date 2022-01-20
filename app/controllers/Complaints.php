<?php

/**
 * Every page loads from view folder
 * in order to load a view inside a folder of the view folder
 * the folder/filename must be parsed
 */
class Complaints extends Controller
{
    public function __construct()
    {}
  
    public function Index()
    {
       
        $data = [
            'title' => 'Complaint System',
            'description' => "A simple Bank complaint system to help serve customers better",
        ];
        $this->view('pages/index', $data);
    }
}
