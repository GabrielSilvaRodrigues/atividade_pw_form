<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $tipo=$_POST['user_type'];
    if($tipo=="user"){
        header("Location: register_user.php");
        exit();
    } else {
        header("Location: register_profissional.php");
        exit();
    }
  }
?>