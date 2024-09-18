<?php

function activelpg_bootstrapping(){
    load_theme_textdomain("activelpg");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
}
add_action("after_setup_theme", "activelpg_bootstrapping");

// to load css and bootstrap file
function alpha_assets(){
    wp_enqueue_style("activelpg", get_stylesheet_uri());
    wp_enqueue_style("bootstrap", "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
}
add_action("wp_enqueue_scripts", "activelpg_assets");