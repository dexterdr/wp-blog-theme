<?php get_header(); ?>

<div class="row">
    <section class="col-sm-8">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                get_template_part('content', get_post_format());
            }

            if (!is_single() && !is_page()) { ?>
                Navigation:
                <nav class="text-center">
                    <?php posts_nav_link(' &mdash; ',
                                         '&laquo; следующие новости',
                                         'предыдущие новости &raquo;'); ?>
                </nav>
            <?php }
        }
        ?>
    </section>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
