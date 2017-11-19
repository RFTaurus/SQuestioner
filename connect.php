<?php

  $conn = mysqli_connect('localhost', 'root', '', 'latihan_db')
  or die("Connection Failed".mysqli_error());
        session_start();
  
  if(!(isset($_SESSION['id']))){
    $_SESSION['status'] = "nouser";
  }

?>
