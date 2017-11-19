<?php
    //session_start();
    include "../connect.php";

    $name       = $_POST['name'];
    $highschool = $_POST['highschool'];
    $email      = $_POST['email'];
    $opinion    = $_POST['opinion'];
	
    $sql_buat = "INSERT INTO kuesioner(user_id, nama, highschool, email, opinion)
      VALUE('','$name','$highschool', '$email', '$opinion')";

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
