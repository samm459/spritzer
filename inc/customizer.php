<?php
/**
 * Spritzer Theme Customizer
 *
 * @package Spritzer
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function spritzer_customize_register( $wp_customize ) {

	/**
	 * 
	 * Add customizer panels
	 * 
	 */

	$wp_customize->add_panel( 'spritzer_frontpage_content', array(
		'title' => 'Front Page'
	));

	/**
	 * 
	 * Section: Front Page Header
	 * Panel: Front Page
	 * 
	 */
	$wp_customize->add_section( 'spritzer_frontpage_content_header', array(
		'title' => 'Header',
		'panel' => 'spritzer_frontpage_content'
	));
	$wp_customize->add_section( 'spritzer_frontpage_content_explaination', array(
		'title' => 'Explaination Section',
		'panel' => 'spritzer_frontpage_content'
	));
	$wp_customize->add_section( 'spritzer_frontpage_content_our_work', array(
		'title' => 'Our Work Section',
		'panel' => 'spritzer_frontpage_content'
	));
	$wp_customize->add_section( 'spritzer_frontpage_content_funnel', array(
		'title' => 'Funnel',
		'panel' => 'spritzer_frontpage_content'
	));
	/**
	 * 
	 * Section: Front Page Header
	 * Setting: spritzer_frontpage_content_header_headline
	 * Control:  Header Headline
	 * 
	 */
	$wp_customize->add_setting( 'spritzer_frontpage_content_header_headline', array(
		'default'=> ''
	));
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'spritzer_frontpage_content_header_headline_control', array(
		'label' => 'Header Headline',
		'section' => 'spritzer_frontpage_content_header',
		'settings' => 'spritzer_frontpage_content_header_headline'
	)));

	/**
	 * 
	 * Section: Front Page Header
	 * setting: spritzer_frontpage_content_header_body
	 * Control:  Header Body
	 * 
	 */
	$wp_customize->add_setting( 'spritzer_frontpage_content_header_body', array(
		'default'=> ''
	));
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'spritzer_frontpage_content_header_body_control', array(
		'label' => 'Header Body',
		'section' => 'spritzer_frontpage_content_header',
		'settings' => 'spritzer_frontpage_content_header_body'
	)));

	/**
	 * 
	 * Section: Front Page Header
	 * Control:  Header Background Image
	 * 
	 */
	$wp_customize->add_setting( 'spritzer_frontpage_content_header_background_image');

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'spritzer_frontpage_content_header_background_image_control', array(
		'label' => 'Header Background Image',
		'section' => 'spritzer_frontpage_content_header',
		'settings' => 'spritzer_frontpage_content_header_background_image',
		'width' => 5000,
		'height' => 3000
	)));

	/**
	 * 
	 * Section: Front Page Header
	 * Control:  Header forground image
	 * 
	 */
	$wp_customize->add_setting( 'spritzer_frontpage_content_header_forground_image');

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'spritzer_frontpage_content_header_forground_image_control', array(
		'label' => 'Header Forground Image',
		'section' => 'spritzer_frontpage_content_header',
		'settings' => 'spritzer_frontpage_content_header_forground_image',
		'width' => 5000,
		'height' => 2000
	)));

	/**
	 * 
	 * Section: Front Page Header
	 * Control: Explaination Header
	 * 
	 */
	$wp_customize->add_setting( 'spritzer_frontpage_content_explaination_header', array(
		'default'=> ''
	));
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'spritzer_frontpage_content_explaination_header_control', array(
		'label' => 'Explaination Section Header',
		'section' => 'spritzer_frontpage_content_explaination',
		'settings' => 'spritzer_frontpage_content_explaination_header'
	)));

	/**
	 * 
	 * Section: Front Page Header
	 * Control: Explaination Card One Header
	 * 
	 */
	$wp_customize->add_setting( 'spritzer_frontpage_content_explaination_card1_header', array(
		'default'=> ''
	));
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'spritzer_frontpage_content_explaination_card1_header_control', array(
		'label' => 'Explaination Card One Header',
		'section' => 'spritzer_frontpage_content_explaination',
		'settings' => 'spritzer_frontpage_content_explaination_card1_header'
	)));

		/**
	 * 
	 * Section: Front Page
	 * Control: Explaination Card One Body
	 * 
	 */
	$wp_customize->add_setting( 'spritzer_frontpage_content_explaination_card1_body', array(
		'default'=> ''
	));
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'spritzer_frontpage_content_explaination_card1_body_control', array(
		'label' => 'Explaination Card One body',
		'section' => 'spritzer_frontpage_content_explaination',
		'settings' => 'spritzer_frontpage_content_explaination_card1_body'
	)));

		/**
	 * 
	 * Section: Front Page
	 * Control: Explaination Card Two Header
	 * 
	 */
	$wp_customize->add_setting( 'spritzer_frontpage_content_explaination_card2_header', array(
		'default'=> ''
	));
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'spritzer_frontpage_content_explaination_card2_header_control', array(
		'label' => 'Explaination Card Two Header',
		'section' => 'spritzer_frontpage_content_explaination',
		'settings' => 'spritzer_frontpage_content_explaination_card2_header'
	)));

		/**
	 * 
	 * Section: Front Page
	 * Control: Explaination Card Two Body
	 * 
	 */
	$wp_customize->add_setting( 'spritzer_frontpage_content_explaination_card2_body', array(
		'default'=> ''
	));
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'spritzer_frontpage_content_explaination_card2_body_control', array(
		'label' => 'Explaination Card Two body',
		'section' => 'spritzer_frontpage_content_explaination',
		'settings' => 'spritzer_frontpage_content_explaination_card2_body'
	)));

			/**
	 * 
	 * Section: Front Page
	 * Control: Explaination Card Three Header
	 * 
	 */
	$wp_customize->add_setting( 'spritzer_frontpage_content_explaination_card3_header', array(
		'default'=> ''
	));
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'spritzer_frontpage_content_explaination_card3_header_control', array(
		'label' => 'Explaination Card Three Header',
		'section' => 'spritzer_frontpage_content_explaination',
		'settings' => 'spritzer_frontpage_content_explaination_card3_header'
	)));

	/**
	 * 
	 * Section: Front Page
	 * Control: Explaination Card Three  Body
	 * 
	 */
	$wp_customize->add_setting( 'spritzer_frontpage_content_explaination_card3_body', array(
		'default'=> ''
	));
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'spritzer_frontpage_content_explaination_card3_body_control', array(
		'label' => 'Explaination Card Three body',
		'section' => 'spritzer_frontpage_content_explaination',
		'settings' => 'spritzer_frontpage_content_explaination_card3_body'
	)));

	/**
	 * 
	 * Section: Front Page
	 * Control: OUr Work Section Header
	 * 
	 */
	$wp_customize->add_setting( 'spritzer_frontpage_content_our_work_header', array(
		'default'=> ''
	));
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'spritzer_frontpage_content_our_word_header_control', array(
		'label' => 'Our Work Section Header',
		'section' => 'spritzer_frontpage_content_our_work',
		'settings' => 'spritzer_frontpage_content_our_work_header'
	)));

	/**
	 * 
	 * Section: Front Page
	 * Control: 
	 * 
	 */
	$wp_customize->add_setting( 'spritzer_frontpage_content_funnel_link', array(
		'default'=> '#'
	));
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'spritzer_frontpage_content_funnel_link', array(
		'label' => 'Funnel Link',
		'section' => 'spritzer_frontpage_content_funnel',
		'settings' => 'spritzer_frontpage_content_funnel_link'
	)));


	/**
	 * 
	 * Underscores defaults
	 * 
	 */

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'spritzer_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'spritzer_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'spritzer_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function spritzer_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function spritzer_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function spritzer_customize_preview_js() {
	wp_enqueue_script( 'spritzer-customizer', get_template_directory_uri() . '/dist/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'spritzer_customize_preview_js' );
