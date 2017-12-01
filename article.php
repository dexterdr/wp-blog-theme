<div class="card">
    <article id="post-<?php the_ID(); ?>">
        <div class="card-body">
            <header>
                <?php the_title('<h1 class="card-title">', '</h1>'); ?>
                <h6 class="card-subtitle mb-3 text-muted">
                    Отправлено: <?php the_time('F j, Y в G:i'); ?>
                    <?php if (has_category()) { ?>
                        <p class="mt-2 mb-0">Категория: &laquo;<?php the_category(', ') ?>&raquo;</p>
                    <?php } ?>
                </h6>
            </header>
            <div class="content">
                <?php the_content(); ?>
            </div>

            <?php if (is_single()) { ?>
                <div class="sharethis-inline-share-buttons my-3"></div>
                <div id="disqus_thread"></div>

                <script>
                    var disqus_config = function () {
                        this.page.url = window.location.toString();
                        this.page.identifier = <?php echo get_the_ID(); ?>;
                    };
                </script>
            <?php } ?>
        </div>

        <?php $tags = get_the_tag_list('', ', '); ?>
        <?php if (!empty($tags)) { ?>
            <div class="card-footer">
                <span class="tags-svg"></span>
                <?php echo $tags; ?>
            </div>
        <?php } ?>
    </article>
</div>
