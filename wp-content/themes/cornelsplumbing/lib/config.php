<?php

/*
|--------------------------------------------------------------------------
| Theme Config
|--------------------------------------------------------------------------
|
| This is where all the main theme configuration items are stored
| along with the related functionality to access it.
*/

/**
 * Holds all of the config items.
 */
function cp_all_config() {
    return [
        'brand' => [
            'phone' => '(503) 123-1234',

            'email' => 'contact@cornelsplumbing.com',

            'hours' => [
                'weekstart' => 'mon',
                'weekend'   => 'fri',
                'timestart' => 9,
                'timeend'   => 17,
                'formatted' => 'Open Mon-Fri 9am-5pm',
            ],
        ],

        'google' => [
            'api-key' => GOOGLE_API_KEY,
            'place-id' => GOOGLE_PLACE_ID,
        ],

    ];
}

/**
 * Returns the config items at the passed key or
 * all config items if no key is specified.
 *
 * @param  String $key
 */
function cp_config($key = null) {

    $all_config = cp_all_config();

    // If no key is passed return all the config.
    if (!$key) {
        return $all_config;
    }

    // Split up the key so that you can access
    // subkeys such as 'hours.week-end'
    $keys = explode('.', $key);

    $current_level = $all_config;
    foreach($keys as $key) {

        // If the key exists keep looping.
        if (array_key_exists($key, $current_level)) {
            $current_level = $current_level[$key];
            continue;
        }

        // Otherwise it's a bad key.
        $current_level = null;
    }

    return $current_level;
}