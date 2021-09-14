<?php
    require(__DIR__.'/../../inc/connection.php');
    require(__DIR__.'/../../inc/function.php');

    session_start();
    if (isset($_SESSION['user_email'])){
        $email = $_SESSION['user_email'];
        $id= $_GET['id'];

        $select ="select * from placetovisit where id='$id'; ";
        $result = mysqli_query($connection,$select) or die("retirvel error 1");
        $content=mysqli_fetch_assoc($result);

        $new=$content['like_count']+1;

        $update = "update placetovisit set like_count ='$new' where id='$id';";
        mysqli_query($connection,$update) or die("update error");

        $select ="select * from placetovisit where id='$id'; ";
        $result = mysqli_query($connection,$select) or die("retirvel error 1");
        $content=mysqli_fetch_assoc($result);
        
        $insert ="insert into placetovisit_likes(email,post_id) values('$email','$id');";
        mysqli_query($connection,$insert) or die("insertion error");

        echo $content['like_count'];
    }else {
        echo "<a href='".site_url()."/login.php'> login</a> first";
    }
?>