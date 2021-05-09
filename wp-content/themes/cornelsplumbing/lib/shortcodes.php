<?php

add_shortcode('front_testimonials', 'cp_front_testimonials');

function cp_front_testimonials() {
    get_template_part('templates/blocks/front-testimonials');
}