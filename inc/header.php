<?php
    require(__DIR__.'/function.php');
    require(__DIR__.'/connection.php');
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>My_valley</title>

		<script defer src="<?php echo site_url().'/assets/js/navbar.js';?>"></script>
		<script defer src="<?php echo site_url().'/assets/js/like_unlike.js';?>"></script>
		

        <link rel="stylesheet" href="<?php echo site_url();?>/assets/css/style.css"/>
        <link rel="stylesheet" href="<?php echo site_url();?>/assets/css/grid.css"/>
        <link rel="stylesheet" href="<?php echo site_url();?>/assets/css/navbar.css"/>
        <link rel="stylesheet" href="<?php echo site_url();?>/assets/css/banner.css"/> 
        <link rel="stylesheet" href="<?php echo site_url();?>/assets/css/home_heritage.css"/> 
        <link rel="stylesheet" href="<?php echo site_url();?>/assets/css/home_placetovisit.css"/> 
        <link rel="stylesheet" href="<?php echo site_url();?>/assets/css/heritages_page.css"/> 
        <link rel="stylesheet" href="<?php echo site_url();?>/assets/css/placetovisits_page.css"/> 
        <link rel="stylesheet" href="<?php echo site_url();?>/assets/css/footer.css"/> 
       
	</head>
	<body>
<div class="header" id="top">
    <div class="navbar wrapper">
        <div class="navbar-icon">
            <h1>&#9776;</h1>
        </div>
        <div class="brand-title">
            <h1>
                <a href="<?php echo site_url().'/index.php'; ?>">
                    <span class="logo-svg">
                        <svg class="logo" viewBox="0 0 720 255" fill="black" xmlns="http://www.w3.org/2000/svg">
                            <g id="Vector 1">
                            <path d="M192 50.5L3 237C199.366 205.759 321.851 200.423 538 207.5C358.896 190.907 254.671 187.574 54.5 204L177 89L194 98L151.5 161.5L280.5 56L275.5 96.5H301.5L239.5 174L315 128.5L307 152L380.5 115L310.5 190L417.5 134L390.5 181L543 194L394 63L368 83.5L284 2L217 74.5L192 50.5Z"/>
                            <path d="M719 225.5C368.91 208.206 83.3146 212.431 3.91697 253.519C82.1586 240.689 148.834 235.69 282 228.5C446.126 222.966 543.383 223.362 719 225.5Z" />
                            <path d="M3 254C81.0942 212.464 367.548 208.139 719 225.5C543.383 223.362 446.126 222.966 282 228.5C147.182 235.779 80.5148 240.813 1 254M3 237L192 50.5L217 74.5L284 2L368 83.5L394 63L543 194L390.5 181L417.5 134L310.5 190L380.5 115L307 152L315 128.5L239.5 174L301.5 96.5H275.5L280.5 56L151.5 161.5L194 98L177 89L54.5 204C254.671 187.574 358.896 190.907 538 207.5C321.851 200.423 199.366 205.759 3 237Z" stroke="black" stroke-width="2"/>
                            </g>
                        </svg>
                    </span>
                    <span class="logo-title">My valley</span>
                </a>
            </h1>
            
        </div>
        <div class="navbar-links">
            <ul>
                <li><a href="<?php echo site_url().'/index.php/#heritage';?>">heritage</a></li>
                <li><a href="<?php echo site_url().'/index.php/#placetovisit';?>">placetovisit</a></li>
                <li><a href="#aboutus">about us</a></li>
            </ul>
        </div>
        <div class="navbar-userInfo">
            <ul>
				<?php
					if (isset($_SESSION['user_email'])){
				?>
					<li class="notify" id="notify"><a href="#">&#128276;</a><span class="badge"></span></li>
				<?php
					}
				?>
				
				<?php
				//login logout
					if (isset($_SESSION['user_email'])){
				?>
					<li onclick="logout(this)" class="logio">logout</li>
				<?php
					}
					else {
				?>
					<li><a href="<?php echo site_url().'/login.php';?>">login</a></li>
				<?php
					}
				?>
				
            </ul>
        </div>
		<?php
			if (isset($_SESSION['user_email'])){
		?>
			<div class="notify-list" style="width:0px;">
				<?php
					$ur_email = $_SESSION['user_email'];
					// $ctime=strtotime("4/8/2021");
					$days=1;//change here :upto this day
					$ctime=time();
					$temp=$ctime-($days*24*60*60);
					$t= date('Y-m-d',$temp);
				?>
				<?php
					//heritage notification
					$slt = "select * from heritage where dateofpostadd > (select dateofregister from users where email = '$ur_email') and dateofpostadd > '$t';";
					$rlt = mysqli_query($connection , $slt) or die ("notify retrival error");
					if (mysqli_num_rows($rlt)!=0){
						echo "<h3>heritage:</h3>";
				?>
					<ul id="h-n-list">
				<?php
					while ($cnt = mysqli_fetch_assoc($rlt)){
				?>
						<li><a href="<?php echo site_url().'/template-parts/heritages_page.php?id='.$cnt['id'].';'?>"><?php echo $cnt['heritage_title']; ?></a></li>
				<?php
						}
				?>
					</ul>
				<?php
					}
				?>
				

				<?php
					//place to visit notification
					$select = "select * from placetovisit where dateofpostadd > (select dateofregister from users where email = '$ur_email') and dateofpostadd > '$t';";
					$result = mysqli_query($connection , $select) or die ("notify retrival error");
					if (mysqli_num_rows($result)!=0){
						echo "<h3>placetovisit:</h3>";
				?>
					<ul id="pv-n-list">
				<?php
					while ($content = mysqli_fetch_assoc($result)){
				?>
						<li><a href="<?php echo site_url().'/template-parts/placetovisits_page.php?id='.$content['id'].';'?>"><?php echo $content['placetovisit_title']; ?></a></li>
				<?php
						}
				?>
					</ul>
				<?php
					}
				?>
			</div>
		<?php
			}
		?>

    </div>
</div>