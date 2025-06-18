<?php
ob_start();



//custom-social-sharing
include_once( 'inc/custom-social-sharing.php' );

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

function register_blog_post_type() {
	$labels = array(
		'name' => 'Blog',
		'singular_name' => 'Blog',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Blog',
		'edit_item' => 'Edit Blog',
		'new_item' => 'New Blog',
		'view_item' => 'View Blog',
		'search_items' => 'Search Blog',
		'not_found' =>  'No Blog found',
		'not_found_in_trash' => 'No Blog found in trash',
		'parent_item_colon' => '',
		'menu_name' => 'Blog'
	);
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => true,
		'menu_position' => null,
		'supports' => array( 'title','excerpt','thumbnail','editor','comments','slug'),
		'taxonomies' => array( 'blog_categories','post_tag'),
	
		
	); 

	    register_taxonomy(
        'blog_categories',  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
        'blogs',             // post type name
        array(
            'hierarchical' => true,
            'label' => 'Category', // display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'category',    // This controls the base slug that will display before each term
                'with_front' => false  // Don't display the category base before
            )
        )
    );

	register_post_type( 'blogs', $args );
	 register_taxonomy_for_object_type('post_tag', 'blogs');
}



add_action( 'init', 'register_blog_post_type' );

//***************CUTOM CATAGORIS

//destination



function register_review_post_type() {
	$labels = array(
		'name' => 'Review',
		'singular_name' => 'Review',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Review',
		'edit_item' => 'Edit Review',
		'new_item' => 'New Review',
		'view_item' => 'View Review',
		'search_items' => 'Search Review',
		'not_found' =>  'No Review found',
		'not_found_in_trash' => 'No Review found in trash',
		'parent_item_colon' => '',
		'menu_name' => 'Review'
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
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array( 'title','editor','thumbnail','custom-fields' )
	); 

	register_post_type( 'review', $args );
}
add_action( 'init', 'register_review_post_type' );


function register_products_post_type() {
	$labels = array(
		'name' => 'Product',
		'singular_name' => 'Product',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Product',
		'edit_item' => 'Edit Product',
		'new_item' => 'New Product',
		'view_item' => 'View Product',
		'search_items' => 'Search Product',
		'not_found' =>  'No Review Product',
		'not_found_in_trash' => 'No Product found in trash',
		'parent_item_colon' => '',
		'menu_name' => 'Product'
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
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array( 'title','editor','thumbnail','custom-fields' )
	); 

	register_post_type( 'products', $args );
}
add_action( 'init', 'register_products_post_type' );

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








