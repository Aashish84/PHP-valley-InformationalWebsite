<?php require(__DIR__.'/../../inc/header.php') ?>

<form action="<?php echo site_url().'/admin/controller/placetovisit_section/add-post.php'?>" method="post" enctype="multipart/form-data">
    <input type="text" name="placetovisit_title" placeholder="enter title"><br><br/>
    <textarea name="placetovisit_desc" cols="50" rows="10" placeholder="description"></textarea><br><br/>
    <input type="file" name="placetovisit_image" accept="image/*"/><br><br/>
    <input type="submit" name="submit" value="submit">
</form>

<?php require(__DIR__.'/../../inc/footer.php') ?>