<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
	$parenthandle = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
	$theme = wp_get_theme();

	wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
		array(),  // if the parent theme code has a dependency, copy it to here
		$theme->parent()->get('Version')
	);
	wp_enqueue_style( 'child-style', get_stylesheet_uri(),
	array( $parenthandle ),
	$theme->get('Version') // this only works if you have Version in the style header
	);

	wp_enqueue_style( 'bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css",
		array()
	);

	wp_enqueue_style( 'font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css",
		array()
	);
}

function my_custom_scripts() {
	wp_enqueue_script( 'bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js','','',true );
}

add_action( 'wp_enqueue_scripts', 'my_custom_scripts' );

/**
 * Register footer widget area.
 *
 * @since Twenty twenty one Child 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function twentyfifteen_child_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Navigation Produk Lainnya', 'twentytwentyone-child' ),
		'id'            => 'nav-header-1',
		'description'   => __( 'Add widgets here to appear in your Jenjang Navigation area.', 'twenty-fifteen-child' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action( 'widgets_init', 'twentyfifteen_child_widgets_init' );

?>