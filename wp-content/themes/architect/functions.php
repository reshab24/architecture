<?php
function kwstarter_styles() 
{
	wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style( 'theme-styles', get_template_directory_uri().'/css/style.css'); 
    wp_enqueue_style( 'main-styles', get_template_directory_uri().'/css/main_style.css' ); 
    wp_enqueue_style( 'slick', get_template_directory_uri().'/css/slick.css');
    wp_enqueue_style( 'slick', get_template_directory_uri().'/css/animate.css'); 
    wp_enqueue_style( 'slick', get_template_directory_uri().'/css/magnific-popup.css'); 
   /* wp_enqueue_style('slick-awesome', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css');*/
	 wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}

add_action( 'wp_enqueue_scripts', 'kwstarter_styles');


if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
   

}

function kwstarter_scripts() {
    wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'slick-min', get_template_directory_uri().'/js/slick.js', array('jquery'), rand(1,10), true );
    //wp_enqueue_script('slick-js', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js');
	//wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', array(), null, true);
	wp_enqueue_script( 'custom', get_template_directory_uri().'/js/custom.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'kwstarter_scripts' );


if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
 }

function wp_title_for_home( $title )
{
  if ( empty( $title ) && ( is_home() || is_front_page() ) ) {
    $title = __( 'Home', 'kw-starter' ) . ' | ' . get_bloginfo( 'description' );
  }
  return $title;
}
add_filter( 'wp_title', 'wp_title_for_home' );



//add customizer

add_action("customize_register", "security_customize_register");

function security_customize_register($wp_customize) {
    /* Logo */
    $wp_customize->add_section("site_logo_box", array(
        "title" => __("Site Logo", "theme_name"),
        "priority" => 100,
    ));


    $wp_customize->add_setting("site_logo", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize, "site_logo", array(
        'label' => __('Site Logo', 'theme_name'),
        'section' => 'site_logo_box',
        'settings' => 'site_logo'
            )
    ));
    
     $wp_customize->add_setting("footer_logo", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize, "footer_logo", array(
        'label' => __('Footer Logo', 'theme_name'),
        'section' => 'site_logo_box',
        'settings' => 'footer_logo'
            )
    ));
    /* Logo Ends */  
       /***** Social Icons ****/
    
   $wp_customize->add_section("site_links", array(
        "title" => __("Site Info", "sunshine"),
        "priority" => 101,
    ));   
    

    $wp_customize->add_setting("email", array(
        "default" => "",
    ));
     
    $wp_customize->add_setting("phone", array(
        "default" => "",
    ));
   
    
    $wp_customize->add_setting("site_text", array(
        "default" => "",
    ));


   
   $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize, "email", array(
            'label' => __('Email', 'sunshine'),
            'section' => 'site_links',
            'settings' => 'email'
        )
    )); 
    
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize, "phone", array(
            'label' => __('Phone', 'sunshine'),
            'section' => 'site_links',
            'settings' => 'phone'
        )
    )); 
    
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize, "site_text", array(
            'label' => __('Site Text', 'sunshine'),
            'section' => 'site_links',
            'settings' => 'site_text'
        )
    ));

   /* footer */

   $wp_customize->add_section("Footer_sec", array(
        "title" => __("Footer", "sunshine"),
        "priority" => 100,
    ));

    $wp_customize->add_setting("instagram", array(
        "default" => "",
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize, "instagram", array(
            'label' => __('Instagram', 'sunshine'),
            'section' => 'Footer_sec',
            'settings' => 'instagram'
        )
    )); 
 $wp_customize->add_setting("instagram-text", array(
        "default" => "",
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize, "instagram-text", array(
            'label' => __('Instagram text', 'sunshine'),
            'section' => 'Footer_sec',
            'settings' => 'instagram-text'
        )
    ));


    $wp_customize->add_setting("footer-email", array(
        "default" => "",
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize, "footer-email", array(
            'label' => __('Footer Email', 'sunshine'),
            'section' => 'Footer_sec',
            'settings' => 'footer-email'
        )
    ));
     
     $wp_customize->add_setting("footertext", array(
        "default" => "",
    ));
     $wp_customize->add_setting("privacytext", array(
        "default" => "",
    ));
      $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize, "footertext", array(
            'label' => __('Footer Text', 'sunshine'),
            'section' => 'Footer_sec',
            'type' => 'textarea',
            'settings' => 'footertext'
        )
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize, "privacytext", array(
            'label' => __('Copyright', 'sunshine'),
            'section' => 'Footer_sec',
            'type' => 'textarea',
            'settings' => 'privacytext'
        )
    ));
    
}

/*
  =============================================================
  4.0 - Register Widget Areas
  =============================================================
 */

function custom_widgets() {
    register_sidebar(array(
        'id' => 'footer-widget-area-1',
        'name' => 'Social Share',
        'description' => 'The widget area in the footer',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'custom_widgets');


//add cpt
add_action('init', 'cpt_init');
function cpt_init() {

  $label_news = array(
        'name' => _x('Testimonials', 'post type general name', 'kw-starter'),
        'singular_name' => _x('Testimonial', 'post type singular name', 'kw-starter'),
        'menu_name' => _x('Testimonials', 'admin menu', 'kw-starter'),
        'name_admin_bar' => _x('New', 'add new on admin bar', 'kw-starter'),
        'add_new' => _x('Add New', 'linkedin-link', 'kw-starter'),
        'add_new_item' => __('Add New Custom Post', 'kw-starter'),
        'new_item' => __('New Custom Post', 'kw-starter'),
        'edit_item' => __('Edit Custom Post', 'kw-starter'),
        'view_item' => __('View Custom Post', 'kw-starter'),
        'all_items' => __('All Custom Posts', 'kw-starter'),
        'search_items' => __('Search Custom Posts', 'kw-starter'),
        'parent_item_colon' => __('Parent Custom Post:', 'kw-starter'),
        'not_found' => __('No Custom Posts found.', 'kw-starter'),
        'not_found_in_trash' => __('No Custom Posts found in Trash.', 'kw-starter')
    );

    $args_news = array(
        'labels' => $label_news,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'testimonials'),
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-admin-post', // get full list of available icons here https://developer.wordpress.org/resource/dashicons/
        'supports' => array('title', 'editor', 'thumbnail','excerpt')
    );

    register_post_type('testimonials', $args_news);
}

add_filter('style_loader_tag', 'validator_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'validator_remove_type_attr', 10, 2);

function validator_remove_type_attr($tag, $handle) {
   return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
}