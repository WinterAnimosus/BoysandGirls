<?php
    function register_my_menu() {
        register_nav_menu('header-menu',__( 'Header Menu' ));
      }
      add_action( 'init', 'register_my_menu' );
    if ( ! function_exists( 'twentyfifteen_setup' ) ) :
    function bgc_setup() {
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 825, 510, true );
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
        add_theme_support( 'post-formats', array(
            'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'));
        add_theme_support( 'custom-logo', array(
            'height'      => 248,
            'width'       => 248,
            'flex-height' => true,
        ) );
        add_theme_support( 'custom-background', apply_filters( 'twentyfifteen_custom_background_args', array(
            'default-color'      => $default_color,
            'default-attachment' => 'fixed',
        ) ) );
        add_theme_support( 'customize-selective-refresh-widgets' );
    }
    endif;
    add_action( 'after_setup_theme', 'bgc_setup' );