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
 * @author     Your Name <email@example.com>
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

		wp_enqueue_script( $this->engrid_wordpress_multistep, plugin_dir_url( __FILE__ ) . 'js/engrid-wordpress-multistep-public.js', array( 'jquery' ), $this->version, false );

	}

}
