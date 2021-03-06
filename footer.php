    <footer>
        <div class="bg-primary">
            <div class="container">
                <div class="row pt-3">
                    <div class="m-auto col-6 col-md-3 col-lg-2 pt-3">
                        <img src="https://referralfw.com/wp-content/uploads/soa-logo.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="m-auto col-6 col-md-3 col-lg-2 pt-3">
                        <img src="https://referralfw.com/wp-content/uploads/iicrc.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="m-auto col-6 col-md-3 col-lg-2 pt-3">
                        <img src="https://referralfw.com/wp-content/uploads/bbb.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="m-auto col-6 col-md-3 col-lg-2 pt-3">
                        <img src="https://referralfw.com/wp-content/uploads/angies-list-ethical-services.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-4 pt-3 px-3 px-lg-4">
                        <div class="row">
                            <div class="col embed-responsive embed-responsive-16by9 mx-3 mb-3">
                                <iframe style="border: 2px solid #34495e;" class="embed-responsive-item" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=2901+Parnell+Avenue,+Fort+Wayne,+IN&amp;aq=0&amp;oq=2901+p&amp;sll=41.082613,-85.1509&amp;sspn=0.464257,1.056747&amp;ie=UTF8&amp;hq=&amp;hnear=2901+Parnell+Ave,+Fort+Wayne,+Indiana+46805&amp;ll=41.102199,-85.131105&amp;spn=0.007252,0.016512&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed" scrolling="no"></iframe>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-sm-6 col-lg-12 col-xl-6  text-center text-sm-left text-lg-center text-xl-left">
                                <a href="tel:2604834383">260-483-4383</a>
                            </div>
                            <div class="col-sm-6 col-lg-12 col-xl-6 text-center text-sm-right text-lg-center text-xl-right">
                                <a href="mailto:office@referralfw.com">office@referralfw.com</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center text-sm-right">
                                <a href="https://codedwright.com" target="_blank" class="btn p-0">
                                    &copy; <?php echo date("Y"); ?> Referral Cleaning &amp; Restoration
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6 class="small d-flex align-items-center mb-2 py-2">
                            <!-- Button trigger modal -->
                            <button type="button" class="px-0 btn btn-primary text-uppercase mr-3" data-toggle="modal" data-target="#exampleModal">
                                Login
                            </button> | <a class="px-0 btn btn-primary text-uppercase ml-3" href="/partner">Networking Partners</a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="w-100 text-center text-primary">
                <i class="fas fa-check-circle"></i>
                Login
            </h1>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-5 text-dark text-center">
                <?php 
                    if ( ! is_user_logged_in() ) { // Display WordPress login form:
                        $args = array(
                            'remember' => true
                        );
                        wp_login_form( $args );
                    } else { // If logged in:
                        wp_loginout( home_url() ); // Display "Log Out" link.
                        echo " | ";
                        wp_register('', ''); // Display "Site Admin" link.
                    }
                ?>
            </div>
        </div>
    </div>
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
