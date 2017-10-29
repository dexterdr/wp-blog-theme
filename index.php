<?php get_header(); ?>

<?php if (is_category()) { ?>
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
    <main class="card-columns">
        <?php while (have_posts()) {
            the_post();
            get_template_part('content', get_post_format());
        } ?>
    </main>

    <?php if ($next = get_next_posts_link('Загрузить еще', 0)) { ?>
        <nav class="mb-3 next">
            <?php echo $next; ?>
        </nav>
    <?php }
} ?>

<?php get_footer(); ?>
