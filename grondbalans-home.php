<?php
//Template name: Index
get_header();?>

<div class="intro">
    <video autoplay muted loop>
        <source src="<?php echo get_template_directory_uri();?>/content/video/header.webm" type="video/webm">
    </video>
    <div class="intro__container">
        <div class="intro__block">
            <h4>SAMEN MOOIE PROJECTEN MAKEN!</h4>
            <h3>WIJ ZETTEN<br/>
                ONZE SCHOUDERS<br/>
                ERONDER
            </h3>
            <a href="#">Bekijk onze producten</a>
        </div>
    </div>
</div>
<div class="content">
    <div class="content__container">
        <div class="content__intro">
            <h1>Specialist in <br />grond en bagger</h1>
            <h2>Al meer dan 20 jaar!</h2>
            <p>Grondbalans is hét aanspreekpunt voor al je grondstromen! Heb je grond nodig of wil je er juist vanaf?
                Wij hebben een sterk lokaal netwerk in heel Nederland om dit te regelen. We adviseren, verbinden,
                begeleiden, administreren en realiseren. Met ruim 20 jaar ervaring gaat zorgvuldige bodemtoepassing bij
                ons altijd samen met de meest economische en duurzame oplossing.</p>
            <div class="content__line"></div>
        </div>

        <section class="content__section">
            <?php get_template_part('template-parts/home' , 'expertises');?>
        </section>

        <section class="content__section">
            <h3>TROTS OP ONZE MOOIE PROJECTEN</h3>
            <a href="#">Bekijk onze projecten</a>
        </section>

        <section class="content__section">
            <h3>GRONDSTROMEN
                VOOR DE GEHELE KETEN</h3>
            <a href="#">Neem contact met ons op</a>
            <div class="content__line"></div>
        </section>
    </div>
</div>




<?php get_footer();?>