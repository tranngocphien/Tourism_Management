<?php


class Users extends Controller {

    private $userModel;

    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function register() {
        if (isset($_POST['username'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $phone = $_POST['tel'];
            $fulname = $_POST['fullname'];
            $address = $_POST['address'];
            $this->userModel->register($username, $password, $email, $phone, $fulname, $address) ;
            header("Location:" . URL . "/users/register");
            
        } else {
            $this->view("users/register");
        }
    }

    public function login() {
        if (isset($_POST['username_login'])) {
            $username = $_POST['username_login'];
            $password = $_POST['password_login'];
            $data = $this->userModel->login($username);
            //print_r($data);
            if ( $data[0]["User"]["password"] == $password) {
                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = $data[0]["User"]["user_id"];
                $header = header("Location:" . URL . "/pages/index");
            } else {
                $this->view("users/register");
            }
        } else {
            $this->view("users/register");
        }
    }

    public function index() {
        $this->view("users/index");
    }

    public function logout(){
        unset($_SESSION['username']);
        header("Location:" . URL . "/");
    }

    public function book($tour_id){
        if (isset($_SESSION['username'])){
            $username = $_SESSION['username'];
            $user = $this->userModel->getUserByUsername($username);
            $tour = $this->userModel->getTourById($tour_id);
            $data = array (
                "user" => $user,
                "tour" => $tour
            );
            $this->view('users/book', $data);
        }else {
            $this->view('users/register');
        }
    }

    public function carts(){

        if (isset($_SESSION['username'])){
            $user_id = $_SESSION['user_id'];
            $data = $this->userModel->getCarts($user_id);

            $this->view('users/carts',$data);
        }else {
            $this->view('users/register');
        }


    }

}
