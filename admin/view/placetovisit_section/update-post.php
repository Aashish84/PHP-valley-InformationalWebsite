<?php
    require(__DIR__.'/../../inc/header.php');
?>

<form action="<?php echo site_url().'/admin/controller/placetovisit_section/update-post.php?id='.$_GET['id']?>" method="post" enctype="multipart/form-data">
    <?php
        $id = $_GET["id"];
        $select = "select * from placetovisit where id = '$id';";
        $result = mysqli_query($connection,$select) or die("retrival error");
        if(mysqli_num_rows($result)!=0){
            while($content=mysqli_fetch_assoc($result)){
    ?>
    <input type="text" name="title" placeholder="title" value="<?php echo $content['placetovisit_title'] ;?>"><br><br/>
    <img src="<?php echo site_url()."/uploads/".$content['image_location']?>" width="400px" height="300px"/><br/>
    <input type="file" name="image" accept="image/*"><br><br/>
    <textarea name="desc" cols="50" rows="10"><?php echo $content["placetovisit_desc"] ;?></textarea><br>
    <input type="submit" name="submit" value="update post" />
    <?php
            }
        }
    ?>
</form>

<?php
    require(__DIR__."/../../inc/footer.php");
?>