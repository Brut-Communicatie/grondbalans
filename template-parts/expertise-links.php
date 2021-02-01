<div class="portfolio__block" data-aos="fade-up" data-aos-delay="250" id="<?php echo $args['id'];?>">
    <div class="portfolio__block--container">
        <div class="portfolio__block--left">
            <div class="portfolio__block--left-content">
                <?php echo $args['image'];?>
                <h3>
                    <?php echo $args['heading'];?>
                </h3>
                <p>
                    <?php echo $args['content'];?>
                </p>
                <?php if $args['link'] :?>
                    <a href="<?php echo $args['link'];?>">
                <?php else :?>
                    <a href="/contact/#contact">
                <?php endif ;?>
             
                    <?php echo $args['button'];?>
                </a>
            </div>
        </div>

        <div class="portfolio__block--right">
            <img src="<?php echo $args['right']['url'];?>" alt="Project afbeelding" width="720px" />
        </div>
    </div>
</div>