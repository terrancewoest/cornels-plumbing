<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<?php get_template_part('templates/layout/head'); ?>
</head>
<body <?php body_class(); ?>>
    <?php get_header(); ?>

    <?php cp_content_template(); ?>

    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>

</html>