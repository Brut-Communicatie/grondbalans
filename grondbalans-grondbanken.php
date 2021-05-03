<?php
//Template name: Grondbanken

get_header();?>
<?php
    $siteUrl = get_site_url();
    $args = array(
        'background' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-JhL38Ah9/w:auto/h:auto/q:75/https://grondbalans.nl/wp-content/uploads/2020/01/grondbalans-grondbanken-e1586246216358.jpg",
        'heading' => "GRONDBANKEN",
        'content' => "SNELLE OPLOSSING VOOR KLEINE PARTIJEN GROND",
        'button' => "Neem contact met ons op",
        'link' => "#contact",
    );
    get_template_part( 'template-parts/banner', 'general', $args );
?>

<div class="content">
    <div class="content__container">
        <div class="contact__intro">
            <div class="contact__intro--left">
                <h2>
                    GRONDBANKEN
                </h2>

                <p>
                Samen met onze grondbankpartners beheren wij 15 grondbanken, door heel Nederland. Aangeleverde grond wordt opgeslagen en gekeurd conform het Besluit bodemkwaliteit en de BRL 9335.
                </p>

                <h3>Snelle oplossing voor kleine partijen grond</h3>
                <ul>
                    <li>Tijdelijke opslag</li>
                    <li>Inname zonder partijkeuring</li>
                    <li>Grond met spoed</li>
                    <li>Grond met puin</li>
                    <li>Grond onder certificaat</li>
                </ul>

                <h3>Direct de juiste gesprekspartner</h3>
                <p>Klik op een grondbank naar keuze en ontdek bij wie jij terecht kunt met jouw vraag.</p>
            </div>
            <div class="contact__intro--right">
                <div class="contact__map">
                    <?php get_template_part('template-parts/map', 'grondbanken');?>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="contact__cards">
    <div class="grondbank__container">
    <?php while ( have_posts() ) : the_post(); ?>
       <?php the_content();?>
    <?php endwhile; // end of the loop. ?>
    </div>
</div>

<?php get_template_part('template-parts/form', 'contact');?>

<?php get_footer();?>