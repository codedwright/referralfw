<?php get_header(); ?><!-- About -->
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class="bg-light">
    <main class="bg-light container py-5">
        <div class="row">
            <article class="page col p-3 pr-lg-4">
                <div class="jumbotron p-3 p-md-5 text-light rounded bg-dark">
                    <div class="col-md-6 px-0">
                        <h1 class="display-4 font-italic">
                            Our Story
                        </h1>
                        <p class="lead my-3">
                            Since 1977, we have helped thousands of business owner and homeowners protect and maintain their investments with our quality floor cleaning, upholstery cleaning, and water damage restoration services.
                        </p>
                    </div>
                </div>
                <?php the_content(); ?>
            </article>
        </div>
    </main>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>