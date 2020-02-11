<?php
defined('BASEPATH') OR exit('No direct script access allowed');


use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class Features extends CI_Model  {

	public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function log($type, $logMessage)
    {
        $log = new Logger('log_message');
        $log->pushHandler(new StreamHandler(__DIR__ . '/../../log_msg.log', Logger::WARNING));
        if ($type == 1) {
            $log->warning($logMessage);
        } else {
            $log->error($logMessage);
        }
    }
	
	public function random_insert()
    {
        for($i=0;$i<=3;$i++){
            $str="QWERTYUIOPASDFGHJKLZXCVBNM1234567890qwertyuiopasdfghjklzxcvbnm";
            str_shuffle($str);
            $title=substr(str_shuffle($str),26,5);
            
            $str="QWERTYUIOPASDFGHJKLZXCVBNM1234567890qwertyuiopasdfghjklzxcvbnm";
            str_shuffle($str);
            $content=substr(str_shuffle($str),26,75);
            
            $this->insert($title,$content);
        }
    }
    
    private function insert($title,$content)
    {
        $sql = "INSERT INTO posts (title, content) VALUES (:title,:content)";
		$sth = $this->db->conn_id->prepare($sql);
		$sth->bindParam(':title',$title);
		$sth->bindParam(':content',$content);
		$sth->execute();
    }

}