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
        <div class="nieuws__page--buttons">
            <a href="#">Neem contact met ons op</a>
            <p>Samen mooie projecten maken!</p>
            <div class="nieuws__page--line">
            </div>
        </div>
        
        <?php
        	the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Vorig bericht:', 'grondbalans' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( '| Volgend bericht:', 'grondbalans' ) . '</span> <span class="nav-title">%title</span>',
				)
			);
        ?>
    </div>
    <div class="nieuws__page--sidebar">
        <h3>Meer nieuws</h3>
        <?php get_template_part('archive/sidebar', 'nieuws');?>
    </div>
</div>



