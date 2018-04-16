<?php get_header(); ?>
<!-- archive.php -->
    <main>
        <?php if(have_posts()) : ?>
            <div class="row">
                <div class="col-12">
                    <h1 class="display-1">
                        Blog
                    </h1>
                </div>
            </div>
            <div class="row card-deck">
            <?php while(have_posts()) : the_post(); ?>
                <section class="col-12 col-lg-6 p-4  card-deck">
                    <article class="card bg-dark">
                        <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('full', array('class' => 'img-fluid card-img-top')); ?>
                        <?php endif; ?>
                        <div class="card-body">
                            <h4 class="card-title"><?php the_title(); ?></h4>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-secondary"><?php echo __('Read More'); ?></a>
                        </div>
                    </article>
                </section>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </main>

    <?php if(is_active_sidebar('content-region-1')) : ?>
        <?php dynamic_sidebar('content-region-1'); ?>
    <?php endif; ?>

    <?php if(is_active_sidebar('content-region-2')) : ?>
        <?php dynamic_sidebar('content-region-2'); ?>
    <?php endif; ?>

<?php get_footer(); ?>
