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
                <img src="https://images.unsplash.com/photo-1610473068893-7a63129207d2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="hoi" />
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

        <section class="content__section">
            <h3>GRONDSTROMEN
                VOOR DE GEHELE KETEN</h3>
                <h4>Circulair toegepast</h4>
                <p>
                Wij focussen ons op verschillende toepassingsgebieden: van de agrarische sector tot kelderbouw. Dit doen we onder andere voor overheden, loonbedrijven, aannemers, agrariërs en projectontwikkelaars. Elk project is anders. Door onze uitgebreide, lokale marktkennis bieden wij oplossingen voor elk project. En heel veel lokaal, maakt nationaal.
                </p>
            <a href="#">Neem contact met ons op</a>
            <div class="content__line"></div>
        </section>
    </div>
</div>




<?php get_footer();?>