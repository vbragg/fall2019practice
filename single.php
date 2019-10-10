<?php get_header(); ?>

<div class="container">
  <div class="row">
    <main class = "col-md-12">
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post(); ?>

            <h2 class="entry-title"><?php the_title(); ?></h2>

            <p class="post-information"><?php echo "<span class='bold'>Published </span>" . get_the_date(); echo " | " echo "<span class= 'bold'>Written by</span> " . get_the_author(); ?></p>

            <?php the_content(); ?>
        <?php  }//ends while loop
        }//ends th if statement
       ?>
    </main>
  </div>
</div>
<?php get_footer(); ?>













    <?php
    if(have_posts()){
      while(have_posts()){
        thepost(); ?>
        <div class="col-md-3">
          <?php $title = get_the_title(); ?>
          <h3><?php echo $title; ?></h3>

          <div class="single-post-featured-image">
            <?php the_post_thumbnail('large'); ?>
          </div>

          <p><?php echo "Published: " . get_the_date(); echo " | "; echo "Written by: " . get_the_author();?></p>

          <?php the_date(); ?>
          <?php the_author(); ?>

          <?php the_content(); ?>


        </div>

    <?php  }// this is the end of the while loop
    }// ends if statement

     ?>
</div>

<?php get_footer(); ?>
