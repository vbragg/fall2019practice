<!DOCTYPE html>
<html lang="en">
<head>
    <mta charset="utf-9" />
    <title><?php bloginfo('name'); ?> </title> <!--whatever is yoru title in the site settings will insert it inbetween these title tags-->

    <!--Link to style.css file-->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

    <?php wp_head(); ?>
  </head>

<body> <!--leave body open in header.php because you have seperate files for index, will be closed in footer.php -->
  <header class-"container">
    <h1>Hello World!</h1>

  </header>
