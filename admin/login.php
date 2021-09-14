<?php
    session_start();
    if (isset($_POST['submit'])){
        require(__DIR__."/inc/connection.php");
        require(__DIR__."/inc/function.php");
        $email=$_POST['email'];
        $password=$_POST['password'];
        $select="select * from admin WHERE email='$email' and password='$password';";
        $result = mysqli_query($connection,$select) or die ("login retrival error");
        if(mysqli_num_rows($result)!=0){
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
            header("location:index.php");
            exit;
        }else{
            echo"invalid";
        }
    }
?>
<style>
    .forminput{
	    padding:100px;
	    max-width:1024px;
	    margin:auto;
    }
    .forminput input{
        padding:5px;
        margin:5px auto;
        display:block;
    }
</style>

<div class="forminput">
    <form action="" method="post">
        <input type="text" name="email" placeholder="enter your email">
        <input type="password" name="password" placeholder="enter your password">
        <input type="submit" name="submit" value="submit">
    </form>
</div>