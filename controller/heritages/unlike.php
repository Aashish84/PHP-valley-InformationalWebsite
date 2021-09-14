<?php
     require(__DIR__.'/../../inc/connection.php');
     require(__DIR__.'/../../inc/function.php');
 
     session_start();
     if (isset($_SESSION['user_email'])){

          $email = $_SESSION['user_email'];
          $id= $_GET['id'];
          
          $select ="select * from heritage where id='$id'; ";
          $result = mysqli_query($connection,$select) or die("retirvel error 1");
          $content=mysqli_fetch_assoc($result);
          
          $new=$content['like_count']-1;
          
          $update = "update heritage set like_count =".$new." where id='$id';";
          mysqli_query($connection,$update) or die("update error");
          
          $select ="select * from heritage where id='$id'; ";
          $result = mysqli_query($connection,$select) or die("retirvel error 1");
          $content=mysqli_fetch_assoc($result);
          
          $delete ="delete from heritage_likes where email='$email' and post_id='$id';";
          mysqli_query($connection,$delete) or die("deletion error");
          
          echo $content['like_count'];
     }
     else {
          echo "<a href='".site_url()."/login.php'> login</a> first";
     }
?>