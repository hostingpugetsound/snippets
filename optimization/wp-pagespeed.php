<?php
/**
 * Useful snippets for dealing with Pagespeed for WP specifically
 */



# Eliminate render-blocking JavaScript and CSS in above-the-fold content
# Defer JS files (for enqueued files) - https://wpshout.com/make-site-faster-async-deferred-javascript-introducing-script_loader_tag/


function hps_defer_scripts( $tag, $handle, $src ) {

    // The handles of the enqueued scripts we want to defer
    $defer_scripts = array(
        'bones-modernizr',
        'bones-js',
        'admin-bar',
        'flexslider',
        'jquery-migrate',
    );

    if ( in_array( $handle, $defer_scripts ) ) {
        return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
    }

    return $tag;
}
add_filter( 'script_loader_tag', 'hps_defer_scripts', 10, 3 );






# Remove Query String From CSS & Javascript
# https://wpvkp.com/wordpress-remove-query-string-css-javascript-js/
function hps_remove_cssjs_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'hps_remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'hps_remove_cssjs_ver', 10, 2 );