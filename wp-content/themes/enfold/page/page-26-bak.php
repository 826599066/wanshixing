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
                    <div style="background-repeat: repeat; background-image: url(<?php echo wp_upload_dir()['baseurl'].'/2018/10/213.jpg';?>); background-attachment: scroll; background-position: top center;background-size:cover; " ></div>
                </div>
                <div class="development_history_wrap">
                    <div class="development_history_frame">
                      <div class="history_left_image">
                        <img src="<?php echo get_field('enterprise_honor_left_image'); ?>">
                      </div>
                      <div class="develpment_top_content_wrap" style="display:none;"></div>
                      <?php 
                        $enterprise_honor_right_content = get_field('enterprise_honor_right_content');
                        foreach($enterprise_honor_right_content as $index => $enterprise_honor_right_content_item){
                            if($index < 9){
                      ?>
                      <div class="history_item_wrap history_top" style="bottom:50px;left:calc(<?php echo  $index * 11;   ?>% - 125px );">
                       <?php 
                        if($enterprise_honor_right_content_item['year_event']){
                       ?>
                        <div class="history_item_content">
                                    <?php echo $enterprise_honor_right_content_item['year_event']; ?>
                                <div class="content_triangle"></div>
                        </div>
                        <?php } ?>
                            <div class="history_item_year">
                                <?php echo $enterprise_honor_right_content_item['year']; ?>
                            </div>
                            <div class="history_item_point"></div>
                        <?php }else {
                        ?>
                        <div class="history_item_wrap history_bottom" style="bottom:-16px;right:calc(<?php echo  ($index - 9) * 11;   ?>% - 20px );">
                            <div class="history_item_year">
                                <?php echo $enterprise_honor_right_content_item['year']; ?>
                            </div>
                            <div class="history_item_point"></div>
                            <?php 
                                if($enterprise_honor_right_content_item['year_event']){
                            ?>
                            <div class="history_item_content <?php echo  ($index-9) < 3 ? 'last_three' : '';  ?> "  >
                                        <?php echo $enterprise_honor_right_content_item['year_event']; ?>
                                    <div class="content_triangle"></div>
                            </div>
                            <?php 
                                } 
                            ?>
                        
                        
                        <?php
                        } ?>


                      </div>
                      <?php 
                            }                      
                      ?>
                      <div class="develpment_bottom_content_wrap" style="display:none;"></div>
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

                        $show_horrors  = get_field('show_horrors');
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