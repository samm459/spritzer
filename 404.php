<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Spritzer
 */

get_header();
?>

	<div id="primary" class="content-area col-md-8">
		<main id="main" class="site-main">

			<h1 class="">404</h1>
			<p>Sorry, this page doesn't exist. <hr> If you got here by clicking a link we provided, <a href="#">let us know</a>, and we will write you a free blog article! Broken links are terrible for SEO, find out why <a href="#">here</a>.</p>

		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="col-md-4 mt-4"><?php get_sidebar() ?></div>
<?php
get_footer();
