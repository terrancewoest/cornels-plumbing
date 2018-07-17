<?php

/**
 * These are all of the different theme
 * functionality files to be loaded.
 */
$includes = [
    'config.php',           // Theme configuration items.
    'globals.php',          // Global variables used in the site.
    'theme-supports.php',   // Registers theme supports
    'wrapper.php',          // Has all of the functions needed for global template loading.
    'redirect.php',         // Handles any template rewrite or redirecting.
    'assets.php',           // Enqueues all needed theme assets.
    'helpers.php',          // Miscellaneous theme helper functions
];

// Include all of the globally required files
foreach($includes as $file) {

    $filepath = get_template_directory() . '/lib/' . $file;
    if (!file_exists($filepath)) {
        trigger_error(sprintf('Error locating %s for inclusion', $file), E_USER_ERROR);
    }

    require_once $filepath;
}
