<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <script src="https://kit.fontawesome.com/a80f1ca719.js" crossorigin="anonymous"></script>
    <?php

    // Google Place Id (used for testimonials)
    if (is_front_page()) {
        echo '<meta name="place-id" content="' . cp_config('google.place-id') . '">';
    }

    // Bring in wordpress's head.
    wp_head();
    ?>
</head>
