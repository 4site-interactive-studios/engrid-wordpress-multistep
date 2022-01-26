
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
add_action('acf/init', 'engrid_wordpress_multistep_menu_pages');