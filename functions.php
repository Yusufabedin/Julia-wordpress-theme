<?php
function Julia_enqueue_assets(){
	//css enqueue
	wp_enqueue_style("fontawesome",get_template_directory_uri()."/assets/css/fontawesome.min.css",array(),'4.1.0','all');
	wp_enqueue_style("bootstrap",get_template_directory_uri()."/assets/css/bootstrap.min.css",array(),'1.13.0','all');
	wp_enqueue_style("sm-clean",get_template_directory_uri()."/assets/css/sm-clean.css",array(),'1.13.0','all');
	wp_enqueue_style("sm-core",get_template_directory_uri()."/assets/css/sm-core.css",array(),'1.13.0','all');
	wp_enqueue_style("defaultcss",get_template_directory_uri()."/assets/css/default.css",array(),'1.0','all');
	wp_enqueue_style("responsivecss",get_template_directory_uri()."/assets/css/responsive.css",array("styles"),'1.0','all');
	wp_enqueue_style("styles", get_stylesheet_uri());
  //java script enqueue
	wp_enqueue_script("jquery",get_template_directory_uri()."/assets/js/jquery-3.3.1.min.js",array(),1.0, true);
	wp_enqueue_script("bootstrapJS",get_template_directory_uri()."/assets/js/bootstrap.min.js",array(),1.0, true);
	wp_enqueue_script("fontawesomeJS",get_template_directory_uri()."/assets/js/fontawesome.min.js",array(),1.0, true);
	wp_enqueue_script("smartmenu",get_template_directory_uri()."/assets/js/smartmenus.min.js",array(),1.0, true);
}
add_action("wp_enqueue_scripts","Julia_enqueue_assets");

/*
function julia_enqueue_admin_script() {
    wp_enqueue_script(plugin_dir_url( __FILE__ ) . 'myscript.js', array(), '1.0' );
}
add_action( 'admin_enqueue_scripts', 'julia_enqueue_admin_script' );
*/

function julia_supporting(){
	add_theme_support( 'title-tag');
	add_theme_support( 'post-thumbnails');
	add_theme_support( 'post-formats', array('image','gallery','quote','audio','vedio','link'));
	add_theme_support( 'title-tag');
	add_theme_support( 'customize-selective-refresh-widgets');
	add_theme_support( 'automatic-feed-links');


	add_theme_support('html5',array('comment-list','comment-form','search-form','gallery','caption'));

	$Julia_logo =array(
    'height'      => 85,
    'width'       => 250,
    'flex-height' => true,
    'flex-width'  => true,
 );
	add_theme_support('coustom-logo',$Julia_logo);
	add_theme_support('coustom-background');


	// This theme uses wp_nav_menu() in one location. widget
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'julia' ),
			'menu-2' => esc_html__( 'Footer One', 'julia' ),
			'menu-3' => esc_html__( 'Footer Two', 'julia' ),
			'menu-4' => esc_html__( 'Footer Three', 'julia' ),
			'menu-5' => esc_html__( 'Footer Four', 'julia' ),
		) );
}

add_action("after_setup_theme","julia_supporting");





// ACFbutton color
function Defaul_css(){
	?>
	 <style type="text/css">
        .banner-content .theme-btn a {
            background: <?php the_field('color','option'); ?>
        }

    </style>
    <?php
}
add_action('wp_head', 'Defaul_css');

//suporting widgets

function julia_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer One', 'julia' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'julia' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s footer-menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Two', 'julia' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'julia' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s footer-menu-2">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Three', 'julia' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'julia' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s footer-menu-2">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Four', 'julia' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'julia' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s footer-menu-2">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'julia_widgets_init' );



//Theme Option


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Option',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Home Management Settings',
		'menu_title'	=> 'Home Management',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}


function cptui_register_my_cpts() {

	/**
	 * Post Type: Introdauctions.
	 */

	$labels = array(
		"name" => __( "Introdauctions", "julia" ),
		"singular_name" => __( "Introdauction", "julia" ),
	);

	$args = array(
		"label" => __( "Introdauctions", "julia" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "introdauction", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "introdauction", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );



       