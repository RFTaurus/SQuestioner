<?php
	//session_start();
	include "../connect.php";

	$username = false;
	if(isset($_POST['username'])){
		$username = $_POST['username'];
	 } 
		echo $username;
	
	$email = false;
	if(isset($_POST['email'])){
		$email = $_POST['email'];
	 } 
		echo $email;
	
	$pass = false;
	if(isset($_POST['password'])){
		$pass = $_POST['password'];
	 } 
		echo $pass;
	
	// $username  = $_POST['username'];
  	// $email     = $_POST['email'];
  	// $pass      = $_POST['password'];
  
	if ($query1 = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' and password_user = '$pass'")) {

		$result1 = mysqli_fetch_array($query1);		
		$_SESSION['username'] = $result1['username'];
		$_SESSION['password'] = $result1['password_user'];
		?>
		<script>document.location.href='../page/homeku.php';</script>
		<?php
		
			}
	else if ($query2 = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' and password_user = '$pass'")) {

		$result2 = mysqli_fetch_array($query2);		
		$_SESSION['username'] = $result2['email'];
		$_SESSION['password'] = $result2['password_user'];
				?>
		<script>document.location.href='../page/homeku.php';</script>
		<?php
		}
	else
	?>
		<script>document.location.href='../index.php';</script>
	<?php

	mysqli_close($conn);
?>
