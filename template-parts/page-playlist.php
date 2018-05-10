<?php
// /*
//     https://developers.google.com/apis-explorer/#p/
//     https://developers.google.com/youtube/player_parameters
// */
// init the resource
$ch = curl_init();
$meta = wp_get_object_terms( $post->ID,  'playlist' );
if ( !empty( $meta ) ) {
    if ( !is_wp_error( $meta ) ) {
        $playlist = get_term_meta( $meta[0]->term_id, 'playlist-input', true );        
        if(isset($playlist)) {
            // $playlist = 'PL26AB4782528E64AE';
            // https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=20&playlistId=PL26AB4782528E64AE&key=AIzaSyAnsBJkh_aBM6V0oXAs1zPtuc3t1gnEdcI
            $url = "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=20&playlistId=" . $playlist . "&key=AIzaSyAnsBJkh_aBM6V0oXAs1zPtuc3t1gnEdcI";
            $youtube = array();
            $nextPageToken = $response = false;
            while ( !is_array($response) || $nextPageToken ) {
                if ( $nextPageToken ) {
                    curl_setopt_array(
                        $ch, array( 
                        CURLOPT_URL => $url  . "&pageToken=" . $nextPageToken,
                        CURLOPT_RETURNTRANSFER => true
                    ));
                    $response = json_decode(curl_exec($ch), true);
                } else {
                    curl_setopt_array(
                        $ch, array( 
                        CURLOPT_URL => $url,
                        CURLOPT_RETURNTRANSFER => true
                    ));
                    $response = json_decode(curl_exec($ch), true);
                }
                if ( is_array($response) && isset($response['items']) ) {
                    foreach ($response['items'] as $item) {
                        array_push( $youtube, $item );
                    }
                    if(isset($response['nextPageToken'])) {
                        $nextPageToken = $response['nextPageToken'];
                    } else {
                        $nextPageToken = false;
                    }
                } else {
                    echo "Error Processing cURL request.\n\n" . "\n\nContact 260-755-9083 with below text.\n\n";
                    if ( !is_array($response) ) var_dump( $response, $url );
                    die;
                }
            };
            $length = 7;
            if (count($youtube) < $length) $length = count($youtube);
            $rand_keys = array_rand($youtube, $length);
            for ($i = 0; $i < $length; $i++) {
                $videoId =  $youtube[$rand_keys[$i]]['snippet']['resourceId']['videoId'];
                $title = $youtube[$rand_keys[$i]]['snippet']['title'];
                $src = 'https://www.youtube.com/embed/' . $videoId . '?list=' . $playlist . '&controls=0&rel=0&showinfo=0&modestbranding=1';
                echo '<div class="embed-responsive embed-responsive-16by9 pb-1"><iframe class="embed-responsive-item" src="' . $src . '" frameborder="0" allowfullscreen=""></iframe></div><p class="figure-caption text-center">' . $title . '</p>';
                // echo $title . "\n\n";
            }

            curl_close($ch);
        } else {
            echo 'Playlist variable not set.';
        }
    } else {
        echo 'There is an error, contact 260-755-9083';
    }
} else {
    echo 'You need to set the Playlist tag to include the playlist url to the videos on your page.';
}

?>