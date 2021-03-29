<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Grondbalans
 */

?>

	<footer id="colophon" class="footer">
		<div class="footer__container">
			<div class="footer__left">
				<div class="footer__left--item">
					<h5>Grondbalans B.V. <br/> De Meern</h5>
					<ul>
						<li>Naamrijk 1</li>
						<li>3454 PX De Meern</li>
						<li><span>T</span><a href="tel:0302372300">(030) 237 23 00</a></li>
						<li><span>E</span><a href="mailto:info@grondbalans.nl">info@grondbalans.nl</a></li>
					</ul>
				</div>
				<div class="footer__left--item">
					<h5>Grondbalans B.V. <br/> Heerhugowaard</h5>
					<ul>
						<li>Galileistraat 67</li>
						<li>1704 SE  Heerhugowaard</li>
						<li><span>T</span><a href="tel:0725763232">(072) 576 32 32</a></li>
						<li><span>E</span><a href="mailto:info@grondbalans.nl">info@grondbalans.nl</a></li>
					</ul>
				</div>
				<div class="footer__left--item">
					<h5>Grondbalans <br/> Noordoost B.V.</h5>
					<ul>
						<li>Oevers 14</li>
						<li>8331 VC  Steenwijk</li>
						<li><span>T</span><a href="tel:0521521930">(0521) 521 930</a></li>
						<li><span>E</span><a href="mailto:info@grondbalans.nl">info@grondbalans.nl</a></li>
					</ul>
				</div>
				<div class="footer__left--item">
					<h5>Volg ons</h5>
					<div class="footer__left--socials">
						<a href="http://www.linkedin.com/company/grondbalans-bv" target="_blank" rel="noopener noreferrer" class="footer__left--socials-item">
							<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" class="svg-inline--fa fa-linkedin-in fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg>
						</a>
						<a href="https://nl-nl.facebook.com/Grondbalans/" target="_blank" rel="noopener noreferrer" class="footer__left--socials-item">
							<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" class="svg-inline--fa fa-facebook-f fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg>
						</a>
						<a href="https://www.youtube.com/channel/UCHniM2SpValUY2uguFV8G6g" target="_blank" rel="noopener noreferrer" class="footer__left--socials-item">
							<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="youtube" class="svg-inline--fa fa-youtube fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg>
						</a>
					</div>
				</div>
			</div>
			<div class="footer__right">
				<img src="<?php echo get_template_directory_uri();?>/content/images/logo.svg" alt="Logo" />
				<p>Samen mooie projecten maken!</p>
			</div>
		</div>
	</footer><!-- #colophon -->
	<div class="footer__disclaimer">
		<p>Copyright © <?php echo date("Y");?> Grondbalans B.V. | Alle rechten voorbehouden | <a href="/privacyverklaring" target="_blank" rel="noopener norefferer">Algemene voorwaarden</a></p>
	</div>
</div><!-- #page -->


<div class="popup">
	<div class="popup__container">
		<div class="popup__close">
		<img src="<?php echo get_template_directory_uri();?>/content/popup/times.svg" alt="Times" />
		</div>
		<div class="popup__left">
			<p>Grond of baggerspecie nodig? Of wil je er juist van af?</p>
			<a class="popup__button" href="#">Melden</a>
		</div>
		<div class="popup__right">
			<img src="<?php echo get_template_directory_uri();?>/content/popup/helmets.svg" alt="Helmets" />
		</div>


		<div class="popup__form">
			<div class="popup__form--block">
				<div class="popup__form--block-heading">
					<p>Vraag of aanbod</p>
				</div>
				<?php echo do_shortcode('[contact-form-7 id="78" title="Popup"]');?>
			</div>
		</div>
	</div>
</div>



<?php wp_footer(); ?>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({disable: 'mobile'});
  </script>
</body>
</html>
