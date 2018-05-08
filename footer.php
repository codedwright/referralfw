    <footer>
        <div class="row row-eq-height">
            <div class="col-12 col-lg-8 pt-3 pb-3">
                <div class="row justify-content-center">
                    <div class="col-4 col-md-2 p-2 ">
                        <img src="http://referralfw.com/wp-content/uploads/soa-logo.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-4 col-md-2 p-2 ">
                        <img src="http://referralfw.com/wp-content/uploads/iicrc.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-4 col-md-2 p-2 ">
                        <img src="http://referralfw.com/wp-content/uploads/bbb.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-4 col-md-2 p-2 ">
                        <img src="http://referralfw.com/wp-content/uploads/Ethical-Services.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-4 col-md-2 p-2 ">
                        <img src="http://referralfw.com/wp-content/uploads/Super-Service-Award-2014.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 pt-3 pb-3">
                <div class="row h-100 align-items-end justify-content-center">
                    <div class="col-8 col-sm-6 p-2 text-center">
                        <a href="http://referralfw.com/">
                            <img class="p-1 img-fluid" src="http://referralfw.com/Referral Cleaning &amp; Restoration Logo.svg">
                        </a>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <p class="h6 text-center text-lg-right">
                            <a href="<?php echo admin_url() ?>" target="_blank">Staff Login</a>
                        </p>
                        <p class="h6 text-center text-lg-right">
                            <a href="/partner" target="_blank">Networking Partners</a>
                        </p>
                    </div>
                    <div class="col-12 p-2">
                        <div class="row align-items-start">
                            <p class="col-6 h6 text-right">
                                Email:
                            </p>
                            <address class="col-6 h6 text-left text-lg-right">
                                <small>
                                    <a href="mailto:office@referralfw.com">Office@ReferralFW.com</a>
                                </small>
                            </address>
                        </div>
                        <div class="row align-items-start">
                            <p class="col-6 h6 text-right">
                                Address:
                            </p>
                            <address class="col-6 h6 text-left text-lg-right">
                                <small>
                                    2901 Parnell Avenue<br>
                                    Fort Wayne, Indiana 46805
                                </small>
                            </address>
                        </div>
                        <p class="col-12 pt-2 h6 text-center text-lg-right">
                            <a href="http://www.codedwright.com">&copy; 2015 Referral Cleaning &amp; Restoration</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<?php wp_footer(); ?>
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

</body>
</html>
