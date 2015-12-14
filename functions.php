<?php
/**
 * Twenty Sixteen Child Theme
 *
 * Place any custom functionality/code snippets here.
 *
 * @package Twenty_Sixteen_Child
 * @since Twenty Sixteen Child 1.0
 */

/* Load i18n files from /languages folder, if present */

if ( ! function_exists( 'twentysixteen_child_setup' ) ) :

function twentysixteen_child_setup() {
    load_child_theme_textdomain( 'twentysixteen_child', get_stylesheet_directory() . '/languages' );
}
endif; // twentysixteen_child_setup

add_action( 'after_setup_theme', 'twentysixteen_child_setup' );


/* Enqueue the stylesheets */

function twentysixteen_child_scripts() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'twentysixteen_child_scripts');
