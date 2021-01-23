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

<div class="content__bagger">
    <div class="content__bagger--container">
        <div class="content__bagger--left">
            <h3>Altijd een oplossing</h3>
            <p>
                Onze adviseurs hebben verregaande kennis van de (lokale) markt en de wet- en regelgeving. We bemiddelen bij aanbod van partijen baggerspecie, beheren baggerdepots, coördineren baggerstromen en certificeren partijen baggerspecie.
            <br/><br/>
                We combineren veilige oplossingen met goede service en een eerlijke prijs. Kortom: Baggerbalans is dé specialist in baggerspecie.
            </p>

            <div class="content__bagger--quote">
                <div class="content__bagger--quote-left">
                    <img src="https://mlmotgafwbhj.i.optimole.com/u0PFPh0-LdWh_uA7/w:1365/h:1500/q:75/https://grondbalans.nl/wp-content/uploads/2020/01/02-Edwin.jpg" width="130px" alt="Foto van Edwin" />
                </div>
                <div class="content__bagger--quote-right">
                    <p>Mijn uitdaging binnen Grondbalans? Continuïteit van grote projecten met omvangrijke grondstromen. Onze kracht? Ons landelijk netwerk, onze verregaande kennis én onze klantgerichtheid. Opdrachtgevers waarderen onze ‘afspraak-is-afspraak’- mentaliteit.</p>
                    <p><strong>Edwin van Venetien,</strong> Manager Landelijke projecten</p>
                </div>
            </div>
        </div>

        <div class="content__bagger--right" id="contact">
            <?php echo do_shortcode('[contact-form-7 id="41" title="Contactformulier"]');?>
        </div>
    </div>
</div>

<?php get_footer();?>


