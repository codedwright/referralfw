<?php 
add_action('init', 'register_playlist_taxonomy');

function register_playlist_taxonomy() {
    $labels = array(
        'name' => _x( 'Playlists', 'taxonomy general name', 'referralfw' ),
        'singular_name' => _x('Playlists', 'taxonomy singular name', 'referralfw'),
        'search_items' => __('Search Playlist', 'referralfw'),
        'popular_items' => __('Common Playlists', 'referralfw'),
        'all_items' => __('All Playlists', 'referralfw'),
        'edit_item' => __('Edit Playlist', 'referralfw'),
        'update_item' => __('Update Playlist', 'referralfw'),
        'add_new_item' => __('Add new Playlist', 'referralfw'),
        'new_item_name' => __('New Playlist:', 'referralfw'),
        'add_or_remove_items' => __('Remove Playlist', 'referralfw'),
        'choose_from_most_used' => __('Choose from common Playlists', 'referralfw'),
        'not_found' => __('No Playlist found.', 'referralfw'),
        'menu_name' => __('Playlists', 'referralfw'),
    );

    $args = array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
    );

    register_taxonomy('playlist', array('page'), $args);
}

add_action( 'playlist_add_form_fields', 'add_playlist_group_field', 10, 2 );
function add_playlist_group_field($taxonomy) {
    global $playlist_groups;
    ?><div class="form-field term-group">
        <label for="playlist-input"><?php _e('Playlist URL', 'referralfw'); ?></label>
        <input type="text" class="postform" name="playlist-input">
    </div><?php
}

add_action( 'created_playlist', 'save_playlist_meta', 10, 2 );

function save_playlist_meta( $term_id, $tt_id ){
    if( isset( $_POST['playlist-input'] ) && '' !== $_POST['playlist-input'] ){
        add_term_meta( $term_id, 'playlist-input', $_POST['playlist-input'], true );
    }
}

add_action( 'playlist_edit_form_fields', 'edit_playlist_input_field', 10, 2 );

function edit_playlist_input_field( $term, $taxonomy ){

    // get current group
    $playlist = get_term_meta( $term->term_id, 'playlist-input', true );

    ?><tr class="form-field term-group-wrap">
        <th scope="row"><label for="playlist-input"><?php _e('Playlist URL', 'referralfw'); ?></label></th>
        <td>
        	<input type="text" class="postform" name="playlist-input" value="<?php echo $playlist; ?>">
		</td>
    </tr><?php
}

add_action( 'edited_playlist', 'update_playlist_meta', 10, 2 );

function update_playlist_meta( $term_id, $tt_id ){

    if( isset( $_POST['playlist-input'] ) && '' !== $_POST['playlist-input'] ){
        update_term_meta( $term_id, 'playlist-input', $_POST['playlist-input'] );
    }
}

add_filter('manage_edit-playlist_columns', 'add_playlist_column' );

function add_playlist_column( $columns ){
    $columns['playlist'] = __( 'Playlist URL', 'referralfw' );
    return $columns;
}

add_filter('manage_playlist_custom_column', 'add_playlist_column_content', 10, 3 );

function add_playlist_column_content( $content, $column_name, $term_id ){

    if( $column_name !== 'playlist' ){
        return $content;
    }

    $term_id = absint( $term_id );
    $playlist = get_term_meta( $term_id, 'playlist-input', true );

    if( !empty( $playlist ) ){
        $content .= esc_attr( $playlist );
    }

    return $content;
}

// add_filter( 'manage_edit-playlist_sortable_columns', 'add_playlist_column_sortable' );

// function add_playlist_column_sortable( $sortable ){
//     $sortable[ 'playlist-input' ] = 'playlist-input';
//     return $sortable;
// }

// https://www.smashingmagazine.com/2015/12/how-to-use-term-meta-data-in-wordpress/
?>