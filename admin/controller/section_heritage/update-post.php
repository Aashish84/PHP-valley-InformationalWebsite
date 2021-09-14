<?php
    require(__DIR__.'/../../inc/connection.php');
    require(__DIR__.'/../../inc/function.php');
    
    $id = $_GET['id'];

    if(!empty($_POST['title'])){
        $title = $_POST['title'];
        $update = "update heritage set heritage_title = '$title', dateofpostadd=now() where id = '$id' ;";
        mysqli_query($connection , $update) or die ("heritage title update error");
    }

    if(!empty($_POST['desc'])){
        $desc = $_POST['desc'];
        $update = "update heritage set heritage_desc = '$desc', dateofpostadd=now() where id = '$id' ;";
        mysqli_query($connection , $update) or die ("heritage desc update error");
    }

    if(!empty($_FILES['image']['tmp_name'])){
        $image = $_FILES['image']['name'];
        echo $image;
        $fn = __DIR__.'/../../../uploads/'.$_FILES['image']['name'];
        move_uploaded_file ($_FILES['image']['tmp_name'],$fn);
        $update = "update heritage set image_location = '$image', dateofpostadd=now() where id = '$id' ;";
        mysqli_query($connection , $update) or die ("heritage image update error");
    }

    header ("location:".site_url()."/admin/view/section_heritage/post.php");
    exit;
?>