<?php get_header(); ?><!-- New Client -->
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class="bg-light">
    <main class="bg-light container py-5">
        <div class="row">
            <article class="content col p-3 pr-lg-4">
				<div class="row">
					<div class="col-md-4 text-center">
					<h2>New Client Coupon</h2>						
					</div>
					<div class="col">		
					</div>
				</div>
				<div class="row align-items-top">					
                    <div class="col-md-4">
                        <figure class="figure w-100">
                            <img src="https://referralfw.com/wp-content/uploads/New-Client-Coupon-Image-SQ.jpg" alt="New Client Carpet Cleaning Coupon" class="figure-img img-fluid rounded p-3">
                        </figure>
                    </div>
                    <div class="col-md-8 pt-3">						
                        <p class="h5 font-weight-normal">At Referral, we treat every client with respect and cheerfulness. We think that after just one Referral
                            experience, you will happily join the thousands of other Referral cheerleaders in the Fort Wayne
                            area. As a token of our appreciation, please print this $25 coupon for carpet cleaning or any of our services, redeemable during your
                            first Referral experience.</p><br>
                        <center><a href="https://referralfw.com/wp-content/uploads/New-Client-Coupon.pdf" class="btn btn-primary text-uppercase" target="_blank">Print Gift Card</a></center>
                    </div>
                </div>
				<hr>
				<div class="row">
					<div class="col-md-4 text-center">
					<h2>Loyal Client Credits</h2>						
					</div>
					<div class="col">		
					</div>
				</div> 
				<div class="row align-items-top">
                    <div class="col-md-4">
                        <figure class="figure w-100">
                            <img src="https://referralfw.com/wp-content/uploads/Referral-Reward-Image-SQ.jpg" alt="Referral Carpet Cleaning Coupon" class="figure-img img-fluid rounded p-3">
							<img src="https://referralfw.com/wp-content/uploads/WaterDamage-Referral-Reward-SQ.jpg" alt="Water Referral Carpet Cleaning Coupon" class="figure-img img-fluid rounded p-3">
                        </figure>
                    </div>
                    <div class="col-md-8 pt-3">
						<p class="h5 font-weight-normal">If you're a current client, you know that our service is top notch and our cleaning methods outshine the competitors. But did you know that we actually give you credit for telling your friends and family about our services?</p> 
						<p class="h5 font-weight-normal">For every person you refer who also schedules a cleaning job, you will receive a $25 credit. This coupon is good toward carpet cleaning or any of our cleaning services.</p> 
						<p class="h5 font-weight-normal">When you refer a water damage emergency, we will reward you with a $50 credit coupon toward any of our services.</p>
						<p class="h5 font-weight-normal">The best part? There's no limit to the number of referral rewards you can pile up. So go ahead! Start your very own referral reward collection. You could easily end up with free cleaning services.</p>
						<p><strong><em>There are three ways to refer others to our company:</em></strong></p>
						<ol>
  							<li>Verbally pass on reccomendations to anyone. We always ask how new clients hear about us, so just tell them to mention your name when they schedule.</li>
  							<li>When the technicains finish cleaning for you, they will hand you a feedback form. On the back, there is a place to list names and addresses of people you'd like to reccomend us to. We will then send them informatin about our services and a special savings coupon as a gift from you!</li>
  							<li>Visit our Refer a Friend page, and list names and addresses there. We will send them the same letter with a special savings coupon as a gift to them from you.</li>
						</ol>
						<p><strong>Pssssst... Don't forget to reccomend us to the one in charge of building maintenace at your workplace. Commercial floor cleaning is one of our specialities, and having a clean work enviroment is a benefit to you and all your fellow employees.</strong></p><br>
                        <center><a href="https://referralfw.com/contact/refer/" class="btn btn-primary text-uppercase" target="_blank">Refer a Friend</a></center>
                    </div>
                </div>
			<hr>
				<div class="row">
					<div class="col-md-4 text-center">
					<h2>Online Review Credits</h2>						
					</div>
					<div class="col">		
					</div>
				</div> 
				<div class="row align-items-top">
                    <div class="col-md-4">
                        <figure class="figure w-100">
                            <img src="https://referralfw.com/wp-content/uploads/Review-Reward-SQ.jpg" alt="Online Review Carpet Cleaning Coupon" class="figure-img img-fluid rounded p-3">
							
                        </figure>
                    </div>
                    <div class="col-md-8 pt-3">
                        <p class="h5 font-weight-normal"> If you're a current client, would you mind giving us a little shout out on social media? We'd greatly appreciate it. In fact, we appreciate it so much, we'll give you a $10 credit for each platform where you leave a review. Check out all the different platforms where you can shout the praises of Referral.</p>
						<br>
						<center><a href="https://referralfw.com/contact/review/" class="btn btn-primary text-uppercase" target="_blank">Leave Social Media Reviews</a></center>				
					</div>
				</div>
							<hr>
				<div class="row">
					<div class="col-md-4 text-center">
					<h2>Additional Coupons</h2>						
					</div>
					<div class="col">		
					</div>
				</div> 
				<div class="row align-items-top">
                    <div class="col-md-4">
                        <figure class="figure w-100">
                            <img src="https://referralfw.com/wp-content/uploads/Newsletter-Savings-SQ.jpg" alt="Newsletter Carpet Cleaning Coupon" class="figure-img img-fluid rounded p-3">
							
                        </figure>
                    </div>
                    <div class="col-md-8 pt-3">
                        <p class="h5 font-weight-normal">Our newsletter subscribers have access to monthly specials and coupons. We are working on a way for you to sign up right here on our website, but for now, if you are not already receiving our newsletters and would like to, give us a quick call, and we will add you to the list.</p>
							<br>
						<p class="h5 font-weight-normal">We also occasionally send out postcards to those on our mailing list. These postcards generally have a special offer or coupon listed on them.</p>

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
