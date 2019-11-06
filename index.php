<?php get_header(); ?>
<div class="container">
  <div class="row">
    <?php
    if(have_posts()){
      while(have_posts()){
        the_post(); ?>
        <div class="col-md-4">
          <div class= "post-padding">
            <h3><?php the_title(); ?></h3>
            <p>Category: <?php the_category(); ?></p>
          </div>

          <p>Published: <a href="<?php echo get_day_link($archive_year, $archive_month, $archive_day); ?>",<?php echo get_the_date(); ?></a></p>

          <?php the_excerpt(); ?>
          <?php
            $archive_year = get_the_time('Y');
            $archieve_month = get_the_time('m');
            $archive_day = get_the_time('d');
           ?>


          <a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>">Read More</a>

          <div class="post-featured-image">
            <?php the_post_thumbnail('thumbnail'); ?>
          </div>
        </div>

    <?php  }// this is the end of the while loop
    }// ends if statement

     ?>
</div>
</div>


<?php get_footer(); ?>
