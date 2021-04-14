<?php
//Template name: Dit zijn wij
get_header();?>
<?php while ( have_posts() ) : the_post(); ?>

<?php the_content();?>

<div class="expertise">
    <div class="expertise__container">

        <?php get_template_part('template-parts/block', 'rechts', $args = array(
            'id' => "grondstromen",
            'heading' => "BODEM VOOR TOEKOMSTIGE GENERATIES",
            'subheading' => "Onze missie",

            'content' => '<p>Een goede bodem voor toekomstige generaties, daar komen wij ons bed voor uit! Dit doen wij door vakkundig, circulair, duurzaam en vanuit actuele wet- & regelgeving vrijgekomen grond en baggerspecie een nuttige herbestemming te geven.</p>

            <div class="content__summary">
            <p><strong>Onze kernwaarden</strong></p>
            <ul>
            <li>Mensgericht; <i>Samen mooie projecten maken!</i></li>
            <li>Betrouwbaar; <i>Afspraak is afspraak</i></li>
            <li>Deskundig; <i>Voor ieder project een passend advies</i></li>
            </ul></div>',

            'button' => "Meer weten over onze aanpak",
            'right' => array('url' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-9KB6obo8/w:2000/h:1284/q:75/https://grondbalans.nl/wp-content/uploads/2020/04/Dit-zijn-wij-onze-missie-2.png",
        'class' => "portfolio--noshadow"),
        ));?>

        <?php get_template_part('template-parts/block', 'rechts', $args = array(
            'id' => "grondstromen",
            'heading' => "RON PEERDEMAN (1971 - 2019)",
            'subheading' => "In herinnering, onze grondlegger",

            'content' => '<p>De persoonlijke missie van Ron was de wereld een stukje mooier maken, voor de mens en haar omgeving. Dit heeft hij gedaan met creatief ondernemerschap en door zichzelf en de mensen in zijn netwerk met elkaar te verbinden. Zijn oprechte interesse in de medemens, zijn behulpzaamheid en zijn no-nonsens karakter, maakte hem tot een graag gezien mens. Bij alle collega’s van Grondbalans, bij al zijn relaties en zijn vriendenkring.</p>
            <div class="content__opener">
            <a href="#" id="ronButton">Lees meer over Ron <i></i></a>
            <div class="content__opener--about">
            <p>
            Van jongs af aan is Ron al een verbinder geweest; tijdens zijn jaren aan de LTS in de leerlingenraad, en gedurende zijn studie aan de HTS toen hij schoolfeesten organiseerde. Na de HTS ging Ron nog een jaar studeren aan de Universiteit van Twente om vervolgens ‘echt’ te gaan werken bij Dura Vermeer. Een prachtig bedrijf dat veel inzichten heeft gegeven.Ron zag dat grond nooit op de goede plek lag en altijd verplaatst moest worden. Volgens hem kon dit anders. De ondernemersgeest kwam uit de fles en Ron startte zijn eigen bedrijf; Grondbalans! Een grote stap en niet zonder risico’s. Hij was immers een nieuweling in de aannemerswereld die zijn plek moest veroveren.Grondbalans groeide uit naar meerdere vestigingen in het land en het aantal medewerkers groeide mee. Ook in mindere periodes wist Ron met Grondbalans mooie resultaten te behalen, met name door de betrokken en vakkundige collega’s. Met lef bleef hij creatief ondernemen, was hij het gezicht van het bedrijf en bouwde hij veel goede relaties op in het hele land. De verbinder was zichtbaar in volle glorie.Grondbalans ontwikkelt zich verder, helaas zonder Ron, maar met alle idealen en de spirit die hij het bedrijf heeft meegegeven. Wij zijn Ron hier dankbaar voor. En ook voor het meegeven van meer dan genoeg bagage. Zodat we met elkaar en voor anderen Grondbalans kunnen voortzetten! Precies zoals Ron het in zijn hoofd had: zorgdragen voor de bodem voor toekomstige generaties.
            </p>
            </div>
            </div>',
            'button' => "",
            'right' => array('url' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-e_7ilyQX/w:575/h:349/q:75/https://grondbalans.nl/wp-content/uploads/2020/04/Ron-grondlegger-grondbalans-1997-4.jpg"),
        ));?>
        
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