<?php

/**
 * Theme Support & Features Configuration
 */
function biax_setup()
{
    // Standard Support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'gallery', 'caption', 'script', 'style']);

    // Gutenberg / Block Editor Support
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    add_theme_support('editor-styles'); // Allows custom CSS in the editor

    // Custom size for blog cards
    add_image_size('blog-card', 500, 300, true);
}
add_action('after_setup_theme', 'biax_setup');

/**
 * Completely Disable Comments & Trackbacks
 */

// Disable support in post types
add_action('admin_init', function () {
    $post_types = get_post_types();
    foreach ($post_types as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});

// Front-end filters
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove from Admin Menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

// Remove from Admin Bar (Corrected Method)
add_action('wp_before_admin_bar_render', function () {
    global $wp_admin_bar;
    $wp_admin_bar->remove_node('comments');
});

// Redirect manual access attempts
add_action('admin_init', function () {
    global $pagenow;
    if ($pagenow === 'edit-comments.php') {
        wp_safe_redirect(admin_url());
        exit;
    }
});
