<?php
//Template name: Dit zijn wij
get_header();?>
<?php while ( have_posts() ) : the_post(); ?>

<?php the_content();?>

<div class="expertise">
    <div class="expertise__container">
        
        <?php get_template_part('template-parts/block', 'links', $args = array(
            'id' => "grondstromen",
            'heading' => "ONS TEAM",
            'subheading' => "Met beide benen op de grond",

            'content' => '<p>Onze medewerkers zijn ons grootste goed. Grondbalans bestaat uit een hecht team met ruim 25 loyale collega’s, verspreid over 3 regiokantoren. Onze kracht? Aandacht voor elkaar, nuchterheid en de drive om binnen ons vakgebied de beste te zijn en te blijven. Onze gezamenlijke energie maakt dat wij altijd het maximale leveren. Natuurlijk samen met onze partners en opdrachtgevers. Samen mooie projecten maken!</p>',

            'button' => "Neem contact op",
            'right' => array('url' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-KuXIrej1/w:575/h:350/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/03/grondbalans-teamfoto.jpg"),
        ));?>

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