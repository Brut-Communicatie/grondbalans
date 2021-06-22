<?php
//Template name: Contact

get_header();?>

<?php
    $args = array(
        'background' => "https://grondbalans.nl/wp-content/uploads/2020/04/IMG_3091-scaled.jpg",
        'heading' => "Contact",
        'content' => "Kennismaken?",
        'button' => "Neem contact met ons op",
        'link' => "#contact",
    );
    get_template_part( 'template-parts/banner', 'general', $args );
?>
	<?php while ( have_posts() ) : the_post(); ?>

<div class="content">
    <div class="content__container">
        <div class="contact__intro">
            <div class="contact__intro--left">
                <h2>
                    WIJ DENKEN GRAAG MET JE MEE
                </h2>
                <p>
                Altijd een onafhankelijk advies en passende oplossing voor iedereen die met grond werkt. Vul ons contactformulier in of neem direct telefonisch contact op. Wij denken graag met je mee.
                </p>
                <h3>Direct de juiste gesprekspartner</h3>
                <p>Klik op de regio en ontdek bij wie jij terecht kunt met jouw vraag.</p>
            </div>
            <div class="contact__intro--right">
                <div class="contact__map">
                    <?php get_template_part('template-parts/map', 'contact');?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo the_content();?>
<?php endwhile; // end of the loop. ?>
<?php get_template_part('template-parts/form', 'contact');?>

<?php get_footer();?>