<?php


/**
 * Custom bones_page_navi() that takes a custom WP_Query for pagination, else uses the global $wp_query
 * @param $query    WP_Query Object
 */

function bones_page_navi2( $query ) {
    global $wp_query;
    $bignum = 999999999;
    if( !$query )
        $query = $wp_query;
    if( $query->max_num_pages <= 1 )
        return;
    echo '<nav class="pagination">';
    echo paginate_links( array(
        'base' => str_replace( $bignum, '%#%', esc_url( get_pagenum_link( $bignum ) ) ),
        'format' => '',
        'current' => max( 1, get_query_var( 'paged' ) ),
        'total' => $query->max_num_pages,
        'prev_text' => '&larr;',
        'next_text' => '&rarr;',
        'type' => 'list',
        'end_size' => 3,
        'mid_size' => 3
    ) );
    echo '</nav>';
}