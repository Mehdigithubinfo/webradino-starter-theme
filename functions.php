<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * WebRadino Starter Theme setup.
 */
function webradino_setup() {

    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'webradino' ),
        )
    );
}

add_action( 'after_setup_theme', 'webradino_setup' );


/**
 * Enqueue theme styles.
 */
function webradino_enqueue_styles() {

    wp_enqueue_style(
        'webradino-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );
}

add_action( 'wp_enqueue_scripts', 'webradino_enqueue_styles' );