<?php

///////////////////////////////////////////
// You may add your custom functions here
///////////////////////////////////////////

function elr_theme_languages()
{
    locate_template( array( 'includes/functions/_elr-theme-languages.php' ), true, true );
}
add_action( 'after_setup_theme', 'elr_theme_languages' );

function elr_post_thumbnails()
{
    locate_template( array( 'includes/functions/_elr-post-thumbnails.php' ), true, true );
}
add_action( 'after_setup_theme', 'elr_post_thumbnails' );

function elr_main_navigation()
{
    locate_template( array( 'includes/functions/_elr-main-navigation.php' ), true, true );
}
add_action( 'after_setup_theme', 'elr_main_navigation' );

function elr_register_sidebars()
{
    locate_template( array( 'includes/functions/_elr-register-sidebars.php' ), true, true );
}
add_action( 'after_setup_theme', 'elr_register_sidebars' );

function elr_post_navigation()
{
    locate_template( array( 'includes/functions/_elr-post-navigation.php' ), true, true );
}
add_action( 'after_setup_theme', 'elr_post_navigation' );

function elr_page_navigation()
{
    locate_template( array( 'includes/functions/_elr-page-navigation.php' ), true, true );
}
add_action( 'after_setup_theme', 'elr_page_navigation' );

function elr_custom_theme_comment()
{
    locate_template( array( 'includes/functions/_elr-custom-theme-comment.php' ), true, true );
}
add_action( 'after_setup_theme', 'elr_custom_theme_comment' );

function elr_read_more()
{
    locate_template( array( 'includes/functions/_elr-read-more.php' ), true, true );
}
add_action( 'after_setup_theme', 'elr_read_more' );

function elr_theme_options()
{
    locate_template( array( 'includes/functions/_elr-theme-options.php' ), true, true );
}
add_action( 'after_setup_theme', 'elr_theme_options' );

function tgm_plugin_activation()
{
    locate_template( array( 'includes/functions/_tgm-plugin-activation.php' ), true, true );
}
add_action( 'after_setup_theme', 'tgm_plugin_activation' );