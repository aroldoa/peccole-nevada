<?php
 
/*
Plugin Name: Custom Meta Box Template
Plugin URI: http://primomotif.com/
Description: Provides a starting point for creating custom meta boxes.
Author: Mario Silva
Version: 1.0
*/


/**
 * Adds a meta box to the post editing screen
 */
function locations_custom_meta() {
    add_meta_box( 'locations_meta', __( 'Sub Header Image', 'locations-textdomain' ), 'locations_meta_callback', 'locations' );
}
add_action( 'add_meta_boxes', 'locations_custom_meta' );

/**
 * Outputs the content of the meta box
 */
function locations_meta_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'locations_nonce' );
    $locations_stored_meta = get_post_meta( $post->ID );
    ?>
    
    <p>
	    <label for="meta-image" class="locations-row-title"><?php _e( 'Example File Upload', 'locations-textdomain' )?></label>
	    <input type="text" name="meta-image" id="meta-image" value="<?php if ( isset ( $locations_stored_meta['meta-image'] ) ) echo $locations_stored_meta['meta-image'][0]; ?>" /><br />
        <img src="<?php if ( isset ( $locations_stored_meta['meta-image'] ) ) echo $locations_stored_meta['meta-image'][0]; ?>" />
	    <input type="button" id="meta-image-button" class="button" value="<?php _e( 'Choose or Upload an Image', 'locations-textdomain' )?>" />
	</p>
 
    <?php
}

/**
 * Saves the custom meta input
 */
function locations_meta_save( $post_id ) {
 
    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'locations_nonce' ] ) && wp_verify_nonce( $_POST[ 'locations_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
 
    // Checks for input and saves if needed
    if( isset( $_POST[ 'meta-image' ] ) ) {
        update_post_meta( $post_id, 'meta-image', $_POST[ 'meta-image' ] );
    }
 
}
add_action( 'save_post', 'locations_meta_save' );


/**
 * Loads the image management javascript
 */
function locations_image_enqueue() {
    global $typenow;
    if( $typenow == 'locations' ) {
        wp_enqueue_media();
 
        // Registers and enqueues the required javascript.
        wp_register_script( 'meta-box-image', plugin_dir_url( __FILE__ ) . '/js/meta-box-image.js', array( 'jquery' ) );
        wp_localize_script( 'meta-box-image', 'meta_image',
            array(
                'title' => __( 'Choose or Upload an Image', 'locations-textdomain' ),
                'button' => __( 'Use this image', 'locations-textdomain' ),
            )
        );
        wp_enqueue_script( 'meta-box-image' );
    }
}
add_action( 'admin_enqueue_scripts', 'locations_image_enqueue' );


