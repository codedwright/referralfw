<?php

global $post;
$children = get_pages( array( 'child_of' => $post->ID ) );

if ( is_page() && count( $children ) > 0 ) : ?>
<!-- This is a parent-page (with one or more children) -->
<h3 class="widget-title lead">Additional Information</h3>
<ul class="list-group">
    <?php
        $id = get_the_ID();
        wp_list_pages(array(
            'title_li'    => '',
            'child_of'    => $id,
            'depth'       => '1',
            'walker'      => new Referral_Submenu_Walker()
        ));
    ?>
</ul>
<?php endif; ?>