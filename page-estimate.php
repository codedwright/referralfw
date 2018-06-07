<?php get_header(); ?><!-- Estimate -->
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class="bg-light">
    <main class="bg-light container py-5">
        <div class="row">
            <article class="content col p-3 pr-lg-4">
                <div class="row">
                    <form class="col" action="https://referralfw.com/wp-content/themes/referralfw/inc/referral_estimate_mail.php" method="post">
                        <?php wp_nonce_field( basename( __FILE__ ), 'referral_estimate_nonce' ); ?>
                        <div class="card border-primary mb-3">
                            <div class="card-header bg-primary text-light text-center">
                                <h1>FREE Cleaning Estimate Request Form</h1>
                            </div>
                            <div class="card-body">
                            <div class="form-row py-3">
                                    <div class="col-md-6">
                                        <label for="fname">First Name:</label>
                                        <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lname">Last Name:</label>
                                        <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-row py-3">
                                    <div class="col-md-6">
                                        <label for="phone">Phone:</label>
                                        <input type="phone" class="form-control" name="phone" id="phone">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" name="email" id="email">
                                    </div>
                                </div>
                                <div class="form-row pb-3">
                                    <div class="col">
                                        <label for="address">Address:</label>
                                        <input type="text" name="address" id="address" class="form-control" placeholder="Address">
                                    </div>
                                </div>
                                <div class="form-row pb-3">
                                    <div class="col-md-6">
                                        <label for="city">City:</label>
                                        <input type="text" name="city" id="city" class="form-control" placeholder="City">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="state">State:</label>
                                        <input type="text" name="state" id="state" class="form-control" placeholder="IN">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="zip">Zip:</label>
                                        <input type="text" name="zip" id="zip" class="form-control" placeholder="Zip">
                                    </div>
                                </div>
                                <div class="form-row pb-3">
                                    <div class="col-md-6">
                                        <label>Services Needed:</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Carpet Cleaning" id="carpet" name="service[1]">
                                            <label class="form-check-label" for="carpet">
                                                Carpet Cleaning
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Tile &amp; Grout Cleaning" id="tile" name="service[2]">
                                            <label class="form-check-label" for="tile">
                                                Tile &amp; Grout Cleaning
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Hardwood Cleaning" id="wood" name="service[3]">
                                            <label class="form-check-label" for="wood">
                                                Hardwood Cleaning
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Oriental &amp; Area Rug Cleaning" id="rug" name="service[4]">
                                            <label class="form-check-label" for="rug">
                                                Oriental &amp; Area Rug Cleaning
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Upholstery Cleaning" id="upholstery" name="service[5]">
                                            <label class="form-check-label" for="upholstery">
                                                Upholstery Cleaning
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Pet Urine Stain &amp; Odor Removal" id="pet" name="service[6]">
                                            <label class="form-check-label" for="pet">
                                                Pet Urine Stain &amp; Odor Removal
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Vehicle, Automobile, Boat, Airplane &amp; RV Cleaning" id="vehicle" name="service[7]">
                                            <label class="form-check-label" for="vehicle">
                                                Vehicle Cleaning
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Mattress Cleaning" id="mattress" name="service[8]">
                                            <label class="form-check-label" for="mattress">
                                                Mattress Cleaning
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Commercial Cleaning" id="commercial" name="service[9]">
                                            <label class="form-check-label" for="commercial">
                                                Commercial Cleaning
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Scotchguard Carpet &amp; Fabric Protection" id="scotchguard" name="service[0]">
                                            <label class="form-check-label" for="scotchguard">
                                                Scotchguard Protection
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="concerns">Rooms, Sizes, and Concerns:</label>
                                        <textarea name="concerns" id="concerns" class="form-control" placeholder="Rooms, Sizes, and Concerns" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-primary text-light text-right">
                                <button type="submit" class="btn btn-outline-light">Request Estimate</button>
                            </div>
                            </div>
                        </div>
                    </form>
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