<?php
//Template name: Contact

get_header();?>

<?php 
    $background =  "https://grondbalans.nl/wp-content/uploads/2020/04/IMG_3091-scaled.jpg";
    $heading = "Contact";
    $content = "Kennismaken?";
    $button = "Neem contact met ons op";
    $link = "https://www.google.com";
;?>

<div class="banner" style="background-image: url('<?php echo $background;?>');">
    <div class="banner__container">
        <div class="banner__block">
            <div class="banner__block--content">
                <h1><?php echo $heading;?></h1>
                <p><?php echo $content;?></p>
                <a href="<?php echo $link;?>"><?php echo $button;?></a>
            </div>
        </div>
    </div>
</div>


<div class="content">
    <div class="content__container">
        <div class="contact__intro">
            <div class="contact__intro--left">
                <h2>
                    WIJ DENKEN GRAAG MET JE MEE
                </h2>
                <p>
                Altijd een onafhankelijk advies en passende oplossing voor iedereen die met grond werkt. Vul ons contactformulier in of neem direct telefonisch contact op. Wij denken graag met je mee.
                </p>
                <h3>Direct de juiste gesprekspartner</h3>
                <p>Klik op de regio en ontdek bij wie jij terecht kunt met jouw vraag.</p>
            </div>
            <div class="contact__intro--right">
                <div class="contact__map">
                    <?php get_template_part('template-parts/map', 'contact');?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>