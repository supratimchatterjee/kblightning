<?php

include( 'lib/setup.php'); // Load setup

include( 'options/theme-options.php' );

/* `Style the WYSIWYG edtior in the admin
----------------------------------------------------------------------------------------------------*/
function my_theme_add_editor_styles() {
    add_editor_style( 'lib/custom-edit-style.css' );
}
add_action( 'init', 'my_theme_add_editor_styles' );


/* `Register a sidebar
----------------------------------------------------------------------------------------------------*/
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '',
		'after_title' => '',
));

/* `Support for Post thumbnail
----------------------------------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );	


/* `Add iframe support, else the WYSI editor will filter it out.
----------------------------------------------------------------------------------------------------*/
function add_iframe($initArray) {
$initArray['extended_valid_elements'] = "iframe[id|class|title|style|align|frameborder|height|longdesc|marginheight|marginwidth|name|scrolling|src|width]";
return $initArray;
}
add_filter('tiny_mce_before_init', 'add_iframe');


/* `Set your custom excerpt legth.
----------------------------------------------------------------------------------------------------*/

function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/* `The "Rede more" link after the excerpt
----------------------------------------------------------------------------------------------------*/
function new_excerpt_more( $more ) {
	return '<p><a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read more »</a></p>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

/* `Customize the login logo.
----------------------------------------------------------------------------------------------------*/
function my_custom_login_logo() {
    echo '<style type="text/css">
       #login h1 a { background-image:url('.get_bloginfo('stylesheet_directory').'/images/login_logo.png) !important; background-size: 320px 99px !important; height: 99px !important; width: 320px !important; }
    </style>';
}
add_action('login_head', 'my_custom_login_logo');

/* `Add more functions
----------------------------------------------------------------------------------------------------*/

// Register Custom Post Type
function slider_() {

	$labels = array(
		'name'                => _x( 'Slides', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Slide', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Slider', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Slide:', 'text_domain' ),
		'all_items'           => __( 'All Slides', 'text_domain' ),
		'view_item'           => __( 'View Slide', 'text_domain' ),
		'add_new_item'        => __( 'Add New Slide', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Slide', 'text_domain' ),
		'update_item'         => __( 'Update Slide', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'slider', 'text_domain' ),
		'description'         => __( 'Slider for home page', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'page-attributes', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-format-video',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'slider', $args );

}

// Hook into the 'init' action
add_action( 'init', 'slider_', 0 );


// Register Custom Post Type
function kb_prod() {

	$labels = array(
		'name'                => _x( 'Products', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Product', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Products', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Product:', 'text_domain' ),
		'all_items'           => __( 'All Products', 'text_domain' ),
		'view_item'           => __( 'View Product', 'text_domain' ),
		'add_new_item'        => __( 'Add New Product', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Product', 'text_domain' ),
		'update_item'         => __( 'Update Product', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'kb_product', 'text_domain' ),
		'description'         => __( 'Kb lighting Products', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 31,
		'menu_icon'           => 'dashicons-lightbulb',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'kb_product', $args );

}

// Hook into the 'init' action
add_action( 'init', 'kb_prod', 0 );



// Register Custom Taxonomy
function kb_prod_type() {

	$labels = array(
		'name'                       => _x( 'Product Type', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Product Type', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Product Type', 'text_domain' ),
		'all_items'                  => __( 'All Types', 'text_domain' ),
		'parent_item'                => __( 'Parent Type', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Type:', 'text_domain' ),
		'new_item_name'              => __( 'New Product Type', 'text_domain' ),
		'add_new_item'               => __( 'Add New Product Type', 'text_domain' ),
		'edit_item'                  => __( 'Edit Product Type', 'text_domain' ),
		'update_item'                => __( 'Update Product Type', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Types with commas', 'text_domain' ),
		'search_items'               => __( 'Search Types', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Product Type', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Product Types', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'prod_type', array( 'kb_product' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'kb_prod_type', 0 );



function list_searcheable_acf(){
  $list_searcheable_acf = array("title", "second_title",);
  return $list_searcheable_acf;
}


/**
 * [advanced_custom_search search that encompasses ACF/advanced custom fields and taxonomies and split expression before request]
 * @param  [query-part/string]      $where    [the initial "where" part of the search query]
 * @param  [object]                 $wp_query []
 * @return [query-part/string]      $where    [the "where" part of the search query as we customized]
 * see https://vzurczak.wordpress.com/2013/06/15/extend-the-default-wordpress-search/
 * credits to Vincent Zurczak for the base query structure/spliting tags section
 */
function advanced_custom_search( $where, &$wp_query ) {

    global $wpdb;
 
    if ( empty( $where ))
        return $where;
 
    // get search expression
    $terms = $wp_query->query_vars[ 's' ];
    
    // explode search expression to get search terms
    $exploded = explode( ' ', $terms );
    if( $exploded === FALSE || count( $exploded ) == 0 )
        $exploded = array( 0 => $terms );
         
    // reset search in order to rebuilt it as we whish
    $where = '';
    
    // get searcheable_acf, a list of advanced custom fields you want to search content in
    $list_searcheable_acf = list_searcheable_acf();

    foreach( $exploded as $tag ) :
        $where .= " 
          AND (
            (wp_posts.post_title LIKE '%$tag%')
            OR EXISTS (
              SELECT * FROM wp_postmeta
	              WHERE post_id = wp_posts.ID
	                AND (";

        foreach ($list_searcheable_acf as $searcheable_acf) :
          if ($searcheable_acf == $list_searcheable_acf[0]):
            $where .= " (meta_key LIKE '%" . $searcheable_acf . "%' AND meta_value LIKE '%$tag%') ";
          else :
            $where .= " OR (meta_key LIKE '%" . $searcheable_acf . "%' AND meta_value LIKE '%$tag%') ";
          endif;
        endforeach;

	        $where .= ")
            )
            OR EXISTS (
              SELECT * FROM wp_comments
              WHERE comment_post_ID = wp_posts.ID
                AND comment_content LIKE '%$tag%'
            )
            OR EXISTS (
              SELECT * FROM wp_terms
              INNER JOIN wp_term_taxonomy
                ON wp_term_taxonomy.term_id = wp_terms.term_id
              INNER JOIN wp_term_relationships
                ON wp_term_relationships.term_taxonomy_id = wp_term_taxonomy.term_taxonomy_id
              WHERE (
          		taxonomy = 'post_tag'
            		OR taxonomy = 'category'          		
            		OR taxonomy = 'myCustomTax'
          		)
              	AND object_id = wp_posts.ID
              	AND wp_terms.name LIKE '%$tag%'
            )
        )";
    endforeach;
    return $where;
}
 
add_filter( 'posts_search', 'advanced_custom_search', 500, 2 );



// Add Shortcode
function page_breakr() {

	// Code
return '<div class="page_break"></div>';
}
add_shortcode( 'break', 'page_breakr' );


// Add Shortcode
function yellow_button_sc( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'link' => '',
		), $atts )
	);

	// Code
if($link == ''){
$astart = '';
$aend = '';}else{
$astart = '<a href="'. $link .'" target="_blank">';
$aend = '</a>';}

return ''. $astart . '<div class="yellow_button"> ' . $content . '</div>'. $aend .'';

}
add_shortcode( 'yellow_button', 'yellow_button_sc' );

// Add Shortcode
function gray_button_sc( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'link' => '',
		), $atts )
	);

	// Code
if($link == ''){
$astart = '';
$aend = '';}else{
$astart = '<a href="'. $link .'" target="_blank">';
$aend = '</a>';}

return ''. $astart . '<div class="gray_button">' . $content . '</div>'. $aend .'';

}
add_shortcode( 'gray_button', 'gray_button_sc' );



?>
