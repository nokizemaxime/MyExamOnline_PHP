<!DOCTYPE html>
<html lang="en">
<head>
	<title>MyExamOnline LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="login-ui/image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="login-ui/css/util.css">
	<link rel="stylesheet" type="text/css" href="login-ui/css/main.css">
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(login-ui/images/bg-01.png);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>
				<form method="post" id="adminLoginFrm" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>


					<div class="container-login100-form-btn" align="right">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>	
	<script src="login-ui/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="login-ui/vendor/animsition/js/animsition.min.js"></script>
	<script src="login-ui/vendor/bootstrap/js/popper.js"></script>
	<script src="login-ui/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="login-ui/vendor/select2/select2.min.js"></script>
	<script src="login-ui/vendor/daterangepicker/moment.min.js"></script>
	<script src="login-ui/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="login-ui/vendor/countdowntime/countdowntime.js"></script>
	<script src="login-ui/js/main.js"></script>

</body>
</html>

<!--
<body>
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="#">
				<h1>Sign Up</h1>
				<span>Utiliser compte gmail</span>
				<input type="text" placeholder="Nom" name="nom" id="nom" required>
				<input type="email" placeholder="Email" name="email" id="email" required>
				<input type="password" placeholder="Mot de passe" name="password" id="password">
				<button>Creer le compte</button>
			</form>
		</div>
		<div class="form-container login-container">
			<form method="post" id="adminLoginFrm" >
				<h1>Sign In</h1>
				<span>Je n'ai pas de compte</span>
				<input type="email" name="username" placeholder="Enter username">
				<input type="password" name="pass" placeholder="Enter password">
				<button type="submit" class="login100-form-btn" >Se connecter</button>
				
			</form>
		</div>

		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Lorem ipsum dolor sit amet consectetur.</h1>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
					<button class="ghost" id="login">Se connecter</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Lorem ipsum dolor sit amet consectetur.</h1>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>
					<button class="ghost" id="signUp">Creer un compte</button>
				</div>
			</div>
		</div>
	</div>

	<script src="./js/login.js" charset="utf-8"></script>
</body>
-->