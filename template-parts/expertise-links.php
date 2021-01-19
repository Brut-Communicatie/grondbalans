<div class="portfolio__block" id="<?php echo $args['id'];?>">
    <div class="portfolio__block--container">
        <div class="portfolio__block--left">
            <div class="portfolio__block--left-content">
                <img src="" />
                <h3>
                    <?php echo $args['heading'];?>
                </h3>
                <p>
                    <?php echo $args['content'];?>
                </p>
                <a href="/contact/#contact">
                    <?php echo $args['button'];?>
                </a>
            </div>
        </div>

        <div class="portfolio__block--right">
            <img src="<?php echo $args['right']['url'];?>" alt="Project afbeelding" width="720px" />
        </div>
    </div>
</div>