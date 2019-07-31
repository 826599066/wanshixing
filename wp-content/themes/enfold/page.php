<?php
	if ( !defined('ABSPATH') ){ die(); }
	
	global $avia_config;

	/*
	 * get_header is a basic wordpress function, used to retrieve the header.php file in your theme directory.
	 */
	 get_header();


 	 if( get_post_meta(get_the_ID(), 'header', true) != 'no') echo avia_title();
 	 
	  do_action( 'ava_after_main_title' );
	  $current_page_id = get_the_ID();
	  $page_top_image = get_field('category_top_image');
	  $page_top_image_phone = get_field('category_top_image_phone');
	  $page_top_title = get_field('category_top_title_cn');
	  $page_top_subtitle = get_field('category_top_title_en');
	  $page_content_title = get_field('category_title');
	  $page_content_subtitle = get_field('category_sub_title');
	  $phone_num = get_field('phone_number', 'option');
	  $company_email = get_field('company_email', 'option');
	  $manager_phone = get_field('manager_phone', 'option');
	  $address = get_field('address', 'option');
	  if($page_top_image){
	 ?>

	 	<div id="index_top_image" class="avia-section main_color index_top_image_pc avia-section-default avia-no-border-styling avia-bg-style-scroll  avia-builder-el-0  avia-builder-el-no-sibling  av-minimum-height av-minimum-height-custom container_wrap fullsize" style="background-repeat: no-repeat; background-image: url(<?php echo $page_top_image;?>); background-attachment: scroll; background-position: top center;background-size:cover; " data-section-bg-repeat="no-repeat">
		<div class="container" style="height:200px">
				<main role="main" itemprop="mainContentOfPage" class="template-page content  av-content-full alpha units">
					<div class="post-entry post-entry-type-page post-entry-121">
						<div class="entry-content-wrapper clearfix">
							<section class="av_textblock_section" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
								<div class="avia_textblock " itemprop="text">
									<div class="top_image_wrap <?php echo $current_page_id == 26 || $current_page_id == 30 || $current_page_id == 32 || $current_page_id == 18 ? 'black_title' : '';  ?>">
										<div class="top_image_title"><?php echo $page_top_title;  ?></div>
										<div class="top_image_subtitle"><?php echo  strtoupper($page_top_subtitle);  ?></div>
									</div>
								</div>
							</section>

						</div>
					</div>
				</main><!-- close content main element --> <!-- section close by builder template -->		
			</div><!--end builder template-->
		</div>
		<div id="index_top_image" class="avia-section main_color index_top_image_phone avia-section-default avia-no-border-styling avia-bg-style-scroll  avia-builder-el-0  avia-builder-el-no-sibling  av-minimum-height av-minimum-height-custom container_wrap fullsize" style="background-repeat: no-repeat; background-image: url(<?php echo $page_top_image_phone;?>); background-attachment: scroll; background-position: top center;background-size:cover; " data-section-bg-repeat="no-repeat">
		<div class="container" style="height:200px">
				<main role="main" itemprop="mainContentOfPage" class="template-page content  av-content-full alpha units">
					<div class="post-entry post-entry-type-page post-entry-121">
						<div class="entry-content-wrapper clearfix">
							<section class="av_textblock_section" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
								<div class="avia_textblock " itemprop="text">
									<div class="top_image_wrap <?php echo $current_page_id == 26 || $current_page_id == 30 || $current_page_id == 32 || $current_page_id == 18 ? 'black_title' : '';  ?>">
										<div class="top_image_title"><?php echo $page_top_title;  ?></div>
										<div class="top_image_subtitle"><?php echo  strtoupper($page_top_subtitle);  ?></div>
									</div>
								</div>
							</section>

						</div>
					</div>
				</main><!-- close content main element --> <!-- section close by builder template -->		
			</div><!--end builder template-->
		</div>
	  <?php  
	  	  include(TEMPLATEPATH.'/page/page-'.$current_page_id.'.php');
	
	
	}else{
	 ?>
		<div class='container_wrap container_wrap_first main_color <?php avia_layout_class( 'main' ); ?>'>

			<div class='container'>

				<main class='template-page content  <?php avia_layout_class( 'content' ); ?> units' <?php avia_markup_helper(array('context' => 'content','post_type'=>'page'));?>>

                    <?php
                    /* Run the loop to output the posts.
                    * If you want to overload this in a child theme then include a file
                    * called loop-page.php and that will be used instead.
                    */

                    $avia_config['size'] = avia_layout_class( 'main' , false) == 'fullsize' ? 'entry_without_sidebar' : 'entry_with_sidebar';
                    get_template_part( 'includes/loop', 'page' );
                    ?>

				<!--end content-->
				</main>

				<?php

				//get the sidebar
				$avia_config['currently_viewing'] = 'page';
				get_sidebar();

				?>

			</div><!--end container-->

		</div><!-- close default .container_wrap element -->
	<?php }  ?>


<?php get_footer(); ?>
