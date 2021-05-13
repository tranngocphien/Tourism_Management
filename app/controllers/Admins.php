<?php

class Admins extends Controller {

    private $adminModel;

    public function __construct() {
        $this->adminModel = $this->model("Admin");
    }

    public function users() {
        $data = $this->adminModel->getListUser();
        $this->view("admin/user", $data);
    }

    public function tours() {
        $data = $this->adminModel->getListTour();
        $this->view("admin/tour", $data);
    }

    public function bookings() {
        $data = $this->adminModel->getListBooking();
        $this->view("admin/booking", $data);
    }

}
