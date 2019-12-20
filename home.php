<?php 
/*
 * 
 *  This is the template for the front page.
 * 
 */
?>
<?
/*
 * 
 *  Header Section
 * 
 */
?>

<?php get_header() ?>
<img id="header_forground_image" src="<?php echo wp_get_attachment_url(get_theme_mod('spritzer_frontpage_content_header_forground_image'))?>" alt="">
<div id="front_page_header_section" style="background-image: url(<?php echo wp_get_attachment_url(get_theme_mod('spritzer_frontpage_content_header_background_image'))?>);" class="scroll-section m-auto d-flex flex-column justify-content-center">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md d-flex flex-column justify-content-center collapsable-container">
				<div>
					<h1 class="text-center your-ideas-header">
						<div id="typed-strings" class="extra-big-text">
							<h1><?php echo get_theme_mod( 'spritzer_frontpage_content_header_headline' ) ?></h1>
						</div>
						<span id="typed"></span>
					</h1>
				</div>
				<h2 id="introduction_block_text" class="h4 font-weight-light text-center"><?php echo get_theme_mod( 'spritzer_frontpage_content_header_body' ) ?></h2>
				<div class="d-flex justify-content-center">
					<a id="get_started_button" href="javascript:void(0)" data-cb-type="checkout" data-cb-plan-id="content-cucumber-subscription" class="btn-lg btn-primary mt-4">Get Started</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?
/*
 * 
 *  Explaination Section
 * 
 */
?>
<div class="scroll-section m-auto d-flex flex-column justify-content-center bg-white">
  <div class="content_container">
    <h1 class="display-4 text-center block-header"><?php echo get_theme_mod( 'spritzer_frontpage_content_explaination_header' ) ?></h1>
    <div class="row">
      <div class="col-md collapsable-container p-0 popup m-4"> 
        <div class="how_it_works_card">
          <img id="card1" class="animated invisible card-img-top" src="https://i.ibb.co/8mnRXYg/409812-You-Request-We-Create-You-Receive-03-041819.png" alt="Card image cap">
          <div class="how_it_words_card_body_container card-body p-0 text-dark">
            <h4 class="card-title text-center mt-2"><?php echo get_theme_mod( 'spritzer_frontpage_content_explaination_card1_header' ) ?></h4> <hr>
              <p class="text-center">
                
                <?php echo get_theme_mod( 'spritzer_frontpage_content_explaination_card1_body' ) ?>

            </p>
          </div>
        </div>
      </div>
      <div class="col-md m-4">
        <div class="how_it_works_card rounded collapsable-container p-0 popup2">
          <img id="card2" class="animated invisible card-img-top" src="https://i.ibb.co/gTj4Sbr/409812-You-Request-We-Create-You-Receive-01-041819.png " alt="Card image cap">
          <div class="card-body rounded how_it_words_card_body_container p-0 text-dark">
            <h4 class="card-title text-center mt-2"><?php echo get_theme_mod( 'spritzer_frontpage_content_explaination_card2_header' ) ?></h4> <hr>
            <p class="text-center" id ="how_it_works_block_we_create_card_text">
              
              <?php echo get_theme_mod( 'spritzer_frontpage_content_explaination_card2_body' ) ?>


            </p>
          </div>
        </div>
      </div>
      <div class="col-md m-4">
        <div class="how_it_works_card rounded collapsable-container p-0 popup3">
          <img id="card3" class="animated invisible card-img-top" src="https://i.ibb.co/rxSzYjX/409812-You-Request-We-Create-You-Receive-02-041819.png" alt="Card image cap">
          <div class="card-body how_it_words_card_body_container p-0 text-dark">
            <h4 class="card-title text-center mt-2">

              <?php echo get_theme_mod( 'spritzer_frontpage_content_explaination_card3_header' ) ?>

            </h4> <hr>
            <p class="text-center">
              
              <?php echo get_theme_mod( 'spritzer_frontpage_content_explaination_card3_body' ) ?>

            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<? 
/**
 * 
 * Our Work Section
 * 
 */ 
?>

<div class="scroll-section m-auto d-flex flex-column justify-content-center bg-white">
  <div class="content_container">
    <h1 class="display-4 text-center block-header">

      <?php echo get_theme_mod( 'spritzer_frontpage_content_our_work_header' ) ?>

    </h1>
    <div class="rounded collapsable-container">

    <?php
      $args = array( 'posts_per_page' => 1 );
      $postslist = new WP_Query( $args );

    if ( $postslist->have_posts() ) :
      while ( $postslist->have_posts() ): $postslist->the_post(); 
    ?>

      <hr>
        <div class="row fadeInBlog animated invisible m-1">
          <div class="col-md-6">
            <a href="<?php echo the_permalink() ?>"><img src="<?php echo the_post_thumbnail_url() ?>" alt="blog image" class="post_thumbnail_image"></a>
          </div>
          <div class="col-md-6 mt-1">
            <div>
              <h1 class="m-0 display-4"><?php the_title(); ?> </h1>
              <div>Categories: <?php the_category(', ') ?> <br></div>
              <div><?php the_tags('<div><p class="badge badge-light mr-1">', '</p><p class="badge badge-light mr-1">', '</p></div>') ?></div>
              <div>Published <?php the_date(); ?>  </div>
              <p>Written by Content Cucumber</p>
            </div>
          </div>
          <div class="col-md-12 mt-4"><?php the_excerpt() ?></div>
        </div>
      <hr>

      <?php
      endwhile;
      endif;
      ?>

      </div>
    </div>
  </div>
</div>

<span id="sign-up"></span>
<div  id="get-started" class="scroll-section m-auto d-flex flex-column justify-content-center bg-white">
  <div class="content_container">
    <h1 class="display-4 text-center">This is where it begins.</h1>
    <div>
    <p class="text-center">Build your brand authority with content on demand. Only $490/Month</p>
    <div class="d-flex justify-content-center ">
      <a id="get_started_button" href="javascript:void(0)" data-cb-type="checkout" data-cb-plan-id="content-cucumber-subscription" class="btn-lg btn-primary mt-4">Get Started</a>
    </div>
    </div>
      <?php get_footer(); ?>
    </div>
</div> 