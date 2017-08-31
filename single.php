<?php get_header(); ?>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <!-- single.php -->
        <main class="row">
            <?php if(is_active_sidebar('sidebar')) : ?>
                <div class="col-md-8">
            <?php else : ?>
                <div class="col-md-12">
            <?php endif; ?>
                    <article class="row">
                        <div class="col-12">
                            <h1 class="display-4" style="text-transform: capitalize;"><?php the_title(); ?></h1>
                            <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('full', array('class' => 'img-fluid float-lg-right pl-lg-5 pb-lg-5')); ?>
                            <?php endif; ?>
                            <?php the_content(); ?>
                        </div>
                    </article>
                    <div class="clearfix"></div>
                <?php endwhile; ?>
            <?php endif; ?>
                </div>
            <?php if(is_active_sidebar('sidebar')) : ?>
                <div class="col-md-4">
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
