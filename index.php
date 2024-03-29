<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Spritzer
 */

get_header();
?>

	<div id="primary" class="content-area col-md-8">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

  <?php
    if (is_page( 'Thanks For Signing Up' ) ):
      ?><script src="//contentcucumber.refersion.com/tracker/v3/pub_37d527fdf2a2ed77d169.js"></script><script>function rfsn_getQS(e){e=e.replace(/[\[]/,"\\[").replace(/[\]]/,"\\]");var t=new RegExp("[\\?&]"+e+"=([^&#]*)"),n=t.exec(location.search);return n==null?"":decodeURIComponent(n[1].replace(/\+/g," "))} if (rfsn_getQS('rfsn_ci')) { _refersion(function(){ _rfsn._addCart(rfsn_getQS('rfsn_ci')); _rfsn._setSource("CHARGEBEE"); });}</script><?
    endif;
  ?>

<div class="col-md-4"> <?php get_sidebar(); ?></div>
<?php get_footer();
