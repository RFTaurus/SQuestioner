<?php
    //session_start();
    include "../connect.php";

    $name       = $_POST['name'];
    $username   = $_POST['username'];
    $email      = $_POST['email'];
    $pass       = $_POST['psw'];
	
	$_SESSION['username'] = $username;
    $_SESSION['password'] = $pass;

    $sql_buat = "INSERT INTO user(user_id, nama, email,
      username, password_user)
      VALUE('','$name','$email', '$username', '$pass')";

    if (mysqli_query($conn, $sql_buat)){
?>
    <script>document.location.href='../page/homeku.php';</script>

<?php
    }
    else{
?>
    <script>document.location.href='../index.php';</script>

<?php
    }
    mysqli_close($conn);
?>
