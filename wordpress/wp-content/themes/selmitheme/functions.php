<?php

//Load stylesheets
function selmitheme_register_styles(){

    $version = wp_get_theme()->get("Version");

    wp_enqueue_style("selmitheme-style", get_template_directory_uri() . "/style.css", array("selmitheme-bootstrap"), $version, "all");
    wp_enqueue_style("selmitheme-bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css", array(), "5.0.0", "all");
    wp_enqueue_style("selmitheme-fontawesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), "5.13.0", "all");
}

add_action( "wp_enqueue_scripts", "selmitheme_register_styles" );

//Load javascript
function selmitheme_register_scripts(){
    $version = wp_get_theme()->get("Version");

    wp_enqueue_script("selmitheme-bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js", array(), "5.0.0", true);
    wp_enqueue_script("selmitheme-jquery", get_template_directory_uri() . "/js/jquery-3.6.0.min.js", array("jquery"), "3.6.0", false);
    wp_enqueue_script("selmitheme-script", get_template_directory_uri() . "/js/script.js", array(), $version, true);
    

}

add_action( "wp_enqueue_scripts", "selmitheme_register_scripts" );

//Theme Options
function selmitheme_theme_support() {

    //adds dynamic title tag support
    add_theme_support("menus");
    add_theme_support("title-tag");
    add_theme_support("custom-logo");
    add_theme_support("post-thumbnails");
    
}

add_action("after_setup_theme", "selmitheme_theme_support");



//Menus
register_nav_menus(
    array(
            "top-menu" => "Top Menu",
            "mobile-menu" => "Mobile Menu",
    )
);
//add nav-link class to anchor tag in a menu
function add_link_atts($atts) {
    $atts['class'] = "nav-link";
    return $atts;
  }
  
add_filter( 'nav_menu_link_attributes', 'add_link_atts');

function selmitheme_widget_areas() {
    register_sidebar(
        array(
            "before_title" => "",
            "after_title" => "",
            "before_widget" => "",
            "after_widget" => "",
            "name" => "Footer Area",
            "id" => "footer-1",
            "description" => "Footer Widget Area"
        )
    );
}

add_action("widgets_init", "selmitheme_widget_areas");

// Custom Image Sizes
add_image_size("blog-large", 900, 400, false);
add_image_size("blog-small", 300, 200, true);

