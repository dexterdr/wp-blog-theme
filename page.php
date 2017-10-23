<?php get_header(); ?>

<main class="row">
    <?php if (have_posts()) { ?>
        <div class="col-lg-8">
            <?php while (have_posts()) {
                the_post();
                get_template_part('article', get_post_format());
            } ?>
        </div>
    <?php } ?>
    <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
