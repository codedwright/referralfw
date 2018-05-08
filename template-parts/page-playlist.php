<?php
// /*
//     https://developers.google.com/apis-explorer/#p/
//     https://developers.google.com/youtube/player_parameters
// */
$meta = wp_get_object_terms( $post->ID,  'playlist' );
if ( !empty( $meta ) ) {
    if ( !is_wp_error( $meta ) ) {
        $playlist = '';
        $playlist = get_term_meta( $meta[0]->term_id, 'playlist-input', true );        
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
                $items = json_decode($response['body'], true);
                foreach ($items['items'] as $item) {
                    array_push( $youtube, $item );
                }
                $body = json_decode($response['body'], true);
                if(isset($body['nextPageToken'])) $nextPageToken = $body['nextPageToken'];
            }
            // var_dump( json_decode($response['body'], true)['items'] );
        } while ( !is_array( $response ) || $nextPageToken );
        $length = 7;
        $rand_keys = array_rand($youtube, $length);
        // echo $youtube[$rand_keys[0]] . "\n";
        for ($i = 0; $i < $length; $i++) {
            $videoId =  $youtube[$rand_keys[$i]]['snippet']['resourceId']['videoId'];
            $title = $youtube[$rand_keys[$i]]['snippet']['title'];
            $src = 'https://www.youtube.com/embed/' . $videoId . '?list=' . $playlist . '&controls=0&rel=0&showinfo=0&modestbranding=1';
            /*$rand_keys[$i] . */ 
            echo '<div class="embed-responsive embed-responsive-16by9 pb-1"><iframe class="embed-responsive-item" src="' . $src . '" frameborder="0" allowfullscreen=""></iframe></div><p class="figure-caption text-center">' . $title . '</p>';
        }
    } else {
        echo 'There is an error, contact 260-755-9083';
    }
} else {
    echo 'You need to set the Playlist tag to include the playlist url to the videos on your page.';
}

?>