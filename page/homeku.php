<!DOCTYPE html>

<?php
	include "../connect.php";

	$username_cek = false;
	if(isset($_POST['username'])){
		$username_cek = $_POST['username'];
	 } 
		echo $username_cek;
	
	$email_cek = false;
	if(isset($_POST['email'])){
		$email_cek = $_POST['email'];
	 } 
		echo $email_cek;
	
	$password_cek = false;
	if(isset($_POST['password'])){
		$password_cek = $_POST['password'];
	 } 
		echo $password_cek;

	$query1     = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username_cek' and password_user = '$password_cek'");
	$result1    = mysqli_fetch_array($query1);

    $query2     = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email_cek' and password_user = '$password_cek'");
    $result2    = mysqli_fetch_array($query2);

    $_SESSION['id'] = $result1['id_user'];
    $_SESSION['id'] = $result2['id_user'];
	$id = $_SESSION['id'];
 ?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Thankyou!</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!--external css-->
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="../css/style1.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet">

    <!--JS css-->
    <link href="../css/type.js" rel="stylesheet">

  </head>

  <body>



        <form class="transparent form-login" style="background-color:transparent;" action="../index.php" method="post">
            <form action="../index.php" method="post">
		            <div class="login-wrap">
		                    <button class="btn btn-theme btn-block" href="index.html" type="submit" style="background color:#000000">
                            <!-- <i class="fa fa-lock"></i> -->
                          <b>Thank You!</b></button>
		           </div>
             </form>
        



  </body>

  </html>