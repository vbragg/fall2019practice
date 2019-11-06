<?php /*Template Name: Search page */
 get_header(); ?>

<div class="container">
  <div class="row">
      <div class="col-md-12">
        <?php if(have_posts()){?>
          <h1><?php printf(__('Search Results for : %s'), '<span>' . get_search_query() . '</span>');?></h1>
          <?php while(have_posts()){
            the_post(); ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink() ?>">Read More...</a>
          <?php
          } //Ends while loop
        }else{?>
          <h1>Nothing was Found</h1>
          <p>Sorry but nothing matched your search criteria. Please try again with a different search term.</p><?php
        }
      ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
