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
    
    public function tourdetail($tour_id) {
        
    }

    public function bookings() {
        if (isset($_POST['confirm'])) {
            $confirm = $_POST['confirm'];
            $this->adminModel->setBookingStatus($confirm, "Đã xác nhận");
        }
        if (isset($_POST['notconfirm'])) {
            $notconfirm = $_POST['notconfirm'];
            $this->adminModel->setBookingStatus($notconfirm, "Chưa xác nhận");
        }
        $data = $this->adminModel->getListBooking();
        $this->view("admin/booking", $data);
    }

}
