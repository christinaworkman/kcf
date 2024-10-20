<?php
/**
 * Enqueue parent and child theme styles
 */
function kadence_child_enqueue_styles() {
    // Enqueue parent theme styles
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Optionally enqueue child theme styles
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'kadence_child_enqueue_styles' );
