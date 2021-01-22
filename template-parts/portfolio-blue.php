<?php 
if($args['video']) {
$ref = $args['right'];
$link = substr(strstr($ref, '='), strlen('='));
}
?>

<div class="portfolio__block portfolio__block-blue">
    <div class="portfolio__block--container">
        <div class="portfolio__block--left">
            <div class="portfolio__block--left-content">
                <h3>
                    <?php echo $args['heading'];?>
                </h3>
                <h4>
                    <?php echo $args['subheading'];?>
                </h4>
                <ul>
                    <?php foreach($args['tags'] as $tag) {
                        echo '<li>' . $tag .'</li>';
                    } ;?>
                </ul>
                <p>
                    <?php echo $args['content'];?>
                </p>
                <a href="#contact">
                    <?php echo $args['button'];?>
                </a>
            </div>
        </div>

        <div class="portfolio__block--right">
                <img src="<?php echo $args['right'];?>" alt="Project afbeelding" width="720px" />
        </div>
    </div>
</div>