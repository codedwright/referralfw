    <footer>
        <div class="bg-primary">
            <div class="container">
                <div class="row pt-3">
                    <div class="col-6 col-md-3 col-lg-2 py-3">
                        <img src="https://referralfw.com/wp-content/uploads/soa-logo.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-6 col-md-3 col-lg-2 py-3">
                        <img src="https://referralfw.com/wp-content/uploads/iicrc.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-6 col-md-3 col-lg-2 py-3">
                        <img src="https://referralfw.com/wp-content/uploads/bbb.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-6 col-md-3 col-lg-2 py-3">
                        <img src="https://referralfw.com/wp-content/uploads/angies-list-ethical-services.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-4 py-3 px-3 px-lg-4">
                        <div class="row">
                            <div class="col embed-responsive embed-responsive-16by9 mx-3 mb-3">
                                <iframe style="border: 2px solid #34495e;" class="embed-responsive-item" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=2901+Parnell+Avenue,+Fort+Wayne,+IN&amp;aq=0&amp;oq=2901+p&amp;sll=41.082613,-85.1509&amp;sspn=0.464257,1.056747&amp;ie=UTF8&amp;hq=&amp;hnear=2901+Parnell+Ave,+Fort+Wayne,+Indiana+46805&amp;ll=41.102199,-85.131105&amp;spn=0.007252,0.016512&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed" scrolling="no"></iframe>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col">
                                <!-- <i class="fas fa-phone-square"></i> --> <a href="tel:2604834383">260-483-4383</a>
                            </div>
                            <div class="col text-right">
                                <!-- <i class="fas fa-envelope-square"></i> --> <a href="mailto:office@referralfw.com">office@referralfw.com</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-right">
                                &copy; 2018 Referral Cleaning &amp; Restoration
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6 class="small text-uppercase">
                            <a class="pr-3" href="/wp-login.php">login</a> | <a class="pl-3" href="/partner">Networking Partners</a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<script>
    $(document).ready(function(){
        $(".page_item_has_children > a").after("<span class='dropdown'></span>");
        $(".dropdown").click(function(){
            $(this).parent().siblings().children('.dropdown.active').removeClass('active');
            $(this).toggleClass("active");
        });
        $(".menu-trigger").click(function(){
            $(".offcanvas").addClass("active");
        });
        $(".backdrop").click(function(){
            $(".offcanvas").removeClass("active");
        });
    });
</script>
<?php wp_footer(); ?>
</body>
</html>
