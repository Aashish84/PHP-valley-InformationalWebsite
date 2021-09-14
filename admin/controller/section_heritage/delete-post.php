<?php
    require(__DIR__.'/../../inc/connection.php');
    require(__DIR__.'/../../inc/function.php');

    $id=$_GET['id'];
    
     $delete =  "delete from heritage where id='$id';";
    mysqli_query($connection,$delete) or die ('heritage deletion error');

    header ("location:".site_url()."/admin/view/section_heritage/post.php");
    exit;
?>