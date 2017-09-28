<?php 

/**
 * change default position of single product page
 */

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 10 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 30 );
	
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

/** 
 * adding new post type Books
 */
function book_init() {
	$labels = array(
		'name' => 'Books',
		'singular_name' => 'Books',
		'add_new' => 'Add New Books',
		'add_new_item' => 'Add New Books',
		'edit_item' => 'Edit Books',
		'new_item' => 'New Books',
		'all_items' => 'All Books',
		'view_item' => 'View Books',
		'search_items' => 'Search Books',
		'not_found' =>  'No Books Found',
		'not_found_in_trash' => 'No Books found in Trash', 
		'parent_item_colon' => '',
		'menu_name' => 'Books',
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => 'book'),
		'query_var' => true,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'trackbacks',
			'custom-fields',
			'comments',
			'revisions',
			'thumbnail',
			'author',
			'page-attributes'
		),
		'tachonomies' => array('genre')
	);
	register_post_type( 'book', $args );
	register_taxonomy('genre', 'book', array(
		'hierarchical' => true, 
		'label' => 'Genre', 
		'query_var' => true, 
		'rewrite' => array( 
			'slug' => 'book-genre' 
			)
		)
	);
}
add_action( 'init', 'book_init' );
flush_rewrite_rules( false );