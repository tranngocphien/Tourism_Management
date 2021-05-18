<!DOCTYPE html>
<html>
    <head>
        <title>Register Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo URL ?>/public/css/register.css">

    </head>
    <body style = "background:https://banahills.sunworld.vn/wp-content/uploads/2020/02/doi-ban-tay-khong-lo-cau-vang.png no-repeat;">
        <div class="header">
            <div>Tourism</div>
        </div>
        <div class="login_form">
            <form action="<?php echo URL ?>/users/register" method="post" name="registerForm">
                <div class="title">Register Form</div>
                <div>Username</div>
                <input type="text" name="username" id="username">
                <br>
                <div>Password</div>
                <input type="password" name="password" id="password">
                <br>
                <div>Full Name</div>
                <input type="text" name="fullname" id="fulname">
                <br>
                <div>Email</div>
                <input type="email" name="email" id="email">
                <br>
                <div>Phone number</div>
                <input type="tel" name="tel" id="tel">
                <br>
                <div> Address </div>
                <input type = "text" name ="address" id ="address">
                <br>
                <input class="btn" id ="submit" type="submit" value="Register">
            </form>
        </div>

    </body>
</html>