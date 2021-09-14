<?php require(__DIR__.'/../../inc/header.php') ?>

<form action="<?php echo site_url().'/admin/controller/section_heritage/add-post.php'?>" method="post" enctype="multipart/form-data">
    <input type="text" name="heritage_title" placeholder="enter title"><br><br/>
    <textarea name="heritage_desc" cols="50" rows="10" placeholder="description"></textarea><br><br>
    <input type="file" name="heritage_image" accept="image/*"/><br><br>
    <input type="submit" name="submit" value="submit">
</form>

<?php require(__DIR__.'/../../inc/footer.php') ?>