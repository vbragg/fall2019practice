<?php /*Template Name: Search pagw */
 get_header(); ?>

<h2> Search page under construction </h2>
<?php get_footer(); ?>

<div class="container">
  <div class="row">
      <div class="col-md-12">
        <?php if(have_posts()){?>
          <h1><?php printf(__('Search Results for : %s'),) '<span>' . get_search_query() . '</span>')?></h1>
          <?php while(have_posts()){
            the_post();
          } //Ends while loop
        } //Ends if statement
      ?>
    </div>
  </div>
</div>
