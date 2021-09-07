<?php
//Template name: Werken bij

get_header();?>
<?php
    $args = array(
        'background' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-GAfKxHUN/w:auto/h:auto/q:75/https://grondbalans.nl/wp-content/uploads/2020/06/werken-bij-grondbalans-1920-02.jpg",
        'heading' => "WERKEN BIJ GRONDBALANS",
        'content' => "NEEM HET HEFT IN EIGEN HANDEN",
        'button' => "",
    );
    get_template_part( 'template-parts/banner', 'general', $args );
?>


<div class="content">
    <div class="content__container">
        <div class="content__werken--container">
            <div class="content__werken--left">
                <h1>WERKEN IN EEN GEDREVEN TEAM</h1>
                <h2>Doen, leren & groeien!</h2>
                <p>
                    Werken bij Grondbalans is iedere dag weer anders. Initiatief nemen, nieuwe ideeën opperen: neem het heft in eigen handen! Zo haal je telkens het beste uit jezelf. Dat past bij ons als platte organisatie met een ondernemend karakter. Jouw ontwikkeling vinden we erg belangrijk. Ook aan het teamgevoel hechten wij veel waarde. Grondbalans bestaat uit een team met 25 enthousiaste mensen, uit alle hoeken van het land. Iedereen heeft eigen verantwoordelijkheden, maar kan altijd terugvallen op het team. Een team waarbij je lekker jezelf kunt zijn.
                </p>
                <iframe id="werkenbij" width="1000" height="500"  src="https://www.youtube.com/embed/cg-tgT16EUg" frameborder="0" allowfullscreen></iframe>
                <h3>BEN JIJ TOE AAN EEN VOLGENDE STAP?</h3>
                <p style="margin-bottom: 3rem;">
                    Wil jij meegroeien met ons? Denk jij dat je bij ons past en dat je een waardevolle bijdrage kunt leveren aan onze organisatie en dienstverlening? Is de GWW-branche helemaal jouw wereldje en word je blij van ambitieuze collega's en tevreden opdrachtgevers? Check dan onze vacatures!
                    <br/>
                    Staat jouw ideale functie er niet tussen, stuur ons dan een open sollicitatie. Wij vinden het altijd interessant om te horen wat jouw ambities zijn.
                </p>

                <iframe id="werkenbij" width="1000" height="500"  src="https://www.youtube.com/embed/6wYppiFuR7w" frameborder="0" allowfullscreen></iframe>
                <div class="content__werken--left--cta">
                    <h3>NEEM DIRECT CONTACT OP</h3>
                    <p>
                    Meer weten over werken bij Grondbalans of interesse in een vacature? Wil je een open sollicitatie sturen?
                    Neem contact op met Wendy Stolwijk via <a href="mailto:vacature@grondbalans.nl">vacature@grondbalans.nl</a> of bel 06 45222774.
                    </p>
                </div>
            </div>

            <div class="content__werken--right">
                <div class="content__werken--vacatures">
                    <h3>ONZE VACATURES</h3>
                    <?php
                    $args = array(
                        'post_type' => 'vacature',
                        'post_per_page' => 5
                    );

                    $query = new WP_Query($args);
                    if ( $query->have_posts() ) :
                        while ( $query->have_posts() ) : $query->the_post();
                            $title = get_the_title();
                            $link = get_the_permalink();
                            echo "<li class='werken__opsomming--item'><a href='$link'>$title</a></li>";
                        endwhile;
                    else :
                        _e( '<p>Sorry, we hebben op dit moment geen vacatures.</p>', 'textdomain' );
                    endif;
                    ;?>
                    <div class="content__werken--vacatures--line"></div>
                </div>

                <div class="content__werken--quote">
                    <p>“</p>
                    <p>Grondbalans is een club mensen die er echt voor wil gaan! Het harde werken gaat hand in hand met plezier maken. Onze mensen krijgen alle ruimte en mogelijkheden om zich te ontwikkelen.
                    Eigen initiatief is hierbij wel belangrijk, waarbij je altijd kunt terugvallen op het team.</p>
                    <img src="https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8wKPrU38/w:120/h:132/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/09-Dirkjan.jpg" width="150px" alt="Foto"/>
                    <div class="content__werken--quote-bio">
                        <p><strong>Dirkjan Reijersen van Buuren</strong></p>
                        <p>Directeur Grondbalans</p>
                    </div>
                </div>
                <div class="content__werken--block">
                    <h4>Vragen over een vacature?</h4>
                    <p>Mail naar: <br/>
                    <a href="#">vacature@grondbalans.nl</a>
                    <br/>
                    of bel Wendy Stoldijk op <br/>
                    030-2372300 of 06-45222774</p>
                    <div class="content__werken--socials">
                        <a href="https://nl-nl.facebook.com/Grondbalans/" target="_blank" rel="noopener noreferrer" class="footer__left--socials-item">
							<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" class="svg-inline--fa fa-facebook-f fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg>
						</a>
                        <a href="http://www.linkedin.com/company/grondbalans-bv" target="_blank" rel="noopener noreferrer" class="footer__left--socials-item">
							<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" class="svg-inline--fa fa-linkedin-in fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg>
						</a>
			
						<a href=mailto:info@grondbalans.nl" class="footer__left--socials-item">
						<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" class="svg-inline--fa fa-envelope fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path></svg>
						</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php get_footer();?>