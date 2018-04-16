<?php get_header(); ?>
i
    <main class="row"><!-- index.php -->
        <?php if(is_active_sidebar('sidebar')) : ?>
            <div class="col-md-9">
        <?php else : ?>
            <div class="col-md-12">
        <?php endif; ?>
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <article class="row">
                    <div class="col-md-12">
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                        <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                        <?php endif; ?>
                        <a href="<?php the_permalink(); ?>" class="btn btn-secondary float-right">
                            <?php echo __('Read More'); ?>
                        </a>
                    </div>
                </article>
                <div class="clearfix"></div>
            <?php endwhile; ?>
        <?php endif; ?>
            </div>
        <?php if(is_active_sidebar('sidebar')) : ?>
            <div class="col-md-3">
                <?php dynamic_sidebar('sidebar'); ?>
            </div>
        <?php endif; ?>
    </main>

    <?php if(is_active_sidebar('content-region-1')) : ?>
        <?php dynamic_sidebar('content-region-1'); ?>
    <?php endif; ?>

    <?php if(is_active_sidebar('content-region-2')) : ?>
        <?php dynamic_sidebar('content-region-2'); ?>
    <?php endif; ?>

<?php get_footer(); ?>
