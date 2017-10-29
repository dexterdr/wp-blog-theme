<aside class="col-lg-4">
    <div class="row">
        <div class="col-md-6 col-lg-12">
            <div class="card widget">
                <div class="card-body">
                    <h4 class="card-title">Последние записи</h4>
                    <ol>
                        <?php $args = ['numberposts' => '5', 'post__not_in' => [$post->ID]];
                        $recent = wp_get_recent_posts($args);
                        foreach ($recent as $item) { ?>
                            <li><a href="<?php echo get_permalink($item['ID']); ?>">
                                <?php echo $item['post_title']; ?>
                            </a></li>
                        <?php }
                        wp_reset_query(); ?>
                    </ol>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-12">
            <div class="card tw-frame">
                <div class="card-body">
                    <h4 class="card-title">Посты в Twitter</h4>
                    <a class="twitter-timeline" href="https://twitter.com/dexterdr" data-widget-id="261198151581569024" rel="nofollow"></a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
            </div>
        </div>
    </div>
</aside>