<?php require(__DIR__.'/../../inc/header.php'); ?>
    <h1>Add post</h1>
    <form action="<?php echo site_url().'/admin/controller/banner/add-post.php'; ?>" method="post" enctype="multipart/form-data">
        <input type="text" name="banner_title" placeholder="enter your title" /><br/><br/>
        <textarea name="banner_desc" cols="50" rows="10" placeholder="description"></textarea><br><br/>
        <input type="file" name="banner_image" accept="image/*" /><br/><br/>
        <input type="submit" name="submit" value="Add Post" /><br/>
    </form>
<?php require(__DIR__.'/../../inc/footer.php'); ?>
