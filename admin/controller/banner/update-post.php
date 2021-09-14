<?php
    require(__DIR__.'/../../inc/connection.php');
    require(__DIR__.'/../../inc/function.php');
    
    $id = $_GET['id'];

    if(!empty($_POST['title'])){
        $title = $_POST['title'];
        $update = "update banner set banner_title = '$title' where banner_id = '$id' ;";
        mysqli_query($connection , $update) or die ("banner title update error");
    }

    if(!empty($_POST['desc'])){
        $desc = $_POST['desc'];
        $update = "update banner set banner_desc = '$desc' where banner_id = '$id' ;";
        mysqli_query($connection , $update) or die ("banner desc update error");
    }

    if(!empty($_FILES['image']['tmp_name'])){
        $image = $_FILES['image']['name'];
        echo $image;
        $fn = __DIR__.'/../../../uploads/'.$_FILES['image']['name'];
        move_uploaded_file ($_FILES['image']['tmp_name'],$fn);
        $update = "update banner set banner_image = '$image' where banner_id = '$id' ;";
        mysqli_query($connection , $update) or die ("banner image update error");
    }

    header ("location:".site_url()."/admin/view/banner/post.php");
    exit;
?>