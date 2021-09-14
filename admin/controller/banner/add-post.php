<?php
    require(__DIR__.'/../../inc/connection.php');
    require(__DIR__.'/../../inc/function.php');

    $title = $_POST['banner_title'];
    $desc = $_POST['banner_desc'];
    $image = $_FILES['banner_image']['name'];
    $filename=__DIR__.'/../../../uploads/'.$_FILES['banner_image']['name'];
    if(!empty($title) && !empty($image)){

        move_uploaded_file($_FILES['banner_image']['tmp_name'],$filename);

        $insert = "insert into banner(banner_image,banner_title,banner_desc) values ('$image','$title','$desc')";
        mysqli_query($connection,$insert) or die ('image location insertion error');
        
        header ("location:".site_url()."/admin/view/banner/post.php");
        exit;
    }else{
        header ("location:".site_url()."/admin/view/banner/add-post.php");
        exit;
    }
?>