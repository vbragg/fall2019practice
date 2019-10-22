<?php
/*
Template Name: Home Page layout
Template Post Type: page

*/
?>

<?php get_header(); ?>

<div class="container">
  <main>
    <div class="row">
      <div class="col-md-12">
        <?php dynamic_sidebar('hero-image'); ?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <?php dynamic_sidebar('about-us'); ?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <?php dynamic_sidebar('bottom-left-home-page'); ?>
      </div>

      <div class="col-md-4">
        <?php dynamic_sidebar('bottom-middle-home-page'); ?>
      </div>

      <div class="col-md-4">
        <?php dynamic_sidebar('bottom-right-home-page'); ?>
      </div>
    </div>
  </main>
</div>
<?php get_footer(); ?>
