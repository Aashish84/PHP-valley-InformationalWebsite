<?php
    session_start();
    if (!isset($_SESSION['email'])){
        header("location:".site_url().'/admin/login.php');
        exit;	
	}
?>