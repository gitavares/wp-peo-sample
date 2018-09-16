<?php 

    function peosample_post_types() {
        // Event Post Type
        register_post_type('event', array(
            'supports' => array(
                'title', 
                'editor',
                'excerpt'
            ),
            'rewrite' => array(
                'slug' => 'events'
            ),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => 'Events',
                'add_new_item' => 'Add New Event',
                'edit_item' => 'Edit Event',
                'all_items' => 'All Events',
                'singular_name' => 'Event'
            ),
            'menu_icon' => 'dashicons-calendar'
        ));

        // Homepage Slide Post Type
        register_post_type('homepage_slide', array(
            'supports' => array(
                'title', 
                'editor',
                'thumbnail'
            ),
            'public' => true,
            'labels' => array(
                'name' => 'Homepage Slide',
                'add_new_item' => 'Add New Image',
                'edit_item' => 'Edit Image',
                'all_items' => 'All Images',
                'singular_name' => 'Image Slide'
            ),
            'menu_icon' => 'dashicons-format-gallery'
        ));
    }

    add_action('init', 'peosample_post_types');


?>