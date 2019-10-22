<?php
/*
Template Name: Home Right Sidebar
Template Post Type: page, post

*/
?>

<?php get_header(); ?>

<div class="container">
  <div class="row">
    <main class = "col-md-9">
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

    <aside class="col-md-3"> 
      <?php get_sidebar(); ?>

    </aside>
  </div>
</div>
<?php get_footer(); ?>
