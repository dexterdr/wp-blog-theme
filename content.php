<div class="card">
    <article id="post-<?php the_ID(); ?>">
        <?php if (has_post_thumbnail()) {
            the_post_thumbnail('medium', ['class' => 'card-img-top']);
        } ?>
        <div class="card-body">
            <header>
                <?php
                    the_title('<h2 class="card-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">',
                        '</a></h2>');
                ?>
                <h6 class="card-subtitle mb-3 text-muted">
                    <?php the_time('j.m.Y'); ?>
                    в категории &laquo;<?php the_category(', ') ?>&raquo;
                </h6>
            </header>
            <div class="content">
                <?php the_content(''); ?>
            </div>
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
