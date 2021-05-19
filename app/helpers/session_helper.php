<?php
    session_start();

    function isLoggedIn() {
        if (isset($_SESSION['user_name'])) {
            return true;
        } else {
            return false;
        }
    }