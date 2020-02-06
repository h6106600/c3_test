<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('features');
    }

	public function show()
	{
        $sql = "SELECT * FROM posts";
		$sth = $this->db->conn_id->prepare($sql);
		$sth->execute();
		$result = $sth->fetchAll(PDO::FETCH_ASSOC);
        $data = $result;
		$this->load->view('home',['data' => $data]);
	}
    
    public function insert_data()
    {
        $this->features->random_insert();
    }
    
    
}

