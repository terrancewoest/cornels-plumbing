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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-POYwD7xcktv3gUeZO5s/9nUbRJG/WOmV6jfEGikMJu77LGYO8Rfs2X7URG822aum" crossorigin="anonymous">
</body>

</html>