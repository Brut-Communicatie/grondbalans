<?php
/**
 * Grondbalans functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Grondbalans
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'grondbalans_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function grondbalans_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Grondbalans, use a find and replace
		 * to change 'grondbalans' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'grondbalans', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'grondbalans' ),
			)
		);

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
				'grondbalans_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'grondbalans_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function grondbalans_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'grondbalans_content_width', 640 );
}
add_action( 'after_setup_theme', 'grondbalans_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function grondbalans_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'grondbalans' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'grondbalans' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'grondbalans_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function grondbalans_scripts() {
	wp_enqueue_style( 'grondbalans-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'grondbalans-style', 'rtl', 'replace' );

	wp_enqueue_script( 'grondbalans-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'grondbalans-main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'grondbalans_scripts' );

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

/**
 * Register a custom post type called "book".
 *
 * @see get_post_type_labels() for label keys.
 */
function grondbalans_projecten() {
    $labels = array(
        'name'                  => _x( 'Projecten', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Project', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Projecten', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Project', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Nieuw project toevoegen', 'textdomain' ),
        'add_new_item'          => __( 'Nieuw project toevoegen', 'textdomain' ),
        'new_item'              => __( 'Nieuw project toevoegen', 'textdomain' ),
        'edit_item'             => __( 'Project bewerken', 'textdomain' ),
        'view_item'             => __( 'Bekijk project', 'textdomain' ),
        'all_items'             => __( 'Alle projecten', 'textdomain' ),
        'search_items'          => __( 'Zoek projecten', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent projecten:', 'textdomain' ),
        'not_found'             => __( 'Geen projecten gevonden', 'textdomain' ),
		'not_found_in_trash'    => __( 'Geen projecten gevonden', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'project' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
		'menu_position'      => null,
		'taxonomies' => array('post_tag'),
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
 
    register_post_type( 'projecten', $args );
}
 
add_action( 'init', 'grondbalans_projecten' );

function grondbalans_projecten_customfields() {
	$true_false_field = array(
	
		/* ... Insert generic settings here ... */
		
		/* (string) Text shown along side the checkbox */
		'message' => "hoi",
		
	);

	acf_add_local_field_group(array(
		'key' => 'projectField',
		'title' => 'Content',
		'fields' => array (
			array (
				'key' => 'subtitle',
				'label' => 'Subkop',
				'name' => 'sub_title',
				'type' => 'text',
			),
			array (
				'key' => 'hasvideo',
				'label' => 'Video toevoegen?',
				'name' => 'video',
				'type' => 'checkbox',	
				'choices' => array(
					'yes'	=> 'Ja'
				),
				'layout' => 'vertical',
				'allow_custom' => false,
				'save_custom' => false,
				'toggle' => false,
				'return_format' => 'value',
			),
			array (
				'key' => 'videoLink',
				'label' => 'Video',
				'name' => 'videoLink',
				'type' => 'url',
			),
			array (
				'key' => 'imageLink',
				'label' => 'Afbeelding',
				'name' => 'imageLink',
				'type' => 'image',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'projecten',
				),
			),
		),
	));
}

add_action('acf/init', 'grondbalans_projecten_customfields');

function grondbalans_nieuws() {
    $labels = array(
        'name'                  => _x( 'Nieuws', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Nieuws', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Nieuws', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Nieuws', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Nieuws toevoegen', 'textdomain' ),
        'add_new_item'          => __( 'Nieuws toevoegen', 'textdomain' ),
        'new_item'              => __( 'Nieuws toevoegen', 'textdomain' ),
        'edit_item'             => __( 'Nieuws bewerken', 'textdomain' ),
        'view_item'             => __( 'Bekijk nieuws', 'textdomain' ),
        'all_items'             => __( 'Al het nieuws', 'textdomain' ),
        'search_items'          => __( 'Zoek nieuws', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent neuws:', 'textdomain' ),
        'not_found'             => __( 'Geen nieuws gevonden', 'textdomain' ),
		'not_found_in_trash'    => __( 'Geen nieuws gevonden', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'nieuws' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
		'menu_position'      => null,
		'taxonomies' => array('post_tag'),
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
 
    register_post_type( 'nieuws', $args );
}
 
add_action( 'init', 'grondbalans_nieuws' );