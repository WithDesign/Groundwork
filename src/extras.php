<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function withdesign_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'withdesign_body_classes' );


/**
 * Make YouTube and Vimeo oembed elements responsive. Add Foundation's .flex-video
 * class wrapper around any oembeds
 */
function withdesign_oembed_flex_wrapper( $html, $url, $attr, $post_ID ) {
	if ( strpos( $url, 'youtube' ) || strpos( $url, 'youtu.be' ) || strpos( $url, 'vimeo' ) ) {
		return '<div class="flex-video widescreen">' . $html . '</div>';
	}

	return $html;
}
add_filter( 'embed_oembed_html', 'withdesign_oembed_flex_wrapper', 10, 4 );

// Creats a list of recent posts
function recent_posts($no_posts = 10) {
  $args = array( 'numberposts' => $no_posts );
  $recent_posts = wp_get_recent_posts( $args );
  foreach( $recent_posts as $recent ){
      printf( '<li><a class="title" href="%1$s">%2$s</a></br>%3$s</br><a class="link" href="%1$s">Read More</a></li>',
           esc_url( get_permalink( $recent['ID'] ) ),
           apply_filters( 'the_title', $recent['post_title'], $recent['ID']),
           apply_filters( 'the_content', $recent['post_excerpt'], $recent['ID'])
       );
  }
}
