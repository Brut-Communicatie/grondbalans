<?php
//Template name: Dit zijn wij
get_header();?>

<?php
    $args = array(
        'background' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-nww0_pY5/w:auto/h:auto/q:75/https://grondbalans.nl/wp-content/uploads/2020/01/header-grondbalans-vacatures-scaled.jpg",
        'heading' => "Dit zijn wij",
        'content' => "Wij staan met beide benen op de grond",
        'button' => "Neem contact met ons op",
        'link' => "/contact",
    );
    get_template_part( 'template-parts/banner', 'general', $args );
?>
<div class="content">
    <div class="content__container">
        <div class="content__intro">
            <h1>Wij zijn <br/> grondbalans</h1>
            <h2>Samen mooie projecten maken!</h2>
            <p>Wij zijn echte ondernemers: aanpakkers die altijd voor het beste resultaat gaan. We houden ons aan ons woord en beloven geen dingen die we niet kunnen waarmaken. Afspraak is afspraak. Dé basis voor een goede samenwerking. Want, ‘samen mooie projecten maken’, daar staan wij voor! Ons landelijke netwerk, onze uitgebreide kennis en onze onafhankelijke positie maken Grondbalans een unieke organisatie in deze sector. Daar zijn we best trots op, dat snap je wel.</p>
            <div class="content__line"></div>
        </div>
    </div>
</div>

<?php get_footer();?>