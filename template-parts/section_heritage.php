        <div class="heritage-section" id="heritage">
            <div class="container">
                <h2 class="heritage-section-title">Heritage</h2>
                <div class="row">
                    <?php
                        $select = "select * from heritage where like_count in (select max(like_count) from heritage); ";
                        $result = mysqli_query($connection,$select) or die ("retrival error");
                        if (mysqli_num_rows($result) != 0){
                            while ($content = mysqli_fetch_assoc($result)){
                                $maxlikecntid=$content['id'];
                    ?>  
                    <div class="col-8" style="order: -<?php echo $content['like_count'];?>">
                        <div class="heritage-post row most-viewed">
                            <div class="heritage-image-section bg-image col-8 most-viewed-image" style="background-image: url(<?php echo site_url().'/uploads/'.$content['image_location'];?>);"></div>
                            <div class="heritage-content col-4 column">
                                <div class="heritage-title">
                                    <h3><a href="<?php echo site_url().'/template-parts/heritages_page.php?id='.$content['id'].';'?>"><?php echo $content['heritage_title']; ?></a></h3>
                                </div>
                                <div class="heritage-desc">
                                    <p>
                                        <?php echo $content['heritage_desc']; ?>
                                    </p>
                                </div>
                                <div class="heritage-seemore">
                                    <?php
                                        $ct = time();
                                        $t = strtotime($content["dateofpostadd"]);
                                        $age = (($ct - $t) + 13497);
                                        $days = floor($age/(24*60*60));
                                        if($days > 0){
                                            $time = $days."d";
                                        }else{
                                            $hour = floor($age/(60*60));
                                            if($hour > 0){
                                                $time = $hour."h";
                                            }else{
                                                $minute = floor($age/60);
                                                if($minute > 0){
                                                    $time = $minute."m";
                                                }else{
                                                    $time=$age."s";
                                                }
                                            }
                                        }
                                    ?>
                                    <span><?php echo $time; ?></span>
                                    <a href="<?php echo site_url().'/template-parts/heritages_page.php?id='.$content['id'].';'?>">seemore</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        break;
                            }//while
                        }//if
                    ?>
                    <?php
                        $selt = "select * from heritage where not id='$maxlikecntid'";
                        $relt = mysqli_query($connection,$selt) or die ("retrival error");
                        if (mysqli_num_rows($relt) != 0){
                            while ($cnt = mysqli_fetch_assoc($relt)){
                    ?>      
                    <div class="col-4" style="order: -<?php echo $cnt['like_count'];?>">
                        <div class="heritage-post">
                            <div class="heritage-image-section bg-image noheight-divbg" style="background-image: url(<?php echo site_url().'/uploads/'.$cnt['image_location'];?>);"></div>
                            <div class="heritage-content">
                                <div class="heritage-title">
                                    <h3><a href="<?php echo site_url().'/template-parts/heritages_page.php?id='.$cnt['id'].';'?>"><?php echo $cnt['heritage_title']; ?></a></h3>
                                </div>
                                <div class="heritage-desc if-overflow">
                                    <p>
                                        <?php echo $cnt['heritage_desc']; ?>
                                    </p>
                                </div>
                                <div class="heritage-seemore">
                                    <?php
                                        $ct = time();
                                        $t = strtotime($cnt["dateofpostadd"]);
                                        $age = $ct - $t +13497;
                                        $days = floor($age/(24*60*60));
                                        if($days > 0){
                                            $time = $days."d";
                                        }else{
                                            $hour = floor($age/(60*60));
                                            if($hour > 0){
                                                $time = $hour."h";
                                            }else{
                                                $minute = floor($age/60);
                                                if($minute > 0){
                                                    $time = $minute."m";
                                                }else{
                                                    $time=$age."s";
                                                }
                                            }
                                        }
                                    ?>
                                    <span><?php echo $time; ?></span>
                                    <a href="<?php echo site_url().'/template-parts/heritages_page.php?id='.$cnt['id'].';'?>">seemore</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                            }//while
                        }//if
                    ?>  
                </div>
            </div>
        </div>