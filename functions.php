<?php

function cosmology_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'cosmology_setup');

function cosmology_scripts()
{
    wp_enqueue_style('pt-font', 'https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic', [], null, 'all');
    wp_enqueue_style('bootstrap', get_theme_file_uri('/css/bootstrap.min.css'), [], null, 'all');
    wp_enqueue_style('cosmology', get_stylesheet_uri(), [], null, 'all');

    wp_enqueue_script('jquery3', get_theme_file_uri('/js/jquery-3.2.1.min.js'), [], null, true);
    wp_enqueue_script('popper', get_theme_file_uri('/js/popper.min.js'), [], null, true);
    wp_enqueue_script('bootstrap', get_theme_file_uri('/js/bootstrap.min.js'), [], null, true);
    // wp_enqueue_script('app', get_theme_file_uri('/js/app.min.js'), [], null, true);
}

add_action('wp_enqueue_scripts', 'cosmology_scripts');

add_filter('wp_calculate_image_srcset_meta', '__return_null');

add_filter('post_thumbnail_html', function ($html) {
    return preg_replace('/(width|height)="\d+"\s/', "", $html);
});

add_filter('style_loader_tag', function ($tag, $handle) {
    return str_replace(" id='$handle-css' ", '', $tag);
}, 10, 2);

add_filter('next_posts_link_attributes', function() {
    return 'class="btn btn-outline-secondary" rel="next"';
});

add_filter('previous_posts_link_attributes', function() {
    return 'class="btn btn-outline-secondary" rel="prev"';
});

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');

remove_action('rest_api_init', 'wp_oembed_register_route');
add_filter('embed_oembed_discover', '__return_false');
remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
