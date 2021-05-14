<?php

class Admin {

    protected $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getListUser() {
        $query = "SELECT * FROM user";
        return $this->db->query($query);
    }

    public function getListTour() {
        $query = "SELECT * FROM tour, places WHERE tour.places_id = places.places_id";
        return $this->db->query($query);
    }

    public function getListBooking() {
        $query = "SELECT booking.booking_id, tour.tour_name,user.username,booking.number_ticket,booking.status, booking.date_start FROM booking, tour, user WHERE tour.tour_id = booking.tour_id and booking.user_id = user.user_id";
        return $this->db->query($query);
    }
    
    public function setBookingStatus($booking_id,$status) {
        $query = "UPDATE booking SET status='$status' WHERE booking_id = '$booking_id'";
        return $this->db->query($query);
    }

}
