<div class="portfolio__block" id="<?php echo $args['id'];?>">
    <div class="portfolio__block--container">
        <div class="portfolio__block--left">
            <div class="portfolio__block--left-content">
                <h3>
                    <?php echo $args['heading'];?>
                </h3>
                <h4>
                    <?php echo $args['subheading'];?>
                </h4>
                <?php echo $args['content'];?>
                <a href="/contact/#contact">
                    <?php echo $args['button'];?>
                </a>
            </div>
        </div>

        <div class="portfolio__block--right">
            <?php echo $args['video'];?>
        </div>
    </div>
</div>