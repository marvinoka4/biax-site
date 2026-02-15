<?php

/**
 * The main template file
 *
 * @package helium-biax
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}
get_header();

get_template_part('template-parts/layouts/layout', 'default');

get_footer();
