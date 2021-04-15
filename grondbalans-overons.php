<?php
//Template name: Dit zijn wij
get_header();?>
<?php while ( have_posts() ) : the_post(); ?>

<?php the_content();?>

<div class="expertise">
    <div class="expertise__container">
    
        <?php get_template_part('template-parts/block', 'video', $args = array(
            'id' => "grondstromen",
            'heading' => "BEDRIJFSFILM",
            'subheading' => "Duurzame toekomst",

            'content' => '<p>Op weg naar een duurzame toekomst van Nederland! Als ketenpartner in grond en baggerspecie zorgen wij voor vaste grond onder de voeten. Wij denken mee, adviseren en coördineren. Wij gaan dus nog veel verder dan alleen aan- en afvoeren van grondstoffen. Bekijk onze bedrijfsfilm voor een totaalindruk van onze expertise. Waar kunnen wij jou mee van dienst zijn?</p>',

            'button' => "Neem contact op",
            'video' => '<iframe id="video" width="560" height="315"  src="https://www.youtube.com/embed/6wYppiFuR7w" frameborder="0" allowfullscreen></iframe>',
        ));?>

        <?php get_template_part('template-parts/block', 'video-links', $args = array(
            'id' => "grondstromen",
            'heading' => "CIRCULARITEIT",
            'subheading' => " Het restproduct van vandaag de grondstof voor morgen",

            'content' => '<p>  Als specialist in grondstromen werken wij aan een goede bodem voor toekomstige generaties. Een goede bodem is belangrijk voor onze voedselproductie, ons drinkwater én om veilig & duurzaam te kunnen wonen, werken en recreëren. Ontdek hoe wij circulariteit en duurzaamheid verweven in onze werkprocessen!</p>',

            'button' => "Lees meer over circulariteit",
            'video' => '<iframe id="video" width="560" height="315"  src="https://www.youtube.com/embed/1_AJ9QLsm10" frameborder="0" allowfullscreen></iframe>',
        ));?>

    </div>
</div>
<?php endwhile; // end of the loop. ?>
<?php get_footer();?>