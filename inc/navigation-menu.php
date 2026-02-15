<?php

/**
 * Navigation Menus and Custom Walker
 */

if (!defined('ABSPATH')) {
    exit;
}

function biax_register_menus()
{
    register_nav_menus(array(
        'primary-menu' => 'Primary Navigation',
        'mobile-menu'  => 'Mobile Sidebar Navigation',
        'footer-company-menu'  => 'Footer Company Links',
        'footer-policies-menu' => 'Footer Policy Links',
    ));
}
add_action('after_setup_theme', 'biax_register_menus');

class Biax_Tailwind_Walker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $classes = empty($item->classes) ? array() : (array) $item->classes;

        // Active link logic
        $is_current = in_array('current-menu-item', $classes) || in_array('current-page-ancestor', $classes);

        // Determine styles based on menu location
        if ($args->theme_location === 'primary-menu') {
            $li_classes = 'nav-item relative cursor-pointer py-2.5';
            $a_classes = 'hover:border-stroke-2 dark:hover:border-stroke-7 text-tagline-1 flex items-center gap-1 rounded-full border border-transparent px-4 py-2 font-normal transition-all duration-200 ' .
                ($is_current ? 'text-secondary dark:text-accent border-stroke-2' : 'text-secondary/60 dark:text-accent/60 hover:text-secondary dark:hover:text-accent');
        } elseif ($args->theme_location === 'footer-company-menu' || 'footer-policies-menu') {
            $li_classes = 'space-y-2';
            $a_classes = 'footer-link text-secondary dark:text-accent';
        } else {
            // Mobile Sidebar styles
            $li_classes = 'space-y-2';
            $a_classes = 'mobile-menu-toggle flex w-full cursor-pointer items-center justify-between py-2.5';
        }

        $output .= '<li class="' . esc_attr($li_classes) . '">';
        $output .= '<a href="' . esc_url($item->url) . '" class="' . esc_attr($a_classes) . '">';

        if ($args->theme_location !== 'primary-menu') {
            $output .= '<span class="text-secondary dark:text-accent text-tagline-1 block font-normal">' . esc_html($item->title) . '</span>';
        } else {
            $output .= '<span>' . esc_html($item->title) . '</span>';
        }

        $output .= '</a>';
    }
}
