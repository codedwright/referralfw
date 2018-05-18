<?php 
/*
 * Template Name: Quiz Template
 * Template Post Type: post
 */

get_header(); ?><!-- Quiz -->
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class="bg-light">
    <main class="bg-light container py-5">
        <div class="row">
            <article class="col p-3 pr-lg-4">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSdyG-RmQtX-O5BgucsF-JEhjsiRU_eecr2Kc7NfeEhHYcdB4A/viewform?usp=sf_link" class="h3 text-uppercase btn btn-primary btn-lg btn-block text-center">
                        Please click here to take our restoration guide  quiz
                </a>
            </article>
        </div>
    </main>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>