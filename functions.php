<?php
	function adv_theme_setup()
	{
		// Navigation
		register_nav_menus([
			'primary' => __('Primary'),
			'footer' => __('Footer')
		]);

		// Post thumbnail support
		add_theme_support('post-thumbnails');

		// Post format support
		add_theme_support('post-formats', [
			'aside',
			'gallery',
			'link'
		]);
	}

	add_action("after_setup_theme", "adv_theme_setup");


	// Set excerpt length
	function set_excerpt_length()
	{
		return 35;
	}

	add_filter('excerpt_length', 'set_excerpt_length');

	// Get the parent page
	function get_top_parent()
	{
		global $post;
		if ($post->post_parent) {
			$ancestors = get_post_ancestors($post->ID);
			return $ancestors[0];
		}

		return $post->ID;
	}


	// Find weather page is parent
	function page_is_parent()
	{
		global $post;
		$pages = get_pages('child_of='.$post->ID);
		return count($pages);
	}

	// Widgets
	function init_widgets($id)
	{
		register_sidebar([
			'name' => 'Widget 1',
			'id' => 'widget-1',
			'before_widget' => '<div class="side-widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		]);

		register_sidebar([
			'name' => 'Showcase',
			'id' => 'showcase',
			'before_widget' => '<div class="showcase-widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		]);

		register_sidebar([
			'name' => 'First Box',
			'id' => 'box-1',
			'before_widget' => '<div class="box">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		]);

		register_sidebar([
			'name' => 'Second Box',
			'id' => 'box-2',
			'before_widget' => '<div class="box">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		]);

		register_sidebar([
			'name' => 'Third Box',
			'id' => 'box-3',
			'before_widget' => '<div class="box">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		]);
	}

	add_action('widgets_init', 'init_widgets');