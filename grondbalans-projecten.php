<?php
// Template name: Projecten
get_header();?>
<?php
    $siteUrl = get_site_url();
    $args = array(
        'background' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-iR_U6iTU/w:auto/h:auto/q:75/https://grondbalans.nl/wp-content/uploads/2020/04/IMG_0354-004-scaled.jpg",
        'heading' => "Onze projecten",
        'content' => "Alles tot in de puntjes geregeld",
        'button' => "Neem contact met ons op",
        'link' => $siteUrl . "/contact#contact",
    );
    get_template_part( 'template-parts/banner', 'general', $args );
?>

<div class="content">
    <div class="content__container" >
        <div class="content__intro">
            <h1>SAMEN<br />
                MOOIE PROJECTEN MAKEN!</h1>
            <h2>Jouw ketenpartner voor grondstromen</h2>
            <p>Van ontgraven tot ophogen en grondverbetering: jouw grondproject is bij ons in goede handen. Klein en
                groot. En dankzij ons lokale netwerk altijd met een gezond eindresultaat voor zowel het milieu als de
                portemonnee. We hergebruiken grond zoveel mogelijk én zo lokaal mogelijk.
                <br />
                Ontdek het zelf!</p>
            <div class="content__line"></div>
        </div>
    </div>
</div>

<div class="content">
    <div class="content__container">

        <?php 
        
        $args = array(
            'post_type'=> 'projecten',
            'order'    => 'ASC'
        );              

        $the_query = new WP_Query( $args );
        if($the_query->have_posts() ) : 
            while ( $the_query->have_posts() ) : 
            $the_query->the_post(); 

            $title = get_the_title();
            $content = get_the_content();
            $content = strip_tags($content);
            $tags = get_the_tags();
            $fields = get_fields();
            
            if ($fields['video'] !== []) {
                $attachment = $fields['videoLink'];
            } else {
                $attachment = $fields['imageLink'];
            }

            get_template_part('template-parts/portfolio', 'block', $args = array(
                'heading' => $title,
                'subheading' => $fields['sub_title'],
                'content' =>  $content,
                'tags' => $tags,
                'button' => "Informatie aanvragen",
                'video' => ($fields['video'] !== [] ? true : false),
                'right' => $attachment,
            ));

            endwhile; 
            wp_reset_postdata(); 
        else: 
        endif;
        ?>

    </div>
</div>
<?php get_footer();?>