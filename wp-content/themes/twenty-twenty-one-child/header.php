<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>
<style>
	.header_section {
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 9;
    background-image: url(<?php bloginfo('url'); ?>/wp-content/uploads/2021/03/MicrosoftTeams-image-21.png);
    background-size: cover;
    background-repeat: no-repeat;
}
.banner_section {
    padding: 180px 0 100px 0;
    background-image: linear-gradient( 
139deg
 , #10c3de 100%, #26a0f4 0);
    background-image: url(<?php bloginfo('url'); ?>/wp-content/uploads/2021/03/candidates-waiting-job-interview-1.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top;
}
</style>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>
    <header id="header_section" class="header_section">
	
      <div class="container-fluid">
		  <div class="header_wrapper">
	       <?php get_template_part( 'template-parts/header/site-branding' ); ?>
		   </div>
	 </div>
	                                                 
	  
   </header>
<div id="content" class="site-content">
	   <div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
			
