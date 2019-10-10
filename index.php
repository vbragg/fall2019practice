<?php get_header(); ?>
<div class="container">
  <div class="row">
    <?php
    if(have_posts()){
      while(have_posts()){
        the_post(); ?>
        <div class="col-md-4">
          <h3><?php the_title(); ?></h3>

          <p><?php echo "Published: " . get_the_date(); echo " | "; echo "Written by: " . get_the_author();?></p>

          <div class="post-featured-image">
            <?php the_post_thumbnail('thumbnail'); ?>
          </div>
          <?php the_excerpt(); ?>


          <a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>">Read More</a>
        </div>

    <?php  }// this is the end of the while loop
    }// ends if statement

     ?>
</div>
</div>


<?php get_footer(); ?>
