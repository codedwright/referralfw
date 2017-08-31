<?php get_header(); ?>

<nav><ul>
<?php
wp_list_pages(array(
    'title_li'    => '',
    'child_of'    => '',
    'exclude'     => '',
    'walker'      => new Referral_Nav_Walker()
));
?>
</ul></nav>

<?php get_footer(); ?>
