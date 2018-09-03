<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php

    // Google Place Id (used for testimonials)
    if (is_front_page()) {
        echo '<meta name="place-id" content="' . cp_config('google.place-id') . '">';
    }

    // Bring in wordpress's head.
    wp_head();
    ?>
</head>
