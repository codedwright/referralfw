<div class="row">
    <div class="backdrop"></div>
    <nav class="col-12 sidebar-offcanvas">
        <div class="d-lg-none m-0 p-1 row">
            <a class="pt-3 col-12 col-sm-8 m-auto" href="<?php echo site_url() ?>">
                <img class="img-fluid" src="http://referralfw.com/Referral Cleaning &amp; Restoration Logo.svg">
            </a>
            <div class="m-0 p-1 row w-100 m-auto">
                <div class="col-6 col-sm-3 my-3 justify-content-center">
                    <a class="p-1" href="tel:12604834383">
                        <div class="fa-4x p-2">
                            <i class="d-block m-auto text-center fas fa-phone"></i>
                        </div>
                        <small class="d-block w-100 text-center" style="line-height:1.5">Call Us At<br>260-483-4383</small>
                    </a>
                </div>
                <div class="col-6 col-sm-3 my-3 justify-content-center">
                    <a class="p-1" href="tel:12604834383">
                        <div class="fa-4x p-2">
                            <span class="d-block m-auto text-center fa-layers fa-fw">
                                <i class="fas fa-certificate"></i>
                                <span class="fa-layers-text fa-inverse" data-fa-transform="shrink-11.5 rotate--30" style="font-weight:900;color:black">24/7</span>
                            </span>
                        </div>
                        <small class="d-block w-100 text-center" style="line-height:1.5">Emergency<br>Response</small>
                    </a>
                </div>
                <div class="col-6 col-sm-3 my-3 justify-content-center">
                    <a class="p-1" href="http://www.referralfw.com/contact">
                        <div class="fa-4x p-2">
                            <i class="d-block m-auto text-center fas fa-map-marker-alt"></i>
                        </div>
                        <small class="d-block w-100 text-center" style="line-height:1.5">Contact<br>M-F 8-5:30</small>
                    </a>
                </div>
                <div class="col-6 col-sm-3 my-3 justify-content-center">
                    <a class="p-1" href="http://www.referralfw.com/estimate">
                        <div class="fa-4x p-2">
                            <i class="d-block m-auto text-center fas fa-pencil-alt"></i>
                        </div>
                        <small class="d-block w-100 text-center" style="line-height:1.5">Free<br>Estimate</small>
                    </a>
                </div>
            </div>
        </div>
        <ul class="p-0">
            <div class="container px-0 px-md-4">
            <?php
                // referralfw.com navigation
                //
                // wp_list_pages(array(
                //     'sort_column' => 'menu_order',
                //     'title_li'    => '',
                //     'child_of'    => '',
                //     'exclude'     => '',
                //     'walker'      => new Referral_Nav_Walker()
                // ));
                //
                
                // micro landing pages navigation
                $args = array(
                    'timeout'     => 30,
                    'redirection' => 5,
                    'httpversion' => '1.0',
                    'user-agent'  => 'WordPress/' . $wp_version . '; ' . home_url(),
                    'blocking'    => true,
                    'headers'     => array(),
                    'cookies'     => array(),
                    'body'        => null,
                    'compress'    => false,
                    'decompress'  => true,
                    'sslverify'   => true,
                    'stream'      => false,
                    'filename'    => null
                ); 

                $response = wp_remote_get('http://referralfw.com/navigation/', $args);

                if ( is_array( $response ) ) {
                    $header = $response['headers']; // array of http header lines
                    $body = $response['body']; // use the content
                    echo $body;
                } else {
                    if( is_wp_error( $response ) ) {
                        echo $response->get_error_message();
                    }
                }
            ?>
                <div class="float-right d-none d-md-inline-flex text-light">
                    <div class="col px-1">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </div>
                    <div class="col px-1">
                        <a href="#">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                    <div class="col px-1">
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </ul>
    </nav>
</div>