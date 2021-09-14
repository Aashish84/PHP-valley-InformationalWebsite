<?php
    session_start();
    require(__DIR__."/inc/connection.php");
    require(__DIR__."/inc/function.php");
    if (isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $select="select * from users WHERE email='$email' and password='$password';";
        $result = mysqli_query($connection,$select) or die ("login retrival error");
        if(mysqli_num_rows($result)!=0){
			$_SESSION['user_email'] = $email;
            header("location:".site_url()."/index.php");
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
    <h3><a href="<?php echo site_url().'/signin.php';?>">Register</a></h3>
</div>
