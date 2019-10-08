<?php
/*****************************************************************************************
****************************************************************************************

ADD STYLESHEET AND JAVASCRIPT create_function

*****************************************************************************************
****************************************************************************************/


function custom_theme_scripts(){

//bootstrap integration
//wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

//main css file
wp_enqueue_style('main-styles', get_stylesheet_uri());


}

add_action('wp_enqueue_scripts','custom_theme_scripts');

 ?>
