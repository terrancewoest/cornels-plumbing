<?php

/*
|--------------------------------------------------------------------------
| Template Redirects
|--------------------------------------------------------------------------
|
| This file handles custom changes to the templates that need to be loaded
*/


add_filter('template_include', 'cp_content_template_include', 99);
add_filter('base_template_include', 'cp_base_template_include');


/**
 * Handles setting the base template and loading any custom content templates.
 *
 * @param  String $template
 */
function cp_content_template_include($template) {

    global $wrapperContentTemplate;

    // Set the default template on the global var so
    // the wrapper can include it in its template.
    $wrapperContentTemplate = $template;

    // Return the located base template.
    $base_template = apply_filters('base_template_include', $template);
    return locate_template($base_template);
}

/**
 * Handles loading any custom base templates.
 *
 * @param  String $template
 */
function cp_base_template_include($template) {
    global $wrapperBaseTemplate;

    // Default template wrapper.
    $wrapperBaseTemplate = 'base.php';

    // Front page needs the empty base.
    if (is_front_page()) {
        $wrapperBaseTemplate = 'base-empty.php';
    }

    return $wrapperBaseTemplate;
}