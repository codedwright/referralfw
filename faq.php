<?php 
/*
 * Template Name: FAQ Template
 */

get_header(); ?>
<!-- faq.php -->
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<main class="p-2 p-lg-5">
    <div class="row">
        <div class="widget-area col-4 d-none d-lg-block">
            <form method="get" action="http://localhost/ReferralFW/">
                <div class="row pl-3 pr-3 pb-3">
                    <?php get_template_part('template-parts/page', 'search'); ?>
                </div>
            </form>
            <div class="row pb-3">
                <div class="col">
                    <?php get_template_part('template-parts/page', 'submenu'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h3 class="lead">Don’t Take Our Word For It!<br />Listen To Our Clients!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col">       
                    <?php get_template_part('template-parts/page', 'playlist'); ?>
                </div>
            </div>
        </div>
        <article class="page col col-lg-8 pl-lg-5">
            <h1 class="display-4">
                <?php the_title(); ?>
            </h1>
            <?php get_template_part('template-parts/page', 'faq'); ?>
            <hr>
            <?php the_content(); ?>
        </article>
    </div>
    <div class="row">
        <div class="widget-area col d-lg-none">
            <div class="row">
                <div class="col">
                    <h3 class="lead">Don’t Take Our Word For It! Listen To Our Clients!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <?php get_template_part('template-parts/page', 'playlist'); ?>
                </div>
            </div>
            <form method="get" action="http://referralfw.com//">
                <div class="row pl-3 pr-3">
                    <?php get_template_part('template-parts/page', 'search'); ?>
                </div>
            </form>
        </div>
    </div>
</main>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
