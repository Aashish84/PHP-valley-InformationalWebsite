<?php
   require(__DIR__."/../inc/connection.php");
   require(__DIR__."/../inc/function.php");
   $name = $_GET["txtname"];
   $email = $_GET['email'];
   $password = $_GET['password'];
   if(!empty($name) && !empty($email) && !empty($password) ){
      $insert = "insert into users(name,email,password,dateofregister) values ('$name','$email','$password',now())";
      mysqli_query($connection,$insert) or die ("user insertion error");

      header("location:".site_url()."/login.php");
      exit;
   }else{
      header("location:".site_url()."/signin.php");
      exit;
   }
?>