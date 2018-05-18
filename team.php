<?php 
/*
 * Template Name: Team Template
 */

get_header(); ?><!-- Team -->
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class="bg-light">
    <main class="bg-light container py-5">
        <div class="row">
            <article class="col p-3 pr-lg-4">
                <div class="row">
                    <?php get_template_part('template-parts/page', 'team'); ?>
                </div>
            </article>
        </div>
    </main>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>