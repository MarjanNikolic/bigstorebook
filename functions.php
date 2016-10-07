<?php
/**
 * Enqueues scripts and styles.
 *
 */

/*************************
 * Add style theme       *
*************************/
add_action( 'wp_enqueue_scripts', 'bigkstorebook_scripts' );
function bigkstorebook_scripts() {
	// Theme stylesheet.
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

?>
