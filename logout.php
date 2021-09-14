<?php
    require ("inc/function.php");
    session_start();
    if (isset($_SESSION['user_email'])){
        unset($_SESSION['user_email']);
        echo "<a href='".site_url()."/login.php'>login</a>";
    }
?>