<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Orm! Online Bookstore</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<?php

include("dbconnect.php");

if(isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username == "" || $password == "") {
		echo "
			<div class ='box container'>
			<p>Either username or password field is empty.</p>
			<a href='loginform.php'>Go back</a>
			</div>";
	} else {
		$sqllogin ="SELECT * FROM " . $tableprefix . "user WHERE user_username='$username' AND user_password='$password'"
					or die("Could not execute the select query.");
		$results = mysqli_query($conn, $sqllogin);
		
		
				$data = mysqli_fetch_assoc($results);
				if ($data['user_type'] == 'admin') {

					$_SESSION["user_username"] = $username;
					$_SESSION["user_type"]  = "admin";
					header("location: indexadmin.php");		  
				}else if($data["user_type"] == 'user'){
					$_SESSION["user_username"] = $username;
					$_SESSION["user_type"]  =  "user" ;
					header("location: indexuser.php");
				}else {
				echo"
					<div class ='box container'>
						<p>Invalid Usernames and Password.</p>
						<a href='loginform.php'>Go back</a>
					</div>";
			}
		
	
	}
}
?>
