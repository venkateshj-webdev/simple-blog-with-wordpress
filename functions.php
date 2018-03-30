<?php
	//WOREPRESS THEME MENU
	require_once('wp-bootstrap-navwalker.php');

	// THEME SETUP
	function wpb_theme_setup() {

		add_theme_support('post-thumbnails');
		//REGISTER MENU
		register_nav_menus( array(
			'primary' => __('Primary Menu')
		) );

		//SETUP POST FORMAT
		add_theme_support( 'post-formats', array('aside','gallery') );
	}

	add_action( 'after_setup_theme','wpb_theme_setup' );

	// EXCERPT CONTROL FUNCTIONS
	function set_excerpt_length() {
		return 45;
	}

	add_filter('excerpt_length', 'set_excerpt_length');

	// SIDEBAR WIDGETS
	function wpb_widget_init($id) {
		register_sidebar(array(
			'name'           => 'Sidebar',
			'id'             => 'sidebar',
			'before_widget'  => '<div class="card-body">',
			'after_widget'   => '</div>',
			'before_title'   => '<div class="card-title">',
			'after_title'    => '</div>'
		));

		register_sidebar( array(
			'name'          => 'web-dev-short-note',
			'id'            => 'box1',
			'before_widget' => '<div class="card-body">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="mb-2 mt-2">',
			'after_title'   => '</h4>'
 		) );

 		register_sidebar( array(
			'name'          => 'app-dev-short-note',
			'id'            => 'box2',
			'before_widget' => '<div class="card-body">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="mb-2 mt-2">',
			'after_title'   => '</h4>'
 		) );

 		register_sidebar( array(
			'name'          => 'CMS-dev-short-note',
			'id'            => 'box3',
			'before_widget' => '<div class="card-body">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="mb-2 mt-2">',
			'after_title'   => '</h4>'
 		) );
	}

	add_action('widgets_init','wpb_widget_init');

	//Customizer File
	require get_template_directory(). '/inc/customizer.php';

?>
