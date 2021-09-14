<?php
	// session_start();
    require(__DIR__."/../inc/header.php");
    $id = $_GET["id"];
    $select = "select * from placetovisit where id='$id';";
    $result = mysqli_query($connection,$select) or die ("placetovisit retrival error");
    $content = mysqli_fetch_assoc($result);
?>

<div class="placetovisits-page">
	<div class="container _shadow">
		<div class="row">
			<div class="col-8">
				<div class="placetovisits-post">
					<div class="placetovisits-image-section bg-image" style="background-image:url(<?php echo site_url().'/uploads/'.$content['image_location'] ?>);"></div>
				</div>
			</div>
			<div class="col-4">
				<div class="placetovisits-post">
					<div class="title-decs">
						<h3 class="placetovisits-title"><?php echo $content['placetovisit_title']; ?></h3>
						<p>
							<?php echo $content['placetovisit_desc'];?>
						</p>
					</div>
				</div>
				<div class="content-like" id="content-like">
						<?php
							if(!isset($_SESSION['user_email'])){
								echo "<a href='".site_url()."/login.php'>login</a> first";
								// echo " <a href='".site_url()."/login.php?id=$id&table= ";
							}
							else{
								$email = $_SESSION['user_email'];
								$s = "select * from placetovisit_likes where email='$email' and post_id=".$content['id'];
								$r = mysqli_query($connection,$s) or die("retrival error");
								if (mysqli_num_rows($r)==0){
						?>
						
							<button class="Btn-2" onclick="like_unlike_placetovisit(this,<?php echo intval($id);?>)">like</button><samp><?php echo " ".$content['like_count'].' likes';?></samp>
						<?php 
								}else {
						?>
							<button class="Btn-2" onclick="like_unlike_placetovisit(this,<?php echo intval($id);?>)">unlike</button><samp><?php echo " ".$content['like_count'].' likes';?></samp>
						<?php
								}
							}
						?>
				</div>
			</div>
		</div>
	</div>	
</div>

<?php 
	$select = "select * from placetovisit where not id ='$id';";
	$result = mysqli_query($connection,$select) or die ("other placetovisit retrival error");
	if(mysqli_num_rows($result) !=0){
?>
<div class="placetovisit-section">
	<div class="container">
		<h2 class="section-title">other placetovisit</h2>
		<div class="row">
           <?php
                    while ($content = mysqli_fetch_assoc($result)){
            ?>            
			<div class="col-4" style="order: -<?php echo $content['like_count'];?>">
				<div class="placetovisit-post">
					<div class="placetovisit-image-section bg-image" style="background-image:url(<?php echo site_url().'/uploads/'.$content['image_location']?>);"></div>
					<h3 class="placetovisit-title"><a href="<?php echo site_url().'/template-parts/placetovisits_page.php?id='.$content['id'];?>"><?php echo $content['placetovisit_title'];?></a></h3>
				</div>
			</div>
            <?php
                    }//while
                }//if
            ?>
		</div>
	</div>
</div>
<?php require(__DIR__."/../inc/footer.php") ?>