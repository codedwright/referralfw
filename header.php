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
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="container offcanvas offcanvas-right">
        <header class="">
            <div class="row pt-3 pb-1 align-items-center">
                <div class="col-8 col-md-6 col-lg-12 justify-content-center">
                    <div class="col-12">
                        <a class="p-0" href="<?php echo site_url() ?>">
                            <img class="img-fluid" src="http://referralfw.com/Referral Cleaning &amp; Restoration Logo.svg">
                        </a>
                    </div>
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
                    <ul>
                        <?php
                            wp_list_pages(array(
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
