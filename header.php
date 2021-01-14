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
				<div class="header__nav--hamburger">
					<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
				</div>
				<ul>
					<li><a href="#">Expertises</a>
					<ul>
						<li><a href="#">Grondstormen</a></li>
						<li><a href="#">Projectrealisatie</a></li>
						<li><a href="#">Vraag en aanbod</a></li>
						<li><a href="#">Grondbanken</a></li>
						<li><a href="#">Baggerbalans</a></li>
					</ul>
				</li>
					<li><a href="#">Projecten</a></li>
					<li><a href="#">Dit zijn wij</a></li>
					<li><a href="#">Werken bij</a></li>
					<li><a href="#">Vraag en aanbod</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
		</div>
	</header><!-- #masthead -->
