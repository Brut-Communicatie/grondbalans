<div class="portfolio__block">
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
                        <a href="#">
                            <?php echo $args['button'];?>
                        </a>
                    </div>
                </div>

                <div class="portfolio__block--right">
                <iframe id="video-6-2_youtube_iframe" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" src="https://www.youtube.com/embed/1_AJ9QLsm10?controls=0&amp;rel=0&amp;disablekb=1&amp;showinfo=0&amp;modestbranding=0&amp;html5=1&amp;iv_load_policy=3&amp;autoplay=0&amp;end=0&amp;loop=0&amp;playsinline=0&amp;start=0&amp;nocookie=false&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fgrondbalans.nl&amp;widgetid=1" width="575" height="323.4375"></iframe>
                </div>
            </div>
        </div>