<?php

//load scripts to load styles
function load_scripts(){

    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
}

//calls function to load scripts
add_action('wp_enqueue_scripts', 'load_scripts');

