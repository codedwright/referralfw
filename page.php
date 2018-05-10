<?php /* Default Template */ ?>
<?php get_header(); ?><!-- page.php -->
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class="bg-light">
    <main class="bg-light container py-5">
        <div class="row">
            <article class="page col p-3 pr-lg-4">
                <h1 class="display-4">
                    <?php the_title(); ?>
                </h1>
                <?php the_content(); ?>
            </article>
        </div>
    </main>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
