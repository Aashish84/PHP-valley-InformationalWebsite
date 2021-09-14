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
    <form action="controller/signin_register.php" method="get">
        <input type="text" name="txtname" placeholder="enter name">
        <input type="text" name="email" placeholder="enter email">
        <input type="password" name="password" placeholder="enter password">
        <input type="password" name="confirm_password" placeholder="reenter password">
        <input type="submit" value="submit">        
    </form>
</div>