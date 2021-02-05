<?php
//Add CSS and JS files
function gt_setup(){
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap');
    wp_enqueue_script('fontawesome', '//kit.fontawesome.com/1696329706.js');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime());
    
}
add_action('wp_enqueue_scripts', 'gt_setup');


//Post configuration
function themeInit(){
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'themeInit');


//Custom post types
function create_posttype() {
    register_post_type( 'articulos',
        array(
						'rewrite' => array('slug' => 'Articulos'),
            'labels' => array(
                'name' => 'Articulos' ,
								'singular_name' => 'Articulos',
								'add_new_item' => 'Agregar nuevo articulo',
								'edit_item' => 'Editar articulo'
						),
						'menu-icon' => 'dashicons-admin-users',
            'public' => true,
						'taxonomies' => array('category'),
            'has_archive' => true,
						'supports' => array(
							'title','thumbnail','editor', 'excerpt'
						) 
        )
    );
}
add_action( 'init', 'create_posttype' );
?>
