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
            $this->userModel->register($username, $password, $email, $phone, $fulname) ;
            header("Location:" . URL . "/users/login");
            
        } else {
            $this->view("users/register");
        }
    }

    public function login() {
        if (isset($_POST['username'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            header("Location:" . URL . "/pages/index");
        } else {
            $this->view("users/login");
        }
    }

    public function index() {
        $this->view("users/index");
    }

    public function book(){
            $this->view('users/book');
    }

    public function carts(){
        $this->view('users/carts');
    }

}
