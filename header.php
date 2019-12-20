<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Spritzer
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MGFK87R');</script>
    <!-- End Google Tag Manager -->

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Content Cucumber is a content writing service that provides awesome, SEO friendly content for a flat monthly fee.">
    <meta name="keywords" content="Content Writing, SEO">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="https://js.chargebee.com/v2/chargebee.js" data-cb-site="contentcucumber" ></script>
    <?php wp_head(); ?>
</head>


<body id="body" <?php body_class(); ?>>

  <!-- Google Tage Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MGFK87R"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
<div id="page" class="site container">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'spritzer' ); ?></a>
	<header id="masthead" class="navbar navbar-expand-md navbar-light p-0">
		<div>
            <div style="width: 200px"> <?php the_custom_logo(); ?> </div>
				<?php
				$spritzer_description = get_bloginfo( 'description', 'display' );
				if ( $spritzer_description || is_customize_preview() ) :
					?>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
				<?php
						wp_nav_menu([
							"menu"							=> "primary",
							"theme_location" 		=> "primary",
							"container" 				=> "div",
							"container_id" 			=> "bs4navbar",
							"container_class" 	=> "collapse navbar-collapse",
							"menu_id" 					=> "main-menu",
							"menu_class" 				=> "navbar-nav ml-auto linkText",
							"depth" 						=> 2,
							"fallback_cb" 			=> "bs4navwalker::fallback",
							"walker" 						=> new bs4navwalker()
						])
					?>
	</header>
	<hr id="divider_on_mobile">

	<!-- Modal -->
	<div class="modal fade" id="accountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Your Content Cucumber Account</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body d-flex flex-column">
					<a class="btn btn-outline-primary mb-2" target="_blank" href="https://contentcucumber.jarhq.com"> Make A Content Request</a>
					<a class="btn btn-outline-primary" target="_blank" href="https://contentcucumber.chargebeeportal.com"> Manage Subscription</a>
				</div>
			</div>
		</div>
	</div>

	<div id="content" class="row">
