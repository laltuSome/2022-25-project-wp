<?php
ob_start();





//custom-social-sharing

include 'admin/custom-admin/featured-meta-box.php';

// REDUX ADMIN
require_once (dirname(__FILE__) . '/admin/redux/config.php');
function redux_custom_css() {
	wp_enqueue_style('admin_styles' , get_template_directory_uri().'/admin/redux/redux-custom.css');
}
add_action('admin_head', 'redux_custom_css');


// ADD STYLES AND SCRIPTS

function theme_styles_scripts() {

wp_enqueue_style( 'style', get_stylesheet_uri(), array(), time() );

// JQUERY Min.
	
	wp_deregister_script('jquery-3.3.1.min');
	wp_enqueue_script('jquery', 'jquery-3.3.1.min.js', array(), null, true);

		// Isotope PACKAGED.
	wp_enqueue_script(
		'isotope.pkgd.min',
		get_parent_theme_file_uri( '/js/isotope.pkgd.min.js' ),
		array( 'jquery' ),
		false,
		true
	);

// ENQUEUE OWL JQUERY.
	wp_enqueue_script(
		'script-mCustomScrollbar',
		get_parent_theme_file_uri( '/js/jquery.mCustomScrollbar.concat.min.js' ),
		array( 'jquery' ),
		false,
		true
	);
	// ENQUEUE OWL JQUERY.
	wp_enqueue_script(
		'script-owl',
		get_parent_theme_file_uri( '/js/owl.carousel.min.js' ),
		array( 'jquery' ),
		false,
		true
	);



// ENQUEUE MATCHHEIGHT JQUERY.
	wp_enqueue_script(
		'matchHeight',
		get_parent_theme_file_uri( '/js/jquery.matchHeight-min.js' ),
		array( 'jquery' ),
		false,
		true
	);

	// ENQUEUE MATCHHEIGHT JQUERY.
	wp_enqueue_script(
		'lightbox',
		get_parent_theme_file_uri( '/js/lightbox.js' ),
		array( 'jquery' ),
		false,
		true
	);

	// ENQUEUE SLICK SLIDER JQUERY.
	wp_enqueue_script(
		'script-slick',
		get_parent_theme_file_uri( '/js/slick.min.js' ),
		array( 'jquery' ),
		false,
		true
	);
// ENQUEUE SLICK SLIDER JQUERY.
	wp_enqueue_script(
		'script-slick-animation',
		get_parent_theme_file_uri( '/js/slick-animation.min.js' ),
		array( 'jquery' ),
		false,
		true
	);
	
	// ENQUEUE MATCHHEIGHT JQUERY.
	wp_enqueue_script(
		'website',
		get_parent_theme_file_uri( '/js/website.min.js' ),
		array( 'jquery' ),
		false,
		true
	);

	

	
 if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_styles_scripts' );


// ADD STYLES AND SCRIPTS






// MAIN SIDEBAR
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name'          => 'Main Sidebar',
		'id'            => 'main-sidebar',
		'description'   => 'This is the main sidebar for this website.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
}

// FOOTER
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name'          => 'Footer One',
		'id'            => 'footer-one',
		'description'   => 'Footer',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
}

// FOOTER
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name'          => 'Footer Two',
		'id'            => 'footer-two',
		'description'   => 'Footer',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
}

// FOOTER
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name'          => 'Footer Three',
		'id'            => 'footer-three',
		'description'   => 'Footer',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
}

// FOOTER
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name'          => 'Footer Four',
		'id'            => 'footer-four',
		'description'   => 'Footer',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
}

// FOOTER
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name'          => 'Footer Five',
		'id'            => 'footer-five',
		'description'   => 'Footer',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
}





//***************CUTOM CATAGORIS



function register_gallery_post_type() {
	$labels = array(
		'name' => 'Gallery',
		'singular_name' => 'Gallery',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Gallery',
		'edit_item' => 'Edit Gallery',
		'new_item' => 'New Gallery',
		'view_item' => 'View Gallery',
		'search_items' => 'Search Gallery',
		'not_found' =>  'No Gallery found',
		'not_found_in_trash' => 'No Gallery found in trash',
		'parent_item_colon' => '',
		'menu_name' => 'Gallery'
	);
	
	$args = array(
		'labels' => $labels,
		'public' => false,
		'publicly_queryable' => false,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => false, 
		'menu_icon' => 'dashicons-format-gallery',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array( 'title','editor','thumbnail','custom-fields' )
	); 

	register_post_type( 'gallery', $args );
}
add_action( 'init', 'register_gallery_post_type' );





function register_testimonials_post_type() {
	$labels = array(
		'name' => 'Testimonials',
		'singular_name' => 'Testimonials',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Testimonials',
		'edit_item' => 'Edit Testimonials',
		'new_item' => 'New Testimonials',
		'view_item' => 'View Testimonials',
		'search_items' => 'Search Testimonials',
		'not_found' =>  'No Testimonials found',
		'not_found_in_trash' => 'No Testimonials found in trash',
		'parent_item_colon' => '',
		'menu_name' => 'Testimonials'
	);
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => false,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => false, 
		'menu_icon' => 'dashicons-format-quote',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array( 'title','editor','thumbnail','custom-fields' )
	); 

	register_post_type( 'testimonials', $args );
}
add_action( 'init', 'register_testimonials_post_type' );


function register_team_post_type() {
	$labels = array(
		'name' => 'Team',
		'singular_name' => 'Team',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Team',
		'edit_item' => 'Edit Team',
		'new_item' => 'New Team',
		'view_item' => 'View Team',
		'search_items' => 'Search Team',
		'not_found' =>  'No Team found',
		'not_found_in_trash' => 'No Team found in trash',
		'parent_item_colon' => '',
		'menu_name' => 'Team'
	);
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => false,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => false, 
			'menu_icon' => 'dashicons-businessperson',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array( 'title','editor','thumbnail','custom-fields' )
	); 

	register_post_type( 'team', $args );
}
add_action( 'init', 'register_team_post_type' );

//destination

// redux gallery
function wp_get_attachment( $attachment_id ) {
    $attachment = get_post( $attachment_id );
    return array(
       
        'description' => $attachment->post_content,
        'href' => get_permalink( $attachment->ID ),
        'src' => $attachment->guid,
        'title' => $attachment->post_title
    );
}

// redux gallery





