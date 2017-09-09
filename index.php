<?php
get_header(); ?>
  <div class="container">
    <div class="row">
        <main class="col-xs-12 col-sm-8">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					the_title('<h1>', '</h1>');
          the_content();
				endwhile;
				the_posts_navigation();
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			else :
				echo esc_html( 'Sorry, no posts' );
			endif; ?>
        </main>
        <aside class="col-xs-12 col-sm-8">
			    <?php get_sidebar(); ?>
        </aside>
    </div>
  </div>
<?php
get_footer();
