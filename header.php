<!DOCTYPE html>
<html lang="en">
<head>
    <mta charset="utf-9" />
    <title><?php bloginfo('name'); ?> </title> <!--whatever is yoru title in the site settings will insert it inbetween these title tags-->

    <!--Link to bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Link to style.css file-->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

    <?php wp_head(); ?>
  </head>

<body> <!--leave body open in header.php because you have seperate files for index, will be closed in footer.php -->
  <header class-"container">
    <div class="mx-auto py-4" style="width: 250px;">
      <h1><a href = "index.html">Hello World!</a></h1>
    </div>

  </header>
