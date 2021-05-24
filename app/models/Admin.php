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

    public function searchUser($title, $key) {
        $key = mysqli_real_escape_string($this->db->dbHandle, $key);

        $query = "SELECT * FROM user WHERE user.$title LIKE '%%%s%%'";
        $query = sprintf($query, $key);
        return $this->db->query($query);
    }

    public function getListTour() {
        $query = "SELECT * FROM tour, places WHERE tour.places_id = places.places_id";
        return $this->db->query($query);
    }

    public function getListTourFromPlacesName($key) {
        $key = mysqli_real_escape_string($this->db->dbHandle, $key);

        $query = "SELECT * FROM tour, places WHERE tour.places_id = places.places_id AND places.places_name LIKE '%%%s%%'";
        $query = sprintf($query, $key);

        return $this->db->query($query);
    }

    public function getListTourByTourName($key) {
        $key = mysqli_real_escape_string($this->db->dbHandle, $key);

        $query = "SELECT * FROM tour, places WHERE tour.places_id = places.places_id AND tour.tour_name LIKE '%%%s%%'";
        $query = sprintf($query, $key);

        return $this->db->query($query);
    }

    public function searchTour($title, $key) {
        $key = mysqli_real_escape_string($this->db->dbHandle, $key);

        $query = "SELECT * FROM tour, places WHERE tour.places_id = places.places_id AND tour.$title = '%s'";
        $query = sprintf($query, $key);
        return $this->db->query($query);
    }

    public function insertPlaces($places_name, $places_description) {
        $places_name = mysqli_real_escape_string($this->db->dbHandle, $places_name);
        $places_description = mysqli_real_escape_string($this->db->dbHandle, $places_description);

        $query = "INSERT INTO `places`(`places_id`, `places_name`, `places_description`) VALUES (0,'%s','%s')";
        $query = sprintf($query, $places_name, $places_description);
        return $this->db->query($query);
    }

    public function updatePlaces($places_id, $places_name, $places_description) {
        $places_id = mysqli_real_escape_string($this->db->dbHandle, $places_id);
        $places_name = mysqli_real_escape_string($this->db->dbHandle, $places_name);
        $places_description = mysqli_real_escape_string($this->db->dbHandle, $places_description);

        $query = "UPDATE places SET places.places_name = '%s', places_description = '%s' WHERE places.places_id = %d  ";
        $query = sprintf($query, $places_name, $places_description, $places_id);
        return $this->db->query($query);
    }

    public function getMaxID() {
        $query = "SELECT places.places_id FROM places ORDER BY places.places_id DESC LIMIT 1";
        return $this->db->query($query, 1);
    }

    public function getByTourName($tour_name) {
        $tour_name = mysqli_real_escape_string($this->db->dbHandle, $tour_name);

        $query = "SELECT tour.tour_id FROM tour WHERE tour.tour_name = '%s'";
        $query = sprintf($query, $tour_name);
        return $this->db->query($query);
    }

    public function insertTour($data) {

        $tourname = mysqli_real_escape_string($this->db->dbHandle, $data["tourname"]);
        $tourday = mysqli_real_escape_string($this->db->dbHandle, $data["tourday"]);
        $tournight = mysqli_real_escape_string($this->db->dbHandle, $data["tournight"]);
        $transport = mysqli_real_escape_string($this->db->dbHandle, $data["transport"]);
        $pricepersonal = mysqli_real_escape_string($this->db->dbHandle, $data["price"]);
        $pricegroup = mysqli_real_escape_string($this->db->dbHandle, $data["prices"]);
        $placesid = mysqli_real_escape_string($this->db->dbHandle, $data["placesid"]);
        $query = "INSERT INTO `tour`(`tour_id`, `tour_name`, `tour_day`, `tour_night`, `transport`, `price_personal`, `price_group`, `places_id`) VALUES (0,'%s','%d','%d','%s','%d','%d','%d')";
        $query = sprintf($query, $tourname, $tourday, $tournight, $transport, $pricepersonal, $pricegroup, $placesid);
        return $this->db->query($query);
    }

    public function updateTour($data) {
        $tourid = mysqli_real_escape_string($this->db->dbHandle, $data["tourid"]);
        $tourname = mysqli_real_escape_string($this->db->dbHandle, $data["tourname"]);
        $tourday = mysqli_real_escape_string($this->db->dbHandle, $data["tourday"]);
        $tournight = mysqli_real_escape_string($this->db->dbHandle, $data["tournight"]);
        $transport = mysqli_real_escape_string($this->db->dbHandle, $data["transport"]);
        $pricepersonal = mysqli_real_escape_string($this->db->dbHandle, $data["price"]);
        $pricegroup = mysqli_real_escape_string($this->db->dbHandle, $data["prices"]);
        $placesid = mysqli_real_escape_string($this->db->dbHandle, $data["placesid"]);
        $query = "UPDATE tour SET tour.tour_name = '%s', tour.tour_day =%d , tour.tour_night = %d, tour.transport = '%s', tour.price_personal = '%d', tour.price_group = '%d' WHERE tour.tour_id = '%d'";
        $query = sprintf($query, $tourname, $tourday, $tournight, $transport, $pricepersonal, $pricegroup, $tourid);
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
        $query = "SELECT booking.booking_id, tour.tour_name,user.username,booking.number_ticket,booking.status, booking.date_start, booking.payment, booking.money FROM booking, tour, user WHERE tour.tour_id = booking.tour_id and booking.user_id = user.user_id";
        return $this->db->query($query);
    }

    public function getListBookingByTourName($key) {
        $key = mysqli_real_escape_string($this->db->dbHandle, $key);

        $query = "SELECT booking.booking_id, tour.tour_name,user.username,booking.number_ticket,booking.status, booking.date_start, booking.payment, booking.money FROM booking, tour, user WHERE tour.tour_id = booking.tour_id and booking.user_id = user.user_id and tour.tour_name LIKE '%%%s%%'";
        $query = sprintf($query, $key);
        return $this->db->query($query);
    }

    public function getListBookingByUserName($key) {
        $key = mysqli_real_escape_string($this->db->dbHandle, $key);

        $query = "SELECT booking.booking_id, tour.tour_name,user.username,booking.number_ticket,booking.status, booking.date_start, booking.payment, booking.money FROM booking, tour, user WHERE tour.tour_id = booking.tour_id and booking.user_id = user.user_id and user.username LIKE '%%%s%%'";
        $query = sprintf($query, $key);
        return $this->db->query($query);
    }

    public function geListBookingByUserId($key) {
        $key = mysqli_real_escape_string($this->db->dbHandle, $key);

        $query = "SELECT booking.booking_id, tour.tour_name,user.username,booking.number_ticket,booking.status, booking.date_start, booking.payment, booking.money FROM booking, tour, user WHERE tour.tour_id = booking.tour_id and booking.user_id = user.user_id and user.user_id = '%d'";
        $query = sprintf($query, $key);

        return $this->db->query($query);
    }

    public function searchBooking($title, $key) {
        $key = mysqli_real_escape_string($this->db->dbHandle, $key);

        $query = "SELECT booking.booking_id, tour.tour_name,user.username,booking.number_ticket,booking.status, booking.date_start, booking.payment, booking.money FROM booking, tour, user WHERE tour.tour_id = booking.tour_id and booking.user_id = user.user_id and booking.$title = '%s'";
        $query = sprintf($query, $key);

        return $this->db->query($query);
    }

    public function setBookingStatus($booking_id, $status) {
        $query = "UPDATE booking SET status='$status' WHERE booking_id = '$booking_id'";
        return $this->db->query($query);
    }

    public function getNumberUser() {
        $query = "SELECT COUNT(username) FROM user";
        return $this->db->query($query);
    }

    public function getNumberTour() {
        $query = "SELECT COUNT(tour_name) FROM tour";
        return $this->db->query($query);
    }

    public function getNumberTicket() {
        $query = "SELECT SUM(number_ticket) FROM booking";
        return $this->db->query($query);
    }

    public function getRevenue() {
        $query = "SELECT SUM(booking.money)AS revenue FROM booking WHERE booking.status = 'Thành công'";
        return $this->db->query($query);
    }

    public function getNumberTicketAndRevenue() {
        $query = "SELECT tour.tour_name, SUM(booking.number_ticket) AS numberticket, SUM(booking.money) as money FROM tour, booking WHERE tour.tour_id = booking.tour_id AND booking.status = 'Thành công' GROUP BY tour.tour_name";
        return $this->db->query($query);
    }

    public function upImage($places_id, $imagepath) {
        $query = "INSERT INTO `places_image`(`image_id`, `places_id`, `image_path`) VALUES ('0','$places_id','$imagepath')";
        return $this->db->query($query);
    }

    public function upImageBase64($places_id, $image) {
        $query = "INSERT INTO `places_image`(`image_id`, `places_id`, `image_path`) VALUES ('0','$places_id','$image')";
        return $this->db->query($query);
    }

    public function getImage($places_id) {
        $query = "SELECT * FROM places_image WHERE places_id = $places_id";
        return $this->db->query($query);
    }

    public function deleteImage($places_id) {
        $query = "DELETE FROM places_image WHERE places_id = $places_id";
        return $this->db->query($query);
    }

    public function statistic() {
        //$query = "SELECT COUNT(username), COUNT(tour_name), COUNT(number_ticket), SUM(booking.number_ticket*tour.price-group) FROM booking, tour, user WHERE tour.tour_id = booking.tour_id and booking.user_id = user.user_id";
        $query = "SELECT COUNT(username) FROM user";
        $query .= "SELECT COUNT(tour_name) FROM tour";
        $query .= "SELECT COUNT(number_ticket) FROM booking";
        $query .= "SELECT SUM(booking.numer_ticket*tour.price_group) FROM booking, tour WHERE booking.tour_id = tour.tour_id";
        return $this->db->query($query);
    }

    public function upMemories($image) {
        $query = "INSERT INTO `memories`(`id`, `image`) VALUES ('0','$image')";
        return $this->db->query($query);
    }

    public function getMemories() {
        $query = "SELECT * FROM `memories`";
        return $this->db->query($query);
    }

}
