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
				<hr>
				<div class="row">
					<h2>Loyal Client Savings</h2>
				</div> 
				<div class="row align-items-center">
                    <div class="col-md-4">
                        <figure class="figure w-100">
                            <img src="https://referralfw.com/wp-content/uploads/Referral-Reward-Image-SQ.jpg" alt="New Client Gift Card" class="figure-img img-fluid rounded p-3" style="vertical-align:top">
                        </figure>
                    </div>
                    <div class="col-md-8">
                        <p class="h5 font-weight-normal">If you're a current client, you know that our service is top notch and our cleaning methods outshine the competitors. But did you know that we actually give you credit for telling your firends and family about our services? For every person you refer who also schedules a job, you will receive a $25 credit toward your next cleaning. The best part? There's no limit to the number of referral rewards you can pile up. So go ahead! Start your very own referral reward collection. You could easily end up with free cleaning services.</p>
						<p><strong><em>There are three ways to refer others to our company:</em></strong></p>
						<ol>
  							<li>Verbally pass on reccomendations to anyone. We always ask how new clients hear about us, so just tell them to mention your name when they schedule.</li>
  							<li>When the technicains finish cleaning for you, they will hand you a feedback form. On the back, there is a place to list names and addresses of people you'd like to reccomend us to. We will then send them informatin about our services and a special savings coupon as a gift from you!</li>
  							<li>Visit our Refer a Friend page, and list names and addresses there. We will send them the same letter with a special savings coupon as a gift to them from you.</li>
						</ol>
						<p><strong>Pssssst... Don't forget to reccomend us to the one in charge of building maintenace at your workplace. Commercial floor cleaning is one of our specialities, and having a clean work enviroment is a benefit to you and all your fellow employees.</strong></p><br>
                        <center><a href="https://referralfw.com/wp-content/uploads/New-Client-Coupon.pdf" class="btn btn-primary text-uppercase" target="_blank">Refer a Friend</a></center>
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
