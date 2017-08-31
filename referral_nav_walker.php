<?php

class Referral_Nav_Walker extends Walker_Page {
    function start_el(&$output, $page, $depth = 0, $args = Array(), $current_page = 0) {
    	if ( $depth )
    		$indent = str_repeat("\t", $depth);
    	else
    		$indent = '';

    	extract($args, EXTR_SKIP);
    	$css_class = array('page_item', 'page-item-'.$page->ID);

    	//JA ADDITION START 1 of 2 - DETECT IF PAGE HAS CHILDREN START
    	$has_children = wp_list_pages('&child_of='.$page->ID.'&echo=0');
    	//JA ADDITION END 1 of 2 - DETECT IF PAGE HAS CHILDREN

    	if ( !empty($current_page) ) {
    		$_current_page = get_page( $current_page );
    		if ( isset($_current_page->ancestors) && in_array($page->ID, (array) $_current_page->ancestors) )
    			$css_class[] = 'current_page_ancestor';
    		if ( $page->ID == $current_page )
    			$css_class[] = 'current_page_item';

    		//JA ADDITION START 2 of 2 - DETECT IF PAGE HAS CHILDREN START
    		if ( !empty($has_children) )
    			$css_class[] = 'page_item_has_children';
    		//JA ADDITION START 2 of 2 - DETECT IF PAGE HAS CHILDREN END

    		elseif ( $_current_page && $page->ID == $_current_page->post_parent )
    			$css_class[] = 'current_page_parent';
    	} elseif ( $page->ID == get_option('page_for_posts') ) {
    		$css_class[] = 'current_page_parent';
    	}

    	$css_class = implode(' ', apply_filters('page_css_class', $css_class, $page));

        if ( !empty($has_children) ) {
            $output .= $indent . '<li class="' . $css_class . ' page_item_has_children"><a href="' . get_page_link($page->ID) . '" title="' . esc_attr( wp_strip_all_tags( apply_filters( 'the_title', $page->post_title, $page->ID ) ) ) . '"><span>' . $link_before . apply_filters( 'the_title', $page->post_title, $page->ID ) . $link_after . '</span></a>';
        } else {
            $output .= $indent . '<li class="' . $css_class . '"><a href="' . get_page_link($page->ID) . '" title="' . esc_attr( wp_strip_all_tags( apply_filters( 'the_title', $page->post_title, $page->ID ) ) ) . '"><span>' . $link_before . apply_filters( 'the_title', $page->post_title, $page->ID ) . $link_after . '</span></a>';
        }
    	if ( !empty($show_date) ) {
    		if ( 'modified' == $show_date )
    			$time = $page->post_modified;
    		else
    			$time = $page->post_date;

    		$output .= " " . mysql2date($date_format, $time);
    	}
    }
    // function end_el( &$output, $page, $depth, $args ) {
    //     $has_children = wp_list_pages('&child_of='.$page->ID.'&echo=0');
    //     if ( !empty($has_children) ) {
    //         $output .= "</li>";
    //     } else {
    //         $output .= "</li>";
    //     }
    // }
}
