<?php
	if ( !defined('ABSPATH') ){ die(); }
	
	global $avia_config;

	/*
	 * get_header is a basic wordpress function, used to retrieve the header.php file in your theme directory.
	 */
	 get_header();


 	 if( get_post_meta(get_the_ID(), 'header', true) != 'no') echo avia_title();
 	 
      do_action( 'ava_after_main_title' );
?>
    <div class="top_block_wrap">
    <div class="container" >
            <div class="content">
                <div class="index_top_video">
                    <img src="http://web.wanshixingwuye.com/wp-content/uploads/2018/12/213.png">
                </div>
                <div class="index_top_video_phone">
                    <img src="http://web.wanshixingwuye.com/wp-content/uploads/2018/12/video.jpg">
                </div>
            </div>
    </div>
    </div>
    <div class="block_wrap index_block">
        <div class="container" >
            <div class="content">
                <div class="index_content_wrap">
                    <div class="left_tab_general">
                        <div class="left_tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#window" aria-controls="home" role="tab" data-toggle="tab">党建之窗</a></li>
                                <li role="presentation"><a href="#honor" aria-controls="profile" role="tab" data-toggle="tab">企业荣誉</a></li>
                                <li role="presentation"><a href="#news" aria-controls="profile" role="tab" data-toggle="tab">集团新闻</a></li>
                                <li role="presentation"><a href="#tendering" aria-controls="messages" role="tab" data-toggle="tab">企业招标</a></li>
                                <li role="presentation"><a href="#join_us" aria-controls="settings" role="tab" data-toggle="tab">加入我们</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="window">
                                    <div class="tab_content_wrap">
                                    <?php  
                                        $last_post_args = array(
                                            'numberposts'     => 5,
                                            'offset'          => 0,
                                            'category'        => 3,
                                            'orderby'         => 'date',
                                            'order'           => 'DESC',
                                            'post_type'       => 'post',
                                            'post_status'     => 'publish' );
                                        $last_post = get_posts( $last_post_args );
                                    ?>
                                        <div class="left_image"><img src="
                                        <?php 
                                        foreach($last_post as $index => $post_img_url){
                                            if(get_the_post_thumbnail_url($last_post[$index]->ID))
                                                {
                                                    echo get_the_post_thumbnail_url($last_post[$index]->ID,'index_tab');
                                                    break;
                                                }
                                        }
                                        ?>
                                        "></div>
                                        <div class="right_list">
                                            <?php 
                                            foreach($last_post as $last_post_item){
                                            ?>
                                                <a title="<?php echo $last_post_item->post_title;  ?>" href="<?php echo get_the_permalink($last_post_item->ID);  ?>"><span><?php echo $last_post_item->post_title;  ?></span><span><?php echo  get_the_time('Y-m-d',$last_post_item->ID);  ?></span></a>
                                            <?php
                                            }  
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="honor">
                                <div class="tab_content_wrap">
                                    <?php  
                                        $show_horrors =  get_field('show_horrors',26);
                                    ?>
                                        <div class="left_image"><img src="<?php echo $show_horrors[0]['show_horrors_image']['sizes']['index_tab'];  ?>"></div>
                                        <div class="right_list">
                                            <?php 
                                            foreach($show_horrors as $index => $show_horrors_item){
                                                if($index > 4){
                                                    break;
                                                }
                                            ?>
                                                <a title="<?php echo $show_horrors_item['show_horrors_title']; ?>" href="<?php echo get_the_permalink(26);  ?>"><span class='honor_link_item'><?php echo $show_horrors_item['show_horrors_title'];  ?></span></a>
                                            <?php
                                            }  
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="news">
                                <div class="tab_content_wrap">
                                    <?php  
                                        $last_post_args = array(
                                            'numberposts'     => 5,
                                            'offset'          => 0,
                                            'category'        => 10,
                                            'orderby'         => 'date',
                                            'order'           => 'DESC',
                                            'post_type'       => 'post',
                                            'post_status'     => 'publish' );
                                        $last_post = get_posts( $last_post_args );
                                    ?>
                                        <div class="left_image"><img src="<?php 
                                        foreach($last_post as $index => $post_img_url){
                                            if(get_the_post_thumbnail_url($last_post[$index]->ID))
                                                {
                                                    echo get_the_post_thumbnail_url($last_post[$index]->ID,'index_tab');
                                                    break;
                                                }
                                        }
                                        ?>"></div>
                                        <div class="right_list">
                                            <?php 
                                            foreach($last_post as $last_post_item){
                                            ?>
                                                <a title="<?php echo $last_post_item->post_title;  ?>" href="<?php echo get_the_permalink($last_post_item->ID);  ?>"><span><?php echo $last_post_item->post_title;  ?></span><span><?php echo  get_the_time('Y-m-d',$last_post_item->ID);  ?></span></a>
                                            <?php
                                            }  
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="tendering">
                                <div class="tab_content_wrap">
                                    <?php  
                                        $last_post_args = array(
                                            'numberposts'     => 5,
                                            'offset'          => 0,
                                            'category'        => 5,
                                            'orderby'         => 'date',
                                            'order'           => 'DESC',
                                            'post_type'       => 'post',
                                            'post_status'     => 'publish' );
                                        $last_post = get_posts( $last_post_args );
                                    ?>
                                        <div class="left_image"><img src="<?php   echo get_field('tendering_image','category_5')['sizes']['index_tab'];     ?>"></div>
                                        <div class="right_list">
                                            <?php 
                                            foreach($last_post as $last_post_item){
                                            ?>
                                                <a title="<?php echo $last_post_item->post_title;  ?>" href="<?php echo get_the_permalink($last_post_item->ID);  ?>"><span><?php echo $last_post_item->post_title;  ?></span><span><?php echo  get_the_time('Y-m-d',$last_post_item->ID);  ?></span></a>
                                            <?php
                                            }  
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="join_us">
                                <div class="tab_content_wrap">
                                    <?php  
                                        $join_us =  get_field('recruitment_position',30);
                                    ?>
                                        <div class="left_image"><img src="<?php   echo get_field('join_us_image','category_6')['sizes']['index_tab'];     ?>"></div>
                                        <div class="right_list join_us_wrap">
                                            <?php 
                                            foreach($join_us as $index => $join_us_item){
                                                if($index > 4){
                                                    break;
                                                }
                                            ?>
                                                <a  href="http://web.wanshixingwuye.com/?page_id=30"><span><?php echo $join_us_item['position_name'];  ?></span><span>地点:<?php echo  $join_us_item['word_place'];  ?></span><span>招聘人数:<?php echo  $join_us_item['recruitment_number'];  ?></span></a>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right_general">
                            <div class="general_title">
                                项目概况
                                <a href="http://web.wanshixingwuye.com/?cat=9">更多</a>
                            </div>
                            <div class="general_image">
                            <?php  
                                        $last_post_args = array(
                                            'numberposts'     => 4,
                                            'offset'          => 0,
                                            'category'        => 9,
                                            'orderby'         => 'date',
                                            'order'           => 'DESC',
                                            'post_type'       => 'post',
                                            'post_status'     => 'publish' );
                                        $last_post = get_posts( $last_post_args );
                                        $image_slider = "[av_slideshow size='featured' animation='slide' autoplay='true' interval='4' control_layout='av-control-default']";
                                            foreach($last_post as $last_post_item){
                                                $image_slider .= "[av_slide id='".get_post_thumbnail_id($last_post_item-> ID)."'][/av_slide]";
                                            }
                                        $image_slider .= "[/av_slideshow]";
                                        echo do_shortcode($image_slider);
                            ?>
                            </div>  
                            <div class="general_bottom">
                                  <div class="general_bottom_item">
                                    <span title="Charcode: \uf100" data-element-nr="uf100" data-element-font="flaticon" class="avia-attach-element-select avia_icon_preview avia-font-flaticon "></span>
                                    <span>品质保障</span>
                                  </div>        
                                  <div class="general_bottom_item">
                                    <span title="Charcode: \uf101" data-element-nr="uf101" data-element-font="flaticon" class="avia-attach-element-select avia_icon_preview avia-font-flaticon "></span>
                                    <span>诚信服务</span>
                                  </div>        
                                  <div class="general_bottom_item">
                                    <span title="Charcode: \uf100" data-element-nr="uf100" data-element-font="flaticon" class="avia-attach-element-select avia_icon_preview avia-font-flaticon "></span>
                                    <span>尽职尽责</span>
                                  </div>        
                            </div>
                        </div>
                    </div>
                    <div class="right_qr_code">
                        <?php 
                        $qr_code = get_field('qr_code_repeater');
                        foreach($qr_code as $qr_code_item){
                        ?>
                            <div class="qr_code_item">
                                <img src="<?php echo  $qr_code_item['qr_code_image']; ?>">
                                <div class="qr_code_title"><?php echo $qr_code_item['qr_code_title']; ?></div>
                            </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="<?php  echo get_theme_root_uri().'/enfold/bootstrap/style/bootstrap.css';  ?>" rel="stylesheet">
    <script src="<?php  echo get_theme_root_uri().'/enfold/bootstrap/js/bootstrap.min.js';  ?>"></script>
<?php get_footer(); ?>