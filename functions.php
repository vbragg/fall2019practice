<?php
/*****************************************************************************************
****************************************************************************************

ADD STYLESHEET AND JAVASCRIPT create_function

*****************************************************************************************
****************************************************************************************/


function custom_theme_scripts(){

//bootstrap integration
wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

//main css file
wp_enqueue_style('main-styles', get_stylesheet_uri());


//Javascript filesize

wp_enqueue_script('custom-js',  get_template_directory_uri() . '/js/main.js');
wp_enqueue_script('bootstrap-js',  get_template_directory_uri() . '/js/bootstrap.min.js');

}

add_action('wp_enqueue_scripts','custom_theme_scripts');

/*****************************************************************************************
****************************************************************************************

Custom header logo

*****************************************************************************************
****************************************************************************************/
$custom_image_header = array (
  'width' => 225,
  'height' => 128,
  'uploads' => true,
);

add_theme_support('custom-header', $custom_image_header);

/* ****************************************************************************************
****************************************************************************************

Add featured image capability

*****************************************************************************************
*************************************************************************************** */

add_theme_support('post-thumbnails');



/*****************************************************************************************
****************************************************************************************

Add widget areas to theme

*****************************************************************************************
****************************************************************************************/

function blank_widgets_init(){
  register_sidebar(array(
    'name'=> ('Right Header'),
    'id'=> 'right-header',
    'description'=> 'Right widget area in header',
    'before_widget'=> '<div class="widget-header">',
    'after_widget'=> '</div>',
    'before_title'=> '<h3 class="header-widget-title">',
    'after_title'=> '</h3>'
  ));
}

add_action('widgets_init', 'blank_widgets_init');

remove_action('shutdown', 'wp_ob_end_flush_all', 1 );
 ?>
