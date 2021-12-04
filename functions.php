<?php
function tureticibakkal_enqueue_assets() {
  wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', array(), false );
  wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/script.js', array(), false, false );
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css');
}
add_action( 'wp_enqueue_scripts', 'tureticibakkal_enqueue_assets' );

function wpb_add_google_fonts() {

    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,500,500i,700', false );
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:600', false );
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:700', false );
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,700', false );
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=PT+Sans', false );
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:600,700', false );

    }

    add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );


// Nav menu
function wpb_custom_new_menu() {
    register_nav_menus(
      array(
        'my-custom-menu' => __( 'My Custom Menu' ),
        'extra-menu' => __( 'Extra Menu' )
      )
    );
  }
  add_action( 'init', 'wpb_custom_new_menu' );



  //Add Some functionalities

  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );


   /*  to add “active” class to wp_nav_menu() current menu item */

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

/*
Adding custom-logo/
*/
	
add_theme_support( 'custom-logo' );

function tureticibakkal_custom_logo_setup() {
$defaults = array(
'height'      => 100,
'width'       => 100,
'flex-height' => true,
'flex-width'  => true,
'header-text' => array( 'site-title', 'site-description' ),
);
add_theme_support( 'custom-logo', $defaults );
 }
 add_action( 'after_setup_theme', 'tureticibakkal_custom_logo_setup' );


  /* Declaring Woocommerce support */

  function tureticibakkal_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'tureticibakkal_add_woocommerce_support' );


/* ACF Blocks registration */

add_action('acf/init', 'my_acf_blocks_init');
function my_acf_blocks_init() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

      /* ACF Slider Block registration */

      acf_register_block_type(array(
          'name'              => 'slider',
          'title'             => __('Slider'),
          'description'       => __('A custom slider block.'),
          'render_template'   => 'blocks/slider-block.php',
          'category'          => 'common', // common | formatting | layout | widgets |
          'icon'              => 'admin-media',
          'mode'              => 'preview',
            'align'             => '', //  “left”, “center”, “right”, “wide” and “full” (default)
            'keywords'          => array(),
            'supports'          => array(
                'customClassName'   => false,
                'reusable'          => true,
                //'align' 		    => array('left', 'center', 'right'), // customize alignment toolbar
                'multiple'          => true //allows the block to be added multiple times
            ),
            'post_types'        => array('post', 'page'),
      ));

      /* ACF Card Block registration */

      acf_register_block_type(array(
        'name'              => 'card',
        'title'             => __('Card'),
        'description'       => __('A custom card block.'),
        'render_template'   => 'blocks/card-block.php',
        'category'          => 'common', // common | formatting | layout | widgets |
        'icon'              => 'admin-media',
        'mode'              => 'preview',
          'align'             => '', //  “left”, “center”, “right”, “wide” and “full” (default)
          'keywords'          => array(),
          'supports'          => array(
              'customClassName'   => false,
              'reusable'          => true,
              //'align' 		    => array('left', 'center', 'right'), // customize alignment toolbar
              'multiple'          => true //allows the block to be added multiple times
          ),
          'post_types'        => array('post', 'page'),
    ));

    acf_register_block_type(array(
      'name'              => 'accordion',
      'title'             => __('Accordion'),
      'description'       => __('A custom accordion block.'),
      'render_template'   => 'blocks/accordion-block.php',
      'category'          => 'common', // common | formatting | layout | widgets |
      'icon'              => 'admin-media',
      'mode'              => 'preview',
        'align'             => '', //  “left”, “center”, “right”, “wide” and “full” (default)
        'keywords'          => array(),
        'supports'          => array(
            'customClassName'   => false,
            'reusable'          => true,
            //'align' 		    => array('left', 'center', 'right'), // customize alignment toolbar
            'multiple'          => true //allows the block to be added multiple times
        ),
        'post_types'        => array('post', 'page'),
  ));

  acf_register_block_type(array(
    'name'              => 'home-text',
    'title'             => __('Home Text'),
    'description'       => __('A custom home text block.'),
    'render_template'   => 'blocks/home_text-block.php',
    'category'          => 'common', // common | formatting | layout | widgets |
    'icon'              => 'admin-media',
    'mode'              => 'preview',
      'align'             => '', //  “left”, “center”, “right”, “wide” and “full” (default)
      'keywords'          => array(),
      'supports'          => array(
          'customClassName'   => false,
          'reusable'          => true,
          //'align' 		    => array('left', 'center', 'right'), // customize alignment toolbar
          'multiple'          => true //allows the block to be added multiple times
      ),
      'post_types'        => array('post', 'page'),
));

