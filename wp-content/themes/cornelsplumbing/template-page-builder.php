<?php

/*
Template Name: Page Builder
*/

if (have_posts()) {
    while (have_posts()) {
        the_post();

        the_content();
    }
}
?>

