<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

 /*************************************
 * This is main page for front end view
 **************************************/

 ?><!DOCTYPE html>
 <html <?php language_attributes(); ?> class="no-js">
 <head>
 	<meta charset="<?php bloginfo( 'charset' ); ?>">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="profile" href="http://gmpg.org/xfn/11">
 	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
 	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
 	<?php endif; ?>
 	<?php wp_head(); ?>
 </head>
 <body <?php body_class(); ?>>
<main>
</main>
<?php wp_footer(); ?>
 </body>
 </html>