acf_register_block_type(array(
  'name'              => 'media-text',
  'title'             => __('Media Text'),
  'description'       => __('A custom media text block.'),
  'render_template'   => 'blocks/media_text-block.php',
  'category'          => 'common', // common | formatting | layout | widgets |
  'icon'              => 'admin-media',
  'mode'              => 'preview',
    'align'             => '', //  “left”, “center”, “right”, “wide” and “full” (default)
    'keywords'          => array(),
    'supports'          => array(
        'customClassName'   => false,
        'reusable'          => true,
        //'align' 		    => array('left', 'center', 'right'), // customize alignment toolbar
        'multiple'          => true //allows the block to be added multiple times
    ),
    'post_types'        => array('post', 'page'),
));

acf_register_block_type(array(
  'name'              => 'heading-text',
  'title'             => __('Heading Text'),
  'description'       => __('A custom heading text block.'),
  'render_template'   => 'blocks/heading_text-block.php',
  'category'          => 'common', // common | formatting | layout | widgets |
  'icon'              => 'admin-media',
  'mode'              => 'preview',
    'align'             => '', //  “left”, “center”, “right”, “wide” and “full” (default)
    'keywords'          => array(),
    'supports'          => array(
        'customClassName'   => false,
        'reusable'          => true,
        //'align' 		    => array('left', 'center', 'right'), // customize alignment toolbar
        'multiple'          => true //allows the block to be added multiple times
    ),
    'post_types'        => array('post', 'page'),
));

acf_register_block_type(array(
  'name'              => 'headings',
  'title'             => __('Headings'),
  'description'       => __('A custom headings block.'),
  'render_template'   => 'blocks/headings-block.php',
  'category'          => 'common', // common | formatting | layout | widgets |
  'icon'              => 'admin-media',
  'mode'              => 'preview',
    'align'             => '', //  “left”, “center”, “right”, “wide” and “full” (default)
    'keywords'          => array(),
    'supports'          => array(
        'customClassName'   => false,
        'reusable'          => true,
        //'align' 		    => array('left', 'center', 'right'), // customize alignment toolbar
        'multiple'          => true //allows the block to be added multiple times
    ),
    'post_types'        => array('post', 'page'),
));


      }
  }



/* ACF Json */

     // Save 
     add_filter('acf/settings/save_json', 'my_acf_json_save_point');
 
     function my_acf_json_save_point( $path ) {
         
         // update path
         $path = get_stylesheet_directory() . '/acf-json';
         
         
         // return
         return $path;
         
     }
     
         // Load
     
     add_filter('acf/settings/load_json', 'my_acf_json_load_point');
     
     function my_acf_json_load_point( $paths ) {
         
         // remove original path (optional)
         unset($paths[0]);
         
         
         // append path
         $paths[] = get_stylesheet_directory() . '/acf-json';
         
         
         // return
         return $paths;
         
     }


/* Backend view of Blocks in Gutenberg Editor */

add_action('enqueue_block_editor_assets','add_block_editor_assets',10,0);
function add_block_editor_assets(){
  wp_enqueue_style('block_editor_css', get_stylesheet_directory_uri() . '/style.css');
}