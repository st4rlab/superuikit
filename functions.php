<?php
if ( ! function_exists( 'super_uikit_theme_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support for post thumbnails.
     */
    function super_uikit_theme_setup() {
        /**
         * Add default posts and comments RSS feed links to <head>.
         */
        add_theme_support( 'automatic-feed-links' );

        /**
         * Enable support for post thumbnails and featured images.
         */
        add_theme_support( 'post-thumbnails' );

        add_theme_support( 'editor-styles' );

        add_theme_support( 'wp-block-styles' );
    }
endif;
add_action( 'after_setup_theme', 'super_uikit_theme_setup' );

/**
 * Enqueue theme scripts and styles.
 */
function super_uikit_theme_scripts() {
    wp_enqueue_style( 'super-uikit-style', get_stylesheet_uri() );
    wp_enqueue_style( 'super-uikit-style', get_template_directory_uri() . '/assets/css/uikit-min.css', array(), wp_get_theme()->get( 'Version' ) );
    // Include Uikit js.
    wp_enqueue_script(
      'super-uikit-uikit-js',
      get_template_directory_uri() . '/assets/js/uikit.min.js',
      array(),
      wp_get_theme()->get( 'Version' ),
      false
    );
    wp_enqueue_script(
      'super-uikit-uikit-icons-js',
      get_template_directory_uri() . '/assets/js/uikit-icons.min.js',
      array(),
      wp_get_theme()->get( 'Version' ),
      false
    );
}
add_action( 'wp_enqueue_scripts', 'super_uikit_theme_scripts' );
