<?php
    $args = array(
        'background' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-EJ2Nht8l/w:auto/h:auto/q:75/https://grondbalans.nl/wp-content/uploads/2020/04/2019-10-30-07_42_30-20191029_082019.jpg-%E2%80%8E-Fotos-e1586428205702.png",
        'heading' => "NIEUWS VAN EIGEN BODEM",
        'content' => "VOOR KENNIS EN INSPIRATIE",
        'button' => "",
    );
    get_template_part( 'template-parts/banner', 'general', $args );
?>
<div class="content">
    <div class="content__container" >
        <div class="content__intro">
            <h1>Nieuws</h1>
            <h2>Welkom op onze nieuwspagina</h2>
            <p>Als specialist in grondstromen houden wij je graag op de hoogte van relevant nieuws over grond, grondstromen, baggerspecie,
bodem, bodemtoepassing en gerelateerde onderwerpen. Ook geven wij je graag een kijkje in onze eigen keuken.
                <br /><br/>
                Lees en reageer gerust: wij gaan graag in gesprek!

 </p>
        </div>
    </div>
</div>

<div class="nieuws">
    <div class="nieuws__container">
        <div class="nieuws__row">
            <?php
            $the_query = new WP_Query( array('posts_per_page'=>3,
            'post_type'=>'nieuws',
            'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
            ); 
            ?>
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

            <div class="nieuws__item">
                <?php the_post_thumbnail();?>
                <a href="<?php the_permalink(); ?>" class="file-title" target="_blank">
                <i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo get_the_title(); ?>
                </a>
                <div class="file-description"><?php the_content(); ?></div>
            </div>

            <?php
            endwhile;
            echo '</div>';
            $big = 999999999;
            echo paginate_links( array(
            'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $the_query->max_num_pages
            ) );
            wp_reset_postdata();
            ;?>
    </div>
</div>