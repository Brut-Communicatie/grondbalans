<?php
    $the_query = new WP_Query( array('posts_per_page'=>9,
    'post_type'=>'nieuws',
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
    ); 
    ?>
    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

        
        <?php
        if (has_post_thumbnail()) {
            $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail_name');
            echo '<a href="'. get_the_permalink() .'" class="nieuws__item--thumb" style="background-image:url('. $thumb[0] .');">';
        }
        ;?>

        <h4><?php echo get_the_title();?></h4>

        <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?>
        </a>

    
        <?php echo get_the_date();?>
       

    <?php
    endwhile;
    wp_reset_postdata();
;?>