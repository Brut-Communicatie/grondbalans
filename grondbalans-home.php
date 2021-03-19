<?php
//Template name: Index
get_header();?>

<div class="intro">
    <video autoplay muted loop playsinline poster="<?php echo get_template_directory_uri();?>/content/video/poster.jpg">
        <source src="<?php echo get_template_directory_uri();?>/content/video/header.webm" type="video/webm">
    </video>
    <div class="intro__container">
        <div class="intro__block">
            <h4>SAMEN MOOIE PROJECTEN MAKEN!</h4>
            <h3>WIJ ZETTEN<br/>
                ONZE SCHOUDERS<br/>
                ERONDER
            </h3>
            <a href="<?php echo get_site_url();?>/projecten">Bekijk onze projecten</a>
        </div>
    </div>
</div>
<div class="content">
    <div class="content__container">
        <div class="content__intro" data-aos="fade-up">
            <h1>Specialist in <br />grond en bagger</h1>
            <h2>Al meer dan 20 jaar!</h2>
            <p>Grondbalans is hét aanspreekpunt voor al je grondstromen! Heb je grond nodig of wil je er juist vanaf?
                Wij hebben een sterk lokaal netwerk in heel Nederland om dit te regelen. We adviseren, verbinden,
                begeleiden, administreren en realiseren. Met ruim 20 jaar ervaring gaat zorgvuldige bodemtoepassing bij
                ons altijd samen met de meest economische en duurzame oplossing.</p>
            <div class="content__line"></div>
        </div>

        <section class="content__section"  class="content__intro" data-aos="fade-up">
            <?php get_template_part('template-parts/home' , 'expertises');?>
        </section>

        <section class="content__section">
            <h3 data-aos="fade-right" data-aos-delay="250">TROTS OP ONZE MOOIE PROJECTEN</h3>
            <h4 data-aos="fade-left" data-aos-delay="250">Wij laten grond stromen!</h4>

            <div class="content__projecten" data-aos="fade-up" data-aos-delay="250">
                <div class="content__projecten--container">
                    <a href="<?php echo get_site_url();?>/projecten" class="content__projecten--item">
                        <img src="https://mlmotgafwbhj.i.optimole.com/u0PFPh0-Iv16d7Yd/w:1280/h:720/q:75/https://grondbalans.nl/wp-content/uploads/2020/04/Amstelveenlijn-6.jpg" alt="Project afbeelding" loading="lazy"/>
                    </a>

                    <a href="<?php echo get_site_url();?>/projecten" class="content__projecten--item">
                    <img src="https://mlmotgafwbhj.i.optimole.com/u0PFPh0-kL-icow9/w:2000/h:1334/q:75/https://grondbalans.nl/wp-content/uploads/2020/04/DJI_0474-scaled.jpg"  alt="Project afbeelding" loading="lazy"/>
                    </a>

                    <a href="<?php echo get_site_url();?>/projecten" class="content__projecten--item">
                    <img src="https://mlmotgafwbhj.i.optimole.com/u0PFPh0-ui3BS7bP/w:2000/h:1500/q:75/https://grondbalans.nl/wp-content/uploads/2020/04/IMG_4355-005-1-scaled.jpg" alt="Project afbeelding" loading="lazy" />
                    </a>

                    <a href="<?php echo get_site_url();?>/projecten" class="content__projecten--item">
                    <img src="https://mlmotgafwbhj.i.optimole.com/u0PFPh0-CzLrXqQO/w:1768/h:1126/q:75/https://grondbalans.nl/wp-content/uploads/2020/04/Landverbetering-Haarlemmermeer.jpg" alt="Project afbeelding" loading="lazy" />
                    </a>
                </div>
            </div>
            <a href="<?php echo get_site_url();?>/projecten">Bekijk onze projecten</a>
        </section>

        <section class="content__section">

        <div class="content__block">
            <div class="content__block--container" data-aos="fade-up" data-aos-delay="250">
                <div class="content__block--left" >

                <iframe
                    width="575"
                    height="323.4375"
                    src="https://www.youtube.com/embed/1_AJ9QLsm10?controls=0&amp;rel=0&amp;disablekb=1&amp;showinfo=0&amp;modestbranding=0&amp;html5=1&amp;iv_load_policy=3&amp;autoplay=0&amp;end=0&amp;loop=0&amp;playsinline=0&amp;start=0&amp;nocookie=false&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fgrondbalans.nl&amp;widgetid=1"
                    srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=https://www.youtube.com/embed/1_AJ9QLsm10?controls=0&amp;rel=0&amp;disablekb=1&amp;showinfo=0&amp;modestbranding=0&amp;html5=1&amp;iv_load_policy=3&amp;autoplay=1&amp;end=0&amp;loop=0&amp;playsinline=0&amp;start=0&amp;nocookie=false&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fgrondbalans.nl&amp;widgetid=1><img src=https://img.youtube.com/vi/1_AJ9QLsm10/hqdefault.jpg alt='Grondbalans'><span>▶</span></a>"
                    frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                    title="Grondbalans"
                    >
                </iframe>
                </div>

                <div class="content__block--right">
                    <div class="content__block--right-content">
                        <h3>
                            CIRCULARITEIT
                        </h3>
                        <h4>
                        Het restproduct van vandaag de grondstof voor morgen
                        </h4>
                        <p>
                        Als specialist in grondstromen werken wij aan een goede bodem voor toekomstige generaties. Een goede bodem is belangrijk voor onze voedselproductie, ons drinkwater én om veilig & duurzaam te kunnen wonen, werken en recreëren. Ontdek hoe wij circulariteit en duurzaamheid verweven in onze werkprocessen!
                        </p>
                        <a href="<?php echo get_site_url();?>/duurzaam-circulair-grondverzet/">
                            Lees meer over circulariteit
                        </a>
                    </div>
              
                </div>
            </div>
        </div>
        </section>

        <section class="content__section--last">
            <h3>GRONDSTROMEN
                VOOR DE GEHELE KETEN</h3>
                <h4>Circulair toegepast</h4>
                <p>
                Wij focussen ons op verschillende toepassingsgebieden: van de agrarische sector tot kelderbouw. Dit doen we onder andere voor overheden, loonbedrijven, aannemers, agrariërs en projectontwikkelaars. Elk project is anders. Door onze uitgebreide, lokale marktkennis bieden wij oplossingen voor elk project. En heel veel lokaal, maakt nationaal.
                </p>
                <a href="<?php echo get_site_url();?>/duurzaam-circulair-grondverzet" class="content__inline-link">Lees meer over circulariteit</a>
        </section>
    </div>
    <div class="content__banner">
        <div class="content__banner--container">
            <div class="content__banner--img"></div>
        </div>
    </div>

    <div class="content__container">
            <section class="content__section--last">
                <a href="<?php echo get_site_url();?>/contact#contact">Neem contact met ons op</a>
                <div class="content__line"></div>
            </section>
    </div>
</div>

<?php get_footer();?>