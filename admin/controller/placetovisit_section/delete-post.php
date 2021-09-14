<?php
    require(__DIR__.'/../../inc/connection.php');
    require(__DIR__.'/../../inc/function.php');

    $id=$_GET['id'];
    
     $delete =  "delete from placetovisit where id='$id';";
    mysqli_query($connection,$delete) or die ('placetovisit deletion error');

    header ("location:".site_url()."/admin/view/placetovisit_section/post.php");
    exit;
?>