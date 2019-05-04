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

/**
 * Returns whether or not we are after hours.
 *
 * @return boolean
 */
function cp_is_after_hours() {
    $afterHours = false;

    // Is today one of the closed holiddays in the config?
    if (in_array(date('Y-m-d'), cp_config('closed'))) {
        $afterHours = true;
    }

    // In one of the open days of the week?
    if (date('w') < cp_config('hours.weekstart') || date('w') > cp_config('hours.weekend')) {
        $afterHours = true;
    }

    // Are we before opening time or after closing time?
    if (date('G') < cp_config('hours.timestart') || date('G') > cp_config('hours.timeend')) {
        $afterHours = true;
    }

    return $afterHours;
}

/**
 * Returns whether or not phone are open.
 *
 * @return boolean
 */
function cp_phones_closed() {
    $phonesClosed = false;

    // Is today one of the closed holiddays in the config?
    if (in_array(date('Y-m-d'), cp_config('closed'))) {
        $phonesClosed = true;
    }

    // In one of the open days of the week (phones stay open 1 day longer)?
    if (date('w') < cp_config('hours.weekstart') || date('w') > cp_config('hours.weekend')) {
        $phonesClosed = true;
    }

    // Are we before opening time or after closing time?
    if (date('G') < cp_config('hours.timestart') || date('G') > cp_config('hours.timeend')) {
        $phonesClosed = true;
    }

    return $phonesClosed;
}