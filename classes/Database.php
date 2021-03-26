<?php
    session_start(); 

    class Database{
        private $servername='localhost';
        private $username='root';
        private $password='root';
        private $db_name='dev_adv_night';
        public $conn;

        public function __construct(){   
            // is to automatically runs whenever this file is executed/run
            $this->conn = new mysqli(
                $this->servername,
                $this->username,
                $this->password,
                $this->db_name
            );
            if($this->conn == TRUE){
                return $this->conn;
            } else{
                die('ERROR '.$this->conn->connect_error);
            }
        } 
    }


   
?>