<link rel="stylesheet" href="<?php  echo get_theme_root_uri().'/enfold/bootstrap/style/bootstrap.css';  ?>" rel="stylesheet">
<script src="<?php  echo get_theme_root_uri().'/enfold/bootstrap/js/bootstrap.min.js';  ?>"></script>
<div class="block_wrap category_block_wrap">
    <div class="container" >
        <div class="content">
            <div class="category_block_title">
                <div><?php echo $page_content_title;  ?></div>
                <div class="category_subtitle"><?php echo $page_content_subtitle;  ?></div>
                <div class="title_underline"></div>
            </div>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <?php 
                    // var_dump(get_field('recruitment_position'));
                    $recruitment_postion = get_field('recruitment_position');
                    if($recruitment_postion){
                        foreach ($recruitment_postion as $key=>$recruitment_postion_item){
                        //   var_dump($recruitment_postion_item);
                                                                        
                                
                ?>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading<?php echo $key;  ?>">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $key;  ?>" aria-expanded="false" aria-controls="collapse<?php echo $key;  ?>" class="collapsed">
                                <span class="pos_name"><?php echo $recruitment_postion_item["position_name"];  ?></span><span class="pull-right"><?php if($recruitment_postion_item["word_place"]){  ?><span class="work_pos">工作地点: <?php echo $recruitment_postion_item["word_place"];  ?></span><?php }  ?><span class="recruit_num">招聘人数: <?php echo $recruitment_postion_item["recruitment_number"];  ?></span><span class="circle_wrap"><span title="Charcode: \ue877" data-element-nr="ue877" data-element-font="entypo-fontello" class="down_icon  avia-attach-element-select avia_icon_preview avia-font-entypo-fontello avia-active-element"></span><span title="Charcode: \ue876" data-element-nr="ue876" data-element-font="entypo-fontello" class="up_icon avia-attach-element-select avia_icon_preview avia-font-entypo-fontello "></span>
                                </span></span>
                            </a>
                        </h4>
                    </div>

                    <div id="collapse<?php echo $key;  ?>" class="panel-collapse collapse " role="tabpanel" aria-labelledby="heading<?php echo $key;  ?>">
                        <div class="panel-body">
                            <?php if($recruitment_postion_item["inline_item"]){ ?>
                            <?php  foreach($recruitment_postion_item["inline_item"] as $inline_item) { ?>
                                <div class="inline_item_wrap"> 
                                    <div class="item_title"><?php echo $inline_item['inline_title']; ?> :</div>
                                    <div class="item_content"> <?php echo $inline_item['inline_info']; ?></div>
                                </div>
                            <?php } }?>
                            <?php if($recruitment_postion_item["row_item"]) { ?>
                            <?php  foreach($recruitment_postion_item["row_item"] as $row_item ){ ?>
                                <div class="row_item_wrap">
                                    <div class="item_title"><?php echo $row_item['row_title'];  ?>：</div>
                                    <div class="item_content">
                                    <?php echo  $row_item['row_info']; ?>
                                    </div>
                                </div>
                            <?php }} ?>

                        </div>
                    </div>
                </div>
                    <?php  }} ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('.panel-collapse').on('show.bs.collapse',function(){
        $(this).prevAll().addClass('open_collapse')
    })
    $('.panel-collapse').on('hide.bs.collapse',function(){
        $(this).prevAll().removeClass('open_collapse')
    })
</script>