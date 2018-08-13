<?php get_header(); ?><!-- New Client -->
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class="bg-light">
    <main class="bg-light container py-5">
        <div class="row">
            <article class="content col p-3 pr-lg-4">
				<div class="row">
					<h2>New Client Savings</h2>
				</div> 
				<div class="row align-items-center">
                    <div class="col-md-4">
                        <figure class="figure w-100">
                            <img src="https://referralfw.com/wp-content/uploads/New-Client-Coupon-Image-SQ.jpg" alt="New Client Gift Card" class="figure-img img-fluid rounded p-3">
                        </figure>
                    </div>
                    <div class="col-md-8">
                        <p class="h5 font-weight-normal">At Referral, we treat every client with respect and cheerfulness. We think that after just one Referral
                            experience, you will happily join the thousands of other Referral cheerleaders in the Fort Wayne
                            area. As a token of our appreciation, please print this $25 gift card, redeemable during your
                            first Referral experience.</p><br>
                        <center><a href="https://referralfw.com/wp-content/uploads/New-Client-Coupon.pdf" class="btn btn-primary text-uppercase" target="_blank">Print Gift Card</a></center>
                    </div>
                </div>
				                <div class="row">
					<h2>Loyal Client Savings</h2>
				</div> 
				<div class="row align-items-center">
                    <div class="col-md-4">
                        <figure class="figure w-100">
                            <img src="https://referralfw.com/wp-content/uploads/Referral-Reward-Image-SQ.jpg" alt="New Client Gift Card" class="figure-img img-fluid rounded p-3">
                        </figure>
                    </div>
                    <div class="col-md-8">
                        <p class="h5 font-weight-normal">At Referral, we treat every client with respect and cheerfulness. We think that after just one Referral
                            experience, you will happily join the thousands of other Referral cheerleaders in the Fort Wayne
                            area. As a token of our appreciation, please print this $25 gift card, redeemable during your
                            first Referral experience.</p><br>
                        <center><a href="https://referralfw.com/wp-content/uploads/New-Client-Coupon.pdf" class="btn btn-primary text-uppercase" target="_blank">Print Gift Card</a></center>
                    </div>
                </div>
                <hr class="py-md-3">
                <div class="row">
                    <div class="col">
                        <p class="h3 text-capitalize text-center">
                            Take some time to learn about our services
                        </p>
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
