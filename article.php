<div class="card">
    <article id="post-<?php the_ID(); ?>">
        <?php /* if (has_post_thumbnail()) {
            the_post_thumbnail('large', ['class' => 'card-img-top']);
        } */ ?>
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

        </div>

        <?php $tags = get_the_tag_list('', ', '); ?>
        <?php if (!empty($tags)) { ?>
            <div class="card-footer text-muted">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M18.662 5.521L5.237 19l.707-4.967-4.945.709L14.424 1.263c.391-.392 1.133-.308 1.412 0l2.826 2.839c.5.473.391 1.026 0 1.419z"/></svg>
                <?php echo $tags; ?>
            </div>
        <?php } ?>
    </article>
</div>
