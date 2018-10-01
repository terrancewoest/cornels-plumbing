<?php

add_action('after_theme_setup', 'cp_register_thumbnail_sizes');
add_filter('image_size_names_choose', 'cp_name_thumbnail_sizes');

/**
 * Registers all of the different thumbnail sizes needed by the theme.
 */
function cp_register_thumbnail_sizes() {

    add_image_size('page-banner', 1440, 600, ['center', 'center']);

}

/**
 * Name the new page banners.
 */
function cp_name_thumbnail_sizes($sizes) {
    return array_merge($sizes, [
        'page-banner' => 'Page Banner',
    ]);
}