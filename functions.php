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
    'name'          => ('Right Header'),
    'id'            => 'right-header',
    'description'   => 'Right widget area in header',
    'before_widget' => '<div class="widget-header">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="header-widget-title">',
    'after_title'   => '</h3>'
  ));

  register_sidebar(array(
    'name'          => ('Hero Image'),
    'id'            => 'hero-image',
    'description'   => 'Hero image on the home page',
    'before_widget' => '<div class="widget-hero-image">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="hero-image-widget-title">',
    'after_title'   => '</h3>'
  ));

  register_sidebar(array(
    'name'          => ('About Us'),
    'id'            => 'about-us',
    'description'   => 'Home page about us',
    'before_widget' => '<div class="widget-about-us">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="about-us-widget-title">',
    'after_title'   => '</h3>'
  ));

  register_sidebar(array(
    'name'          => ('Default Sidebar'),
    'id'            => 'default-sidebar',
    'description'   => 'Default Sidebar area for template',
    'before_widget' => '<div class="widget-default-sidebar">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="default-sidebar-widget-title">',
    'after_title'   => '</h3>'
  ));

  register_sidebar(array(
    'name'          => ('Right Sidebar'),
    'id'            => 'right-sidebar',
    'description'   => 'Right Sidebar area for template',
    'before_widget' => '<div class="widget-right-sidebar">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="right-sidebar-widget-title">',
    'after_title'   => '</h3>'
  ));

  register_sidebar(array(
    'name'          => ('Left Sidebar'),
    'id'            => 'left-sidebar',
    'description'   => 'Left Sidebar area for template',
    'before_widget' => '<div class="widget-left-sidebar">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="left-sidebar-widget-title">',
    'after_title'   => '</h3>'
  ));

  register_sidebar(array(
    'name'          => ('Bottom left home page'),
    'id'            => 'bottom-left-home-page',
    'description'   => 'Bottom left section on the home page',
    'before_widget' => '<div class="widget-bottom-left">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="bottom-left-widget-title">',
    'after_title'   => '</h3>'
  ));

  register_sidebar(array(
    'name'          => ('Bottom middle home page'),
    'id'            => 'bottom-middle-home-page',
    'description'   => 'Bottom middle section on the home page',
    'before_widget' => '<div class="widget-bottom-middle">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="bottom-middle-widget-title">',
    'after_title'   => '</h3>'
  ));

  register_sidebar(array(
    'name'          => ('Bottom right home page'),
    'id'            => 'bottom-right-home-page',
    'description'   => 'Bottom right section on the home page',
    'before_widget' => '<div class="widget-bottom-right">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="bottom-right-widget-title">',
    'after_title'   => '</h3>'
  ));
}



add_action('widgets_init', 'blank_widgets_init');

/*****************************************************************************************
****************************************************************************************

remove action to remove errors

*****************************************************************************************
****************************************************************************************/
remove_action('shutdown', 'wp_ob_end_flush_all', 1 );

/*****************************************************************************************
****************************************************************************************

Add menus to theme

*****************************************************************************************
****************************************************************************************/

function register_my_menu(){
  register_nav_menus(
    array(
    'top-menu' => _('Top Menu'),
    'footer-left' => _('Left footer menu'),
    'footer-middle' => _('Middle footer menu'),
    'footer-right' => _('Right footer menu'),
      )
    );

}

add_action('init', 'register_my_menu');


 ?>
