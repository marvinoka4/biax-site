<?php

/**
 * Default Layout
 *
 * @package helium-biax
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}
?>


<main class="site-content" id="main-content">
    <?php
    // 1. Get the slug (e.g., "templates/about-us.php")
    $custom_template_slug = get_page_template_slug();

    // 2. If a slug exists and the file actually exists on the server
    if ($custom_template_slug && file_exists(get_template_directory() . '/' . $custom_template_slug)) {

        // Use the slug directly - get_template_part handles the path
        // We strip .php because get_template_part appends it automatically
        get_template_part(str_replace('.php', '', $custom_template_slug));
    } else {
        // Core template hierarchy
        if (is_search()) {
            get_template_part('template-parts/content/search-content');
        } elseif (is_front_page()) {
            get_template_part('template-parts/content/front-page-content');
        } elseif (is_page()) {
            get_template_part('template-parts/content/page-content');
        } elseif (is_single()) {
            get_template_part('template-parts/content/single-content');
        } elseif (is_archive() || is_category() || is_tag()) {
            get_template_part('template-parts/content/archive-content');
        } elseif (is_404()) {
            get_template_part('template-parts/content/404-content');
        } else {
            get_template_part('template-parts/content/index-content');
        }
    }
    ?>
</main>