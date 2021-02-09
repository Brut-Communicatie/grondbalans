<div class="nieuws__page--breadcrumbs">
    <p>
    <a href="<?php echo get_home_url();?>">Home </a>» <a href="/nieuws">Nieuws </a>» <?php echo the_title();?>
    </p>
</div>


<div class="nieuws__page">
    <div class="nieuws__page--content">
        <?php
            $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail_name');
            echo '<img src="'.$thumb[0].'" alt="Nieuws afbeelding" />';
        ?>
        <h1>
            <?php echo the_title();?>
        </h1>
        <?php
        $query = get_post(get_the_ID()); 
        $content = apply_filters('the_content', $query->post_content);
        echo $content;
        ;?>
    </div>
    <div class="nieuws__page--sidebar">
        <h3>Meer nieuws</h3>
        <?php get_template_part('archive/sidebar', 'nieuws');?>
    </div>
</div>



