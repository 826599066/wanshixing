<div class="block_wrap category_block_wrap">
        <div class="container" >
            <div class="content">
              <div class="category_block_title">
                <div><?php echo $cat_content_title;  ?></div>
                <div class="category_subtitle"><?php echo $cat_content_subtitle;  ?></div>
                <div class="title_underline"></div>
              </div>
              <div class="cat_content_list">
                <div class="cat_left_block">
                    <div class="cat_left_title">招标公告</div>
                    <div class="cat_left_content">
                        <div class="cat_left_content_title"><img src="<?php echo wp_upload_dir()['baseurl'];  ?>/2018/10/left_log.png">联系我们</div>
                        <div class="cat_content_info">
                            <div>
                                <div>联系电话：</div>
                                <div><?php echo $phone_num;  ?></div>
                            </div>
                            <div>
                                <div>电子邮箱：</div>
                                <div><?php echo $company_email;  ?></div>
                            </div>
                            <div>
                                <div>客服中心：</div>
                                <div><?php echo $client_service_center;  ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                    $query_params = array(
                        'cat'=>$current_cat_id,
                        // "orderby" => "date",
                        "posts_per_page" =>5,
                        'paged' => get_query_var('paged'),
                        // "order" => $order
                    );
                    $q = new WP_Query($query_params);
                    $total_files = $q->found_posts;
                
                
                ?>
                <div class="cat_right_content">
                        <div class="cat_content_right_list">
                        <?php
                        while ($q->have_posts()): $q->the_post();
                        ?>
                            <a href="<?php echo get_the_permalink();  ?>" class="cat_list_item">
                                <div class="left_image"><img src="<?php echo get_the_post_thumbnail_url();  ?>"></div>
                                <div class="right_content_info">
                                    <div><?php echo get_the_title();  ?></div>
                                    <div class="describe_info">
                                        <?php 
                                            // echo wp_trim_words(get_the_content(),1200); 
                                            $remove_shortcode =  preg_replace('/\[av_[^\]]*\]/','',get_the_content());
                                            $remove_shortcode =  preg_replace('/\[\/av_[a-z]*\]/','',$remove_shortcode);
                                            echo wp_trim_words($remove_shortcode ,120);  
                                        ?>
                                    </div>
                                    <div><?php echo  get_the_time('Y-m-d');  ?></div>
                                </div>
                            </a>
                        <?php  endwhile;  ?>
                        </div>
                        <?php
                          echo   fenyestyle($q,$total_files);
                        
                        ?>
                    </div>
              </div>
            </div>
        </div>
</div>