<?php /*Template Name: Archieve Page */

get_header();
?>

<div class="container">
  <div class="row">
    <main>
      <div class="col-md-12 individual-post">
      <?php if(have_posts()) {
        while(have_posts()){
          the_post();?>
          <div class="col-md-12">
            <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
            <p>Published on: <?php the_time('F j, Y'); ?></p>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink() ?>">Read More...</a>

          </div>
          <?php
        } //ends while loop
      } //ends if statement
      ?>
      </div>
    </main>
  </div>
</div>
<?php get_footer(); ?>
