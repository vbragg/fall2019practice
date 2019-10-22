<!DOCTYPE html>
<html lang="en">
<head>
    <mta charset="utf-9" />
    <title><?php bloginfo('name'); ?> </title> <!--whatever is yoru title in the site settings will insert it inbetween these title tags-->

    <!--Link to Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto&display=swap" rel="stylesheet">

    <!--Link to style.css file-->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

    <?php wp_head(); ?>
  </head>

<body> <!--leave body open in header.php because you have seperate files for index, will be closed in footer.php -->
  <header>
    <div class= "container">
      <div class= "row">
        <div class="col-lg-3">
          <h1><a href = "<?php echo get_home_url(); ?>">Hello World!</a></h1>
        </div>

        <div class="col-lg-6 d-flex align-items-center" id="top-menu">
          <nav>
            <?php
            //telling it to not create link for every single page, menu through WP dashboard
            if(has_nav_menu('top-menu')){
              wp_nav_menu(array('theme_location' => 'top-menu' , 'container_class' => 'top-menu-class'));
            }else{
              echo "Please select a top menu through the dashboard";
            }
              ?>
          </nav>
        </div>

        <div class="col-lg-3"> <!--CHange this to add up to 12 when put bootstrap on other  things like nav-->
          <?php dynamic_sidebar('right-header'); ?>
        </div>
      </div> <!--container-->

  </header>
