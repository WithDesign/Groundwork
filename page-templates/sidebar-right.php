<?php
/**
 * Template Name: Sidebar Right
 * The template for displaying a page with the sidebar on the left side.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="row">
	<div class="col-xs-12 col-sm-8">
		<div id="primary" class="content-area">
		<?php
			$thumb_id = get_post_thumbnail_id();
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
			$thumb_url = $thumb_url_array[0];
			print_r($thumb_url_array);
			if ($thumb_url) { ?>
				<div class="banner" style="background-image: url('<?php echo $thumb_url;?>'); min-height: 250px !important; background-size: cover;">
					<div class="container">
						<h1><?php the_title(); ?></h1>
					</div>
				</div>
			<?php } ?>
			<main id="main" class="site-main" role="main">
				...
			</main>
		</div>
	</div>
	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
