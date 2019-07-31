<?php
	if ( !defined('ABSPATH') ){ die(); }
	
	global $avia_config;

	/*
	 * get_header is a basic wordpress function, used to retrieve the header.php file in your theme directory.
	 */
	 get_header();

	$title  = __('Blog - Latest News', 'avia_framework'); //default blog title
	$t_link = home_url('/');
	$t_sub = "";

	if(avia_get_option('frontpage') && $new = avia_get_option('blogpage'))
	{
		$title 	= get_the_title($new); //if the blog is attached to a page use this title
		$t_link = get_permalink($new);
		$t_sub =  avia_post_meta($new, 'subtitle');
	}

	if( get_post_meta(get_the_ID(), 'header', true) != 'no') echo avia_title(array('heading'=>'strong', 'title' => $title, 'link' => $t_link, 'subtitle' => $t_sub));
	global $post;
	do_action( 'ava_after_main_title' );
	$current_category = get_the_category()[0];
	$current_category_id = $current_category->term_id;
	$current_cat_info = get_category($current_cat_id);
    $cat_top_image = get_field('category_top_image','category_'.$current_category_id);
    $category_top_image_phone = get_field('category_top_image_phone','category_'.$current_category_id);
    $cat_top_title_cn = get_field('category_top_title_cn','category_'.$current_category_id);
    $cat_top_title_en = get_field('category_top_title_en','category_'.$current_category_id);
	
?>
	<div id="index_top_image" class="avia-section main_color index_top_image_pc avia-section-default avia-no-border-styling avia-bg-style-scroll  avia-builder-el-0  avia-builder-el-no-sibling  av-minimum-height av-minimum-height-custom container_wrap fullsize" style="background-repeat: no-repeat; background-image: url(<?php echo $cat_top_image;?>); background-attachment: scroll; background-position: top center;background-size:cover; " data-section-bg-repeat="no-repeat">
		<div class="container" style="height:200px">
				<main role="main" itemprop="mainContentOfPage" class="template-page content  av-content-full alpha units">
					<div class="post-entry post-entry-type-page post-entry-121">
						<div class="entry-content-wrapper clearfix">
							<section class="av_textblock_section" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
								<div class="avia_textblock " itemprop="text">
									<div class="top_image_wrap <?php echo $current_category_id==11 ? 'black_title' : ''; ?>">
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
									<div class="top_image_wrap <?php echo $current_category_id==11 ? 'black_title' : ''; ?>">
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
			if($current_category_id == 9 ){
				include(TEMPLATEPATH.'/single/single-'.$current_category->slug.'.php');
			}elseif($current_category_id == 11){
				include(TEMPLATEPATH.'/single/single-'.$current_category->slug.'.php');
			}else{
		?>
		<div class='container_wrap container_wrap_first main_color <?php avia_layout_class( 'main' ); ?>'>

			<div class='single_customer_wrap container template-blog template-single-blog '>
				<div class="post_title">
					<?php echo get_the_title();  ?>
					<a href="<?php echo get_category_link($current_category_id);  ?>"  class="post_title_go_back">返回 ></a> 
				</div>
				<div class="author_date clearfix">
				<?php if(get_the_id()!== 105 ){ ?>
					<div>
						<span>作者：<?php echo get_the_author_meta('nickname',$post->post_author);  ?></span>
						<span>时间：<?php echo get_the_time('Y-m-d H:i');  ?></span>
					</div>
				<?php } ?>
				</div>
				<div class="post_content_wrap">
					<?php
						echo do_shortcode(get_post()->post_content);
					?>
				</div>
				<div class="next_previous_post">
					<div><?php previous_post_link('上一篇: %link', '%title', true); ?></div>
					<div><?php next_post_link('下一篇: %link', '%title', true); ?></div>
				</div>
			</div><!--end container-->

		</div><!-- close default .container_wrap element -->
		<?php 
			}
		?>

<?php get_footer(); ?>