<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
add_filter( 'body_class', function( $classes ) {
    return array_diff( $classes, array( 'home', 'blog', 'twentyseventeen-front-page' ) );
} );
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php
        include(ABSPATH . "landing-page/index.html");
        ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
