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

// Add chaos.social => Mastodon
add_filter('twentyseventeen_social_links_icons', function($social_links_icons) {
    $social_links_icons['chaos.social'] = 'mastodon';
    $social_links_icons['wiki.hackerspaces.org'] = 'hackerspaces';
    return $social_links_icons;
});

// Add the SVG for the icon
add_action('wp_footer', function() {
    require_once get_stylesheet_directory() . '/assets/svg-icons.svg';
}, 1000);
