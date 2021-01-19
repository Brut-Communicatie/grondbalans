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
            <a href="/projecten">Bekijk onze projecten</a>
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
            <h4>Wij laten grond stromen!</h4>

            <div class="content__projecten">
                <div class="content__projecten--container">
                    <a href="#" class="content__projecten--item">
                        <img src="https://images.unsplash.com/photo-1610589510519-abd01ebed463?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1391&q=80" alt="hoi" />
                    </a>

                    <a href="#" class="content__projecten--item">
                    <img src="https://images.unsplash.com/photo-1610492273249-6406a1154eae?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"  alt="hoi" />
                    </a>

                    <a href="#" class="content__projecten--item">
                    <img src="https://images.unsplash.com/photo-1610550780559-8818acbded68?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=657&q=80" alt="hoi" />
                    </a>

                    <a href="#" class="content__projecten--item">
                    <img src="https://images.unsplash.com/photo-1610473068893-7a63129207d2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="hoi" />
                    </a>
                </div>
            </div>
            <a href="#">Bekijk onze projecten</a>
        </section>

        <section class="content__section">

        <div class="content__block">
            <div class="content__block--container">
                <div class="content__block--left">
                <iframe id="video-6-2_youtube_iframe" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" src="https://www.youtube.com/embed/1_AJ9QLsm10?controls=0&amp;rel=0&amp;disablekb=1&amp;showinfo=0&amp;modestbranding=0&amp;html5=1&amp;iv_load_policy=3&amp;autoplay=0&amp;end=0&amp;loop=0&amp;playsinline=0&amp;start=0&amp;nocookie=false&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fgrondbalans.nl&amp;widgetid=1" width="575" height="323.4375"></iframe>
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
                        <a href="#">
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
                <a href="#" class="content__inline-link">Lees meer over circulariteit</a>
          


        </section>
    </div>
    <div class="content__banner">
        <div class="content__banner--container">
            <div class="content__banner--img"></div>
        </div>
    </div>

    <div class="content__container">
            <section class="content__section--last">
                <a href="#">Neem contact met ons op</a>
                <div class="content__line"></div>
            </section>
    </div>
</div>




<?php get_footer();?>