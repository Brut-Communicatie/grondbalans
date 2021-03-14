<?php

get_header();
?>
<?php
    $siteUrl = get_site_url();
    $title = get_the_title();
    $args = array(
        'background' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-fWfjytCu/w:auto/h:auto/q:75/https://grondbalans.nl/wp-content/uploads/2020/06/werken-bij-grondbalans-1920-01.jpg",
        'heading' => "Werken bij grondbalans",
        'content' => $title,
    );
    get_template_part( 'template-parts/banner', 'general', $args );
?>
<div class="content">
    <div class="content__container">
        <div class="content__werken--container">
            <div class="content__werken--left">
                <h1><?php echo $title;?></h1>
                <h2><?php echo the_field('provincie');?></h2>
                <div class="content__vacature--details">

                    <div class="content__vacature--row">

                        <div class="content__vacature--item">
                        <svg aria-hidden="true" focusable="false" width="25px" data-prefix="far" data-icon="calendar" class="svg-inline--fa fa-calendar fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 64h-48V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H160V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zm-6 400H54c-3.3 0-6-2.7-6-6V160h352v298c0 3.3-2.7 6-6 6z"></path></svg>
                            <div class="content__vacature--specifics">
                                <h4>Dienstverband</h4>
                                <p><?php echo the_field('dienstverband');?></p>
                            </div>
                        </div>

                        <div class="content__vacature--item">
                            <svg aria-hidden="true" width="20px" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg>
                            <div class="content__vacature--specifics">
                                <h4>Regio</h4>
                                <p><?php echo the_field('regio');?></p>
                            </div>
                        </div>
                    </div>

                    <div class="content__vacature--row">
                        <div class="content__vacature--item">
                            <svg aria-hidden="true" width="25px" focusable="false" data-prefix="fas" data-icon="graduation-cap" class="svg-inline--fa fa-graduation-cap fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M622.34 153.2L343.4 67.5c-15.2-4.67-31.6-4.67-46.79 0L17.66 153.2c-23.54 7.23-23.54 38.36 0 45.59l48.63 14.94c-10.67 13.19-17.23 29.28-17.88 46.9C38.78 266.15 32 276.11 32 288c0 10.78 5.68 19.85 13.86 25.65L20.33 428.53C18.11 438.52 25.71 448 35.94 448h56.11c10.24 0 17.84-9.48 15.62-19.47L82.14 313.65C90.32 307.85 96 298.78 96 288c0-11.57-6.47-21.25-15.66-26.87.76-15.02 8.44-28.3 20.69-36.72L296.6 284.5c9.06 2.78 26.44 6.25 46.79 0l278.95-85.7c23.55-7.24 23.55-38.36 0-45.6zM352.79 315.09c-28.53 8.76-52.84 3.92-65.59 0l-145.02-44.55L128 384c0 35.35 85.96 64 192 64s192-28.65 192-64l-14.18-113.47-145.03 44.56z"></path></svg>
                            <div class="content__vacature--specifics">
                                <h4>Salarisindicatie</h4>
                                <p><?php echo the_field('salarisindicatie');?></p>
                            </div>
                        </div>

                        <div class="content__vacature--item">
                            <svg aria-hidden="true" focusable="false" width="20px" data-prefix="far" data-icon="clock" class="svg-inline--fa fa-clock fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"></path></svg>
                            <div class="content__vacature--specifics">
                                <h4>Werktijden</h4>
                                <p><?php echo the_field('werktijden');?></p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="content__vacature--content">
                    <?php the_content();?>
                </div>
                <div class="content__vacature--contact" id="contact">
                    <?php echo do_shortcode('[contact-form-7 id="54" title="Sollicitatie"]');?>
                </div>
            </div>

            <div class="content__werken--right">
                <div class="content__werken--vacatures content__vacature--sidebar">
                    <h3>ONZE VACATURES</h3>
                    <a href="#contact">Direct solliciteren</a>
                    <p><?php the_title();?></p>
                    <?php echo the_field('opsomming');?>
                    <div class="content__vacature--sidebar--line"></div>
                    <?php echo the_field('opsomming2');?>
                </div>

                <div class="content__werken--quote">
                    <p>“</p>
                    <p>Het prettige van werken bij Grondbalans is de vrijheid die je hebt en het vertrouwen dat je krijgt. Als Regioteam Zuid zijn we zelforganiserend. We werken op een manier die past bij ons team en onze regio. We overleggen regelmatig met onze collega’s van de andere regioteams. Voor ons allemaal geldt dat de lange termijn relatie met klanten centraal staat. Flexibel zijn, afspraken nakomen, snel schakelen en de boel gewoon goed regelen. Daar gaat het om!</p>
                    <img src="https://mlmotgafwbhj.i.optimole.com/u0PFPh0-sMKro3aj/w:1222/h:1427/q:75/https://grondbalans.nl/wp-content/uploads/2020/06/Foto-Roel-website-scaled-e1594208518178.jpg" width="150px" alt="Foto"/>
                    <div class="content__werken--quote-bio">
                        <p><strong>Roel van Aarle</strong></p>
                        <p>Projectcoördinator Regio Zuid</p>
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

<?php
get_footer();?>