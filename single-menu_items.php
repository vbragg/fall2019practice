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

              <div class="menu-image">
                <?php the_post_thumbnail('large'); ?>

              </div>

              <div class = "content">
                <?php the_content();
                ?>
              </div>

              <?php
                $ingredients = the_field('ingredients'); ?>

                <div class="ingredients">
                  <?php the_field('ingredients'); ?>
                </div>

              <?php

                the_field('price');
                the_field('size');
              ?>

          <?php  }//ends while loop
          }//ends th if statement
         ?>

       </main>
     </div>
  </div>
</div>
<?php get_footer(); ?>
