<?php
/**
 *
 * Original function by: https://stackoverflow.com/users/1948627/bitworking
 * StackOverflow question URL: https://stackoverflow.com/a/35776752
 * Modified by: https://stackoverflow.com/users/2103923/tmmc
 * More details on StackOverflow: https://stackoverflow.com/a/45057819/2103923
 */
function custom_gallery_grid($output = '', $attrs, $instance) {
    $attrs = array_merge( array('columns' => 3), $attrs) ;
    // echo '<pre>' . print_r($attrs, true) . '</pre>'; // Check what is inside the array.
    $columns = $attrs['columns'];
    $images = explode(',', $attrs['ids']);
    // Other columns options in WordPress gallery (5,7,8,9)
    // are not suitable for default Bootstrap 12 columns grid
    // so they take the default value `col-sm-4`.
    switch($columns) {
        case 1:
            $col_class = 'col-sm-12';
            break;
        case 2:
            $col_class = 'col-sm-6';
            break;
        // case 3: # Default
        //   $col_class = 'col-sm-4';
        //   break;
        case 4:
            $col_class = 'col-sm-3';
            break;
        case 6:
            $col_class = 'col-sm-2';
            break;
        default:
            $col_class = 'col-sm-4';
            break;
    }
    // Gallery thumnbnail size (set via WordPress gallery panel).
    // Defaults to `thumbnail` size.
    $gallerySize = ( $attrs['size'] ) ? $attrs['size'] : 'thumbnail';
    // Starting `gallery` block and first gallery `row`.
    $galleryID = ( $instance < 10 ) ? 'gallery-0' . $instance : 'gallery-' . $instance;
    $gallery = '
        <section class="' . $galleryID . '">
        <div class="row py-2 align-items-center justify-content-center">';
    $i = 0; // Counter for the loop.
    foreach ($images as $image) {
        if ($i%$columns == 0 && $i > 0) { // Closing previous `row` and startin the next one.
            $gallery .= '</div><div class="row py-2 align-items-center justify-content-center">';
        }
        // Thumbnail `src` and `alt` attributes.
        $gallerySrc = wp_get_attachment_image_src( $image, $gallerySize );
        $galleryAlt = get_post_meta( $image, '_wp_attachment_image_alt', true );
        // Attachment
        $attachment = get_post($image);
        $galleryCaption = $attachment->post_excerpt;
        // Determine where to the gallery thumbnail is linking (set via WordPress gallery panel).
        switch($attrs['link']) {
            case 'file':
                $galleryLinkImg   = wp_get_attachment_image_src( $image, 'full' ); // Take the `full` or `large` image url.
                $galleryLinkAttrs = array( // More attributes can be added, only `href` is required.
                'href'         => $galleryLinkImg[0], // Link to original image file.
                'data-gallery' => 'gallery', // Set some data-attribute if it is needed.
                'target'       => '_blank',  // Set target to open in new tab/window.
                // 'title'        => '',
                // 'class'        => '',
                // 'id'           => ''
                );
                break;
            case 'none':
                $galleryLinkAttrs = false;
                break;
            default: // By default there is no `link` and the thumb is linking to attachment page.
                $galleryLinkAttrs = array( // More attributes can be added, only `href` is required.
                'href'  => get_attachment_link($image), // Link to image file attachment page.
                'target'       => '_blank',  // Set target to open in new tab/window.
                // 'class' => '',
                // 'id'    => ''
                );
                break;
        }
        $gallery .= '
            <div class="'.$col_class.'">' .
            '<figure class="figure">' .
                custom_gallery_item($gallerySrc[0], $galleryAlt, $galleryLinkAttrs) .
            '<figcaption class="figure-caption text-center">' .
            $galleryCaption . 
            '</figcaption></figure></div>';
        $i++;
    }
    // Closing last gallery `row` and whole `gallery` block.
    $gallery .= '
        </div>
        </section>';
    return $gallery;
    }

// Helper function: DRY while generating gallery items.
function custom_gallery_item($itemImgSrc, $itemImgAlt = '', $itemLinkAttrs = false) {
    $galleryItem = '<img src="' . $itemImgSrc . '" alt="' . $itemImgAlt . '" class="figure-img img-fluid rounded" />';
    if ($itemLinkAttrs) {
        $linkAttrs = '';
        foreach ($itemLinkAttrs as $attrName => $attrVal) {
            $linkAttrs .= ' ' . $attrName . '="' . $attrVal . '"';
        }
        $galleryItem = '<a' . $linkAttrs . '>' . $galleryItem . '</a>';
    }
    return $galleryItem;
}

add_filter('post_gallery', 'custom_gallery_grid', 10, 3);