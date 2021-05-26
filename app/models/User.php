<?php

class User {

    protected $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function register($username, $password, $email, $phone, $fullname, $address) {
        $username = mysqli_real_escape_string($this->db->dbHandle, $username);
        $password = mysqli_real_escape_string($this->db->dbHandle, $password);
        $email = mysqli_real_escape_string($this->db->dbHandle, $email);
        $phone = mysqli_real_escape_string($this->db->dbHandle, $phone);
        $fullname = mysqli_real_escape_string($this->db->dbHandle, $fullname);
        $address = mysqli_real_escape_string($this->db->dbHandle, $address);

        $query = "INSERT INTO `user`(`user_id`, `username`, `password`, `fullname`,`email`, `tel`, `address`) VALUES (0,'%s','%s','%s','%s','%s','%s')";

        $query = sprintf($query, $username, $password, $fullname, $email, $phone, $address);
        return $this->db->query($query);
            
    }

    public function login($username) {
        $username = mysqli_real_escape_string($this->db->dbHandle, $username);
        $query = "SELECT user_id ,password FROM user WHERE username = '%s' ";
        $query = sprintf($query, $username);
        //print_r($query);
        //die ($query);
        return $this->db->query($query);
    }


        public function book($user_id, $tour_id, $ticket, $status, $date_start, $date_booking, $total, $payment){
        $query = "INSERT INTO `booking`(`booking_id`, `user_id`, `tour_id`, `number_ticket`, `status`, `date_start`, `date_booking`, `money`, `payment`) 
                                        VALUES (0,'$user_id','$tour_id','$ticket','$status','$date_start','$date_booking','$total', '$payment')";
        return $this->db->query($query);
        
    }


    public function updateAccount($user_id, $fullname, $email, $phone, $address){
        $email = mysqli_real_escape_string($this->db->dbHandle, $email);
        $phone = mysqli_real_escape_string($this->db->dbHandle, $phone);
        $fullname = mysqli_real_escape_string($this->db->dbHandle, $fullname);
        $address = mysqli_real_escape_string($this->db->dbHandle, $address);

        $query = "UPDATE `user` SET `fullname`='%s',`email`='%s',`tel`='%s',`address`='%s' WHERE `user_id`='$user_id'";

        $query = sprintf($query, $fullname, $email, $phone, $address);

        return $this->db->query($query);
        
    }

        
        public function getUser($user_id){
        $query = "SELECT user.fullname, user.email, user.tel, user.address FROM user where user_id = $user_id";
            return $this->db->query($query,1);
    }

        public function getUserByUsername($username){
        $query = "SELECT  user.username ,user.fullname, user.email, user.tel, user.address FROM user where user.username = '$username'";

            return $this->db->query($query,1);
    }

    public function getCarts($user_id) {
        $query = "SELECT * FROM tour, booking, places_image 
            WHERE tour.tour_id = booking.tour_id 
            AND tour.places_id = places_image.places_id 
            AND booking.user_id = $user_id AND places_image.image_id = 
            (SELECT ip.image_id FROM places_image ip WHERE ip.places_id = tour.places_id ORDER BY ip.image_id LIMIT 1)";
        return $this->db->query($query);
    }

    public function getImageByTourId($tour_id) {
        $query = "SELECT * from places_image where places_image.tour_id = $tour_id";
        return $this->db->query($query);
    }

        

        public function getTourById ($tour_id){
        $query = "SELECT * FROM tour, places, places_image  
            WHERE tour.places_id = places.places_id AND tour.tour_id = $tour_id 
            AND image_id = (
                SELECT image_id FROM places_image 
                WHERE places_image.places_id = places.places_id 
                ORDER by image_id LIMIT 1)";
        return $this->db->query($query);
    }
        public function getProfile($user_id){
        $query = "SELECT * FROM user WHERE user.user_id = '$user_id'";
        return $this->db->query($query);
    }

    public function changePassword($np, $user_id) {
        $np = mysqli_real_escape_string($this->db->dbHandle, $np);
        $query = "UPDATE `user` SET `password`='%s' WHERE user_id = $user_id";
        $query = sprintf($query, $np);
        return $this->db->query($query);
    }

}
