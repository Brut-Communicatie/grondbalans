


<div class="nieuws__page">


<div class="nieuws__page--content">

    <?php
    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail_name');
    echo '<img src="'.$thumb[0].'" alt="Nieuws afbeelding" />';
    ?>
    <?php echo the_title();?>
    <?php
    $query = get_post(get_the_ID()); 
    $content = apply_filters('the_content', $query->post_content);
    echo $content;
    ;?>
</div>
<div class="nieuws__page--sidebar">
    <?php get_template_part('archive/sidebar', 'nieuws');?>
</div>
</div>



