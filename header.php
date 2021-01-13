<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Grondbalans
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'grondbalans' ); ?></a>

	<header id="masthead" class="header">
		<div class="header__container">
			<div class="header__logo">
				<img src="<?php echo get_template_directory_uri();?>/content/images/logo.svg" alt="Logo" />
			</div>
			<div class="header__nav">
				<ul>
					<li><a href="#">Expertises</a></li>
					<li><a href="#">Projecten</a></li>
					<li><a href="#">Dit zijn wij</a></li>
					<li><a href="#">Werken bij</a></li>
					<li><a href="#">Vraag en aanbod</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
		</div>
	</header><!-- #masthead -->
