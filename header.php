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
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
	<style>
body {
  margin: 0;
}

a {
  background-color: transparent;
}

img {
  border-style: none;
}

::-webkit-file-upload-button {
  -webkit-appearance: button;
  font: inherit;
}

*,
*::before,
*::after {
  box-sizing: inherit;
}

html {
  box-sizing: border-box;
}

body {
  color: #404040;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
  font-size: 1rem;
  line-height: 1.5;
}

body {
  background: #fff;
}

img {
  height: auto;
  max-width: 100%;
}

a {
  color: #4169e1;
}

.header {
  background-color: #3f4141;
  padding: 0.8rem 0;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 999;
}

.header__container {
  width: 1180px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

@media screen and (max-width: 1180px) {
  .header__container {
    width: calc(100% - 2rem);
  }
}

.header__logo {
  width: 20%;
}

.header__logo img {
  min-width: 230px;
}

.header__nav {
  display: flex;
  justify-content: flex-start;
  align-items: center;
  font-family: 'Montserrat', sans-serif;
  font-weight: 500;
  color: #fff;
}

.header__nav--hamburger {
  display: none;
}

.header__nav--hamburger svg {
  width: 30px;
  height: 30px;
}

.header__nav--hamburger svg path {
  fill: #fff;
}

.page {
  margin: 0 0 1.5em;
}

.screen-reader-text {
  border: 0;
  clip: rect(1px, 1px, 1px, 1px);
  clip-path: inset(50%);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute !important;
  width: 1px;
  word-wrap: normal !important;
}

.page {
  margin: 0;
}

html {
  margin-top: 104px;
}

body {
  background-image: url(../css/content/images/bg.png);background-position:right -350px bottom;background-repeat:no-repeat;background-attachment:fixed}</style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'grondbalans' ); ?></a>

	<header id="masthead" class="header">
		<div class="header__container">
			<a href="<?php echo get_home_url();?>">
				<div class="header__logo">
					<?php if(is_page('baggerbalans')) :?>
						<img src="<?php echo get_template_directory_uri();?>/content/images/logo.png" width="200px" alt="Logo" />
					<?php else :?>
						<img src="<?php echo get_template_directory_uri();?>/content/images/logo.svg" width="200px" alt="Logo" />
					<?php endif;?>
			
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
						<li><a href="<?php echo get_site_url();?>/baggerbalans">Baggerbalans</a></li>
					</ul>
				</li>
					<li><a href="<?php echo get_site_url();?>/projecten">Projecten</a></li>
					<li><a href="<?php echo get_site_url();?>/dit-zijn-wij">Dit zijn wij</a>
					<ul>
						<li><a href="<?php echo get_site_url();?>/dit-zijn-wij">Dit is Grondbalans</a></li>
						<li><a href="<?php echo get_site_url();?>/circulair">Samen circulair</a></li>
					</ul>
					</li>
					<li><a href="<?php echo get_site_url();?>/vacatures">Werken bij</a></li>
					<li><a href="<?php echo get_site_url();?>/vraag-en-aanbod">Vraag en aanbod</a></li>
					<li><a href="<?php echo get_site_url();?>/contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</header><!-- #masthead -->
