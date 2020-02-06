<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('features');
        $this->load->model('posts');
        $this->load->helper('url');
    }

	public function index()
	{
        $data = $this->posts->showAll();
        $this->load->view('layouts/head');
        $this->load->view('layouts/nav');
		$this->load->view('home',['data' => $data]);
    }
    
    public function insert_data()
    {
        $this->features->random_insert();
        redirect(base_url().'index.php/home'); 
    }
    
    
}

