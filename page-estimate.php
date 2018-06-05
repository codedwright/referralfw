<?php get_header(); ?><!-- Estimate -->
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class="bg-light">
    <main class="bg-light container py-5">
        <div class="row">
            <article class="col p-3 pr-lg-4">
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
                <div class="row mb-2">
                    <div class="col-md-6">
                        <a class="card-link" href="https://referralfw.com/services/waterdamage/">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <h3 class="mb-0 text-dark">
                                        Water Damage Remediation
                                    </h3>
                                    <p class="card-text">
                                        It is disarming to step from your basement stairs and into several inches of standing water. Our emergency service is available
                                        24/7. We can guide you through each step of the process.
                                    </p>
                                </div>
                                <div class="m-0">
                                    <img class="card-img-right flex-auto d-none d-lg-block" src="https://via.placeholder.com/200x250" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a class="card-link" href="https://referralfw.com/services/carpet/">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <h3 class="mb-0 text-dark">
                                        Carpet Cleaning
                                    </h3>
                                    <p class="card-text">
                                        Cleaning carpet may seem like a simple task, but with all the variables of fibers and soils, you need a company with superior
                                        training and experience to leave your carpet clean and dry.
                                    </p>
                                </div>
                                <div class="m-0">
                                    <img class="card-img-right flex-auto d-none d-lg-block" src="https://via.placeholder.com/200x250" />
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <a class="card-link" href="https://referralfw.com/services/tile/">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <h3 class="mb-0 text-dark">
                                        Tile &amp; Grout Cleaning
                                    </h3>
                                    <p class="card-text">
                                        We're sure you mop your tile regularly, but have you ever thought about how much soil and liquid have penetrated your porous
                                        grout? Perhaps you've forgetten how light the grout used to be.
                                    </p>
                                </div>
                                <div class="m-0">
                                    <img class="card-img-right flex-auto d-none d-lg-block" src="https://via.placeholder.com/200x250" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a class="card-link" href="https://referralfw.com/services/wood/">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <h3 class="mb-0 text-dark">
                                        Hardwood Cleaning
                                    </h3>
                                    <p class="card-text">
                                        Hardwood floors are gorgeous, but require maintenance to keep their beauty. While they occasionally need refinished, routine
                                        cleaning lengthens the time between refinishings.
                                    </p>
                                </div>
                                <div class="m-0">
                                    <img class="card-img-right flex-auto d-none d-lg-block" src="https://via.placeholder.com/200x250" />
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <a class="card-link" href="https://referralfw.com/services/rug/">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <h3 class="mb-0 text-dark">
                                        Oriental &amp; Area Rug Cleaning
                                    </h3>
                                    <p class="card-text">
                                        Whether we're cleaning them in your home or in our shop, you can trust that we will treat your rugs with care. We are an
                                        approved service provider by the carpet and rug institute.
                                    </p>
                                </div>
                                <div class="m-0">
                                    <img class="card-img-right flex-auto d-none d-lg-block" src="https://via.placeholder.com/200x250" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a class="card-link" href="https://referralfw.com/services/upholstery/">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <h3 class="mb-0 text-dark">
                                        Upholstery Cleaning
                                    </h3>
                                    <p class="card-text">
                                        How often do you dust your bookshelves? Did you know that your upholstered furniture collects just as much dust plus oils
                                        and hair from your body and your pets?
                                    </p>
                                </div>
                                <div class="m-0">
                                    <img class="card-img-right flex-auto d-none d-lg-block" src="https://via.placeholder.com/200x250" />
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <a class="card-link" href="https://referralfw.com/services/pet/">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <h3 class="mb-0 text-dark">
                                        Pet Urine Stain &amp; Odor Removal
                                    </h3>
                                    <p class="card-text">
                                        Our pets are family. But let's face it, they're not the cleanest of critters. Oils, hair, drool, and the occasional accidents
                                        on the floor. We specialize in removing pet stains and odors.
                                    </p>
                                </div>
                                <div class="m-0">
                                    <img class="card-img-right flex-auto d-none d-lg-block" src="https://via.placeholder.com/200x250" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a class="card-link" href="https://referralfw.com/services/vehicle/">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <h3 class="mb-0 text-dark">
                                        Vehicle, Automobile, Boat, Airplane &amp; RV Cleaning
                                    </h3>
                                    <p class="card-text">
                                        The average American spends an incredible 37,935 hours of their life driving. Not to mention the number of hours spent as
                                        a passenger. Life happens in your vehicles, and life can be messy.
                                    </p>
                                </div>
                                <div class="m-0">
                                    <img class="card-img-right flex-auto d-none d-lg-block" src="https://via.placeholder.com/200x250" />
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <a class="card-link" href="https://referralfw.com/services/mattress/">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <h3 class="mb-0 text-dark">
                                        Mattress Cleaning
                                    </h3>
                                    <p class="card-text">
                                        Maintaining a clean mattress is important for your health, especially if you experience allergies. Whether it's maintenace
                                        cleaning or taking care of bed accidents, we can help.
                                    </p>
                                </div>
                                <div class="m-0">
                                    <img class="card-img-right flex-auto d-none d-lg-block" src="https://via.placeholder.com/200x250" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a class="card-link" href="https://referralfw.com/services/commercial/">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <h3 class="mb-0 text-dark">
                                        Commercial Cleaning
                                    </h3>
                                    <p class="card-text">
                                        Business is all about investment. The flooring in your commercial setting is a company investment. Get the best return with
                                        proper maintenace by our experienced team.
                                    </p>
                                </div>
                                <div class="m-0">
                                    <img class="card-img-right flex-auto d-none d-lg-block" src="https://via.placeholder.com/200x250" />
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <a class="card-link" href="https://referralfw.com/services/mold/">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <h3 class="mb-0 text-dark">
                                        Mold Remediation
                                    </h3>
                                    <p class="card-text">
                                        The presence of mold can feel as scary as an alien invasion. We keep safety in mind as we find the source, remove the moisture,
                                        and remove the contomination.
                                    </p>
                                </div>
                                <div class="m-0">
                                    <img class="card-img-right flex-auto d-none d-lg-block" src="https://via.placeholder.com/200x250" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a class="card-link" href="https://referralfw.com/services/scotchgard/">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <h3 class="mb-0 text-dark">
                                        Scotchguard Carpet &amp; Fabric Protection
                                    </h3>
                                    <p class="card-text">
                                        Thanks to some fabulous chemists, we can protect your newly cleaned carpet and fabrics for greater longevity. Just think
                                        of Scotchgard as a magic force field of protection.
                                    </p>
                                </div>
                                <div class="m-0">
                                    <img class="card-img-right flex-auto d-none d-lg-block" src="https://via.placeholder.com/200x250" />
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <a class="card-link" href="https://referralfw.com/services/allergy/">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <h3 class="mb-0 text-dark">
                                        Allergy Relief
                                    </h3>
                                    <p class="card-text">
                                        We know that life with allergies can be miserable. With our specialized allergy treatment products and our focus on fast
                                        drying, we can help alleviate the allergens in your home.
                                    </p>
                                </div>
                                <div class="m-0">
                                    <img class="card-img-right flex-auto d-none d-lg-block" src="https://via.placeholder.com/200x250" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a class="card-link" href="https://referralfw.com/services/products/">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <h3 class="mb-0 text-dark">
                                        Products
                                    </h3>
                                    <p class="card-text">
                                        We can't keep all our secrets to ourselves! Discover these flooring and upholstery care items and see for yourself the difference
                                        they can make in prlonging the life of your home.
                                    </p>
                                </div>
                                <div class="m-0">
                                    <img class="card-img-right flex-auto d-none d-lg-block" src="https://via.placeholder.com/200x250" />
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </main>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>