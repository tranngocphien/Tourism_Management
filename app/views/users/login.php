<!DOCTYPE html>
<html>
    <head>
        <title>Register Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo URL ?>/public/css/style.css">

    </head>
    <body>
        <div class="header">
            <div>Tourism</div>
        </div>
        <div class="login_form">
            <form action="<?php echo URL ?>/users/login" method="post" name="registerForm">
                <div class="title">Login Form</div>
                <div>Username</div>
                <input type="text" name="username" id="username">
                <br>
                <div>Password</div>
                <input type="password" name="password" id="password">
                <br>
                <input class="btn" type="submit" value="Login">
            </form>
        </div>

    </body>
</html>