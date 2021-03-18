<?php
//Template name: Contact aanpasbaar

get_header();?>

<?php
    $args = array(
        'background' => "https://grondbalans.nl/wp-content/uploads/2020/04/IMG_3091-scaled.jpg",
        'heading' => "Contact",
        'content' => "Kennismaken?",
        'button' => "Neem contact met ons op",
        'link' => "#contact",
    );
    get_template_part( 'template-parts/banner', 'general', $args );
?>
	<?php while ( have_posts() ) : the_post(); ?>

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

<?php

    $contact = get_field('contact');
    $landelijk = $contact['landelijk'];
    $zuid = $contact['regiozuid'];
    $zuidwest = $contact['regiozuidwest'];
    $west = $contact['regiowest'];
    $noordwest = $contact['regionoordwest'];
    $middenoost = $contact['regiomiddenoost'];
    $noordoost = $contact['regionoordoost'];
    $noord = $contact['regionoord'];
    $bedrijfsvoering = $contact['bedrijfsvoering'];

    var_dump($contact);
;?>

<div class="contact__cards">
    <div class="contact__cards--container">
        <div class="contact__cards--row">
            <div class="contact__cards--item">
                <h3>Landelijk</h3>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8wKPrU38/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/09-Dirkjan.jpg", 
                        'naam' =>  $landelijk['1']['naam'], 
                        'titel' => $landelijk['1']['functie'], 
                        'tel' => $landelijk['1']['telefoon'], 
                        'email' => $landelijk['1']['email'])
                    );?>
                </div>

                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-LdWh_uA7/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/02-Edwin.jpg", 
                        'naam' =>  $landelijk['2']['naam'], 
                        'titel' => $landelijk['2']['functie'], 
                        'tel' => $landelijk['2']['telefoon'], 
                        'email' => $landelijk['2']['email'])
                    );?>
                </div>

                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-PcVLP1ZA/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/11/Koen-scaled-e1604488596733.jpg", 
                        'naam' =>  $landelijk['3']['naam'], 
                        'titel' => $landelijk['3']['functie'], 
                        'tel' => $landelijk['3']['telefoon'], 
                        'email' => $landelijk['3']['email'])
                    );?>
                </div>
            </div>

            <div class="contact__cards--item" id="zuid">
                <h3>Regio zuid</h3>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-BsWcSC5U/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/01-Wijnand.jpg", 
                        'naam' =>  $zuid['1']['naam'], 
                        'titel' => $zuid['1']['functie'], 
                        'tel' => $zuid['1']['telefoon'], 
                        'email' => $zuid['1']['email'])
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-sMKro3aj/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/06/Foto-Roel-website-scaled-e1594208518178.jpg", 
                        'naam' =>  $zuid['2']['naam'], 
                        'titel' => $zuid['2']['functie'], 
                        'tel' => $zuid['2']['telefoon'], 
                        'email' => $zuid['2']['email'])
                    );?>
                </div>
                <div class="contact__cards--info contact__cards--grondbank">
                    <?php get_template_part('template-parts/contact', 'grondbank', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-3jDNiD8Z/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/04/Afbeelding4-1.png", 
                        'persoon' => $zuid['3']['naam'],
                        'naam' => "Grondbanken", 
                        'titel' => $zuid['3']['regio'],
                        'tel' => $zuid['3']['telefoon'],
                        'email' => $zuid['3']['email'])
                    );?>
                </div>
            </div>

            <div class="contact__cards--item" id="zuidwest">
                <h3>Regio Zuidwest</h3>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-bidOpenV/w:68/h:68/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/07-Roald.jpg", 
                        'naam' =>  $zuidwest['1']['naam'], 
                        'titel' => $zuidwest['1']['functie'], 
                        'tel' => $zuidwest['1']['telefoon'], 
                        'email' => $zuidwest['1']['email'])
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0--Sbk6W3m/w:68/h:68/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/10/Ronald_pasfoto-scaled-e1602165227252.jpg", 
                        'naam' =>  $zuidwest['2']['naam'], 
                        'titel' => $zuidwest['2']['functie'], 
                        'tel' => $zuidwest['2']['telefoon'], 
                        'email' => $zuidwest['2']['email'])
                    );?>
                </div>
                <div class="contact__cards--info contact__cards--grondbank">
                    <?php get_template_part('template-parts/contact', 'grondbank', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-3jDNiD8Z/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/04/Afbeelding4-1.png", 
                        'persoon' => $zuidwest['3']['naam'],
                        'naam' => "Grondbanken", 
                        'titel' => $zuidwest['3']['regio'],
                        'tel' => $zuidwest['3']['telefoon'],
                        'email' => $zuidwest['3']['email'])
                    );?>
                </div>
            </div>
        </div>

        <div class="contact__cards--row">
            <div class="contact__cards--item" id="west">
                <h3>Regio West</h3>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-UiLvoUIQ/w:68/h:68/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/14-Erik.jpg", 
                        'naam' =>  $west['1']['naam'], 
                        'titel' => $west['1']['functie'], 
                        'tel' => $west['1']['telefoon'], 
                        'email' => $west['1']['email'])
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-DDS9LkSD/w:68/h:68/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/Bart.jpg", 
                        'naam' =>  $west['2']['naam'], 
                        'titel' => $west['2']['functie'], 
                        'tel' => $west['2']['telefoon'], 
                        'email' => $west['2']['email'])
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-T7T2EtBb/w:68/h:68/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/Wouter.jpg", 
                        'naam' =>  $west['3']['naam'], 
                        'titel' => $west['3']['functie'], 
                        'tel' => $west['3']['telefoon'], 
                        'email' => $west['3']['email'])
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-kngqsq4j/w:68/h:68/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/11-Ruud.jpg", 
                        'naam' =>  $west['4']['naam'], 
                        'titel' => $west['4']['functie'], 
                        'tel' => $west['4']['telefoon'], 
                        'email' => $west['4']['email'])
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-4-p5d2k2/w:68/h:68/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/21-Petra.jpg", 
                        'naam' =>  $west['5']['naam'], 
                        'titel' => $west['5']['functie'], 
                        'tel' => $west['5']['telefoon'], 
                        'email' => $west['5']['email'])
                    );?>
                </div>
                <div class="contact__cards--info contact__cards--grondbank">
                    <?php get_template_part('template-parts/contact', 'grondbank', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-3jDNiD8Z/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/04/Afbeelding4-1.png", 
                        'persoon' => $west['6']['naam'],
                        'naam' => "Grondbanken", 
                        'titel' => $west['6']['regio'],
                        'tel' => $west['6']['telefoon'],
                        'email' => $west['6']['email'])
                    );?>
                </div>
            </div>
            <div class="contact__cards--item" id="noordwest">
                <h3>Regio Noordwest</h3>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-_AsFMQwY/w:68/h:68/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/12-Martien.jpg", 
                        'naam' =>  $noordwest['1']['naam'], 
                        'titel' => $noordwest['1']['functie'], 
                        'tel' => $noordwest['1']['telefoon'], 
                        'email' => $noordwest['1']['email'])
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-aLlKdwb9/w:68/h:68/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/13-Bob.jpg", 
                        'naam' =>  $noordwest['2']['naam'], 
                        'titel' => $noordwest['2']['functie'], 
                        'tel' => $noordwest['2']['telefoon'], 
                        'email' => $noordwest['2']['email'])
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-51Ri8sD9/w:68/h:68/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/Noortje.jpg", 
                        'naam' =>  $noordwest['3']['naam'], 
                        'titel' => $noordwest['3']['functie'], 
                        'tel' => $noordwest['3']['telefoon'], 
                        'email' => $noordwest['3']['email'])
                    );?>
                </div>
                <div class="contact__cards--info contact__cards--grondbank">
                    <?php get_template_part('template-parts/contact', 'grondbank', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-3jDNiD8Z/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/04/Afbeelding4-1.png", 
                        'persoon' => $noordwest['4']['naam'],
                        'naam' => "Grondbanken", 
                        'titel' => $noordwest['4']['regio'],
                        'tel' => $noordwest['4']['telefoon'],
                        'email' => $noordwest['4']['email'])
                    );?>
                </div>
            </div>
            <div class="contact__cards--item" id="middenoost">
                <h3>Regio Middenoost</h3>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-fuYRA1Ze/w:68/h:68/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/04-Joris.jpg", 
                        'naam' =>  $middenoost['1']['naam'], 
                        'titel' => $middenoost['1']['functie'], 
                        'tel' => $middenoost['1']['telefoon'], 
                        'email' => $middenoost['1']['email'])
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-A8dFTkp9/w:68/h:68/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/Coen-Rebel_rgb.jpg", 
                        'naam' =>  $middenoost['2']['naam'], 
                        'titel' => $middenoost['2']['functie'], 
                        'tel' => $middenoost['2']['telefoon'], 
                        'email' => $middenoost['2']['email'])
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-7xFK6uun/w:68/h:68/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/22-Hanneke.jpg", 
                        'naam' =>  $middenoost['3']['naam'], 
                        'titel' => $middenoost['3']['functie'], 
                        'tel' => $middenoost['3']['telefoon'], 
                        'email' => $middenoost['3']['email'])
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-M5n2NQ_c/w:68/h:68/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/11/Lars-scaled-e1604493878322.jpg", 
                        'naam' =>  $middenoost['4']['naam'], 
                        'titel' => $middenoost['4']['functie'], 
                        'tel' => $middenoost['4']['telefoon'], 
                        'email' => $middenoost['4']['email'])
                    );?>
                </div>
                <div class="contact__cards--info contact__cards--grondbank">
                    <?php get_template_part('template-parts/contact', 'grondbank', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-3jDNiD8Z/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/04/Afbeelding4-1.png", 
                        'persoon' => $middenoost['5']['naam'],
                        'naam' => "Grondbanken", 
                        'titel' => $middenoost['5']['regio'],
                        'tel' => $middenoost['5']['telefoon'],
                        'email' => $middenoost['5']['email'])
                    );?>
                </div>
            </div>
        </div>
        <div class="contact__cards--row">
            <div class="contact__cards--item" id="noordoost">
                <h3>Regio Noordoost</h3>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-mO1a3Z7k/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/17-Dirk.jpg", 
                        'naam' =>  $noordoost['1']['naam'], 
                        'titel' => $noordoost['1']['functie'], 
                        'tel' => $noordoost['1']['telefoon'], 
                        'email' => $noordoost['1']['email'])
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0--K3rXWVy/w:68/h:68/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/18-Rick.jpg", 
                        'naam' =>  $noordoost['2']['naam'], 
                        'titel' => $noordoost['2']['functie'], 
                        'tel' => $noordoost['2']['telefoon'], 
                        'email' => $noordoost['2']['email'])
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-nGnMFKDe/w:68/h:68/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/20-Janneke.jpg", 
                        'naam' =>  $noordoost['3']['naam'], 
                        'titel' => $noordoost['3']['functie'], 
                        'tel' => $noordoost['3']['telefoon'], 
                        'email' => $noordoost['3']['email'])
                    );?>
                </div>
                <div class="contact__cards--info contact__cards--grondbank">
                    <?php get_template_part('template-parts/contact', 'grondbank', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-3jDNiD8Z/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/04/Afbeelding4-1.png", 
                        'persoon' => $noordoost['4']['naam'],
                        'naam' => "Grondbanken", 
                        'titel' => $noordoost['4']['regio'],
                        'tel' => $noordoost['4']['telefoon'],
                        'email' => $noordoost['4']['email'])
                    );?>
                </div>
            </div>
            <div class="contact__cards--item" id="noord">
                <h3>Regio Noord</h3>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-txyubfHs/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/19-Mimmo.jpg", 
                        'naam' =>  $noord['1']['naam'], 
                        'titel' => $noord['1']['functie'], 
                        'tel' => $noord['1']['telefoon'], 
                        'email' => $noord['1']['email'])
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-x6DFpeRc/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/03/Tamara_Bol-square.jpg", 
                        'naam' =>  $noord['2']['naam'], 
                        'titel' => $noord['2']['functie'], 
                        'tel' => $noord['2']['telefoon'], 
                        'email' => $noord['2']['email'])
                    );?>
                </div>
                <div class="contact__cards--info contact__cards--grondbank">
                    <?php get_template_part('template-parts/contact', 'grondbank', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-3jDNiD8Z/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/04/Afbeelding4-1.png", 
                        'persoon' => $noord['3']['naam'],
                        'naam' => "Grondbanken", 
                        'titel' => $noord['3']['regio'],
                        'tel' => $noord['3']['telefoon'],
                        'email' => $noord['3']['email'])
                    );?>
                </div>
            </div>
            <div class="contact__cards--item">
                <h3>Bedrijfsvoering</h3>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-jKFk0esA/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/26-Linda.jpg", 
                        'naam' =>  $bedrijfsvoering['1']['naam'], 
                        'titel' => $bedrijfsvoering['1']['functie'], 
                        'tel' => $bedrijfsvoering['1']['telefoon'], 
                        'email' => $bedrijfsvoering['1']['email'])
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-nPmVlRNf/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/Wendy_Grondbalans.jpg", 
                        'naam' =>  $bedrijfsvoering['2']['naam'], 
                        'titel' => $bedrijfsvoering['2']['functie'], 
                        'tel' => $bedrijfsvoering['2']['telefoon'], 
                        'email' => $bedrijfsvoering['2']['email'])
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-olp3xNMI/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/24-Evelyn.jpg", 
                        'naam' =>  $bedrijfsvoering['3']['naam'], 
                        'titel' => $bedrijfsvoering['3']['functie'], 
                        'tel' => $bedrijfsvoering['3']['telefoon'], 
                        'email' => $bedrijfsvoering['3']['email'])
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-CuuUh1mc/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/Richard-warmenhoven.jpg", 
                        'naam' =>  $bedrijfsvoering['4']['naam'], 
                        'titel' => $bedrijfsvoering['4']['functie'], 
                        'tel' => $bedrijfsvoering['4']['telefoon'], 
                        'email' => $bedrijfsvoering['4']['email'])
                    );?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile; // end of the loop. ?>
<?php get_template_part('template-parts/form', 'contact');?>

<?php get_footer();?>