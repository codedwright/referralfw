<?php 
/* 
// 
// Template Name: Feedback Template 
//
*/
get_header(); ?><!-- Feedback (look below) -->
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class="bg-light">
    <main class="bg-light container py-5">
        <div class="row">
            <article class="page col p-3 pr-lg-4">
                <form action="https://referralfw.com/contact/review/" method="post">
                <?php 
                    wp_nonce_field( basename( __FILE__ ), 'referral_feedback_nonce' );
                    if(get_permalink() =='https://referralfw.com/contact/restorationfeedback/') {
                        echo '<!-- Restoration Feedback -->';
                        get_template_part('template-parts/page', 'waterdamage-feedback');
                        
                    } else {
                        echo '<!-- Cleaning Feedback -->';
                        get_template_part('template-parts/page', 'carpet-feedback');
                    }
                ?>
                </form>
            </article>
        </div>
    </main>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>