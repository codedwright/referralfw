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
                            Services
                        </h1>
                        <?php the_content(); ?>
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
                                        It is disarming to step from your basement stairs and into several inches of standing water. Our emergency service is available 24/7. We can guide you through each step of the process.
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
                                        Cleaning carpet may seem like a simple task, but with all the variables of fibers and soils, you need a company with superior training and experience to leave your carpet clean and dry.
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
                                        We're sure you mop your tile regularly, but have you ever thought about how much soil and liquid have penetrated your porous grout? Perhaps you've forgetten how light the grout used to be.
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
                                        Hardwood floors are gorgeous, but require maintenance to keep their beauty. While they occasionally need refinished, routine cleaning lengthens the time between refinishings.
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
                                        Whether we're cleaning them in your home or in our shop, you can trust that we will treat your rugs with care. We are an approved service provider by the carpet and rug institute.
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
                                        How often do you dust your bookshelves? Did you know that your upholstered furniture collects just as much dust plus oils and hair from your body and your pets?
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
                                        Our pets are family. But let's face it, they're not the cleanest of critters. Oils, hair, drool, and the occasional accidents on the floor. We specialize in removing pet stains and odors.
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
                                        The average American spends an incredible 37,935 hours of their life driving. Not to mention the number of hours spent as a passenger. Life happens in your vehicles, and life can be messy.
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
                                        Maintaining a clean mattress is important for your health, especially if you experience allergies. Whether it's maintenace cleaning or taking care of bed accidents, we can help.
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
                                        Business is all about investment. The flooring in your commercial setting is a company investment. Get the best return with proper maintenace by our experienced team.
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
                                        The presence of mold can feel as scary as an alien invasion. We keep safety in mind as we find the source, remove the moisture, and remove the contomination. 
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
                                        Thanks to some fabulous chemists, we can protect your newly cleaned carpet and fabrics for greater longevity. Just think of Scotchgard as a magic force field of protection.
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
                                        We know that life with allergies can be miserable. With our specialized allergy treatment products and our focus on fast drying, we can help alleviate the allergens in your home.
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
                                        We can't keep all our secrets to ourselves! Discover these flooring and upholstery care items and see for yourself the difference they can make in prlonging the life of your home.
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