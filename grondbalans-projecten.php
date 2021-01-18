<?php
// Template name: Projecten
get_header();?>
<?php
    $args = array(
        'background' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-iR_U6iTU/w:auto/h:auto/q:75/https://grondbalans.nl/wp-content/uploads/2020/04/IMG_0354-004-scaled.jpg",
        'heading' => "Onze projecten",
        'content' => "Alles tot in de puntjes geregeld",
        'button' => "Neem contact met ons op",
        'link' => "/contact",
    );
    get_template_part( 'template-parts/banner', 'general', $args );
?>

<div class="content">
    <div class="content__container">
        <div class="content__intro">
            <h1>SAMEN<br />
                MOOIE PROJECTEN MAKEN!</h1>
            <h2>Jouw ketenpartner voor grondstromen</h2>
            <p>Van ontgraven tot ophogen en grondverbetering: jouw grondproject is bij ons in goede handen. Klein en
                groot. En dankzij ons lokale netwerk altijd met een gezond eindresultaat voor zowel het milieu als de
                portemonnee. We hergebruiken grond zoveel mogelijk én zo lokaal mogelijk.
                <br />
                Ontdek het zelf!</p>
            <div class="content__line"></div>
        </div>
    </div>
</div>

<div class="content">
    <div class="content__container">

        <?php get_template_part('template-parts/portfolio', 'block', $args = array(
            'heading' => "5M VEENLAAG VERVANGEN; DRAAGKRACHTIGE BODEM",
            'subheading' => "Nieuwbouwproject, Zegveld",
            'content' => "Als specialist in grondstromen werken wij aan een goede bodem voor toekomstige generaties. Een goede bodem is belangrijk voor onze voedselproductie, ons drinkwater én om veilig & duurzaam te kunnen wonen, werken en recreëren. Ontdek hoe wij circulariteit en duurzaamheid verweven in onze werkprocessen!",
            'tags' => array("zettingsarm maken", "afgraven", "veengrond"),
            'button' => "Informatie aanvragen",
        ));?>

        <?php get_template_part('template-parts/portfolio', 'block', $args = array(
            'heading' => "2.500 M3 SECUNDAIR ZAND; AANVOER PER SCHIP",
            'subheading' => "Waalhaven, Rotterdam",
            'content' => "Voor de uitbreiding van een bestaand bedrijfspand in de Waalhaven in Rotterdam, moest de bodem eerst opgehoogd en bouwrijp gemaakt worden. Grondbalans heeft hiervoor de benodigde 2.500 m3 secundair zand aangeleverd. Het zand kwam vrij bij een project in Beverwijk. Gezien de afstand naar Rotterdam, was transport via schip de beste en meest goedkope oplossing. Sowieso een mooie transportroute naar havenstad Rotterdam! Wederom een mooi voorbeeld van circulair toepassen van grondstoffen.",
            'tags' => array("bouwrijp maken", "leveren", "zand"),
            'button' => "Informatie aanvragen",
        ));?>

        <?php get_template_part('template-parts/portfolio', 'block', $args = array(
            'heading' => "60.000 M3 GRONDAFVOER IN 10 DAGEN; TOTAAL 150.000 M3",
            'subheading' => "Amstelveenlijn, Amstelveen",
            'content' => "Voor de verdiepte aanleg van een tramlijn dwars door het centrum van Amstelveen hebben wij 150.000 m3 grond ontgraven en afgevoerd, waarvan 60.000 m3 in 10 dagen. Een record! De werkdagen werden wat langer, maar het is gelukt, want afspraak is afspraak. Dankzij onze lokale netwerken is de afgevoerde grond hergebruikt voor landverbetering van landbouwpercelen in de directe omgeving. Zo zijn deze percelen weer geschikt gemaakt voor de toekomstige generaties.",
            'tags' => array("bouwput", "afvoeren", "schone grond"),
            'button' => "Informatie aanvragen",
        ));?>

    </div>
</div>
<?php get_footer();?>