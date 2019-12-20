<?php
/**
 * Template Name: blog
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Spritzer
 */

get_header();
?>

	<div id="primary" class="content-area col-md-8 animated fadeIn">
		<main id="main" class="site-main">

    <?php
      $args = array( 'posts_per_page' => 999 );
      $postslist = new WP_Query( $args );

    if ( $postslist->have_posts() ) :
      while ( $postslist->have_posts() ): $postslist->the_post(); 
    ?>

      <hr>
        <div class="row ">
          <div class="col-md-6">
            <a href="<?php echo the_permalink() ?>"><img src="<?php echo the_post_thumbnail_url() ?>" alt="blog image" class="post_thumbnail_image"></a>
          </div>
          <div class="col-md-6 mt-1">
            <div>
              <a href="<?php echo the_permalink() ?>"><h1 class="m-0 h4"><?php the_title(); ?> </h1></a>
              <div>Categories: <?php the_category(', ') ?> <br></div>
              <div><?php the_tags('<div><p class="badge badge-light mr-1">', '</p><p class="badge badge-light mr-1">', '</p></div>') ?></div>
              <div>Published <?php the_date(); ?>  </div>
              <p>Written by Content Cucumber</p>
            </div>
          </div>
          <div class="col-md-12 mt-4"><?php the_excerpt() ?></div>
        </div>
      <hr>

    <?php endwhile; ?>
    
    <div class="pagination">
    <?php
      the_posts_navigation();
    ?>
</div>

    <?php endif; ?>

		</main><!-- #main -->
		</div><!-- #primary -->
		<div class="col-md-4 mt-3"><?php get_sidebar(); ?></div>

<?php
get_footer();
