<?php
/**
 * Template Name: Full With Banner
 * The template for displaying a full width page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="content-area">
	<?php
		$thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
		$thumb_url = $thumb_url_array[0];
		if ($thumb_url) { ?>
			<div class="banner" style="background-image: url('<?php echo $thumb_url;?>'); min-height: 250px !important; background-size: cover;">
				<div class="container">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		<?php } ?>
		<main class="site-main container-fluid" role="main">

			...

		</main>
	</div>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
