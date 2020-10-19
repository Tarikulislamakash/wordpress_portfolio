<?php


	// Enqueue Script

	function learnwp_scripts()
	{
		wp_enqueue_style( 'style', get_stylesheet_uri() );
	}

	add_action( 'wp_enqueue_scripts', 'learnwp_scripts' );




	// Get Top Ancestor Id

	function get_top_ancestor_id()
	{
		global $post;

		if( $post->post_parent )
		{
			$ancestors = array_reverse( get_post_ancestors( $post->ID ) );
			return $ancestors[0];
		}

		return $post->ID;
	}




	// Has Children

	function has_children()
	{
		global $post;

		$pages = get_pages( 'child_of=' . $post->ID );
		return count($pages);
	}




	// Excerpt Customize

	function new_excerpt_more( $more )
	{
		return ' <a class="read-more" style="background-color: #00284d; color: #fff; text-decoration:none; padding: 5px 10px; font-size: 90%; margin-left: 10px" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
	}

	add_filter( 'excerpt_more', 'new_excerpt_more' );




	//Theme Setup

	function learnwp_setup()
	{
		// Navigation Menu

		register_nav_menus( array(
			'primary' => __( 'Primary Menu' ),
			'footer' => __( 'Footer Menu' )
		) );

		// Add Feature Image

		add_theme_support( 'post-thumbnails' );
		add_image_size( 'small-thumbnail', 180, 120, true );
		add_image_size( 'banner-image', 1020, 210, array('top', 'left') );


		// Add Post Format Support

		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link' ) );

	}

	add_action('after_setup_theme', 'learnwp_setup');




	// Add Widget

	function ourWidgetsInit()
	{
		register_sidebar( array(
			'name'    => 'Sidebar',
			'id'      => 'sidebar1',
			'before_widget'   => '<div class="widget-item">',
			'after_widget'    => '</div>',
			'before_title'   => '<h4 class="my-special-class">',
			'after_title'    => '</h4>'
		));

		register_sidebar( array(
			'name'    => 'Footer Area 1',
			'id'      => 'footer1'
		));

		register_sidebar( array(
			'name'    => 'Footer Area 2',
			'id'      => 'footer2'
		));

		register_sidebar( array(
			'name'    => 'Footer Area 3',
			'id'      => 'footer3'
		));

		register_sidebar( array(
			'name'    => 'Footer Area 4',
			'id'      => 'footer4'
		));
	}

	add_action('widgets_init', 'ourWidgetsInit');

?>