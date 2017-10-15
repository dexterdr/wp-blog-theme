<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <?php
        if (is_single()) {
            the_title('<h1>', '</h1>');
        } else {
            the_title('<h2><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        }
        ?>

        <span class="date"><?php the_time('F jS, Y'); ?></span>
        <span class="author"><?php the_author(); ?></span>
    </header>
    <div>
        1<?php if (has_post_thumbnail()) { the_post_thumbnail('thumbnail'); } ?>2
        <?php the_content(sprintf('Continue reading &laquo;%s&raquo;', get_the_title())); ?>
    </div>
    <p class="postmetadata">
        Posted in <?php the_category(', ') ?>
        <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?>
    </p>
</article>