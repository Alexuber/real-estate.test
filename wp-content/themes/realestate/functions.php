<?php
/**
 * Real Estate functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Real_Estate
 */


 // подключаем стили css  с шаблона
 function realestate_enqueue_style() {
	wp_enqueue_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800', '1.0.1', 'all' );
    wp_enqueue_style( 'realestate-normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), '1.0.1', 'all' );
	wp_enqueue_style( 'realestate-font-awesome.min', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.1', 'all' );
	wp_enqueue_style( 'realestate-fontello', get_template_directory_uri() . '/assets/css/fontello.css', array(), '1.0.1', 'all' );
	wp_enqueue_style( 'realestate-pe-icon-7-stroke', get_template_directory_uri() . '/assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css', array(), '1.0.1', 'all' );
	wp_enqueue_style( 'realestate-pe-icon-7-stroke', get_template_directory_uri() . 'assets/fonts/icon-7-stroke/css/helper.css', array(), '1.0.1', 'all' );
	wp_enqueue_style( 'realestate-animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0.1', 'all' );
	wp_enqueue_style( 'realestate-bootstrap-select.min', get_template_directory_uri() . '/assets/css/bootstrap-select.min.css', array(), '1.0.1', 'all' );
	wp_enqueue_style( 'realestate-bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.1', 'all' );
	wp_enqueue_style( 'realestate-icheck.min_all', get_template_directory_uri() . '/assets/css/icheck.min_all.css', array(), '1.0.1', 'all' );
	wp_enqueue_style( 'realestate-price-range', get_template_directory_uri() . '/assets/css/price-range.css', array(), '1.0.1', 'all' );
	wp_enqueue_style( 'realestate-owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0.1', 'all' );
	wp_enqueue_style( 'realestate-owl.theme', get_template_directory_uri() . '/assets/css/owl.theme.css', array(), '1.0.1', 'all' );
	wp_enqueue_style( 'realestate-owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0.1', 'all' );
	wp_enqueue_style( 'realestate-owl.transitions', get_template_directory_uri() . '/assets/css/owl.transitions.css', array(), '1.0.1', 'all' );
	wp_enqueue_style( 'realestate-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.1', 'all' );
	wp_enqueue_style( 'realestate-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.1', 'all' );

 }

 add_action( 'wp_enqueue_scripts', 'realestate_enqueue_style');

// подключаем скрипты js  с шаблона
 function realestate_enqueue_scripts() {
    wp_enqueue_script( 'modernizr-2.6.2.min', get_template_directory_uri() . '/assets/js/modernizr-2.6.2.min.js', 
		array(), '1.0.1', 'all' );
    wp_enqueue_script( 'jquery-1.10.2.min', get_template_directory_uri() . '/assets/js/jquery-1.10.2.min.js', 
		array('modernizr-2.6.2.min'), '1.0.1', 'all' );
    wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', 
		array('jquery-1.10.2.min', 'modernizr-2.6.2.min'), '1.0.1', 'all' );
    wp_enqueue_script( 'bootstrap-select.min', get_template_directory_uri() . '/assets/js/bootstrap-select.min.js', 
		array('jquery-1.10.2.min', 'bootstrap.min'), '1.0.1', 'all' );
    wp_enqueue_script( 'bootstrap-hover-dropdown', get_template_directory_uri() . '/assets/js/bootstrap-hover-dropdown.js', 
		array('jquery-1.10.2.min', 'bootstrap.min', 'bootstrap-select.min'), '1.0.1', 'all' );
    wp_enqueue_script( 'easypiechart.min', get_template_directory_uri() . '/assets/js/easypiechart.min.js', 
		array('jquery-1.10.2.min', 'bootstrap.min', 'bootstrap-select.min', 'bootstrap-hover-dropdown'), '1.0.1', 'all' );
    wp_enqueue_script( 'jquery.easypiechart.min', get_template_directory_uri() . '/assets/js/jquery.easypiechart.min.js', 
		array('jquery-1.10.2.min', 'bootstrap.min', 'bootstrap-select.min', 'bootstrap-hover-dropdown', 'easypiechart.min'), '1.0.1', 'all' );
    wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', 
		array('jquery-1.10.2.min', 'bootstrap.min', 'bootstrap-select.min', 'bootstrap-hover-dropdown', 'easypiechart.min', 
		'jquery.easypiechart.min'), '1.0.1', 'all' );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', 
		array('jquery-1.10.2.min', 'bootstrap.min', 'bootstrap-select.min', 'bootstrap-hover-dropdown', 'easypiechart.min', 
		'jquery.easypiechart.min', 'owl.carousel.min'), '1.0.1', 'all' );
    wp_enqueue_script( 'icheck', get_template_directory_uri() . '/assets/js/icheck.min.js', 
		array('jquery-1.10.2.min', 'bootstrap.min', 'bootstrap-select.min', 'bootstrap-hover-dropdown', 'easypiechart.min', 
		'jquery.easypiechart.min', 'owl.carousel.min', 'wow'), '1.0.1', 'all' );
    wp_enqueue_script( 'price-range', get_template_directory_uri() . '/assets/js/price-range.js', 
		array('jquery-1.10.2.min', 'bootstrap.min', 'bootstrap-select.min', 'bootstrap-hover-dropdown', 'easypiechart.min', 
		'jquery.easypiechart.min', 'owl.carousel.min', 'wow', 'icheck'), '1.0.1', 'all' );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', 
		array('jquery-1.10.2.min', 'bootstrap.min', 'bootstrap-select.min', 'bootstrap-hover-dropdown', 'easypiechart.min', 
		'jquery.easypiechart.min', 'owl.carousel.min', 'wow', 'icheck', 'price-range'), '1.0.1', 'all' );
 }


 add_action( 'wp_enqueue_scripts', 'realestate_enqueue_scripts');

