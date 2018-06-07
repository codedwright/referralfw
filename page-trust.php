<?php 
session_start();
get_header(); ?><!-- Trust -->
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class="bg-light">
    <main class="bg-light container py-5">
        <div class="row">
            <article class="content col p-3 pr-lg-4">
                <?php the_content(); ?>
            </article>
        </div>
    </main>
</div>
<?php endwhile; ?>
<?php endif; ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="text-center text-dark modal-title">Thank You</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="text-dark modal-body">
        <p class="lead">Thank you for requesting a FREE estimate, we appreciate it!</p>
        <p>Please check out some reasons why people trust Referral below and we will get back with you shortly!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<?php if( isset( $_SESSION['estimate'] ) ) {
    echo <<<HTML
<script>
    $(document).ready(function(){
        setTimeout(function(){ 
            $('#exampleModal').modal('show')
        }, 500);
    });
</script>
HTML;

// remove all session variables
session_unset($_SESSION['estimate']); 
}
    get_footer(); ?>