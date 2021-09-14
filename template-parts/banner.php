<script defer src="<?php echo site_url().'/assets/js/slider.js';?>"></script>

    <div class="wrapper donttochme">    
        <div id="home-banner" class="banner">
            <div class="left-pointer prevBtn">
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 0C5.59644 0 0 5.59644 0 12.5C0 19.4036 5.59644 25 12.5 25C19.4036 25 25 19.4036 25 12.5C25 5.59644 19.4036 0 12.5 0ZM16.3889 16.8056L14.5833 18.6111L8.75 12.7778L14.3056 6.52778L16.1111 8.19444L12.0833 12.5L16.3889 16.8056Z" fill="#D8D2D3"/>
                </svg>
            </div>
            <div class="right-pointer nextBtn">
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 25C19.4036 25 25 19.4036 25 12.5C25 5.59644 19.4036 0 12.5 0C5.59644 0 0 5.59644 0 12.5C0 19.4036 5.59644 25 12.5 25ZM8.61111 8.19444L10.4167 6.38889L16.25 12.2222L10.6944 18.4722L8.88889 16.8056L12.9167 12.5L8.61111 8.19444Z" fill="#D8D2D3"/>
                </svg>
            </div>
            <?php
                $select = "select * from banner ; ";
                $result = mysqli_query($connection,$select) or die ("retrival error");

                if (mysqli_num_rows($result) != 0){
                    while ($content = mysqli_fetch_assoc($result)){
            ?>  
            <div class="slider-wrapper">            
                <div class="slider bg-image" style="background-image: url(<?php echo site_url().'/uploads/'.$content['banner_image'];?>)">
                    <svg class="v-curve" width="96" height="450" viewBox="0 0 96 450" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M95.9999 0L91.8166 0C-45.9101 191.667 -14.2838 286.537 91.8166 450H95.9999L95.9999 0Z"/>
                    </svg>
                    <svg class="h-curve" viewBox="0 0 450 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M450 37V35.3876C258.333 -17.6945 163.463 -5.50523 0 35.3876V37L450 37Z" />
                        </svg>
                    <div class="banner-overlay">
                    <div class="banner-contents">
                        <div class="banner-title">
                            <h1><?php echo $content['banner_title']; ?></h1>
                        </div>
                        <div class="banner-desc">
                            <p>
                                <?php echo $content['banner_desc']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <?php
                    }//while
                }//if
            ?>
        </div>