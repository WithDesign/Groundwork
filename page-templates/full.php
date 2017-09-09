<?php
/**
 * Template Name: Full Width 
 * The template for displaying a full width page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="content-area container-fluid">
		<main class="site-main" role="main">

			...

		</main>
	</div>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
