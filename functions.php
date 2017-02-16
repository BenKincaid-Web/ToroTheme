<?php
/**
 * ToroAMA functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ToroAMA
 */

if ( ! function_exists( 'toroama_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function toroama_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on ToroAMA, use a find and replace
	 * to change 'toroama' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'toroama', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'toroama' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'toroama_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'toroama_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function toroama_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'toroama_content_width', 640 );
}
add_action( 'after_setup_theme', 'toroama_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function toroama_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'toroama' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'toroama' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'toroama_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function toroama_scripts() {
	wp_enqueue_style( 'toroama-style', get_stylesheet_uri() );

	wp_enqueue_script( 'toroama-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'toroama-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'toroama_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';




function wpb_lastupdated_posts() { 

    // Query Arguments
    $lastupdated_args = array(
    'orderby' => 'modified',
    'ignore_sticky_posts' => '1'
    );

    //Loop to display 5 recently updated posts
    $lastupdated_loop = new WP_Query( $lastupdated_args );
    $counter = 1;
    $string .= '<ul>';
    while( $lastupdated_loop->have_posts() && $counter < 5 ) : $lastupdated_loop->the_post();
    $string .= '<li><a href="' . get_permalink( $lastupdated_loop->post->ID ) . '"> ' .get_the_title( $lastupdated_loop->post->ID ) . '</a> ( '. get_the_modified_date() .') </li>';
    $counter++;
    endwhile; 
    $string .= '</ul>';
    return $string;
    wp_reset_postdata(); 
    } 

    //add a shortcode
    add_shortcode('lastupdated-posts', 'wpb_lastupdated_posts');

