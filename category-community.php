<?php 
/*
// 
// Template Name: Community Archive
//
*/ 
?>
<?php get_header(); ?><!-- category-blog.php -->
<?php if(have_posts()) : ?>
<div class="bg-light">
    <main class="bg-light container py-5">
        <div class="row">
            <div class="col p-3 pl-lg-4">
                <h1 class="text-center">Community Support</h1>
            </div>
        </div>
<?php 
    $my_query = new WP_Query('post_type=post&category_name=community&nopaging=1');
    $counter = 1;
    if($my_query->have_posts()) {
        while($my_query->have_posts() && $counter <= 7) {
            $my_query->the_post(); 
?>
        <div class="row py-4">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 p-3">
                                <?php if(has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                <?php endif; ?>
                            </div>
                            <article class="d-flex flex-column justify-content-between col-md-8 p-3 pl-lg-4">
                                <h2>
                                    <?php the_title(); ?>
                                </h2>
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary float-right">
                                    <?php echo __('Read More'); ?>
                                </a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php 
            $counter++;
        }
        wp_reset_postdata();
    }
?>
    </main>
</div>
<?php endif; ?>
<?php get_footer(); ?>
