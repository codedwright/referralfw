<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <!-- <?php bloginfo('template_url'); ?> -->
    <link rel="shortcut icon" href="http://referralfw.com/wp-content/uploads/Referral-Cleaning-Restoration-Red-Watermark-Large.png">
    <link rel="apple-touch-icon" href="http://referralfw.com/wp-content/uploads/Referral-Cleaning-Restoration-Red-Watermark-Large.png">
    <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="offcanvas offcanvas-right">
        <header>
            <?php get_template_part('template-parts/header', 'large-menu'); ?>
            <?php get_template_part('template-parts/header', 'small-menu'); ?>
        </header>
