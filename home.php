<?php get_header(); ?><!-- home.php -->
<main>
    <?php get_template_part('template-parts/frontpage', 'introduction'); ?>
    <?php get_template_part('template-parts/frontpage', 'services'); ?>
    <?php get_template_part('template-parts/frontpage', 'trust'); ?>
    <?php get_template_part('template-parts/frontpage', 'written-testimonials'); ?>
    <?php get_template_part('template-parts/frontpage', 'video-testimonials'); ?>  
    <?php get_template_part('template-parts/frontpage', 'guides'); ?>   
    <?php get_template_part('template-parts/frontpage', 'estimate'); ?>    
</main>
<?php get_footer(); ?>
