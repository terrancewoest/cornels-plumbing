<?php

/*
|--------------------------------------------------------------------------
| Theme Helper Functions
|--------------------------------------------------------------------------
|
| This file holds all of the miscellaneous theme helper functions.
*/


/**
 * Wrapper function for echoing out cp_get_asset()
 *
 * @param  String $file
 */
function cp_asset($file) {
    echo cp_get_asset($file);
}

/**
 * Returns the uri path of a theme asset.
 *
 * @param  String $file
 */
function cp_get_asset($file) {
    return get_template_directory_uri() . '/assets/' . $file;
}