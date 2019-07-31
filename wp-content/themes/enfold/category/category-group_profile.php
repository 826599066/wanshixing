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

<div class="block_wrap max_width_block_wrap">
    <div class="container" >
        <div class="content">
        <div class="category_block_title">
            <div><?php echo $cat_content_title;  ?></div>
            <div class="category_subtitle"><?php echo $cat_content_subtitle;  ?></div>
            <div class="title_underline"></div>
        </div>
        <div class="group_profile_content">
        <?php
            while ($q->have_posts()): $q->the_post();
                $group_block_title = get_the_title();
                $post_link  = get_permalink();
                if($group_block_title == '集团简介'){
        ?>
            <div class="profile_content_item">
                <div class="profile_title"><?php echo $group_block_title;  ?></div>
                <div class="profile_content_left">
                    <img src="<?php echo get_the_post_thumbnail_url();  ?>">
                    <div class="profile_describe"><?php echo mb_substr(wp_trim_words(get_the_content(),275),0 ,69);  ?></div>
                </div>
                <div class="profile_content_right">
                    <div class="profile_describe"><?php echo mb_substr(wp_trim_words(get_the_content(),245,'...',true),69);  ?></div>
                </div>
                <div class="show_more_wrap">
                    <a class="show_more" href="<?php echo $post_link;  ?>">查看更多</a>
                </div>
            </div>
        <?php
                }
            endwhile; 
        
        ?>
            <div class="profile_content_item honor_content_item">
            <?php
            
                $aptitude_honor = get_field('aptitude_honor_repeater','category_'.$current_cat_id);
                foreach($aptitude_honor as $aptitude_honor_item){
            ?>

                <a class="honor_content_top" href="<?php echo  $aptitude_honor_item['aptitude_honor_link']; ?>">
                    <div class="honor_top_left">
                        <div>
                            <div class="honor_top_title"><?php echo $aptitude_honor_item['aptitude_honor_top_title'] ?></div>
                            <div class="honor_top_content">
                                <div><?php echo $aptitude_honor_item['aptitude_honor_content'] ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="honor_top_right"><img src="<?php echo $aptitude_honor_item['aptitude_honor_image'] ?>"></div>
                </a>

            <?php
                }
            ?>
            </div>

        </div>
    </div>
</div>
            </div>
