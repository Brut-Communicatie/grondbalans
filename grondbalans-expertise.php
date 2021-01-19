<?php
// Template name: Expertises
get_header();?>

<?php
    $args = array(
        'background' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-4eGHX1Ws/w:auto/h:auto/q:75/https://grondbalans.nl/wp-content/uploads/2020/04/20191029_082019-scaled.jpg",
        'heading' => "ONZE EXPERTISES",
        'content' => "WIJ DOORGRONDEN ELKE VRAAG",
        'button' => "Neem contact met ons op",
        'link' => "/contact#contact",
    );
    get_template_part( 'template-parts/banner', 'general', $args );
?>
<div class="content">
    <div class="content__container">
        <div class="content__intro">
            <h1>Zorgvuldige <br/> bodemtoepassing</h1>
            <h2>Én de meest economische en duurzame oplossing</h2>
            <p>Maak jouw grondproject tot een succes!<br/>
Wij beschikken over alle expertises die hiervoor nodig zijn:</p>
            <div class="content__line"></div>
        </div>
    </div>
</div>

<div class="expertise">
    <div class="expertise__container">

    <?php get_template_part('template-parts/expertise', 'links', $args = array(
        'id' => "grondstromen",
        'heading' => "SPECIALIST IN GRONDSTROMEN",
        'content' => "Onze kennis en ervaring zetten wij om in praktische en duurzame oplossingen voor alle soorten en kwaliteiten grond en grondtoepassingen. We weten precies wat er speelt in de wereld van grond- en bodembeheer en zijn continu op de hoogte van de actuele wet- en regelgeving. We blijven projecten optimaliseren en helpen jou aan de beste, onafhankelijke oplossing.",
        'button' => "Neem contact met ons op",
    ));?>

    <?php get_template_part('template-parts/expertise', 'links', $args = array(
        'id' => "projectrealisatie",
        'heading' => "PROJECTREALISATIE",
        'content' => "Van onderzoek en advies naar voorbereiding en uitvoering: wij regelen het. We coördineren het transport met onze logistieke partners en verzorgen alle nodige documenten, registraties en rapportages. Je hebt dus één aanspreekpunt en bespaart zowel tijd als geld. Hoe eerder we betrokken worden, hoe meer we het verschil kunnen maken.",
        'button' => "Neem contact met ons op",
    ));?>

    <?php get_template_part('template-parts/expertise', 'links', $args = array(
        'id' => "vraagenaanbod",
        'heading' => "VRAAG EN AANBOD",
        'content' => "Sinds onze oprichting in 1997 bemiddelen wij tussen vraag en aanbod van grond en baggerspecie. Onze kennisintensieve netwerkorganisatie met vele partners maakt ons uniek. Hierdoor komen we met slimme oplossingen en kunnen we grond tegen een gunstig tarief leveren en afvoeren. Altijd op het gewenste moment en volgens afspraak.",
        'button' => "Neem contact met ons op",
    ));?>

    <?php get_template_part('template-parts/expertise', 'links', $args = array(
        'id' => "grondbanken",
        'heading' => "GRONDBANKEN",
        'content' => "Vrijgekomen partijen grond proberen wij direct te hergebruiken. Helaas kan dit niet altijd. Doordat we beschikken over een landelijk netwerk van grondbanken kunnen we altijd alle grond innemen (ook met spoed). Indien nodig wordt de grond hier bewerkt en vervolgens hoogwaardig hergebruikt.",
        'button' => "Neem contact met ons op",
    ));?>


    </div>
</div>
<?php get_footer();?>