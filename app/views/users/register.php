<!DOCTYPE html>
<html>
    <head>
        <title>Register Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo URL ?>/public/css/register.css">
        
    </head>
    <body >
        <div class="login_form">
            
            
        <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
                    <form action="<?php echo URL ?>/users/login" method="post" name="login">
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
                    <form action="<?php echo URL ?>/users/register" method="post" name="register">
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