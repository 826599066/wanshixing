<div class="block_wrap category_block_wrap sun_company_wrap">
    <div class="container" >
        <div class="content">
        <div class="category_block_title">
            <div><?php echo $page_content_title;  ?></div>
            <div class="category_subtitle"><?php echo $page_content_subtitle;  ?></div>
            <div class="title_underline"></div>
        </div>
        <?php 
            $subordinate_company_repeater = get_field('subordinate_company_repeater');
        ?>
        <div class="subordinate_company_content">
        <?PHP
            foreach ($subordinate_company_repeater  as $subordinate_company_repeater_item) {
        ?>
            <div class="subordinate_company_item">
                <div class="subordinate_top_imag"><img src="<?php echo $subordinate_company_repeater_item['subordinate_company_image'];  ?>"></div>
                <div class="subordinate_bottom_title"><?php echo $subordinate_company_repeater_item['subordinate_company_title'];  ?></div>
            </div>    
        <?php
            }
        ?> 
            </div>
        </div>
    </div>
</div>