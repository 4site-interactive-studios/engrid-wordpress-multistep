
<?php
/**
 * add_acf_menu_pages.
 *
 * Add custom option pages to the WordPRess admin with Acf
 *
 * @uses acf https://www.advancedcustomfields.com/
 * @uses acf_add_options_page https://www.advancedcustomfields.com/resources/acf_add_options_page/
 * @uses acf_add_options_sub_page https://www.advancedcustomfields.com/resources/acf_add_options_sub_page/
 */
function engrid_wordpress_multistep_menu_pages()
{
    acf_add_options_page(array(
        'page_title' => 'Multistep Lightbox',
        'menu_title' => 'Multistep Lightbox',
        'menu_slug' => 'multistep-lightbox',
        'capability' => 'manage_options',
        'position' => 61.1,
        'redirect' => true,
        'icon_url' => 'dashicons-admin-customizer',
        'update_button' => 'Save',
        'updated_message' => 'Multistep Lightbox Saved',
    ));
}


/**
 * Hook: acf/init.
 *
 * @uses add_action() https://developer.wordpress.org/reference/functions/add_action/
 * @uses acf/init https://www.advancedcustomfields.com/resources/acf-init/
 */
// add_action('acf/init', 'engrid_wordpress_multistep_menu_pages');


// Register Multistep Lightbox Post Type
function register_multistep_lightbox_post_type() {
    $labels = array(
        'name'                  => _x( 'Multistep Lightboxes', 'Post Type General Name', 'engrid-wordpress-multistep' ),
        'singular_name'         => _x( 'Multistep Lightbox', 'Post Type Singular Name', 'engrid-wordpress-multistep' ),
        'menu_name'             => __( 'Multistep Lightboxes', 'engrid-wordpress-multistep' ),
        'name_admin_bar'        => __( 'Multistep Lightbox', 'engrid-wordpress-multistep' ),
        'archives'              => __( 'Multistep Lightbox Archives', 'engrid-wordpress-multistep' ),
        'attributes'            => __( 'Multistep Lightbox Attributes', 'engrid-wordpress-multistep' ),
        'parent_item_colon'     => __( 'Parent Multistep Lightbox:', 'engrid-wordpress-multistep' ),
        'all_items'             => __( 'All Multistep Lightboxes', 'engrid-wordpress-multistep' ),
        'add_new_item'          => __( 'Add New Multistep Lightbox', 'engrid-wordpress-multistep' ),
        'add_new'               => __( 'Add New', 'engrid-wordpress-multistep' ),
        'new_item'              => __( 'New Multistep Lightbox', 'engrid-wordpress-multistep' ),
        'edit_item'             => __( 'Edit Multistep Lightbox', 'engrid-wordpress-multistep' ),
        'update_item'           => __( 'Update Multistep Lightbox', 'engrid-wordpress-multistep' ),
        'view_item'             => __( 'View Multistep Lightbox', 'engrid-wordpress-multistep' ),
        'view_items'            => __( 'View Multistep Lightboxes', 'engrid-wordpress-multistep' ),
        'search_items'          => __( 'Search Multistep Lightbox', 'engrid-wordpress-multistep' ),
        'not_found'             => __( 'Not found', 'engrid-wordpress-multistep' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'engrid-wordpress-multistep' ),
    );
    $args = array(
        'label'                 => __( 'Multistep Lightbox', 'engrid-wordpress-multistep' ),
        'description'           => __( 'Multistep Lightbox', 'engrid-wordpress-multistep' ),
        'labels'                => $labels,
		'supports'              => array( 'title' ),
		'hierarchical'          => false,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-lightbulb',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => false,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => false,
		'capability_type'       => 'page',
		'show_in_rest'          => false,
    );
    register_post_type( 'multistep_lightbox', $args );
}

add_action( 'init', 'register_multistep_lightbox_post_type', 0 );