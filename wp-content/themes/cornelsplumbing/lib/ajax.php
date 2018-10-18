<?php

add_action('wp_ajax_cache_testimonials', 'cp_ajax_cache_testimonials');
add_action('wp_ajax_nopriv_cache_testimonials', 'cp_ajax_cache_testimonials');

/**
 * Caches the testimonials recieved from Google's api.
 */
function cp_ajax_cache_testimonials() {
    // Cache for 1 day.
    $stored = apc_store('cp_testimonials', $_POST['testimonials'], 60 * 60 * 24);

    wp_send_json([
        'stored' =>  $stored,
    ]);

    wp_die();
}