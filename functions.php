<?php
	function adv_theme_setup()
	{
		// Navigation
		register_nav_menus([
			'primary' => __('Primary'),
			'footer' => __('Footer')
		]);

		add_theme_support('post-thumbnails');
	}

	add_action("after_setup_theme", "adv_theme_setup");


	// Set excerpt length
	function set_excerpt_length()
	{
		return 35;
	}

	add_filter('excerpt_length', 'set_excerpt_length');