<?php
    class User {
        protected $db;
        public function __construct() {
            $this->db = new Database;
        }
        
        public function register($username, $password, $email, $phone, $fullname){
            $query = "INSERT INTO `user`(`user_id`, `username`, `password`, `fullname`,`email`, `tel`) VALUES (0,'$username','$password','$fullname','$email','$phone')";
            if($this->db->query($query)){
                return true;
            }
            else {
                return false;
            }
        }   
    }