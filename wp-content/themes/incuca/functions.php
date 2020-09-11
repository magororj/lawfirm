<?php
// remover a barra de admin
function my_function_admin_bar()
{
    return false;
}

add_filter('show_admin_bar', 'my_function_admin_bar');

if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {
 
    function mytheme_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Menu Primario', 'text_domain' ),
            'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
        ) );
    }
    add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}
/**
 * Registers a stylesheet.
 */
function sassBootstrap() {
    wp_register_style( 'sassBootstrap', get_template_directory_uri().'/css/app.css',$deps = array(), $ver = '1.0.1' );
    wp_enqueue_style( 'sassBootstrap' );
}
// Register style sheet.
add_action( 'wp_enqueue_scripts', 'sassBootstrap' );

function bootstrapstarter_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js', $dependencies, '3.4.1', true );
    wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '20120206', true );
}

add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );

add_theme_support( 'post-thumbnails', array( 'post', 'atuacao', 'pages', 'banner','citacao','quemsomos' ) );


// CPT para Banner
function create_bannerCPT() {
 
    register_post_type( 'banner',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Banner' ),
                'singular_name' => __( 'banner' )
            ),
            'public' => true,
            'capability_type'    => 'post',
            'has_archive' => true,
            'rewrite' => array('slug' => 'banner'),
            'show_in_rest' => true,
            'supports'           => array( 'title','custom-fields','thumbnail','excerpt'),
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_bannerCPT' );

// CPT para Citacao
function create_citacaoCPT() {
 
    register_post_type( 'citacao',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Citacão' ),
                'singular_name' => __( 'citacao' )
            ),
            'public' => true,
            'capability_type'    => 'post',
            'has_archive' => true,
            'rewrite' => array('slug' => 'citacao'),
            'show_in_rest' => true,
            'supports'           => array( 'title','custom-fields','thumbnail','excerpt'),
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_citacaoCPT' );



// CPT para Áreas de Atuação
function create_atuacaoCPT() {
 
    register_post_type( 'atuacao',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Áreas de Atuação' ),
                'singular_name' => __( 'areas-atuacao' )
            ),
            'public' => true,
            'capability_type'    => 'post',
            'has_archive' => true,
            'rewrite' => array('slug' => 'areas-atuacao'),
            'show_in_rest' => true,
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_atuacaoCPT' );

// CPT para Quem Somos
function create_quemSomosCPT() {
 
    register_post_type( 'quemsomos',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Quem Somos' ),
                'singular_name' => __( 'quemsomos' )
            ),
            'public' => true,
            'capability_type'    => 'post',
            'has_archive' => true,
            'rewrite' => array('slug' => 'quemsomos'),
            'show_in_rest' => true,
            'supports'           => array( 'title', 'thumbnail', 'excerpt' ),
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_quemSomosCPT' );


?>