<?php
add_action('wp_enqueue_scripts', 'twentyseventeen_child_scripts');
function twentyseventeen_child_scripts() {
    wp_enqueue_script("auto-dark", "auto-dark.js", false);
}
