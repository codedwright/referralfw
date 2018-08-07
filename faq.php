<?php 
/*
 * Template Name: FAQ Template
 */

get_header(); ?>
<!-- faq.php -->
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class="bg-light">
    <main class="bg-light container py-5">
        <div class="row">
            <article class="content col-lg-8">
                <h1 class="display-4">
                    <?php the_title(); ?>
                </h1>
                <p class="lead">Click question to view answer.</p>
                <?php get_template_part('template-parts/page', 'faq'); ?>
            </article>
            <div class="col-4 d-none d-lg-block py-3 px-lg-4">
                <form method="get" action="https://referralfw.com/">
                    <div class="row pl-3 pr-3 pb-4">
                        <?php get_template_part('template-parts/page', 'search'); ?>
                    </div>
                </form>
                <div class="row pb-4">
                    <div class="col">
                        <?php get_template_part('template-parts/page', 'submenu'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h3 class="lead text-capitalize text-center">Don’t Take Our Word For It!<br />Listen To Our Clients!</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">       
                    <?php get_template_part('template-parts/page', 'playlist'); ?>
                    </div>
                </div>
            </div>
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
                <form method="get" action="https://referralfw.com/">
                    <div class="row pl-3 pr-3">
                        <?php get_template_part('template-parts/page', 'search'); ?>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
