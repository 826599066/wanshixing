<?php
    if ( !defined('ABSPATH') ){ die(); }

    global $avia_config;

    /*
    * get_header is a basic wordpress function, used to retrieve the header.php file in your theme directory.
    */
    get_header();


    if( get_post_meta(get_the_ID(), 'header', true) != 'no') echo avia_title();

    do_action( 'ava_after_main_title' );
    $current_cat_id = get_query_var('cat');
    $current_cat_info = get_category($current_cat_id);
    $cat_top_image = get_field('category_top_image','category_'.$current_cat_id);
    $category_top_image_phone = get_field('category_top_image_phone','category_'.$current_cat_id);
    $cat_top_title_cn = get_field('category_top_title_cn','category_'.$current_cat_id);
    $cat_top_title_en = get_field('category_top_title_en','category_'.$current_cat_id);
    $cat_content_title = get_field('category_title','category_'.$current_cat_id);
    $cat_content_subtitle = get_field('category_sub_title','category_'.$current_cat_id);
    $phone_num = get_field('phone_number', 'option');
    $company_email = get_field('company_email', 'option');
    $manager_phone = get_field('manager_phone', 'option');
    $client_service_center = get_field('client_service_center', 'option');
?>
	<div id="index_top_image" class="avia-section main_color index_top_image_pc avia-section-default avia-no-border-styling avia-bg-style-scroll  avia-builder-el-0  avia-builder-el-no-sibling  av-minimum-height av-minimum-height-custom container_wrap fullsize" style="background-repeat: no-repeat; background-image: url(<?php echo $cat_top_image;?>); background-attachment: scroll; background-position: top center;background-size:cover; " data-section-bg-repeat="no-repeat">
		<div class="container" style="height:200px">
				<main role="main" itemprop="mainContentOfPage" class="template-page content  av-content-full alpha units">
					<div class="post-entry post-entry-type-page post-entry-121">
						<div class="entry-content-wrapper clearfix">
							<section class="av_textblock_section" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
								<div class="avia_textblock " itemprop="text">
									<div class="top_image_wrap">
										<div class="top_image_title"><?php echo $cat_top_title_cn;  ?></div>
										<div class="top_image_subtitle"><?php echo strtoupper($cat_top_title_en);  ?></div>
									</div>
								</div>
							</section>

						</div>
					</div>
				</main><!-- close content main element --> <!-- section close by builder template -->		
			</div><!--end builder template-->
		</div>
        <div id="index_top_image" class="avia-section main_color index_top_image_phone avia-section-default avia-no-border-styling avia-bg-style-scroll  avia-builder-el-0  avia-builder-el-no-sibling  av-minimum-height av-minimum-height-custom container_wrap fullsize" style="background-repeat: no-repeat; background-image: url(<?php echo $category_top_image_phone;?>); background-attachment: scroll; background-position: top center;background-size:cover; " data-section-bg-repeat="no-repeat">
		<div class="container" style="height:200px">
				<main role="main" itemprop="mainContentOfPage" class="template-page content  av-content-full alpha units">
					<div class="post-entry post-entry-type-page post-entry-121">
						<div class="entry-content-wrapper clearfix">
							<section class="av_textblock_section" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
								<div class="avia_textblock " itemprop="text">
									<div class="top_image_wrap <?php echo $current_cat_id == 8 ? 'black_title' :''; ?>">
										<div class="top_image_title"><?php echo $cat_top_title_cn;  ?></div>
										<div class="top_image_subtitle"><?php echo strtoupper($cat_top_title_en);  ?></div>
									</div>
								</div>
							</section>

						</div>
					</div>
				</main><!-- close content main element --> <!-- section close by builder template -->		
			</div><!--end builder template-->
		</div>
    <?php 
        if($current_cat_info){
            include(TEMPLATEPATH . '/category/category-'.$current_cat_info->slug.'.php');
        }
    
    ?>



<?php get_footer(); ?>