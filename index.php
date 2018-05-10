<?php get_header(); ?><!-- index.php -->
<?php if(have_posts()) : ?>
<div class="bg-light">
    <main class="bg-light container py-5">
<?php while(have_posts()) : the_post(); ?>
        <div class="row">
            <div class="col-4 p-3">
                <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                <?php endif; ?>
            </div>
            <article class="page col p-3 pl-lg-4">
                <h2>
                    <?php the_title(); ?>
                </h2>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="btn btn-secondary float-right">
                    <?php echo __('Read More'); ?>
                </a>
            </article>
        </div>
<?php endwhile; ?>
    </main>
</div>
<?php endif; ?>
<?php get_footer(); ?>
