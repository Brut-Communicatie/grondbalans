<div class="portfolio__block" id="<?php echo $args['id'];?>">
    <div class="portfolio__block--container">
        <div class="portfolio__block--right">
            <img src="<?php echo $args['right']['url'];?>" alt="Project afbeelding" width="720px" />
        </div>

        <div class="portfolio__block--left-two">
            <div class="portfolio__block--left-content">
                <?php echo $args['image'];?>
                <h3>
                    <?php echo $args['heading'];?>
                </h3>
                <p>
                    <?php echo $args['content'];?>
                </p>
                <div class="portfolio__block--buttons">
                <a href="<?php echo $args['link'];?>">
                    <?php echo $args['button'];?>
                </a>
                <a href="<?php echo get_site_url();?>/contact/#contact">
                    Meer info
                </a>
                </div>
            </div>
        </div>
    </div>
</div>