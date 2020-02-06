<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('features');
        $this->load->model('posts');
        $this->load->helper('url');
    }
    
    public function posts()
    {
        $data = $this->posts->showAll();
        $this->load->view('layouts/head');
        $this->load->view('layouts/nav');
		$this->load->view('posts',['data' => $data]);
    }

    public function insert1()
    {
        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $this->posts->insert1($title,$content);
        redirect(base_url().'index.php/post/posts'); 
    }

    public function update1()
    {
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $this->posts->update1($id,$title,$content);
        redirect(base_url().'index.php/post/posts'); 
    }

    public function delete1()
    {
        $id = $this->input->post('id');
        $this->posts->delete1($id);
        redirect(base_url().'index.php/post/posts'); 
    }
    
    
}

