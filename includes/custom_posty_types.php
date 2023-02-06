<?php

namespace BreakdanceCustomElements;

function register_cpt()
{
    register_post_type(
        'likes',
        array(
            'supports' => array('title', 'custom-fields'),
            'public' => true,
            'show_ui' => true,
            'labels' => array(
                'name' => __('Likes'),
                'add_new_item' => __('Add New Like'),
                'edit_item' => __('Edit like'),
                'all_items' => __('All likes'),
                'singular_name' => __('Like')
            ),
            'menu_icon' => 'dashicons-heart'
        )
    );
}
add_action('init', 'BreakdanceCustomElements\register_cpt');