<div class="block_wrap category_block_wrap">
    <div class="container" >
        <div class="content">
        <div class="category_block_title">
                <div><?php echo $cat_content_title;  ?></div>
                <div class="category_subtitle"><?php echo $cat_content_subtitle;  ?></div>
                <div class="title_underline"></div>
              </div>
            <div class="boutique_sharing">
                <div class="project_center_title">
                    <div>精品分享</div>
                    <div style="background-repeat: repeat; background-image: url(<?php echo wp_upload_dir()['baseurl'].'/2018/10/213.jpg';?>); background-attachment: scroll; background-position: top center;background-size:cover; " ></div>
                </div>
                <?php 
                    $query_params = array(
                        'cat'=>get_the_category()[0]->term_id,
                        // "orderby" => "date",
                        "posts_per_page" =>1000,
                        // 'paged' => get_query_var('paged'),
                        // "order" => $order
                    );
                    $q = new WP_Query($query_params);
                    $total_files = $q->found_posts;
                
                
                ?>
                <div class="boutique_sharing_list">
                <?php
                        while ($q->have_posts()): $q->the_post();
                        ?>
                    <a class="boutique_sharing_item" href="<?php echo get_permalink();  ?>">
                        <div><img src="<?php echo get_the_post_thumbnail_url(get_the_id(),'project_center');  ?>"></div>
                        <div><?php echo get_the_title();  ?></div>
                    </a>
                <?php  endwhile;  ?>
                </div>
            </div>
            <!-- <div class="service_format">
                <div class="project_center_title">
                    <div>精品分享</div>
                    <div style="background-repeat: repeat; background-image: url(<?php echo wp_upload_dir()['baseurl'].'/2018/10/213.jpg';?>); background-attachment: scroll; background-position: top center;background-size:cover; " ></div>
                </div>
            </div> -->
        </div>
    </div>
</div>