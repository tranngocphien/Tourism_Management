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

    public function insertPlaces($places_name, $places_description) {
        $query = "INSERT INTO `places`(`places_id`, `places_name`, `places_description`) VALUES (0,'$places_name','$places_description')";
        return $this->db->query($query);
    }
    
    public function getMaxID() {
        $query = "SELECT places.places_id FROM places ORDER BY places.places_id DESC LIMIT 1";
        return $this->db->query($query, 1);
    }
    
    public function insertTour($data) {
        
        $tourname = $data["tourname"];
        $tourday = $data["tourday"];
        $tournight = $data["tournight"];
        $transport = $data["transport"];
        $pricepersonal = $data["price"];
        $pricegroup = $data["prices"];
        $placesid = $data["placesid"];
        $query = "INSERT INTO `tour`(`tour_id`, `tour_name`, `tour_day`, `tour_night`, `transport`, `price_personal`, `price_group`, `places_id`) VALUES (0,'$tourname','$tourday','$tournight','$transport','$pricepersonal','$pricegroup','$placesid')";
        return $this->db->query($query);
        
    }

    public function deleteTour($tour_id) {
        $query = "DELETE FROM tour WHERE tour.tour_id = $tour_id";
        return $this->db->query($query);
    }

    public function deleteBooking($tour_id) {
        $query = "DELETE FROM booking WHERE booking.tour_id = $tour_id";
        return $this->db->query($query);
    }

    public function getDetailTour($tour_id) {
        $query = "SELECT * FROM tour,places WHERE tour.places_id = places.places_id AND tour.tour_id = $tour_id";
        return $this->db->query($query);
    }

    public function getListBooking() {
        $query = "SELECT booking.booking_id, tour.tour_name,user.username,booking.number_ticket,booking.status, booking.date_start FROM booking, tour, user WHERE tour.tour_id = booking.tour_id and booking.user_id = user.user_id";
        return $this->db->query($query);
    }

    public function setBookingStatus($booking_id, $status) {
        $query = "UPDATE booking SET status='$status' WHERE booking_id = '$booking_id'";
        return $this->db->query($query);
    }

}
