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

         <div class="pagination-single">
           <?php next_post_link('%link', '<< Next Post'); ?>
         </div>

         <div class="pagination-single">
           <?php previous_post_link('%link', 'Previous Post >>'); ?>
         </div>

       </main>

       <?php
       if (comments_open() || get_comments_number()):
       comments_template();
     endif;


       ?>

     </div>
  </div>
</div>
<?php get_footer(); ?>
