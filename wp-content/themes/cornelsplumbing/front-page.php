<?php
get_header('front');

// Hero
get_template_part('templates/blocks/front-hero');

// Anchor for the sticky nav
echo '<div class="sticky-anchor"></div>';

// Our Services
get_template_part('templates/blocks/front-services');

// Testimonials
get_template_part('templates/blocks/front-testimonials');

// Coupon
get_template_part('templates/blocks/front-coupon');

// Preventative Services
get_template_part('templates/blocks/front-blog');

// About
get_template_part('templates/blocks/front-about');

// Social Section
get_template_part('templates/blocks/front-social');

// Online Quote
get_template_part('templates/blocks/front-quote');

get_footer();
?>