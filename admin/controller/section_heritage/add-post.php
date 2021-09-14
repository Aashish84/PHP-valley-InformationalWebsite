<?php
    require(__DIR__.'/../../inc/connection.php');
    require(__DIR__.'/../../inc/function.php');

    $title = $_POST['heritage_title'];
    $desc = $_POST['heritage_desc'];
    $image = $_FILES['heritage_image']['name'];
    $fn = __DIR__.'/../../../uploads/'.$_FILES['heritage_image']['name'];
    if(!empty($title) && !empty($image)){
        move_uploaded_file($_FILES['heritage_image']['tmp_name'],$fn);
        
        $insert = "insert into heritage (image_location,heritage_title,heritage_desc,dateofpostadd) values ('$image','$title','$desc',now());";
        mysqli_query($connection,$insert) or die ("insertion error");

        header("location:".site_url()."/admin/view/section_heritage/post.php");
        exit;
    }else{
        header ("location:".site_url()."/admin/view/section_heritage/add-post.php");
        exit;
    }
?>