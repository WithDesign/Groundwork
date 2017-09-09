<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 */

get_header(); ?>
<div class="container">
	<div class="row">
		<main class="col-xs-12 col-sm-8">
	        <h1>Oops! That page can't be found.</h1>
	        <p>It looks like nothing was found at this location. Maybe try one of the links below or a search?</p>
	        <?php
	        get_search_form();
	        the_widget( 'WP_Widget_Recent_Posts' ); ?>
		</main>
		<aside class="col-xs-12 col-sm-4">
			<?php get_sidebar(); ?>
		</aside>
	</div>
</div>
<?php
get_footer();
