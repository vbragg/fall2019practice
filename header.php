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
  <header class-"container">
    <div class="mx-auto py-4" style="width: 250px;">
      <h1><a href = "<?php get_home_url(); ?>">Hello World!</a></h1>
    </div>

  </header>
