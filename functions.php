<?php
/**
 * Pie functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Pie
 * @since Pie 1.0
 */

if (!function_exists('pie_support')) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since Pie 1.0
     *
     * @return void
     */
    function pie_support()
    {
        // Enqueue editor styles.
        add_editor_style('style.css');

        // Make theme available for translation.
        load_theme_textdomain('pie');
    }

}

add_action('after_setup_theme', 'pie_support');

if (!function_exists('pie_styles')) {
    /**
     * Enqueue scripts and styles.
     *
     * @since Pie 1.0
     *
     * @return void
     */
    function pie_scripts()
    {
        // Register theme stylesheet.
        wp_register_style(
            'pie-style',
            get_template_directory_uri() . '/style.css',
            array(),
            wp_get_theme()->get('Version')
        );

        // Enqueue theme stylesheet.
        wp_enqueue_style('pie-style');

        // Register theme script.
        wp_register_script(
            'pie-script',
            get_template_directory_uri() . '/assets/js/script.js',
            array(),
            wp_get_theme()->get('Version')
        );

        // Enqueue theme script.
        wp_enqueue_script('pie-script');
    }
}

add_action('wp_enqueue_scripts', 'pie_scripts');
