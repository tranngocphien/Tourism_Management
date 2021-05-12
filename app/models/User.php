<?php
    class User {
        protected $db;
        public function __construct() {
            $this->db = new Database;
        }
        
        public function register($username, $password, $email, $phone){
            $query = "INSERT INTO `user`(`user_id`, `username`, `password`, `fullname`, `tel`) VALUES (0,'$username','$password','$email','$phone')";
            if($this->db->query($query)){
                return true;
            }
            else {
                return false;
            }
        }   
    }