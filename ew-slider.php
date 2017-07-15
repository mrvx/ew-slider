<?php
   /*
   Plugin Name: EW slider
   Plugin URI: http://elegantweb.eu
   Description: Slaider mis kasutab owl-carouseli ja ACF PRO-d
   Version: 1.0.0
   Author: Veiko Teekel
   Author URI: http://elegantweb.eu
   License: GPL2
   */

   function ew_slider() {
  register_post_type( 'Slaidid',
                     array(
                       'labels' => array(
                         'name' => __( 'Slaidid' ),
                         'singular_name' => __( 'slaid' )
                       ),
                       'public' => true,
                       'taxonomies' => array('post_tag'),
                       'menu_position' => 5,
                       'rewrite' => array('slug' => 'slaid'),
                       'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail' )
                     )
                    );
}

add_action( 'init', 'ew_slider' );


function slaidirubriik_taxonomy() {
  register_taxonomy(
    'slaidirubriik',
    'slaidid',
    array(
      'hierarchical' => true,
      'label' => 'Slaidi rubriik',
      'query_var' => true,
      'orderby' => 'date',
      'rewrite' => array('slug' => 'slaidi-rubriik')
    )
  );
}

add_action( 'init', 'slaidirubriik_taxonomy' );




?>

<?php
include( plugin_dir_path( __FILE__ ) . 'slider_template.php');
include( plugin_dir_path( __FILE__ ) . 'acf-fields.php');
include( plugin_dir_path( __FILE__ ) . 'owl-carousel/owl.carousel.css');
include( plugin_dir_path( __FILE__ ) . 'owl-carousel/owl.theme.css');
include( plugin_dir_path( __FILE__ ) . 'owl-carousel/owl.carousel.min.js');
include( plugin_dir_path( __FILE__ ) . 'owl-carousel/owl.scripts.js');
?>