<?php
// /*
//     https://developers.google.com/apis-explorer/#p/
//     https://developers.google.com/youtube/player_parameters
// */
                        
                        
function playlist($playlist){
    // $playlist = 'PL26AB4782528E64AE';
    // https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=20&playlistId=PL26AB4782528E64AE&key=AIzaSyAnsBJkh_aBM6V0oXAs1zPtuc3t1gnEdcI
    $url = "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=20&playlistId=" . $playlist . "&key=AIzaSyAnsBJkh_aBM6V0oXAs1zPtuc3t1gnEdcI";
    $youtube = array();
    $nextPageToken = "";
    do {
        if ( !empty($nextPageToken) ) {
            $response = wp_remote_get( $url . "&pageToken=" . $nextPageToken );
        } else {
            $response = wp_remote_get( $url);
        }
        if ( is_array( $response )  ) {
            $items = json_decode($response['body'], true)['items'];
            foreach ($items as $item) {
                array_push( $youtube, $item );
            }
            $nextPageToken = json_decode($response['body'], true)['nextPageToken'];
        }
        // var_dump( json_decode($response['body'], true)['items'] );
    } while ( !is_array( $response ) || json_decode($response['body'], true)['nextPageToken'] );
    // echo json_encode($youtube);
    // echo count($youtube['items']);
    // if ( is_array( $response )  ) {
    //     $header = $response['headers']; // array of http header lines
    //     $json = $response['body']; // use the content
    //     $array = json_decode($json, true);
    //     $length = count($array['items']);
    //     // echo $length;
    //     for ($i = 0; $i < $length; $i++) {
    //         $videoId =  $array['items'][$i]['snippet']['resourceId']['videoId'];
    //         $title = $array['items'][$i]['snippet']['title'];
    //         $src = 'https://www.youtube.com/embed/' . $videoId . '?list=' . $playlist . '&controls=0&rel=0&showinfo=0&modestbranding=1';
    //         echo '<div class="embed-responsive embed-responsive-16by9 pb-1"><iframe class="embed-responsive-item" src="' . $src . '" frameborder="0" allowfullscreen=""></iframe></div><p>' . $title . '</p>';
    //     }
    // }
    $length = 7;
    $rand_keys = array_rand($youtube, $length);
    // echo $youtube[$rand_keys[0]] . "\n";
    for ($i = 0; $i < $length; $i++) {
        $videoId =  $youtube[$rand_keys[$i]]['snippet']['resourceId']['videoId'];
        $title = $youtube[$rand_keys[$i]]['snippet']['title'];
        $src = 'https://www.youtube.com/embed/' . $videoId . '?list=' . $playlist . '&controls=0&rel=0&showinfo=0&modestbranding=1';
        echo '<div class="embed-responsive embed-responsive-16by9 pb-1"><iframe class="embed-responsive-item" src="' . $src . '" frameborder="0" allowfullscreen=""></iframe></div><p>' . $rand_keys[$i] . " - " . $title . '</p>';
    }
}

// https://codex.wordpress.org/Function_Reference/wp_get_object_terms
// $meta = wp_get_object_terms( $post->ID,  'playlist' );
// if ( ! empty( $meta ) ) {
//     if ( ! is_wp_error( $meta ) ) {
//         // echo '<ul>';
//         //     foreach( $meta as $term ) {
//         //         echo '<li><a href="' . get_term_meta( $term->term_id, 'playlist-input', true ) . '">' . esc_html( $term->name ) . '</a></li>'; 
//         //     }
//         // echo '</ul>';
//         $playlist = get_term_meta( $playlist[0]->term_id, 'playlist-input', true );
//     }
// }

?>