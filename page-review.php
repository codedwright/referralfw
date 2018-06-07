<?php 
session_start();
get_header(); ?><!-- Review -->
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class="bg-light">
    <main class="bg-light container py-5">
        <div class="row">
            <article class="content col p-3 pr-lg-4">
            <?php 
                if( isset($_SESSION['feedback']) ) echo <<<HTML
<div id="feedback-alert" class="alert alert-success alert-dismissible" style="display: none" role="alert">
    <h4 class="alert-heading text-center">Thank you for your feedback, we appreciate it!</h4>
    <p class="mb-0 text-center">To earn free cleaning credit, leave a positive online review below. </p>
    <button type="button" class="close">
        <span>&times;</span>
    </button>
</div>
HTML;
                
                the_content(); ?>
            </article>
        </div>
    </main>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php 
if( isset( $_SESSION['feedback'] ) ) {
    echo <<<HTML
    <script>
        $(document).ready(function(){
            setTimeout(function(){ 
                $("#feedback-alert").slideToggle(); 
            }, 500);
            $(".close").click(function(){
                $("#feedback-alert").slideToggle('slow');
            });
        });
    </script>
HTML;
}

// remove all session variables
session_unset($_SESSION['feedback']); 

get_footer(); ?>