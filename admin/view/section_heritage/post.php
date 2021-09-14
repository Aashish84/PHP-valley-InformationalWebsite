
<?php require(__DIR__.'/../../inc/header.php'); ?>
    <h2>Heritage Post List</h2>
    <h3><a href="<?php echo site_url().'/admin/view/section_heritage/add-post.php' ?>">Add new post</a></h3>

    <table border="1" cellspacing="0"> 
        <tr>
            <th>id</th>
            <th>Image</th> 
            <th>Post title</th>
            <th>Post desc</th>
            <th>action</th>
        </tr>
        <?php
            $select = "select * from heritage ;";
            $result= mysqli_query($connection,$select) or die ("section_heritage retrival error");

            if (mysqli_num_rows($result)!=0){
                while ($content=mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td><?php echo $content['id']; ?></td>
                        <td><img height="60" width="100" src="<?php echo site_url().'/uploads/'.$content['image_location']; ?>" alt="image"></td>
                        <td><?php echo $content['heritage_title']; ?></td>
                        <td style="max-width:500px;"><?php echo $content['heritage_desc']; ?></td>
                        <td>
                            <a href="<?php echo site_url().'/admin/view/section_heritage/update-post.php?id='.$content['id'];?>">Update post</a><br>
                            <a href="#" onclick="confirmation(this)">delete post</a>
                            <script>
                                function confirmation(a){
                                var del=confirm("Are you sure you want to logout?\n");
                                if (del==true){
                                    window.location.href="<?php echo site_url().'/admin/controller/section_heritage/delete-post.php?id='.$content['id']; ?>";
                                }
                                    return del;
                                }
                            </script>
                        </td>
                    </tr>
            <?php 
                } //while
            } //if
        ?>
    </table>
<?php require(__DIR__.'/../../inc/footer.php'); ?>

