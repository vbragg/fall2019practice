<?php
/*
Template Name: Checkout Page Template
Template Post Type: page

*/
?>

<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class = "col-lg-12">
      <main>
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post(); ?>

              <h2 class="entry-title"><?php the_title(); ?></h2>

              <?php the_content(); ?>
          <?php  }//ends while loop
          }//ends th if statement
         ?>
     </main>
    </div>
  </div>
</div>
<?php get_footer(); ?>
