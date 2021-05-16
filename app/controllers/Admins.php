<?php

class Admins extends Controller {

    private $adminModel;

    public function __construct() {
        $this->adminModel = $this->model("Admin");
    }

    public function users() {
        if (isset($_POST['search'])) {
            $key = $_POST['key'];
            $title = $_POST['search_title'];
            $data = $this->adminModel->searchUser($title, $key);
        } else {
            $data = $this->adminModel->getListUser();
        }
        $this->view("admin/user", $data);
    }

    public function tours() {
        if (isset($_POST['delete'])) {
            $delete = $_POST['delete'];
            foreach ($delete as $item) {
                $this->adminModel->deleteBooking($item);
                $this->adminModel->deleteTour($item);
            }
        }
        if (isset($_POST['search'])) {
            $key = $_POST["key"];
            $title = $_POST['search_title'];
            if ($title == "tour_name") {
                $data = $this->adminModel->getListTourByTourName($key);
            } elseif ($title == "places_name") {
                $data = $this->adminModel->getListTourFromPlacesName($key);
            } else {
                $data = $this->adminModel->searchTour($title, $key);
            }
        } else {
            $data = $this->adminModel->getListTour();
        }
        $this->view("admin/tour", $data);
    }

    public function tournew() {
        if (isset($_POST['tour_name'])) {
            $tourname = $_POST["tour_name"];
            $tourday = $_POST["tour_day"];
            $tournight = $_POST["tour_night"];
            $transport = $_POST["transport"];
            $pricepersonal = $_POST["price_personal"];
            $pricegroup = $_POST["price_group"];
            $placesname = $_POST["places_name"];
            $placedescription = $_POST["places_description"];

            $this->adminModel->insertPlaces($placesname, $placedescription);

            $placesid = $this->adminModel->getMaxID();

            $data = [
                'tourname' => $tourname,
                'tourday' => $tourday,
                'tournight' => $tournight,
                'transport' => $transport,
                'price' => $pricepersonal,
                'prices' => $pricegroup,
                'placesid' => $placesid["Place"]["places_id"]
            ];

            $this->adminModel->insertTour($data);

            header("Location:" . URL . "/admins/tours");
        }
        $this->view("admin/tour_new");
    }

    public function test() {
        $placesid = $this->adminModel->getMaxID();
        echo $placesid;
    }

    public function tourdetail($tour_id, $places_id) {
        if (isset($_POST['tour_name'])) {
            $tourname = $_POST["tour_name"];
            $tourday = $_POST["tour_day"];
            $tournight = $_POST["tour_night"];
            $transport = $_POST["transport"];
            $pricepersonal = $_POST["price_personal"];
            $pricegroup = $_POST["price_group"];
            $placesname = $_POST["places_name"];
            $placedescription = $_POST["places_description"];

            $this->adminModel->updatePlaces($places_id, $placesname, $placedescription);

            $data = [
                'tourid' => $tour_id,
                'tourname' => $tourname,
                'tourday' => $tourday,
                'tournight' => $tournight,
                'transport' => $transport,
                'price' => $pricepersonal,
                'prices' => $pricegroup,
                'placesid' => $places_id
            ];
            $this->adminModel->updateTour($data);

            header("Location:" . URL . "/admins/tours");
        }
        $data = $this->adminModel->getDetailTour($tour_id);
        $this->view("admin/tour_detail", $data);
    }

    public function bookings() {

        if (isset($_POST['confirm'])) {
            $confirm = $_POST['confirm'];
            foreach ($confirm as $item) {
                $this->adminModel->setBookingStatus($item, "Đã xác nhận");
            }
        }
        if (isset($_POST['notconfirm'])) {
            $notconfirm = $_POST['notconfirm'];
            foreach ($notconfirm as $item) {
                $this->adminModel->setBookingStatus($item, "Chưa xác nhận");
            }
        }
        if (isset($_POST['search'])) {
            $key = $_POST["key"];
            $title = $_POST['search_title'];
            if ($title == "tour_name") {
                $data = $this->adminModel->getListBookingByTourName($key);
            } elseif ($title == "username") {
                $data = $this->adminModel->getListBookingByUserName($key);
            } else {
                $data = $this->adminModel->searchBooking($title, $key);
            }
        } else {
            $data = $this->adminModel->getListBooking();
        }
        $this->view("admin/booking", $data);
    }
    
    public function bookingbyuser($id) {
        $data = $this->adminModel->geListBookingByUserId($id);
        $this->view("admin/bookingbyuser",$data);
    }
    public function statistic() {
        $data = $this->adminModel->statistic();
        $this->view("admin/statistic", $data);
    }
    public function index() {
        $this->users();
    }

}
