<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Grondbalans
 */

get_header();
?>


<?php  if( is_post_type_archive('nieuws') ):?>
	<?php get_template_part('archive/post', 'nieuws');?>
<?php else :?>
	<h1>Niks gevonden</h1>
<?php endif;?>

<?php
get_footer();
