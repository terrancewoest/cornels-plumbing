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
function cp_enqueue_assets()
{
    // Swap local for CDN version of jQuery
    wp_deregister_script('jquery');
    wp_register_script('jquery' , 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, true);
    wp_enqueue_script('jquery');

    // Bootstrap Javascript
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', ['jquery'], null, true);
    wp_enqueue_script('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js', ['jquery', 'popper'], null, true);

    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css');

    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700');

    // Google Api
    if (is_front_page()) {
        wp_enqueue_script('google-maps-api', 'https://maps.googleapis.com/maps/api/js?key=' . cp_config('google.api-key') . '&libraries=places');
    }


    // Theme's Javascript
    wp_enqueue_script('cp-js', versionedAsset('app.js'), ['jquery', 'bootstrap'], null, true);

    // Localize the main js file with the CP_Global variable.
    wp_localize_script('cp-js', 'CP_Global', [
        'ajaxUrl' => admin_url('admin-ajax.php'),
    ]);

    // Theme's CSS
    wp_enqueue_style('cp-css', versionedAsset('app.css'), ['bootstrap-css']);

}

/**
 * Helper for getting versioned files from mix manifest.
 *
 * @param  string  $path  Path to the asset relative to asset folder.
 * @return string
 */
function versionedAsset($path)
{
    // Needs leading slash.
    $path = substr($path, 0, 1) !== '/' ? "/$path" : $path;

    // Construct all needed paths.
    $rootPath = get_template_directory();
    $assetsDir = '/dist';
    $manifestPath = $rootPath . $assetsDir . '/mix-manifest.json';

    // Get the manifest data.
    static $manifest;
    if (!$manifest) {
        if (!file_exists($manifestPath)) {
            throw new Exception('The Mix manifest does not exist.');
        }
        $manifest = json_decode(file_get_contents($manifestPath), true);
    }

    // Is the file in
    if (!array_key_exists($path, $manifest)) {
        throw new Exception(
            "Unable to locate Mix file: {$path}. Please check your ".
            'webpack.mix.js output paths and try again.'
        );
    }

    return get_template_directory_uri() . $assetsDir . $manifest[$path];
}
