<?php get_header(); ?><!-- Services -->
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class="bg-light">
    <main class="bg-light container py-5">
        <div class="row">
            <article class="content col p-3 pr-lg-4">
                <div class="jumbotron p-3 p-md-5 text-light rounded bg-dark">
                    <div class="col-md-8 px-0">
                        <h1 class="display-4 font-italic">
                            Services
                        </h1>
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php get_template_part('template-parts/page', 'services'); ?>
            </article>
        </div>
    </main>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>