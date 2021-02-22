<?php
    $the_query = new WP_Query( array('posts_per_page'=>9,
    'post_type'=>'nieuws',
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
    ); 
    ?>
    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

        <a href="<?php the_permalink(); ?>">
        <?php
        if (has_post_thumbnail()) {
            $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail_name');
            echo '<div class="nieuws__page--sidebar--img" style="background-image: url('. $thumb[0] .');"></div>';
        }
        ;?>
        <div class="nieuws__page--sidebar--content">
            <h5>
            <?php echo get_the_title(); ?>
            </h5>
            <p>
            <?php 
             $date = get_the_date( 'j F Y');
            echo $date; ?>
            </p>
        </div>

        </a>

    <?php
    endwhile;
    wp_reset_postdata();
;?>