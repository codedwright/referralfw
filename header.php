<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <!-- <?php bloginfo('template_url'); ?> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="http://referralfw.com/wp-content/uploads/Referral-Cleaning-Restoration-Red-Watermark-Large.png">
    <link rel="apple-touch-icon" href="http://referralfw.com/wp-content/uploads/Referral-Cleaning-Restoration-Red-Watermark-Large.png">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/icons.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/component.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/style.css" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="container offcanvas offcanvas-right">
        <header class="">
            <div class="row pt-3 pb-1 align-items-center">
                <div class="col-8 col-md-6 col-lg-8 justify-content-center">
                    <div class="col-12">
                        <a class="" href="<?php echo site_url() ?>">
                            <img class="img-fluid" src="http://referralfw.com/Referral Cleaning &amp; Restoration Logo.svg">
                        </a>
                    </div>
                </div>
                <div class="col-4 d-none d-lg-block">
                    <a href="tel:12604834383"><p class="text-right">Call Us At (260) 483-4383</p></a>
                    <a href="tel:12604834383"><p class="text-right">24 / 7 Emergency Response</p></a>
                    <a href="http://www.referralfw.com/contact"><p class="text-right">Office Hours: M-F 8-5:30</p></a>
                    <a href="http://referralfw.com/estimate/"><p class="text-right">Click For Free Estimate</p></a>
                </div>
                <div class="col-4 col-md-6 d-lg-none">
                    <a href="#" id="trigger" class="btn menu-trigger">
                        <small class="d-none d-md-block">
                            Open/Close Menu
                        </small>
                    </a>
                </div>
            </div>
            <div class="row pl-3 pr-3 pb-3">
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
                    <ul>
                        <?php
                            wp_list_pages(array(
                                'sort_column' => 'menu_order',
                                'title_li'    => '',
                                'child_of'    => '',
                                'exclude'     => '',
                                'walker'      => new Referral_Nav_Walker()
                            ));
                        ?>
                    </ul>
                </nav>
            </div>
        </header>