// подключаем мета-линки с хедера с шаблона
function realestate_enqueue_links() {

	echo '<title>GARO ESTATE | Home page</title>';
	echo '<meta name="description" content="GARO is a real-estate template">';
	echo '<meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">';
	echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
	// Place favicon.ico and apple-touch-icon.png in the root directory -->
	echo  '<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">';
	echo  '<link rel="icon" href="favicon.ico" type="image/x-icon">';
}

add_action( 'wp_head', 'realestate_enqueue_links');

	// This theme uses wp_nav_menu() in one location.
	// регистрируем меню
function realestate_theme_init(){
	register_nav_menus( array(
	  'header_nav' => 'Header menu',
	  'footer_nav' => 'Footer menu',
	) );

	// load language directory
	load_theme_textdomain( 'real-estate', get_template_directory() . '/languages' );

	}
	// выводим меню
	add_action('after_setup_theme', 'realestate_theme_init');

function realestate_register_post_type_property() {

	// register taxonomy 'cities'
	
		$labels = array(
			'name'              => esc_html_x( 'Cities', 'taxonomy general name', 'textdomain' ),
			'singular_name'     => esc_html_x( 'City', 'taxonomy singular name', 'textdomain' ),
			'search_items'      => esc_html__( 'Search Cities', 'textdomain' ),
			'all_items'         => esc_html__( 'All Cities', 'textdomain' ),
			'parent_item'       => esc_html__( 'Parent City', 'textdomain' ),
			'parent_item_colon' => esc_html__( 'Parent City:', 'textdomain' ),
			'edit_item'         => esc_html__( 'Edit City', 'textdomain' ),
			'update_item'       => esc_html__( 'Update City', 'textdomain' ),
			'add_new_item'      => esc_html__( 'Add New City', 'textdomain' ),
			'new_item_name'     => esc_html__( 'New City Name', 'textdomain' ),
			'menu_name'         => esc_html__( 'Cities', 'textdomain' )
		);
	
		$arguments = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'cities' ),
		);
	register_taxonomy('cities', array('property'), $arguments);
		// очищаем массив аргументов
	unset($arguments);

	// register taxonomy 'features'
	
	$labels = array(
		'name'              => esc_html_x( 'Features', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => esc_html_x( 'Feature', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => esc_html__( 'Search Features', 'textdomain' ),
		'all_items'         => esc_html__( 'All Features', 'textdomain' ),
		'parent_item'       => esc_html__( 'Parent Feature', 'textdomain' ),
		'parent_item_colon' => esc_html__( 'Parent Feature:', 'textdomain' ),
		'edit_item'         => esc_html__( 'Edit Feature', 'textdomain' ),
		'update_item'       => esc_html__( 'Update Feature', 'textdomain' ),
		'add_new_item'      => esc_html__( 'Add New Feature', 'textdomain' ),
		'new_item_name'     => esc_html__( 'New Feature Name', 'textdomain' ),
		'menu_name'         => esc_html__( 'Features', 'textdomain' )
	);

	$arguments = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'features' ),
	);
register_taxonomy('cities', array('property'), $arguments);
	// очищаем массив аргументов
unset($arguments);
	
	$args = [
		'label' => esc_html__('Properties', 'realestate'),
		'public' => true,
		'has_archive' => true,
		'show_in_menu' => true,
		'menu_icon' => 'dashicons-admin-home',
		'supports' => [	'title',
						'editor',
						'thumbnail',
						'excerpt',
						'custom-fields'],
						
		'rewrite' => array('slug' => 'properties')
];


	register_post_type('Property', $args);
}
add_action('init', 'realestate_register_post_type_property');








if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}



/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function real_estate_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Real Estate, use a find and replace
		* to change 'real-estate' to the name of your theme in all the template files.
		*/
	

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

	

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'real_estate_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'real_estate_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function real_estate_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'real_estate_content_width', 640 );
}
add_action( 'after_setup_theme', 'real_estate_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function real_estate_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'real-estate' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'real-estate' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'real_estate_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function real_estate_scripts() {


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'real_estate_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

?>