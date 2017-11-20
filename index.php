<?php get_header(); ?>

<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
<?php if (is_category() && $paged == 1) { ?>
    <?php $category_description = category_description(); ?>
    <?php if ($category_description) { ?>
        <section class="card mb-3">
            <div class="card-body content">
                <?php echo $category_description; ?>
            </div>
        </section>
    <?php } ?>
<?php } ?>

<?php if (have_posts()) { ?>
    <main class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-sizer", "percentPosition": true }'>
        <div class="grid-sizer col-md-6 col-lg-4"></div>
        <?php while (have_posts()) { ?>
            <div class="grid-item col-md-6 col-lg-4">
                <?php the_post();
                get_template_part('content', get_post_format()); ?>
            </div>
        <?php } ?>
    </main>

    <?php $next = get_next_posts_link('Предыдущие <span class="d-none d-sm-inline">' .
                                      'записи</span> &rarr;'); ?>
    <?php $prev = get_previous_posts_link('&larr; Следующие <span class="d-none d-sm-inline"> ' .
                                          'записи</span>'); ?>
    <?php if ($next || $prev) { ?>
        <nav class="justify-content-between mb-3 row">
            <?php if ($prev) { ?>
                <div class="col"><?php echo $prev; ?></div>
            <?php } ?>
            <?php if ($next) { ?>
                <div class="col text-right"><?php echo $next; ?></div>
            <?php } ?>
        </nav>
    <?php }
} ?>

<?php get_footer(); ?>
