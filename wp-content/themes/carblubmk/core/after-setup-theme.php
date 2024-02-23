<?php

if(function_exists('theme_setup_functions'))
{
    function theme_setup_functions(){
        
    }
    add_action('after_setup_theme','theme_setup_functions');
}

add_action('wp_enqueue_scripts','carclub_script');
function carclub_script(){
    wp_enqueue_style( 'carclub-styles', get_template_directory_uri().'/assets/style.css' );
}