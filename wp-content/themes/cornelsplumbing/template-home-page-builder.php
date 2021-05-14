<?php

/*
Template Name: Page Builder
*/

// Use the home page header.
get_header('front');

if (have_posts()) {
    while (have_posts()) {
        the_post();

        the_content();
    }
}

get_footer();

?>

