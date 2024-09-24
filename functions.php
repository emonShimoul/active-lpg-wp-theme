<?php


function activelpg_bootstrapping(){
    load_theme_textdomain("activelpg");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    add_theme_support("custom-header");
    register_nav_menu("mainmenu", __("Main Menu", "activelpg"));
    $alpha_custom_logo_defaults = array(
        "width" => '100',
        "height" => '100'
    );
    add_theme_support("custom-logo", $alpha_custom_logo_defaults);


    // for gutenberg
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'style-editor.css' ); // The file name can be customized if needed
}
add_action("after_setup_theme", "activelpg_bootstrapping");


function activelpg_assets(){
    wp_enqueue_style("activelpg", get_stylesheet_uri());
    wp_enqueue_style("bootstrap", "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
}
add_action("wp_enqueue_scripts", "activelpg_assets");