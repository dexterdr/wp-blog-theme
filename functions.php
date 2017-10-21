<?php

function cosmology_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'cosmology_setup');

function cosmology_scripts()
{
    wp_enqueue_style('bootstrap', get_theme_file_uri('/css/bootstrap.min.css'), [], null, 'all');
    wp_enqueue_style('cosmology', get_stylesheet_uri(), [], null, 'all');

    wp_enqueue_script('jquery3', get_theme_file_uri('/js/jquery-3.2.1.min.js'), [], null, true);
    wp_enqueue_script('popper', get_theme_file_uri('/js/popper.min.js'), [], null, true);
    wp_enqueue_script('bootstrap', get_theme_file_uri('/js/bootstrap.min.js'), [], null, true);
}

add_action('wp_enqueue_scripts', 'cosmology_scripts');

add_filter('style_loader_tag', function ($tag, $handle) {
    return str_replace(" id='$handle-css' ", '', $tag);
}, 10, 2);

add_filter('next_posts_link_attributes', function() {
    return 'class="btn btn-outline-secondary btn-block"';
});

function cosmology_load_posts() {
    $args = unserialize(stripslashes($_POST['query']));
    $args['paged'] = $_POST['page'] + 1;
    $args['post_status'] = 'publish';

    query_posts($args);

    if (have_posts()) {
        while(have_posts()) {
            the_post();
            get_template_part('content', get_post_format());
        }
    }

    die();
}

add_action('wp_ajax_loadmore', 'cosmology_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'cosmology_load_posts');

// remove_action('wp_head', 'wp_resource_hints', 2);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');

remove_action('rest_api_init', 'wp_oembed_register_route');
add_filter('embed_oembed_discover', '__return_false');
remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
// add_filter('rewrite_rules_array', 'disable_embeds_rewrites');
