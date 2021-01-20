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
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'grondbalans' ); ?></a>

	<header id="masthead" class="header">
		<div class="header__container">
			<a href="<?php echo get_home_url();?>">
				<div class="header__logo">
					<img src="<?php echo get_template_directory_uri();?>/content/images/logo.svg" alt="Logo" />
				</div>
			</a>
			<div class="header__nav">
				<div class="header__nav--hamburger">
					<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
				</div>
				<ul>
					<li><a href="<?php echo get_site_url();?>/expertises">Expertises</a>
					<ul>
						<li><a href="<?php echo get_site_url();?>/expertises#grondstromen">Grondstromen</a></li>
						<li><a href="<?php echo get_site_url();?>/expertises#projectrealisatie">Projectrealisatie</a></li>
						<li><a href="<?php echo get_site_url();?>/expertises#vraagenaanbod">Vraag en aanbod</a></li>
						<li><a href="<?php echo get_site_url();?>/expertises#grondbanken">Grondbanken</a></li>
						<li><a href="<?php echo get_site_url();?>/expertises#">Baggerbalans</a></li>
					</ul>
				</li>
					<li><a href="<?php echo get_site_url();?>/projecten">Projecten</a></li>
					<li><a href="<?php echo get_site_url();?>/dit-zijn-wij">Dit zijn wij</a>
					<ul>
						<li><a href="<?php echo get_site_url();?>/dit-zijn-wij">Dit is Grondbalans</a></li>
						<li><a href="#">Samen circulair</a></li>
					</ul>
					</li>
					<li><a href="<?php echo get_site_url();?>/vacatures">Werken bij</a></li>
					<li><a href="#">Vraag en aanbod</a></li>
					<li><a href="<?php echo get_site_url();?>/contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</header><!-- #masthead -->
