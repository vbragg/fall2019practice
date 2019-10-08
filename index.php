<?php get_header(); ?>
<div class="container">
  <div class="row">
    <?php
    if(have_posts()){
      while(have_posts()){
        thepost(); ?>
        <div class="col-md-3">
          <?php $title = get_the_title(); ?>
          <h3><?php echo $title; ?></h3>

          <p><?php echo "Published: " . get_the_date(); echo " | "; echo "Written by: " . get_the_author();?></p>
        </div>

    <?php  }// this is the end of the while loop
    }// ends if statement

     ?>
</div>


<?php get_footer(); ?>
