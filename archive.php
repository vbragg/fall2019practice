<?php /*Template Name: Archieve Page */

get_header();
?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <main>
      <?php if(have_posts()) {
        while(have_posts()){
          the_post();?>
          <div class="col-md-12">
            <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
            <p><?php the_time('F j, Y'); ?></p>
          </div>
          <?php
        } //ends while loop
      } //ends if statement
      ?>
      </main>
    </div>
  </div>
</div>
<?php get_footer(); ?>
