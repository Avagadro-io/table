<?php 
// Start the session
session_start();


// define variables
define('USERNAME', 'admin');
define('PASSWORD', 'admin');

// Check if form was posted
if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
	// get the the valies from form
	$username = $_POST['username'];
	$password = $_POST['password'];

	// validate the against records
	if ( $username === USERNAME && $password === PASSWORD ) {
		$_SESSION['username'] = $username;
		header("Location: /control/");
	} else{
		$status = "Ýalnys ulanyjy ady ýada açarsözi";
	}

}	
 ?>

<!DOCTYPE html>
<html>
<head>
	<!-- Contents -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Favicon -->
    <link rel="apple-touch-icon" href="https://dotjpg.co/iCbJQ.jpg">
    <link rel="shortcut icon" href="https://dotjpg.co/iCbJQ.jpg">
	
	<!-- Title -->
	<title>Title</title>
	
	<style>
		@charset "utf-8";
		@import url(http://weloveiconfonts.com/api/?family=fontawesome);

		[class*="fontawesome-"]:before {
		  font-family: 'FontAwesome', sans-serif;
		}

		body {
		  background: #2c3338;
		  color: #606468;
		  font: 87.5%/1.5em 'Open Sans', sans-serif;
		  margin: 0;
		}

		input {
		  border: none;
		  font-family: 'Open Sans', Arial, sans-serif;
		  font-size: 16px;
		  line-height: 1.5em;
		  padding: 0;
		  -webkit-appearance: none;
		}

		p {
		  line-height: 1.5em;
		}

		.after { clear: both; }

		#login {
		  margin: 50px auto;
		  width: 320px;
		}

		#login a{
			text-decoration: none;
			color: #fff;	
			float: right;
			position: relative;
			left: 2em;
			bottom: 2em;
		}

		#login form {
		  margin: auto;
		  padding: 22px 22px 22px 22px;
		  width: 100%;
		  border-radius: 5px;
		  background: #282e33;
		  border-top: 3px solid #434a52;
		  border-bottom: 3px solid #434a52;
		}

		#login form span {
		  background-color: #363b41;
		  border-radius: 3px 0px 0px 3px;
		  border-right: 3px solid #434a52;
		  color: #606468;
		  display: block;
		  float: left;
		  line-height: 50px;
		  text-align: center;
		  width: 50px;
		  height: 50px;
		}

		#login form input[type="text"] {
		  background-color: #3b4148;
		  border-radius: 0px 3px 3px 0px;
		  color: #a9a9a9;
		  margin-bottom: 1em;
		  padding: 0 16px;
		  width: 235px;
		  height: 50px;
		}

		#login form input[type="password"] {
		  background-color: #3b4148;
		  border-radius: 0px 3px 3px 0px;
		  color: #a9a9a9;
		  margin-bottom: 1em;
		  padding: 0 16px;
		  width: 235px;
		  height: 50px;
		}

		#login form input[type="submit"] {
		  background: #b5cd60;
		  border: 0;
		  width: 100%;
		  height: 40px;
		  border-radius: 3px;
		  color: white;
		  cursor: pointer;
		  transition: background 0.3s ease-in-out;
		}
		#login form input[type="submit"]:hover {
		  background: #16aa56;
		}
		 @media (max-width: 768px) {
			
		}
	</style>

</head>
<body>
	
<div id="login">
	<h1>Login</h1>
	<a href="/">Home page</a>
<form action="" method="post">
	<span class="fontawesome-user"></span>
	<input id="user" type="text" name="username" placeholder="Username">

	<span class="fontawesome-lock"></span>
	<input type="password" name="password" id"pass" placeholder="Password">

	<input type="submit" name="Login" value="Login">
	
	<?php if (isset($status)) : ?>
	<p><?php echo $status; ?></p>
	<?php endif; ?>

</form>

</div>

</body>
</html>
