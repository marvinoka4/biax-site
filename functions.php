<?php

/**
 * Functions and definitions
 *
 * @package helium-biax
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Register theme support options
require_once(get_template_directory() . '/inc/theme-support.php');


// Register scripts and stylesheets
require_once(get_template_directory() . '/inc/enqueue-scripts.php');


// Register navigation menus
require_once(get_template_directory() . '/inc/navigation-menu.php');


// Register navigation menu walker
// require_once(get_template_directory() . '/inc/navigation-menu-walker.php');
