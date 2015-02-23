<?php

    /**
	 * Enqueue scripts
	 *
	 */
	function peccole_styles() {
		wp_enqueue_style( 'primo-biz', get_template_directory_uri() . '/style.css');
	}

	add_action( 'wp_enqueue_scripts', 'peccole_style' );



add_action('init', 'create_post_type_locations'); // Add Testimonial Post Type

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
