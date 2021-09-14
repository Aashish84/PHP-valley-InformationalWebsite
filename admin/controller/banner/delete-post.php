<?php
    require(__DIR__.'/../../inc/connection.php');
    require(__DIR__.'/../../inc/function.php');

    $id=$_GET['id'];
    
     $delete =  "delete from banner where banner_id='$id';";
    mysqli_query($connection,$delete) or die ('banner deletion error');

    header ("location:".site_url()."/admin/view/banner/post.php");
    exit;
?>