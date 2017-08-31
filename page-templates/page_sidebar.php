<?php /* Template Name: Sidebar Template */ ?>

<?php get_header(); ?>
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
            <main>
            <div class="row">
                <div class="widget-area col-4 d-none d-lg-block">
                    <form method="get" action="http://localhost/ReferralFW/">
                        <div class="row pl-3 pr-3 pb-3">
                            <input class="col-9 form-control" type="text" value="SEARCH" name="s" id="s" onblur="if (this.value == '')
                                {this.value = 'SEARCH';}" onfocus="if (this.value == 'SEARCH')
                                {this.value = '';}">
                            <input class="col-2 offset-1 form-control" type="submit" id="searchsubmit" value="OK">
                        </div>
                    </form>
                    <div class="row pb-3">
                        <div class="col-12">
                            <h3 class="widget-title lead">Additional Information</h3>
                            <ul class="list-group">
                                <?php
                                    $id = get_the_ID();
                                    wp_list_pages(array(
                                        'title_li'    => '',
                                        'child_of'    => $id,
                                        'depth'     => '1',
                                        'walker'      => new Referral_Submenu_Walker()
                                    ));
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h3 class="lead">Don’t Take Our Word For It!<br>Listen To Our Clients!</h3>
                        </div>
                        <div class="col-12">
                            <?php
                                /*
                                    https://developers.google.com/apis-explorer/#p/
                                    https://developers.google.com/youtube/player_parameters
                                */
                                $playlist = 'PL26AB4782528E64AE';
                                $url = "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=20&playlistId=" . $playlist . "&key=AIzaSyAnsBJkh_aBM6V0oXAs1zPtuc3t1gnEdcI";
                                $response = wp_remote_get( $url );
                                if ( is_array( $response ) ) {
                                    $header = $response['headers']; // array of http header lines
                                    $json = $response['body']; // use the content
                                    $array = json_decode($json, true);
                                    $length = count($array['items']);
                                    // echo $length;
                                    for ($i = 0; $i < $length; $i++) {
                                        $videoId =  $array['items'][$i]['snippet']['resourceId']['videoId'];
                                        $title = $array['items'][$i]['snippet']['title'];
                                        $src = 'https://www.youtube.com/embed/' . $videoId . '?list=' . $playlist . '&controls=0&rel=0&showinfo=0&modestbranding=1';
                                        echo '<div class="embed-responsive embed-responsive-16by9 pb-1"><iframe class="embed-responsive-item" src="' . $src . '" frameborder="0" allowfullscreen=""></iframe></div><p>' . $title . '</p>';
                                    }
                                }
                            ?>
                            <!-- <iframe  class="embed-responsive-item" src="https://www.youtube.com/embed/KkF7KZ52ezo?list=PL26AB4782528E64AE&controls=0&rel=0&showinfo=0&modestbranding=1" frameborder="0" allowfullscreen=""></iframe> -->
                        </div>
                    </div>
                </div>
                <article class="page col-12 col-lg-8 pl-lg-5">
                    <h1 class="display-4">
                        <?php the_title(); ?>
                    </h1>
                    <?php the_content(); ?>
                </article>
            </div>
            <div class="row">
                <div class="widget-area col-12 d-lg-none">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="lead">Don’t Take Our Word For It! Listen To Our Clients!</h3>
                        </div>
                        <div class="col-12">
                            <?php
                                $playlist = 'PL26AB4782528E64AE';
                                $url = "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=50&playlistId=" . $playlist . "&key=AIzaSyAnsBJkh_aBM6V0oXAs1zPtuc3t1gnEdcI";
                                $response = wp_remote_get( $url );
                                if ( is_array( $response ) ) {
                                    $header = $response['headers']; // array of http header lines
                                    $json = $response['body']; // use the content
                                    $array = json_decode($json, true);
                                    // $length = count($array['items']);
                                    // echo $length;

                                    // $list = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31", "32", "33", "34", "35", "36", "37", "38", "39", "40", "41", "42", "43", "44", "45", "46", "47", "48", "49", "50");
                                    // $key = array_rand($list, 3);
                                    // echo $list[$key[i]]."<br>";
                                    // $j = $list[$key[i]];
                                    for ($i = 0; $i < 5; $i++) {
                                        $videoId =  $array['items'][$i]['snippet']['resourceId']['videoId'];
                                        $title = $array['items'][$i]['snippet']['title'];
                                        $src = 'https://www.youtube.com/embed/' . $videoId . '?list=' . $playlist . '&controls=0&rel=0&showinfo=0&modestbranding=1';
                                        echo '<div class="embed-responsive embed-responsive-16by9 pb-1"><iframe class="embed-responsive-item" src="' . $src . '" frameborder="0" allowfullscreen=""></iframe></div><p>' . $title . '</p>';
                                    }
                                }
                            ?>
                        </div>
                    </div>
                    <form method="get" action="http://referralfw.com//">
                        <div class="row pl-3 pr-3">
                            <input class="col-9 form-control" type="text" value="SEARCH" name="s" id="s" onblur="if (this.value == '')
                                {this.value = 'SEARCH';}" onfocus="if (this.value == 'SEARCH')
                                {this.value = '';}">
                            <input class="col-2 offset-1 form-control" type="submit" id="searchsubmit" value="OK">
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>
