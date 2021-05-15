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
        if (isset($_POST['delete'])) {
            $delete = $_POST['delete'];
            foreach ($delete as $item) {
                $this->adminModel->deleteBooking($item);
                $this->adminModel->deleteTour($item);
            }
        }
        $data = $this->adminModel->getListTour();
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
        $data = $this->adminModel->getListBooking();
        $this->view("admin/booking", $data);
    }

}
