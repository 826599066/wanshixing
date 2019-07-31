<div class='container_wrap block_wrap  container_wrap_first main_color <?php avia_layout_class( 'main' ); ?>'>
    <div class='single_customer_wrap container template-blog template-single-blog '>
        <div class="project_center_wrap">
            <ul class="project_center_left">
                <?php
                    $project_list_args = array(
                        'numberposts' => 100,
                        'offset'          => 0,
                        'category'        => $current_category_id,
                        'orderby'         => 'date',
                        'order'           => 'DESC',
                        'post_type'       => 'post',
                        'post_status'     => 'publish' );
                    $project_list_post = get_posts( $project_list_args );
                    foreach($project_list_post as $project_list_post_item){
                ?>
                    <li class="<?php echo  get_the_ID() == $project_list_post_item->ID ? 'crrent_post_link' : ''; ?>"><a href="<?php echo get_the_permalink($project_list_post_item->ID);  ?>"><?php echo $project_list_post_item->post_title;  ?></a></li>
                <?php } ?>
            </ul>
            <div class="project_center_right">
                <div class="project_title">
			<div>
				<?php  
					$project_title = get_the_title();
					echo $project_title;
				?>
			</div>
			<div  class="project_go_back"><a href="<?php  echo get_category_link($current_category_id); ?>">返回 ></a></div>
		</div>
                <div class="title_bottom_line" style="background-image:url(http://web.wanshixingwuye.com/wp-content/uploads/2018/12/bottom_line.png);background-repeat:repeat-x;">
                </div>
                <div class="project_content_wrap">
                    <div class="project_content_image">
                        <img src="<?php echo  get_field('project_image'); ?>">
                    </div>
                    <div class="project_content_attr">
                        <?php
                            $project_content_attr = get_field('project_attribute');
                            if($project_content_attr){
                                foreach($project_content_attr as $project_content_attr_item){
                        ?>
                        <div><span><?php echo $project_content_attr_item['project_attribute_title'];  ?></span>:<span><?php echo $project_content_attr_item['project_attribute_content'];  ?></span></div>
                        <?php
                                }
                            }
                        ?>
                        <div class="project_qr_code">
                            <?php 
                                $qr_code = get_field('qr_code_repeater',12); 
                            ?>
                            <img src="<?php echo $qr_code[0]['qr_code_image'];  ?>">
                            <div>关注关注号</div>
                        </div>
                    </div>
                    <div class="project_content_bottom">
                        <?php
                            echo get_field('project_info');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
