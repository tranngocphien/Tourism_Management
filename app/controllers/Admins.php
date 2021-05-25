<?php

class Admins extends Controller {

    private $adminModel;

    public function __construct() {
        $this->adminModel = $this->model("Admin");
    }

    public function users() {
        if (isset($_SESSION["admin"])) {
            if (isset($_POST['search'])) {
                $key = $_POST['key'];
                $title = $_POST['search_title'];
                $data = $this->adminModel->searchUser($title, $key);
            } else {
                $data = $this->adminModel->getListUser();
            }
            $this->view("admin/user", $data);
        } else {
            header("Location:" . URL . "/users/register");
        }
    }

    public function tours() {
        if (isset($_SESSION["admin"])) {


            if (isset($_POST['submit_delete']) && isset($_POST['delete'])) {
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
        } else {
            header("Location:" . URL . "/users/register");
        }
    }

    public function tournew() {
        if (isset($_SESSION["admin"])) {

            if (isset($_POST['tour_name'])) {
                $tourname = $_POST["tour_name"];
                $tourday = $_POST["tour_day"];
                $tournight = $_POST["tour_night"];
                $transport = $_POST["transport"];
                $pricepersonal = $_POST["price_personal"];
                $pricegroup = $_POST["price_group"];
                $placesname = $_POST["places_name"];
                $placedescription = $_POST["places_description"];

                $check = $this->adminModel->getByTourName($tourname);
                if (!empty($check)) {
                    $data = ["error" => "Đã có tour này trong hệ thống "];
                    $this->view("admin/tour_new", $data);
                } else {

                    $this->adminModel->insertPlaces($placesname, $placedescription);

                    $placesid = $this->adminModel->getMaxID();

                    $targetDir = "../public/img/";
                    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
                    $images_arr = array();

                    foreach ($_FILES['image']['name'] as $key => $value) {
                        $fileName = basename($_FILES['image']['name'][$key]);
                        $fileNameN = microtime(true) . $fileName;
                        $targetFilePath = $targetDir . $fileNameN;
                        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                        $fileDb = "http://localhost/Tourism_Management/public/img/" . $fileNameN;

                        if (in_array($fileType, $allowTypes)) {
                            $data = file_get_contents($_FILES["image"]["tmp_name"][$key]);
                            $base64 = 'data:image/' . $fileType . ';base64,' . base64_encode($data);
                            $this->adminModel->upImageBase64($placesid["Place"]["places_id"], $base64);
//                        if (move_uploaded_file($_FILES["image"]["tmp_name"][$key], $targetFilePath)) {
//                            $images_arr[] = $targetFilePath;
//                            $this->adminModel->upImage($placesid["Place"]["places_id"], $fileDb);
//                        }
                        }
                    }

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
            }
            $data = ["error" => ""];
            $this->view("admin/tour_new", $data);
        } else {
            header("Location:" . URL . "/users/register");
        }
    }

    public function test() {
        $placesid = $this->adminModel->getMaxID();
        echo $placesid;
    }

    public function tourdetail($tour_id, $places_id) {
        if (isset($_SESSION['admin'])) {

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

                $targetDir = "../public/img/";
                $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
                $images_arr = array();

                if (isset($_FILES['image'])) {
                    if (!empty($_FILES['image'])) {
                        $this->adminModel->deleteImage($places_id);
                    }
                }

                foreach ($_FILES['image']['name'] as $key => $value) {
                    $fileName = basename($_FILES['image']['name'][$key]);
                    $fileNameN = microtime(true) . $fileName;
                    $targetFilePath = $targetDir . $fileNameN;

                    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                    $fileDb = "http://localhost/Tourism_Management/public/img/" . $fileNameN;

                    if (in_array($fileType, $allowTypes)) {
                        $data = file_get_contents($_FILES["image"]["tmp_name"][$key]);
                        $base64 = 'data:image/' . $fileType . ';base64,' . base64_encode($data);
                        $this->adminModel->upImageBase64($places_id, $base64);
                    }
                }

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
            $image = $this->adminModel->getImage($places_id);
            $info = $this->adminModel->getDetailTour($tour_id);
            $data = ["info" => $info, "image" => $image];
            $this->view("admin/tour_detail", $data);
        } else {
            header("Location:" . URL . "/users/register");
        }
    }

    public function bookings() {
        if (isset($_SESSION["admin"])) {


            if (isset($_POST['confirm'])) {
                $confirm = $_POST['confirm'];
                foreach ($confirm as $item) {
                    $this->adminModel->setBookingStatus($item, "Thành công");
                }
            }
            if (isset($_POST['notconfirm'])) {
                $notconfirm = $_POST['notconfirm'];
                foreach ($notconfirm as $item) {
                    $this->adminModel->setBookingStatus($item, "Từ chối");
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
        } else {
            header("Location:" . URL . "/users/register");
        }
    }

    public function bookingbyuser($id) {
        if (isset($_SESSION)) {

            $data = $this->adminModel->geListBookingByUserId($id);
            $this->view("admin/bookingbyuser", $data);
        } else {
            header("Location:" . URL . "/users/register");
        }
    }

    public function statistic() {
        if (isset($_SESSION["admin"])) {


            $number_user = $this->adminModel->getNumberUser();
            $number_user = $number_user[0][""]["COUNT(username)"];
            $number_tour = $this->adminModel->getNumberTour();
            $number_tour = $number_tour[0][""]["COUNT(tour_name)"];
            $number_ticket = $this->adminModel->getNumberTicket();
            $number_ticket = $number_ticket[0][""]["SUM(number_ticket)"];

            $revenue = $this->adminModel->getRevenue();

            $tourinfo = $this->adminModel->getNumberTicketAndRevenue();

            $data = [
                "number_user" => $number_user,
                "number_tour" => $number_tour,
                "number_ticket" => $number_ticket,
                "revenue" => $revenue[0][""]["revenue"],
                "tourinfo" => $tourinfo
            ];
            $this->view("admin/statistic", $data);
        } else {
            header("Location:" . URL . "/users/register");
        }
    }

    public function index() {
        if (isset($_SESSION["admin"])) {
            $this->users();
        } else {
            header("Location:" . URL . "/users/register");
        }
    }

    public function memories() {
        if (isset($_SESSION["admin"])) {


            if (isset($_POST["submit"])) {
                $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
                $images_arr = array();

                foreach ($_FILES['image']['name'] as $key => $value) {
                    $fileName = basename($_FILES['image']['name'][$key]);
                    $fileNameN = microtime(true) . $fileName;
                    $targetFilePath = $fileNameN;

                    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

                    if (in_array($fileType, $allowTypes)) {
                        $data = file_get_contents($_FILES["image"]["tmp_name"][$key]);
                        $base64 = 'data:image/' . $fileType . ';base64,' . base64_encode($data);
                        $this->adminModel->upMemories($base64);
                    }
                }
            }
            $data = $this->adminModel->getMemories();
            $this->view("admin/memories", $data);
        } else {
            header("Location:" . URL . "/users/register");
        }
    }

    public function logOut() {
        if (isset($_SESSION["admin"])) {
            unset($_SESSION["admin"]);
        }
        header("Location:" . URL . "/");
    }

}
