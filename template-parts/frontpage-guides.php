<?php
    $data = get_post_meta($post->ID, "referral-frontpage-meta-box", true);
    if(isset($data['guides'])) {
        if($data['guides']['linked'] == 'checked') {
            $frontpage_guides_link1 = '<a class="d-flex align-items-stretch" href="https://www.referralfw.com/resource/pdf/Referrals%20Consumer%20Guide%20To%20Carpet%20Cleaning.pdf">';
            $frontpage_guides_link2 = '<a class="d-flex align-items-stretch" href="https://referralfw.com/wp-content/uploads/Referrals-Consumer-Guide-To-Water-Damage-Restoration.pdf">';
            $frontpage_guides_link3 = '<a class="d-flex align-items-stretch" href="https://referralfw.com/resources/tips/">';        
            $frontpage_guides_end = '</a>';
        }
        $frontpage_guides_description = $data['guides']['description'];
    } else {
        $frontpage_guides_link1 = '';
        $frontpage_guides_link2 = '';
        $frontpage_guides_link3 = '';        
        $frontpage_guides_end = '';
        $frontpage_guides_description = 'You need to fill out the guides section on your frontpage template.';
    }
    $frontpage_guides = <<<HTML
<div class="">
    <div class="container">
        <div class="row py-5">
            <div class="col-lg-3">
                <h1 class="w-100 text-center text-uppercase">Free Guides</h1>
                <p class="text-capitalize">$frontpage_guides_description<!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore? --></p>
                <form class="form-signin" autocomplete="off">
                    <div class="form-label-group">
                        <input type="text" id="first_name" class="form-control" placeholder="First Name" required>
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="form-label-group">
                        <input type="text" id="last_name" class="form-control" placeholder="Last Name" required>
                        <label for="last_name">Last Name</label>
                    </div>
                    <div class="form-label-group">
                        <input type="email" id="email" class="form-control" placeholder="Email address" required>
                        <label for="email">Email Address</label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Signup &amp; Download</button>
                </form>
            </div>
            <div class="col-lg-9 d-flex align-items-stretch pt-5 px-5 p-lg-0">
                <div class="row justify-content-center p-3 py-lg-0">
                    <div class="col-sm-4 d-flex p-3 py-lg-0">
                        $frontpage_guides_link2
                        <div class="card w-100">
                            <img class="card-img-top" src="https://referralfw.com/wp-content/uploads/Restoration-Consumer-Guide-Featured-Image.jpg" alt="Card image cap">
                            <div class="card-body d-flex align-items-center justify-content-center">
                                <h5 class="card-title text-center m-0">Water Restoration<br>Consumer Guide</h5>
                            </div>
                        </div>
                        $frontpage_guides_end
                    </div>
                    <div class="col-sm-4 d-flex p-3 py-lg-0">
                        $frontpage_guides_link1
                        <div class="card w-100">
                            <img class="card-img-top" src="https://referralfw.com/wp-content/uploads/Carpet-Cleaning-Consumer-Guide-Featured-Image.jpg" alt="Card image cap">
                            <div class="card-body d-flex align-items-center justify-content-center">
                                <h5 class="card-title text-center m-0">Carpet Cleaning<br>Consumer Guide</h5>
                            </div>
                        </div>
                        $frontpage_guides_end
                    </div>
                    <div class="col-sm-4 d-flex pt-3 px-3 p-sm-3 py-lg-0">
                        $frontpage_guides_link3
                        <div class="card w-100">
                            <img class="card-img-top" src="https://referralfw.com/wp-content/uploads/Care-Tips-Guide-Featured-Image.jpg" alt="Card image cap">
                            <div class="card-body d-flex align-items-center justify-content-center">
                                <h5 class="card-title text-center m-0">Care Tips<br>Consumer Guide</h5>
                            </div>
                        </div>
                        $frontpage_guides_end
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
HTML;
    echo $frontpage_guides;
?>