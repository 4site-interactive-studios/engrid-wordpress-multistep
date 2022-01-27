<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.4sitestudios.com
 * @since      1.0.0
 *
 * @package    Engrid_Wordpress_Multistep
 * @subpackage Engrid_Wordpress_Multistep/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Engrid_Wordpress_Multistep
 * @subpackage Engrid_Wordpress_Multistep/public
 * @author     Fernando Santos <fernando@4sitestudios.com>
 */
class Engrid_Wordpress_Multistep_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $engrid_wordpress_multistep    The ID of this plugin.
	 */
	private $engrid_wordpress_multistep;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $engrid_wordpress_multistep       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $engrid_wordpress_multistep, $version ) {

		$this->engrid_wordpress_multistep = $engrid_wordpress_multistep;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Engrid_Wordpress_Multistep_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Engrid_Wordpress_Multistep_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->engrid_wordpress_multistep, plugin_dir_url( __FILE__ ) . 'css/engrid-wordpress-multistep-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Engrid_Wordpress_Multistep_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Engrid_Wordpress_Multistep_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_script( $this->engrid_wordpress_multistep, plugin_dir_url( __FILE__ ) . 'js/donation-lightbox-parent.js', array(), $this->version, false );


		// wp_enqueue_script( $this->engrid_wordpress_multistep, plugin_dir_url( __FILE__ ) . 'js/engrid-wordpress-multistep-public.js', array( 'jquery' ), $this->version, false );
		$engrid_donation_page = get_field('engrid_donation_page', 'option');
		// Only render the plugin if the donation page is set
		if($engrid_donation_page){
			$engrid_image = get_field('engrid_image', 'option');
			$engrid_logo = get_field('engrid_logo', 'option');
			$engrid_title = get_field('engrid_title', 'option');
			$engrid_paragraph = get_field('engrid_paragraph', 'option');
			$engrid_footer = get_field('engrid_footer', 'option');
			$engrid_bg_color = get_field('engrid_bg_color', 'option');
			$engrid_text_color = get_field('engrid_text_color', 'option');
			$engrid_form_color = get_field('engrid_form_color', 'option');
			$engrid_show_on = get_field('engrid_show_on', 'option');
			$engrid_hide_on = get_field('engrid_hide_on', 'option');
			$engrid_start_date = get_field('engrid_start_date', 'option');
			$engrid_end_date = get_field('engrid_end_date', 'option');
			$engrid_cookie_hours = get_field('engrid_cookie_hours', 'option');
			$engrid_cookie_name = get_field('engrid_cookie_name', 'option');

			$show_script = true;

			if(($engrid_show_on && !in_array(get_the_ID(), $engrid_show_on)) || ($engrid_hide_on && in_array(get_the_ID(), $engrid_hide_on))){
				$show_script = false;
			}

			if($engrid_start_date && strtotime($engrid_start_date) > time()){
				$show_script = false;
			}

			if($engrid_end_date && strtotime($engrid_end_date) < time()){
				$show_script = false;
			}

			$engrid_js_code = <<<ENGRID

			DonationLightboxOptions = {
				url: "$engrid_donation_page",
				image: "$engrid_image",
				logo: "$engrid_logo",
				title: "$engrid_title",
				paragraph: "$engrid_paragraph",
				footer: "$engrid_footer",
				bg_color: "$engrid_bg_color",
				txt_color: "$engrid_text_color",
				form_color: "$engrid_form_color",
				cookie_hours: $engrid_cookie_hours,
				cookie_name: "$engrid_cookie_name",
			};
ENGRID;
			if($show_script){
				wp_add_inline_script($this->engrid_wordpress_multistep, $engrid_js_code, 'before');
			}
		}
	}

}
