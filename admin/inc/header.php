<?php
    require(__DIR__.'/function.php');
    require(__DIR__.'/connection.php');
    require(__DIR__.'/block.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>this is index page</title>
        <link rel="stylesheet" href="<?php echo site_url().'/admin/admin.css'; ?>">
    </head>
    <body>
        <div class="valley-sidebar">
        <span class="logo-svg">
            <svg class="logo" viewBox="0 0 720 255" fill="black" xmlns="http://www.w3.org/2000/svg">
                <g id="Vector 1">
                <path d="M192 50.5L3 237C199.366 205.759 321.851 200.423 538 207.5C358.896 190.907 254.671 187.574 54.5 204L177 89L194 98L151.5 161.5L280.5 56L275.5 96.5H301.5L239.5 174L315 128.5L307 152L380.5 115L310.5 190L417.5 134L390.5 181L543 194L394 63L368 83.5L284 2L217 74.5L192 50.5Z"/>
                <path d="M719 225.5C368.91 208.206 83.3146 212.431 3.91697 253.519C82.1586 240.689 148.834 235.69 282 228.5C446.126 222.966 543.383 223.362 719 225.5Z" />
                <path d="M3 254C81.0942 212.464 367.548 208.139 719 225.5C543.383 223.362 446.126 222.966 282 228.5C147.182 235.779 80.5148 240.813 1 254M3 237L192 50.5L217 74.5L284 2L368 83.5L394 63L543 194L390.5 181L417.5 134L310.5 190L380.5 115L307 152L315 128.5L239.5 174L301.5 96.5H275.5L280.5 56L151.5 161.5L194 98L177 89L54.5 204C254.671 187.574 358.896 190.907 538 207.5C321.851 200.423 199.366 205.759 3 237Z" stroke="black" stroke-width="2"/>
                </g>
            </svg>
        </span>
            <ul>
                <li><a href="<?php echo site_url().'/admin/view/banner/post.php' ?>">Banner post</a></li>
                <li><a href="<?php echo site_url().'/admin/view/section_heritage/post.php' ?>">heritage post</a></li>
                <li><a href="<?php echo site_url().'/admin/view/placetovisit_section/post.php' ?>">placetovisit post</a></li>
                <li><a href="#" onclick="cnfirm(this)">logout</a></li>
                <script>
                    function cnfirm(a){
                    var del=confirm("Are you sure you want to logout?\n");
                    if (del==true){
                        window.location.href="<?php echo site_url().'/admin/logout.php' ?>";
                    }
                        return del;
                    }
                </script>
            </ul>
        </div>
        <div class="valley-content">        