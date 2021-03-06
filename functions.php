<?php
/*
 * Register sidebars
 */
function register_ai_child_starter_theme_sidebars() {
	
	register_sidebar(array( 
	   'name' => 'My Custom Sidebar',
	   'id'=>'my-custom-sidebar',
	   'before_widget' => '',
	   'after_widget' => '',
	   'before_title' => '',
	   'after_title' => ''
    ));

	register_sidebar(array( 
		'name' => 'Hp Slideshow',
		'id'=>'hp-slideshow',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	 ));

	register_sidebar(array( 
		'name' => 'Hp Header Logo',
		'id'=>'hp-header-logo',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	 ));

	register_sidebar(array( 
		'name' => 'Hp Header Burger',
		'id'=>'hp-header-burger',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	 ));

	register_sidebar(array( 
		'name' => 'Hp Burger Header',
		'id'=>'hp-burger-header',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	 ));

	register_sidebar(array( 
		'name' => 'Hp Burger Info',
		'id'=>'hp-burger-info',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	 ));

	register_sidebar(array( 
		'name' => 'Hp Slideshow Content',
		'id'=>'hp-slideshow-content',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	 ));

	register_sidebar(array( 
		'name' => 'Hp Featured Properties',
		'id'=>'hp-featured-properties',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	 ));

	register_sidebar(array( 
		'name' => 'Hp Welcome',
		'id'=>'hp-welcome',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	 ));

	 register_sidebar(array( 
		'name' => 'Hp Featured Video',
		'id'=>'hp-featured-video',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	 ));

	 register_sidebar(array( 
		'name' => 'Hp Neighborhood Guide',
		'id'=>'hp-neighborhood-guide',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	 ));

	 register_sidebar(array( 
		'name' => 'Hp Buy List',
		'id'=>'hp-buy-list',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	 ));

	 register_sidebar(array( 
		'name' => 'Hp Testimonials',
		'id'=>'hp-testimonials',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	 ));

	 register_sidebar(array( 
		'name' => 'Hp Contact',
		'id'=>'hp-contact',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	 ));

	 register_sidebar(array( 
		'name' => 'Hp Footer',
		'id'=>'hp-footer',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	 ));
	
}

add_action( 'widgets_init', 'register_ai_child_starter_theme_sidebars', 11 );

/*
 * Enqueue theme styles and scripts
 */
function ai_starter_theme_enqueue_child_assets() {
	
	/* Enqueue my scripts */
	wp_enqueue_script('aios-starter-theme-child-script', get_stylesheet_directory_uri(). '/js/scripts.js');

	// Fonts
	wp_enqueue_style('fonts-Montserrat','https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
	wp_enqueue_style('fonts-WorkSans','https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
	wp_enqueue_style('fonts-Inter','https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
}

add_action( 'wp_enqueue_scripts', 'ai_starter_theme_enqueue_child_assets', 11 );

/*
 * Add custom data attributes to menu items
 */
function ai_starter_theme_add_menu_link_attributes( $atts, $item, $args ) {
	$atts['data-title'] = $item->title;
	return $atts;
}

add_filter( 'nav_menu_link_attributes', 'ai_starter_theme_add_menu_link_attributes', 10, 3 );

/*
 * Add image sizes
 */
//add_image_size('cyclone-slide', 1024, 768, true);
 
/*
 * Define content width
 */
if ( ! isset( $content_width ) ) {
	$content_width = 960;
}