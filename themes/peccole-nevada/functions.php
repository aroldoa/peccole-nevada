<?php

/**
 * Enqueue scripts
 *
 */
function peccole_styles() {
	wp_enqueue_style( 'primo-biz', get_template_directory_uri() . '/style.css');

    if( is_front_page()){

        wp_enqueue_script( 'google-maps', 'http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7&ver=3.9.3', array(),'', true );
        wp_enqueue_script( 'maplace', get_stylesheet_directory_uri() . '/inc/js/maplace-0.1.3.min.js', array('google-maps'),'', true );
        wp_enqueue_script( 'peccole-maplace', get_stylesheet_directory_uri() . '/inc/js/peccole-maplace.js', array('maplace'),'', true );
    }

    wp_enqueue_script( 'unslider', get_stylesheet_directory_uri() . '/inc/js/unslider.min.js', array('jquery'),'', true );
    wp_enqueue_script( 'peccole-utilities', get_stylesheet_directory_uri() . '/inc/js/peccole-utilities.js', array('unslider'),'', true );
}

add_action( 'wp_enqueue_scripts', 'peccole_styles' );



add_action('init', 'create_post_type_locations'); // Add Testimonial Post Type
add_action('init', 'create_post_type_sliders'); // Add Testimonial Post Type
add_action('init', 'create_post_type_developments'); // Add Testimonial Post Type

//inline js at footer
function footer_js(){?>
    <script>
        jQuery(document).ready(function(){
            jQuery('.load').addClass('loaded');
        });
    </script>
    <?php
}
add_action('wp_footer', 'footer_js');

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for locations
function create_post_type_locations()
{
    register_taxonomy_for_object_type('category', 'html5-blank'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'html5-blank');
    register_post_type('locations', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Locations', 'html5blank'), // Rename these to suit
            'singular_name' => __('Location', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New Location', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit Location', 'html5blank'),
            'new_item' => __('New Location', 'html5blank'),
            'view' => __('View Location', 'html5blank'),
            'view_item' => __('View Location', 'html5blank'),
            'search_items' => __('Search Location', 'html5blank'),
            'not_found' => __('No Location found', 'html5blank'),
            'not_found_in_trash' => __('No Location found in Trash', 'html5blank')
        ),
        'rewrite' => array('slug' => 'locations'),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true // Allows export in Tools > Export
        // 'taxonomies' => array(
        //     'post_tag',
        //     'category'
        // ) // Add Category and Post Tags support
    ));
}



// Create 1 Custom Post type for developments
function create_post_type_developments()
{
    register_taxonomy_for_object_type('category', 'html5-blank'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'html5-blank');
    register_post_type('developments', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Developments', 'html5blank'), // Rename these to suit
            'singular_name' => __('Development', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New Development', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit Development', 'html5blank'),
            'new_item' => __('New Development', 'html5blank'),
            'view' => __('View Development', 'html5blank'),
            'view_item' => __('View Development', 'html5blank'),
            'search_items' => __('Search Development', 'html5blank'),
            'not_found' => __('No Development found', 'html5blank'),
            'not_found_in_trash' => __('No Development found in Trash', 'html5blank')
        ),
        'rewrite' => array('slug' => 'developments'),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}
// Create 1 Custom Post type for slider
function create_post_type_sliders()
{
    register_taxonomy_for_object_type('category', 'html5-blank'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'html5-blank');
    register_post_type('sliders', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Sliders', 'html5blank'), // Rename these to suit
            'singular_name' => __('Slider', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New Slider', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit Slider', 'html5blank'),
            'new_item' => __('New Slider', 'html5blank'),
            'view' => __('View Slider', 'html5blank'),
            'view_item' => __('View Slider', 'html5blank'),
            'search_items' => __('Search Slider', 'html5blank'),
            'not_found' => __('No Slider found', 'html5blank'),
            'not_found_in_trash' => __('No Slider found in Trash', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}
?>
