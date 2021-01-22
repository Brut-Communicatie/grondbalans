<?php
//Template name: Grondbanken

get_header();?>
<?php
    $siteUrl = get_site_url();
    $args = array(
        'background' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-JhL38Ah9/w:auto/h:auto/q:75/https://grondbalans.nl/wp-content/uploads/2020/01/grondbalans-grondbanken-e1586246216358.jpg",
        'heading' => "Grondbanken",
        'content' => "SNELLE OPLOSSING VOOR KLEINE PARTIJEN GROND",
        'button' => "Neem contact met ons op",
        'link' => $siteUrl . "/contact#contact",
    );
    get_template_part( 'template-parts/banner', 'general', $args );
?>

<div class="content">
    <div class="content__container">
        <div class="contact__intro">
            <div class="contact__intro--left">
                <h2>
                    Grondbanken
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
    <div class="contact__cards--container">
        <div class="contact__cards--row">
            <?php get_template_part('template-parts/grondbank', 'item', $args = array(
                'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-UHjQh_xW/w:350/h:135/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/04/Aalsmeer-e1586965471460.jpg",
                'title' => "Grondbank Aalsmeer",
                'plaats' => "gb-aalsmeer",
                'adres' => "Mijnsherenweg 24",
                'postcode' => "1433 AS  Kudelstaart",
                'contactpersoon' => "Wouter Brak",
                'telefoon' => "06-55 10 62 57",
                'email' => "w.brak@grondbalans.nl",
                'logo' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-To-ZOI4M/w:81/h:75/q:75/https://grondbalans.nl/wp-content/uploads/2020/04/JdB-Groep2.png",
            ));?>

            <?php get_template_part('template-parts/grondbank', 'item', $args = array(
                'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-dhNODhvd/w:350/h:135/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/04/alkmaar-e1586526127291.jpg",
                'title' => "Grondbank Alkmaar",
                'plaats' => "gb-alkmaar",
                'adres' => "Vronermeerweg 10",
                'postcode' => "1834 AX  Sint Pancras",
                'contactpersoon' => "Noortje van Egmond",
                'telefoon' => "072-576 32 40",
                'email' => "n.vanegmond@grondbalans.nl",
                'logo' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-xU1TVY1n/w:153/h:50/q:75/https://grondbalans.nl/wp-content/uploads/2020/04/Klein-Texas-goed.jpg",
            ));?>

        <?php get_template_part('template-parts/grondbank', 'item', $args = array(
                'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-lHr03ELZ/w:350/h:135/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/04/Almere-e1586965221509.jpg",
                'title' => "Grondbank Almere",
                'plaats' => "gb-almere",
                'adres' => "Hefbrugweg 103",
                'postcode' => "1332 AM  Almere",
                'contactpersoon' => "Coen Rebel",
                'telefoon' => "06-27 08 88 00",
                'email' => "c.rebel@grondbalans.nl",
                'logo' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-5EgxioXc/w:240/h:80/q:75/https://grondbalans.nl/wp-content/uploads/2020/04/van-der-heiden.png",
            ));?>
        </div>

        <div class="contact__cards--row">
            <?php get_template_part('template-parts/grondbank', 'item', $args = array(
                'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-AbfhlFM3/w:350/h:135/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/04/bunnik.jpg",
                'title' => "Grondbank Bunnik",
                'plaats' => "gb-bunnik",
                'adres' => "Defensieweg 4",
                'postcode' => "3984 LR  Bunnik",
                'contactpersoon' => "Coen Rebel",
                'telefoon' => "06-27 08 88 00",
                'email' => "c.rebel@grondbalans.nl",
                'logo' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-wW72hmrl/w:154/h:57/q:75/https://grondbalans.nl/wp-content/uploads/2020/04/Otte-Infra-goede.png",
            ));?>

            <?php get_template_part('template-parts/grondbank', 'item', $args = array(
                'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-I6Ke8RY9/w:350/h:135/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/grondbalans-expert-in-grondstromen-e1586965267489.jpg",
                'title' => "Grondbank Eindhoven",
                'plaats' => "gb-eindhoven",
                'adres' => "Nieuwe Achtse Heide (101)",
                'postcode' => "5657 AG  Eindhoven",
                'contactpersoon' => "Wijnand Vink",
                'telefoon' => "06-22 23 41 23",
                'email' => "w.vink@grondbalans.nl",
                'logo' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-P-FV9QZL/w:151/h:58/q:75/https://grondbalans.nl/wp-content/uploads/2020/04/Joop.png",
            ));?>

        <?php get_template_part('template-parts/grondbank', 'item', $args = array(
                'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-JIFGi4jK/w:350/h:135/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/04/Ermelo.jpg",
                'title' => "Grondbank Ermelo",
                'plaats' => "gb-ermelo",
                'adres' => "Rodeschuurderwegje 26-28",
                'postcode' => "3853 LS  Ermelo",
                'contactpersoon' => "Coen Rebel",
                'telefoon' => "06-27 08 88 00",
                'email' => "c.rebel@grondbalans.nl",
                'logo' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-cxsXGq8K/w:150/h:58/q:75/https://grondbalans.nl/wp-content/uploads/2020/04/Kamphorst-goede.png",
            ));?>
        </div>

        <div class="contact__cards--row">
            <?php get_template_part('template-parts/grondbank', 'item', $args = array(
                'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-rG-J4dm9/w:350/h:135/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/04/Kampen.jpg",
                'title' => "Grondbank Franeker",
                'plaats' => "gb-franeker",
                'adres' => "Edisonstraat 25",
                'postcode' => "8801 PN  Franeker",
                'contactpersoon' => "Mimmo Siligato",
                'telefoon' => "06-51 79 01 92",
                'email' => "mimmo@grondbalansnoordoost.nl",
                'logo' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-Ta5S45ip/w:114/h:22/q:75/https://grondbalans.nl/wp-content/uploads/2020/04/Haarsma-Groep-goede.png",
            ));?>

            <?php get_template_part('template-parts/grondbank', 'item', $args = array(
                'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-2oRIwf3j/w:350/h:135/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/04/Grondbank-algemeen-e1586965320917.png",
                'title' => "Grondbank Groningen",
                'plaats' => "gb-groningen",
                'adres' => "Albert Harkemaweg 76",
                'postcode' => "9831 TA  Aduard",
                'contactpersoon' => "Mimmo Siligato",
                'telefoon' => "06-51 79 01 92",
                'email' => "mimmo@grondbalansnoordoost.nl",
                'logo' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-syMD3Qfr/w:152/h:37/q:75/https://grondbalans.nl/wp-content/uploads/2020/04/Mechielsen-goede.png",
            ));?>

        <?php get_template_part('template-parts/grondbank', 'item', $args = array(
                'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-Z7wjd--q/w:350/h:135/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/04/Franeker-1.jpg",
                'title' => "Grondbank Kampen",
                'plaats' => "gb-kampen",
                'adres' => "Haatlandhaven 16",
                'postcode' => "8263 AS  Kampen",
                'contactpersoon' => "Rick Jansen",
                'telefoon' => "06-83 69 52 19",
                'email' => "rick@grondbalansnoordoost.nl",
                'logo' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-DCgTZG3R/w:153/h:61/q:75/https://grondbalans.nl/wp-content/uploads/2020/04/Recycling-Kampen-goede.png",
            ));?>
        </div>

        <div class="contact__cards--row">
            <?php get_template_part('template-parts/grondbank', 'item', $args = array(
                'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-2oRIwf3j/w:350/h:135/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/04/Grondbank-algemeen-e1586965320917.png",
                'title' => "Grondbank Leeuwarden",
                'plaats' => "gb-leeuwarden",
                'adres' => "Pascalstraat 9",
                'postcode' => "8912 AT  Leeuwarden",
                'contactpersoon' => "Mimmo Siligato",
                'telefoon' => "06-51 79 01 92",
                'email' => "mimmo@grondbalansnoordoost.nl",
                'logo' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-eZo8diSE/w:734/h:151/q:75/https://grondbalans.nl/wp-content/uploads/2020/04/Spaansen-1.png",
            ));?>

            <?php get_template_part('template-parts/grondbank', 'item', $args = array(
                'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-JhL38Ah9/w:350/h:135/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/grondbalans-grondbanken-e1586246216358.jpg",
                'title' => "Grondbank Lisse",
                'plaats' => "gb-lisse",
                'adres' => "Heereweg 1b",
                'postcode' => "2161 AB  Lisse",
                'contactpersoon' => "Wouter Brak",
                'telefoon' => "06-55 10 62 57",
                'email' => "w.brak@grondbalans.nl",
                'logo' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0--JBZ1Lb2/w:448/h:112/q:75/https://grondbalans.nl/wp-content/uploads/2020/04/Otte-Lisse-1.png",
            ));?>

        <?php get_template_part('template-parts/grondbank', 'item', $args = array(
                'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-mobyKigc/w:350/h:135/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/04/Middenmeer-e1586965433838.jpg",
                'title' => "Grondbank Middenmeer",
                'plaats' => "gb-middenmeer",
                'adres' => "Agriport 149",
                'postcode' => "1775 TA  Middenmeer",
                'contactpersoon' => "Noortje van Egmond",
                'telefoon' => "072-576 32 40",
                'email' => "n.vanegmond@grondbalans.nl",
                'logo' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-wxz82i4m/w:449/h:112/q:75/https://grondbalans.nl/wp-content/uploads/2020/04/Grondstoffenbank-Agriport.jpg",
            ));?>
        </div>
        <div class="contact__cards--row">
            <?php get_template_part('template-parts/grondbank', 'item', $args = array(
                'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-UFz68y4Y/w:350/h:135/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/04/Nieuwegein-1-e1586965576627.jpg",
                'title' => "Grondbank Nieuwegein",
                'plaats' => "gb-nieuwegein",
                'adres' => "Structuurbaan 11",
                'postcode' => "3439 MA  Nieuwegein",
                'contactpersoon' => "Coen Rebel",
                'telefoon' => "06-27 08 88 00",
                'email' => "c.rebel@grondbalans.nl",
                'logo' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-LR8Mfqn_/w:1124/h:317/q:75/https://grondbalans.nl/wp-content/uploads/2020/04/Van-Wijk.png",
            ));?>

            <?php get_template_part('template-parts/grondbank', 'item', $args = array(
                'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-scpgFnu5/w:338/h:135/q:75/https://grondbalans.nl/wp-content/uploads/2020/04/sliedrecht-2.jpg",
                'title' => "Grondbank Sliedrecht",
                'plaats' => "gb-sliedrecht",
                'adres' => "Rivierdijk 2d",
                'postcode' => "3361 AP  Sliedrecht",
                'contactpersoon' => "Roald Brink",
                'telefoon' => "06-46 64 85 45",
                'email' => "r.brink@grondbalans.nl",
                'logo' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-sTO5pStu/w:153/h:75/q:75/https://grondbalans.nl/wp-content/uploads/2020/04/Van-Vliet-goede.jpg",
            ));?>

        <?php get_template_part('template-parts/grondbank', 'item', $args = array(
                'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-Bs6nUYX_/w:350/h:135/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/04/Steenwijk-e1586966000951.jpg",
                'title' => "Grondbank Steenwijk",
                'plaats' => "gb-steenwijk",
                'adres' => "Oevers 14",
                'postcode' => "8331 VC  Steenwijk",
                'contactpersoon' => "Rick Jansen",
                'telefoon' => "06-83 69 52 19",
                'email' => "rick@grondbalansnoordoost.nl",
                'logo' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-q6RFgXXg/w:73/h:88/q:75/https://grondbalans.nl/wp-content/uploads/2020/04/Hellinga-goede-1.png",
            ));?>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/form', 'contact');?>

<?php get_footer();?>