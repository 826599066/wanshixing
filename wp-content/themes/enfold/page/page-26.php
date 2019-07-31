<div class="block_wrap category_block_wrap">
    <div class="container" >
        <div class="content">
            <div class="category_block_title">
                <div><?php echo $page_content_title;  ?></div>
                <div class="category_subtitle"><?php echo $page_content_subtitle;  ?></div>
                <div class="title_underline"></div>
            </div>
            <div class="development_history" id="development_history">
                <div class="project_center_title">
                    <div>发展历程</div>
                    <?php
                    $last_post_id=get_posts('numberposts=1&category=11&orderby=date')[0]->ID;
                    ?>
                    <div style="background-repeat: repeat; background-image: url(<?php echo wp_upload_dir()['baseurl'].'/2018/10/213.jpg';?>); background-attachment: scroll; background-position: top center;background-size:cover; " ></div>
                </div>
                <div class="development_history_wrap">
                    <ul class="development_history_list">
                    <?php 
                        $development_history_params = array(
                            'cat'=>11,
                            // "orderby" => "date",
                            "posts_per_page" =>1000,
                            // 'paged' => get_query_var('paged'),
                            // "order" => $order
                        );
                        $dhquery = new WP_Query($development_history_params);
                        $total_files = $dhquery->found_posts;
                        $current_post_id= $last_post_id;
                        while ($dhquery->have_posts()):$dhquery->the_post();
                    ?>
                        <li class="development_history_item">
                            <a href="<?php echo get_permalink();  ?>">
                                <div class="development_history_point <?php echo $current_post_id==get_the_ID() ? 'current_point' :''; ?>"></div>
                                <div class="development_history_title"><?php echo get_the_title();  ?></div>
                            </a>
                        </li>
                <?php  
                        $loop_num++;
                        endwhile;
                        wp_reset_postdata(); 
                ?>     
                    </ul>
                    <?php
                        $perpage_num = 5;
                        $history_month_content = get_field('development_history_reapter',$last_post_id);
                        $info_length = count($history_month_content);                    
                    ?>
                    <div class="development_history_content">
                        <div class="history_left_wrap <?php echo get_the_title()=='更多以前' ? 'more_title' : '';  ?>">
                            <div><?php echo get_the_title($last_post_id);  ?></div>
                            <div class="next_previous_link">
                                <a ><</a>
                                <a href="<?php echo  get_permalink(get_posts('numberposts=2&category=11&orderby=date')[1]->ID);  ?>">></a>
                            </div>
                        </div>
                        <div class="history_right_wrap">
                        <?php 
                        $current_page_num = $_GET['his_paged'];
                        if(!$_GET['his_paged']){
                            $history_month_content=array_slice($history_month_content,0,$perpage_num,true);
                        }
                        $history_month_content=array_slice($history_month_content,($current_page_num-1)*$perpage_num,$perpage_num,true);
                        foreach($history_month_content as $history_month_content_item){
                        ?>
                        <div>
                            <div class="history_month"><?php echo $history_month_content_item['development_history_date'];  ?></div>
                            <div class="history_month_content">
                                <?php echo $history_month_content_item['development_history_info'];  ?>
                            </div>
                        </div>
                        <?php }  
                        $current_url = get_permalink();
                            if($info_length > $perpage_num){
                                $total_num =ceil($info_length /$perpage_num);
                        ?>
                        
                        <div class="fenye">
                            <?php
                                if($current_page_num !=1&&$current_page_num){
                            ?>
                                <a href="<?php echo $current_url.'&his_paged='.($current_page_num-1);  ?>">上一页</a>
                            <?php } ?>
                            <?php
                                for($num_index=1;$num_index<=$total_num;$num_index++){
                                    if($current_url)
                                    $local_to_url = $current_url.'&his_paged='.$num_index;
                            ?>
                            <a href="<?php echo $local_to_url; ?>" class="page_num <?php 
                                if($num_index == 1&&$current_page_num==null){
                                    echo 'current page_num';
                                }elseif($num_index==$current_page_num){
                                    echo 'current page_num';
                                }
                            ?>"><?php echo $num_index; ?></a>
                                <?php } ?>
                                <?php if($current_page_num !=$total_num){   
                                ?>
                                    <a href="<?php echo $current_url.'&his_paged='.($current_page_num+1);  ?>">下一页</a>
                                <?php } ?>
                        </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="show_horrors" id="show_horrors">
                <div class="project_center_title">
                    <div>荣誉展示</div>
                    <div style="background-repeat: repeat; background-image: url(<?php echo wp_upload_dir()['baseurl'].'/2018/10/213.jpg';?>); background-attachment: scroll; background-position: top center;background-size:cover; " ></div>
                </div>
                <div class="horrors_wrap">
                    <?php 
                        $show_horrors  = get_field('show_horrors',26);
                        $horrors_wrap = "[av_content_slider heading='' columns='4' animation='slide' navigation='arrows' autoplay='false' interval='5' font_color='' color='']";
                        foreach($show_horrors as $index => $show_horrors_item){
                            $horrors_wrap .="[av_content_slide title='Slide ".$index." tags='' link='' linktarget='']";
                            $horrors_wrap .="<div class='horrors_item'>";
                            $horrors_wrap .="<div class='horrors_image'>";
                            $horrors_wrap .='<img src="'.$show_horrors_item["show_horrors_image"]['url'].'">';
                            $horrors_wrap .="</div>";
                            $horrors_wrap .="<div class='horrors_title'>".$show_horrors_item['show_horrors_title']."</div>";
                            $horrors_wrap .="</div>";
                            $horrors_wrap .="[/av_content_slide]";
                        }   

                        $horrors_wrap .="[/av_content_slider]";
                        echo do_shortcode($horrors_wrap,true);
                    ?>                        
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('.history_item_point').hover(function(){
        $(this).parent().addClass('point_hover');
    },function(){

        $(this).parent().removeClass('point_hover');
    })
    function screen_with_class(wid_num) {
        var history_bottom = $('.development_history_frame .history_bottom');
        var history_top = $('.development_history_frame .history_top');
        if( wid_num < 1000 && wid_num >= 920){
            history_bottom.each(function(index){
                $(this).attr('style','bottom:-16px;right:calc('+index * (11)+'% - 37px );');
            })
        }else if(wid_num < 920 && wid_num >= 767){
            history_bottom.each(function(index){
                $(this).attr('style','bottom:-16px;right:calc('+index * (11)+'% - 60px );');
            })
        }else if(wid_num < 600 && wid_num >= 500 ){
            history_bottom.each(function(index){
                $(this).attr('style','bottom:-16px;right:calc('+index * (11)+'% - 80px );');
            })
        }else if(wid_num < 500  ){
            history_bottom.each(function(index){
                $(this).attr('style','bottom:-16px;right:calc('+index * (11)+'% - 89px );');
                var history_item_content = $(this).children('.history_item_content').text();
                $(this).children('.history_item_point').click(function(){
                    $('.develpment_top_content_wrap').css('display','none');
                    $(this).siblings('.history_item_content').addClass('show_triangle');
                    $(this).parent().siblings().find('.history_item_content').removeClass('show_triangle');
                    var content_text = $(this).siblings('.history_item_content').text();
                    if(content_text){
                        $('.develpment_bottom_content_wrap').css('display','block');
                        $('.develpment_bottom_content_wrap').text(content_text);
                    }else{
                        $('.develpment_bottom_content_wrap').css('display','none');
                    }
                })
            })
            history_top.each(function(index){
                $(this).children('.history_item_point').click(function(){
                    $('.develpment_bottom_content_wrap').css('display','none');
                    $(this).siblings('.history_item_content').addClass('show_triangle');
                    $(this).parent().siblings().find('.history_item_content').removeClass('show_triangle');
                    var content_text = $(this).siblings('.history_item_content').text();
                    if(content_text){
                        $('.develpment_top_content_wrap').css('display','block');
                        $('.develpment_top_content_wrap').text(content_text);
                    }else{
                        $('.develpment_top_content_wrap').css('display','none');
                    }
                })
            })
        }else if(wid_num > 1000){
            history_bottom.each(function(index){
                $(this).attr('style','bottom:-16px;right:calc('+index * (11)+'% - 20px );');
            })
        }
    }
    var window_width = $(window).width();
    screen_with_class(window_width);
    $(window).resize(function () {
        window_width = $(window).width();
        screen_with_class(window_width);
});
</script>