<!DOCTYPE html>
<html>

<head>
    <title>Register Form</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="http://localhost/Tourism_Management/public/css/book.css">
    <link rel="stylesheet" href="http://localhost/Tourism_Management/public/css/carts.css">
    <link rel="stylesheet" href="http://localhost/Tourism_Management/public/css/header.css">

    <meta name="viewport" content="width=device-width" , initial-scale="1">
    <title>
        <?php echo "hello"; ?>
    </title>

</head>

<body>
    <div class="header">
        <div class="top">
            <div class="phone">19002334</div>
            <img src="<?php echo URL ?>/public/img/icon-facebook.png" class="face">
        </div>
        <div class="bot">
            <div class="left">
            <a style="text-decoration: none;" href="http://localhost/Tourism_Management/">
                <img src="<?php echo URL ?>/public/img/ic_logo.png" class="logo">
            </a>
            </div>
            <div class="right">
                <a style="text-decoration: none;" href="http://localhost/Tourism_Management/">
                    <div class="home">
                        TRANG CHỦ
                    </div>
                </a>
                <div class="infor">
                    KHÁCH SẠN
                </div>
                <div class="contact">
                    ĐẶT VÉ MÁY BAY
                </div>
                <a href="http://localhost/Tourism_Management/Users/carts">
                    <div class="market">
                        <img class="icon" src="<?php echo URL ?>/public/img/ic_market.png">
                    </div>
                </a>
             <?php 
             if (isset($_SESSION['username'])){
                echo '
                <a href="http://localhost/Tourism_Management/users/logout"  style="text-decoration: none;" >
                    <div class="login">
                        ĐĂNG XUẤT
                    </div></a> ';

             }else {
                echo ' 
                <a href="http://localhost/Tourism_Management/users/login"  style="text-decoration: none;" >
                <div class="login">
                    ĐĂNG NHẬP
                </div>
                </a>
                ';}?>

            </div>
        </div>
    </div>

</body>

</html>