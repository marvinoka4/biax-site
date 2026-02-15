<?php

/**
 * Enqueue theme styles and scripts
 *
 * @package helium-biax
 */

if (!defined('ABSPATH')) {
    exit;
}

function biax_enqueue_assets()
{
    $the_theme = wp_get_theme();
    $version = $the_theme->get('Version');
    $uri = get_template_directory_uri();
    $vendor_uri = $uri . '/assets/vendor/'; // Assuming you moved the files here

    // --- Styles ---
    wp_enqueue_style('main', $uri . '/assets/css/main.css', array(), $version);
    wp_enqueue_style('wp-style', $uri . '/assets/css/wp.styles.css', array(), $version);
    wp_enqueue_style('theme-main', get_stylesheet_uri(), array('wp-style'), $version);

    $custom_css = "
        * { -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }
        .container-medium, .container-small, .container-large { margin-right: auto !important; margin-left: auto !important; }
    ";
    wp_add_inline_style('theme-main', $custom_css);

    // --- Scripts ---

    // 1. Core / Detection
    wp_enqueue_script('jquery');
    $js_detection = '!(function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")})(window,document);';
    wp_add_inline_script('jquery', $js_detection, 'after');

    // 2. Vendor Libraries (No dependencies)
    wp_enqueue_script('swiper', $vendor_uri . 'swiper.min.js', array(), $version, true);
    wp_enqueue_script('leaflet', $vendor_uri . 'leaflet.min.js', array(), $version, true);
    wp_enqueue_script('marquee', $vendor_uri . 'vanilla-infinite-marquee.min.js', array(), $version, true);
    wp_enqueue_script('lenis', $vendor_uri . 'lenis.min.js', array(), $version, true);
    wp_enqueue_script('springer', $vendor_uri . 'springer.min.js', array(), $version, true);
    wp_enqueue_script('number-counter', $vendor_uri . 'number-counter.js', array(), $version, true);
    wp_enqueue_script('stack-card', $vendor_uri . 'stack-card.min.js', array(), $version, true);

    // 3. GSAP Stack (Order matters here)
    wp_enqueue_script('gsap', $vendor_uri . 'gsap.min.js', array(), $version, true);
    wp_enqueue_script('gsap-scroll-trigger', $vendor_uri . 'scroll-trigger.min.js', array('gsap'), $version, true);
    wp_enqueue_script('gsap-split-text', $vendor_uri . 'split-text.min.js', array('gsap'), $version, true);
    wp_enqueue_script('gsap-draw-svg', $vendor_uri . 'draw-svg.min.js', array('gsap'), $version, true);
    wp_enqueue_script('gsap-motion-path', $vendor_uri . 'motionpathplugin.min.js', array('gsap'), $version, true);

    // 4. Main Theme Logic
    // This loads last and requires all previous scripts to be ready
    wp_enqueue_script('biax-main', $uri . '/assets/js/main.js', array('jquery', 'gsap', 'swiper', 'lenis'), $version, true);

    // Custom JS
    wp_enqueue_script('custom-js', $uri . '/assets/js/scripts.js', array('jquery', 'js'), $version, true);
}
add_action('wp_enqueue_scripts', 'biax_enqueue_assets');
