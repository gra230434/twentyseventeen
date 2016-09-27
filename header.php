<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php get_template_part( 'components/header/header', 'image' ); ?>

		<div class="navigation-top">
			<div class="wrap">
				<?php get_template_part( 'components/navigation/navigation', 'top' ); ?>
			</div>
		</div><!-- .navigation-top -->

	</header><!-- #masthead -->

	<?php
	// If a regular post or page, and not the front page, show the featured image
	if ( has_post_thumbnail() && ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) ) :
		echo '<div class="">';
		the_post_thumbnail( 'twentyseventeen-featured-image' );
		echo '</div>';
	endif;
	?>

	<div id="content" class="site-content">
