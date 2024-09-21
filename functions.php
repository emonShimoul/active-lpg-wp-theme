<?php


function activelpg_bootstrapping(){
    load_theme_textdomain("activelpg");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    $alpha_custom_logo_defaults = array(
        "width" => '100',
        "height" => '100'
    );
    add_theme_support("custom-logo", $alpha_custom_logo_defaults);
}
add_action("after_setup_theme", "activelpg_bootstrapping");

function activelpg_assets(){
    wp_enqueue_style("activelpg", get_stylesheet_uri());
    wp_enqueue_style("bootstrap", "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
}
add_action("wp_enqueue_scripts", "activelpg_assets");