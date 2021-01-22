<?php
//Template name: Baggerbalans

get_header();?>
<?php
    $siteUrl = get_site_url();
    $args = array(
        'background' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-GAfKxHUN/w:auto/h:auto/q:75/https://grondbalans.nl/wp-content/uploads/2020/06/werken-bij-grondbalans-1920-02.jpg",
        'heading' => "Baggerbalans",
        'content' => "Specialist in baggerspecie",
        'button' => "Neem contact met ons op",
        'link' => "#contact",
    );
    get_template_part( 'template-parts/banner', 'blue', $args );
?>
<div class="content content-blue">
    <div class="content__container">
        <div class="content__intro">
            <h1>Baggerbalans</h1>
            <h2>Altijd een oplossing voor vrijgekomen baggerspecie</h2>
            <p>Baggeren is een unieke tak van sport en vereist specialistische kennis en een eigen aanpak. Daarom hebben wij alle expertise als het gaat om beheer, opslag, toepassen en bewerken van baggerspecie ondergebracht bij ons bedrijfsonderdeel Baggerbalans.
            <br/>
Een greep uit onze expertises en baggerprojecten:</p>
            <div class="content__line"></div>
        </div>
    </div>
</div>
<div class="content">
    <div class="content__container">
        <?php
        get_template_part('template-parts/portfolio', 'blue', $args = array(
            'heading' => "BEMIDDELING",
            'subheading' => "Altijd een oplossing",
            'content' =>  "Baggerbalans beschikt over verregaande lokale marktkennis. Hierdoor kunnen wij altijd voorzien in een juiste oplossing voor vrijgekomen baggerspecie. Wij bemiddelen, beheren, coördineren en certificeren.",
            'tags' => array(
                '0' => "Baggerspecie",
                '1' => "Vraag & Aanbod",
                '2' => "Lokaal toepassen",
            ),
            'button' => "Informatie aanvragen",
            'right' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-D6LAkl6v/w:575/h:350/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/12/Bemiddeling-3.png",
        ));?>

        <?php
        get_template_part('template-parts/portfolio', 'blue', $args = array(
            'heading' => "BAGGERBANK",
            'subheading' => "Opslag voor baggerspecie",
            'content' =>  "Baggerbalans beheert een toereikend baggerdepot: Baggerbank Dordrecht. Samen met onze grond- en baggerbankpartner Van Vliet Sliedrecht B.V. zorgen wij voor inname en opslag van baggerspecie. En dit tegen een zeer gunstig tarief. Ook op locatie beheren wij baggerdepots.",
            'tags' => array(
                '0' => "Baggerdepot",
                '1' => "Tijdelijke opslag",
                '2' => "Gunstige tariefstelling",
            ),
            'button' => "Informatie aanvragen",
            'right' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8gw5ksQz/w:575/h:350/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/12/Baggerbank.png",
        ));?>

        <?php
        get_template_part('template-parts/portfolio', 'blue', $args = array(
            'heading' => "LANDVERBETERING",
            'subheading' => "Bodem ophogen met baggerspecie als grondstof",
            'content' =>  "Sinds het bestaan van Grondbalans en Baggerbalans hebben wij al vele landverbeteringsprojecten op onze naam staan, waaronder mooie landverbeteringsprojecten met baggerspecie als grondstof.",
            'tags' => array(
                '0' => "Baggerprojecten",
                '1' => "Projectcoördinatie",
                '2' => "Landverbetering",
            ),
            'button' => "Informatie aanvragen",
            'right' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-gngk4WI6/w:575/h:350/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/12/Grondverbetering-2.jpg",
        ));?>
    </div>
</div>
<?php get_footer();?>


