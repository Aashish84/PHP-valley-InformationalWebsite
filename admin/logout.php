<?php
    require ("inc/function.php");
    session_start();
    if (isset($_SESSION['email']) && isset($_SESSION["password"])){
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header("location:".site_url()."/admin");
        exit;
    }
?>