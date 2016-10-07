<?php
/**
 * Template Name: Front Page full width with three section article
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
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
   <section class="container cont-left">
   
   </section>
   <section class="container cont-center">
       
   </section>
   <section class="container cont-right">
       
   </section>
    
</main>
<?php wp_footer(); ?>
</body>
</html>
