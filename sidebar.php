<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Spritzer
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="animated fadeIn">
	<h2>Recent Posts</h2>
	<ul class="m-0 p-0" style="list-style: none;">
		<?php
			$recent_posts = wp_get_recent_posts(array('numberposts' => 5));
			foreach( $recent_posts as $recent ){
				echo '<li class="card shadow-sm p-2 my-2"><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
			}
			wp_reset_query();
		?>
	</ul>
	<?php
	$categories = get_categories( array(
			'orderby' => 'name',
			'order'   => 'ASC'
	) );
	
	?> <h1 class="m-0">Categories</h1> <?php
	foreach( $categories as $category ) {
			$category_link = sprintf( 
					'<a href="%1$s" alt="%2$s">%3$s</a>',
					esc_url( get_category_link( $category->term_id ) ),
					esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
					esc_html( $category->name )
			);
			echo  '<p class="m-0 ml-2 p-0">' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</p> ';
	} ?>
</aside><!-- #secondary -->
