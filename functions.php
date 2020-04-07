<?php
add_action('wp_enqueue_scripts', 'twentyseventeen_child_scripts');
// Just add the body class always.
// We don't load the related CSS unless wanted.
add_filter( 'body_class', function( $classes ) {
    return array_merge( $classes, array( 'colors-dark' ) );
} );
function twentyseventeen_child_scripts() {
	wp_enqueue_style("parent-style", get_template_directory_uri() . "/style.css");
    wp_enqueue_style(
        "parent-style-dark",
        get_template_directory_uri() . "/assets/css/colors-dark.css",
        array(), false, "(prefers-color-scheme: dark)"
    );
}
