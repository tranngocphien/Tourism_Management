<!DOCTYPE html>
<html>
    <head>
        <title>Register Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo URL ?>/public/css/register.css">
        <script type ="text/javascript">
            function registerForm(){
                var username = document.forms["register"]["username"].value;
                if (username == "") {
                alert("Username không được để trống");
                return false;
                }
                var password = document.forms["register"]["password"].value;
                if (password == "") {
                alert("Password không được để trống");
                return false;
                }
                var fullname = document.forms["register"]["fullname"].value;
                if (fullname == "") {
                alert("Fullname không được để trống");
                return false;
                }
                var email=document.forms["register"]["email"].value;
                var aCong=email.indexOf("@");
                var dauCham = email.lastIndexOf(".");
                if (email == "") {
                alert("Email không được để trống");
                return false;
                }
                else if ((aCong<1) || (dauCham<aCong+2) || (dauCham+2>email.length)) {
                alert("Email bạn điền không chính xác");
                return false;
                }
                var tel = document.forms["register"]["tel"].value;
                var kiemTraDT = isNaN(tel);
                if (tel == "") {
                alert("Điện thoại không được để trống");
                return false;
                }
                if (kiemTraDT == true) {
                alert("Điện thoại phải để ở định dạng số");
                return false;
                }
                var address = document.forms["register"]["address"].value;
                if (address == "") {
                alert("Địa chỉ không được để trống");
                return false;
                }
            }
            function loginForm(){
                var username_login = document.forms["login"]["username_login"].value;
                if (username_login == "") {
                alert("Username không được để trống");
                return false;
                }
                var password_login = document.forms["login"]["password_login"].value;
                if (password_login == "") {
                alert("Password không được để trống");
                return false;
                }
            }
        </script>
    </head>
    <body >
        <div class="login_form">
            
            
        <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
                    <form action="<?php echo URL ?>/users/login" onsubmit="return loginForm()" method="post" name="login">
			<div class="sign-in-htm">
                            
				<div class="group">
					<label for="user" class="label">Username</label>
                                        <input id="user" type="text" class="input" name="username_login">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
                    <input id="pass" type="password" class="input" data-type="password" name="password_login">
				</div>
				
				<div class="group">
                                    <input type="submit" class="button" value="Sign In" name="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-2">Doesn't have a account</a>
				</div>
			</div>
                    </form>
                    <form action="<?php echo URL ?>/users/register" onsubmit="return registerForm()" method="post" name="register">
			<div class="sign-up-htm">
                            
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input" name="username">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="password">
				</div>
				<div class="group">
					<label for="fullname" class="label">Full name</label>
					<input id="fullname" type="text" class="input" name = "fullname">
				</div>
				<div class="group">
					<label for="email" class="label">Email</label>
					<input id="email" type="email" class="input" name="email">
				</div>
                                <div class="group">
					<label for="tel" class="label">Phone number</label>
                                        <input id="tel" type="tel" class="input" name="tel">
				</div>
                                <div class="group">
					<label for="address" class="label">Address</label>
                                        <input id="address" type="text" class="input" name="address">
				</div>
				<div class="group">
                                    <input type="submit" class="button" value="Sign Up" name="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
                    </form>        
		</div>
	</div>
</div>
        
    </body>
</html>