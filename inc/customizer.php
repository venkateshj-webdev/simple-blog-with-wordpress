<?php
	function wpb_customize_register($wp_customize) {
		//Showcase Section
		$wp_customize->add_section('showcase', array(
			'title'       => __('Showcase', 'wpblog'),
			'description' => sprintf(__('Options for Showcase','wpblog')),
			'priority'    => 130
		));

		// Header image
		$wp_customize->add_setting('showcase_image',array(
			'default'  => get_bloginfo('template_directory') .'/images/banner.jpeg',
			'type'     => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'showcase_image',array(
			'label'    => __('Header Image','wpblog'),
			'section'  => 'showcase',
			'setting'  => 'showcase_image',
			'priority' => 1
		)));

		$wp_customize->add_setting('showcase_heading',array(
			'default'  => _x('MY BLOG PAGE','wpblog'),
			'type'     => 'theme_mod'
		));

		$wp_customize->add_control('showcase_heading', array(
			'label'    =>  __('Heading','wpblog'),
			'section'  => 'showcase',
			'priority' => 2
		));

		$wp_customize->add_setting('showcase_text',array(
			'default'  => _x('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam hic aut nulla quasi necessitatibus sint quibusdam possimus! Quis cumque quidem, explicabo reprehenderit sunt fuga voluptate aliquid eius, dolorum, voluptatibus nihil.','wpblog'),
			'type'     => 'theme_mod'
		));

		$wp_customize->add_control('showcase_text', array(
			'label'    =>  __('Text','wpblog'),
			'section'  => 'showcase',
			'priority' => 3
		));

		$wp_customize->add_setting('btn_text',array(
			'default'  => _x('Contact Me','wpblog'),
			'type'     => 'theme_mod'
		));

		$wp_customize->add_control('btn_text', array(
			'label'    =>  __('Button Text','wpblog'),
			'section'  => 'showcase',
			'priority' => 4
		));

		$wp_customize->add_setting('btn_url',array(
			'default'  => _x('www.google.com','wpblog'),
			'type'     => 'theme_mod'
		));

		$wp_customize->add_control('btn_url', array(
			'label'    =>  __('Button Url','wpblog'),
			'section'  => 'showcase',
			'priority' => 5
		));
	}

	add_action('customize_register','wpb_customize_register');
?>
