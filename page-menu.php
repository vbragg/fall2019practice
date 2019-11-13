<?php
/*
Template Name: Menu Page
Template Post Type: page

*/
?>

<?php get_header(); ?>

<div class="container">
  <div class="row">
    <main class = "col-md-12">
      <?php $args = array('post_type' => 'menu_items', 'posts_per_page' => 4);

      $loop = new WP_Query($args);


      while($loop->have_posts()): $loop->the_post();   //to display loop ?>

      <div class="col-md-5">
        <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>

        <?php if(has_post_thumbnail()){
          the_post_thumbnail('medium');
        }?>
      </div>

      <div class="col-md-7">
        <div class="ingredients">
          <h3>Ingredients</h3>
          <?php the_field('ingredients'); ?>
        </div>

        <div class="price">
          <h3>Price</h3>
          <?php the_field('price'); ?>
        </div>

        <div class="size">
          <h3>Size</h3>
          <?php the_field('size'); ?>
        </div>

        <div class="vegan">
          <h3>Vegan available?</h3>
          <?php the_field('vegan'); ?>
        </div>
        <a href="<?php the_permalink();?>">Read More>></a>
      </div>


    <?php endwhile;?>
    </main>
  </div>
</div>
<?php get_footer(); ?>
