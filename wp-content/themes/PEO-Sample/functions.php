<?php 

function peosample_files() {
    wp_enqueue_style('peosample-main-style', get_stylesheet_uri(), NULL, microtime());
}

add_action('wp_enqueue_scripts', 'peosample_files');

function peosample_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('banner_slide', 681, 285, true);
}

add_action('after_setup_theme', 'peosample_features');

add_post_type_support( 'page', 'excerpt' );
?>