<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <main>
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post(); ?>

              <h2 class="entry-title"><?php the_title(); ?></h2>

              <div class="">
                <?php the_post_thumbnail('large'); ?>

              </div>

              <p class="post-information"><?php echo "<span class='bold'>Published </span>" . get_the_date(); echo " | <span class= 'bold'>Written by: </span>" . get_the_author(); ?></p>

              <div class = "content">
                <?php the_content(); ?>
              </div>
          <?php  }//ends while loop
          }//ends th if statement
         ?>

       </main>

       <?php comments_template(); ?>

     </div>
  </div>
</div>
<?php get_footer(); ?>
