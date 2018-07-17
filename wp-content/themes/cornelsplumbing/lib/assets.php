<?php

/*
|--------------------------------------------------------------------------
| Asset Enqueuing
|--------------------------------------------------------------------------
|
| This file handles enqueueing the theme's needed scripts and styles
*/


add_action('wp_enqueue_scripts', 'cp_enqueue_assets');


/**
 * Handles enqueueing all of the needed
 * scripts and styles for the theme.
 */
function cp_enqueue_assets() {

    // Swap local for CDN version of jQuery
    wp_deregister_script('jquery');
    wp_register_script('jquery' , 'https://code.jquery.com/jquery-3.3.1.slim.min.js', false, null, true);
    wp_enqueue_script('jquery');

    // Bootstrap Javascript
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/popper.min.js', ['jquery'], null, true);
    wp_enqueue_script('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js', ['jquery', 'popper'], null, true);

    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css');

    // Theme's Javascript
    wp_enqueue_script('cp-js', get_template_directory_uri() . '/dist/app.js', ['jquery', 'bootstrap'], null, true);

    // Theme's CSS
    wp_enqueue_style('cp-css', get_template_directory_uri() . '/dist/app.css', ['bootstrap-css']);

}
