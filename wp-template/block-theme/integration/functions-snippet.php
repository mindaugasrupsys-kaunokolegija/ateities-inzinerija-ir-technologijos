<?php
/**
 * Forum Demo page-template assets.
 * Merge this function into the active child theme's functions.php.
 */
function atit_forum_demo_enqueue_assets() {
    if ( ! is_page_template( 'templates/forum-demo.html' ) ) {
        return;
    }

    $relative_path = '/assets/forum-demo/';
    $directory     = get_stylesheet_directory() . $relative_path;
    $url           = get_stylesheet_directory_uri() . $relative_path;

    wp_enqueue_style(
        'atit-forum-demo',
        $url . 'styles.css',
        array(),
        file_exists( $directory . 'styles.css' ) ? filemtime( $directory . 'styles.css' ) : null
    );

    wp_enqueue_script(
        'atit-forum-demo',
        $url . 'app.js',
        array(),
        file_exists( $directory . 'app.js' ) ? filemtime( $directory . 'app.js' ) : null,
        true
    );
    wp_add_inline_script(
        'atit-forum-demo',
        'window.forumDemoAssetBase = ' . wp_json_encode( $url . 'assets/' ) . ';',
        'before'
    );
}
add_action( 'wp_enqueue_scripts', 'atit_forum_demo_enqueue_assets' );
