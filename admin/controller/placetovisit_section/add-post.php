<?php
    require(__DIR__.'/../../inc/connection.php');
    require(__DIR__.'/../../inc/function.php');

    $title = $_POST['placetovisit_title'];
    $desc = $_POST['placetovisit_desc'];
    $image = $_FILES['placetovisit_image']['name'];
    $fn = __DIR__.'/../../../uploads/'.$_FILES['placetovisit_image']['name'];
    if(!empty($title) && !empty($image)){
        move_uploaded_file($_FILES['placetovisit_image']['tmp_name'],$fn);
        
        $insert = "insert into placetovisit (image_location,placetovisit_title,placetovisit_desc,dateofpostadd) values ('$image','$title','$desc',now());";
        mysqli_query($connection,$insert) or die ("insertion error");

        header("location:".site_url()."/admin/view/placetovisit_section/post.php");
        exit;
    }else{
        header ("location:".site_url()."/admin/view/placetovisit_section/add-post.php");
        exit;
    }
?>