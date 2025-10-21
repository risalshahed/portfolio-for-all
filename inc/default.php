<?php
add_theme_support( 'title-tag' );

add_theme_support( 'post-thumbnails', array( 'page', 'post' ) );

// Page Navigation
function pfa_pagenav() {
    global $wp_query, $wp_rewrite;
    $pages = '';
    $max = $wp_query->max_num_pages;
    if(!$current = get_query_var('paged')) $current = 1;
    $args['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $args['total'] = $max;
    $args['current'] = $current;
    $total = 1;
    $args['prev_text'] = '<i class="fa-sharp fa-regular fa-arrow-left"></i>';
    $args['next_text'] = '<i class="fa-sharp fa-regular fa-arrow-right"></i>';
    if ($max > 1) echo
        "<div class='tmp-pagination-button'>";
            echo paginate_links( $args );
            if($max > 1) echo 
        '</div>';
}