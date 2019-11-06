<?php /*Template Name: Search page */
 get_header(); ?>

<div class="container">
  <div class="row">
      <div class="col-md-12">
        <?php if(have_posts()){?>
          <h1><?php printf(__('Search Results for : %s'), '<span>' . get_search_query() . '</span>');?></h1>
          <?php while(have_posts()){
            the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_content();

          } //Ends while loop
        } //Ends if statement
      ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
