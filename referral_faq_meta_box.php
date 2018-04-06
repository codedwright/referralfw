<?php 

/* Fire our meta box setup function on the post editor screen. */
add_action( 'load-post.php', 'referral_faq_meta_boxes_setup' );
add_action( 'load-post-new.php', 'referral_faq_meta_boxes_setup' );

/* Meta box setup function. */
function referral_faq_meta_boxes_setup() {

    /* Add meta boxes on the 'add_meta_boxes' hook. */
    add_action('add_meta_boxes', 'smashing_add_post_meta_boxes');

    /* Save post meta on the 'save_post' hook. */
    add_action('save_post', 'smashing_save_post_meta', 10, 2);
}

/* Create one or more meta boxes to be displayed on the post editor screen. */
function smashing_add_post_meta_boxes() {
	wp_enqueue_script( 'add-remove-js', get_template_directory_uri() . '/add-remove.js', array('jquery'));
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/admin-bootstrap.css');
	add_meta_box(
		'referral-faq-meta-box', // Unique ID
		esc_html__('Post Class', 'example'), // Title
		'referral_faq_meta_box', // Callback function
		'page', // Admin page (or post type)
		'normal', // Context normal, advanced, and side
		'default' // Priority default, core, high, and low
	);
}

/* Display the post meta box. */
function referral_faq_meta_box( $post ) { 

?>

	<?php wp_nonce_field( basename( __FILE__ ), 'referral_faq_nonce' ); ?>
	<article class="bootstrap">
		<div class="container">
			<div class="card">
				<div class="card-body">
				<h5 class="card-title">Card title</h5>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<div class="input-group">
					<select class="custom-select" name="faq[]">
						<option selected>Choose...</option>
						<option value="1">One</option>
						<option value="2">Two</option>
						<option value="3">Three</option>
					</select>
					<div class="input-group-append">
						<button class="btn btn-primary add" type="button">Add Button</button>
					</div>
				</div>
			</div>
		</div>
		<template class="hide">
			<div class="input-group mt-3">
				<select class="custom-select" name="faq[]">
					<option selected>Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
				<div class="input-group-append">
					<button class="btn btn-primary add" type="button">Add Button</button>
				</div>
			</div>
		</template>
	</article>

<?php 

}

/* Save the meta box's post metadata. */
function smashing_save_post_class_meta( $post_id, $post ) {

	/* Verify the nonce before proceeding. */
	if ( !isset( $_POST['referral_faq_class_nonce'] ) || !wp_verify_nonce( $_POST['referral_faq_class_nonce'], basename( __FILE__ ) ) )
	  return $post_id;
  
	/* Get the post type object. */
	$post_type = get_post_type_object( $post->post_type );
  
	/* Check if the current user has permission to edit the post. */
	if ( !current_user_can( $post_type->cap->edit_post, $post_id ) )
	  return $post_id;
  
	/* Get the posted data and sanitize it for use as an HTML class.  https://codex.wordpress.org/Validating_Sanitizing_and_Escaping_User_Data  */
	$new_meta_value = ( isset( $_POST['faq'] ) ? sanitize_text_field( $_POST['faq'] ) : '' );
  
	/* Get the meta key. */
	$meta_key = 'referral_faq';
  
	/* Get the meta value of the custom field key. */
	$meta_value = get_post_meta( $post_id, $meta_key, true );
  
	/* If a new meta value was added and there was no previous value, add it. */
	if ( $new_meta_value && '' == $meta_value )
	  add_post_meta( $post_id, $meta_key, $new_meta_value, true );
  
	/* If the new meta value does not match the old value, update it. */
	elseif ( $new_meta_value && $new_meta_value != $meta_value )
	  update_post_meta( $post_id, $meta_key, $new_meta_value );
  
	/* If there is no new meta value but an old value exists, delete it. */
	elseif ( '' == $new_meta_value && $meta_value )
	  delete_post_meta( $post_id, $meta_key, $meta_value );
}

