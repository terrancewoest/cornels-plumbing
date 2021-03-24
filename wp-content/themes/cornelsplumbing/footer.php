<section id="quote" class="section section-quote text-center">
    <?php if (!is_page('schedule-appointment')) : ?>
    <div class="container mb-5">
        <h2 class="section-tag">Schedule Appointment</h2>
        <h3 class="section-title mb-4">Lets get started! Your quote is a form (or a call) away.</h3>
        <p class="section-text">Describe your plumbing issue in detail below and we’ll get in touch with you within 24 business hours.</p>
    </div>
    <?php endif; ?>

    <?php if (!is_page('schedule-appointment')) : ?>
    <div class="container container-skinny"><?php echo do_shortcode('[formidable id=7]'); ?></div>
    <?php else : ?>
    <div class="container"><?php echo do_shortcode('[formidable id=7]'); ?></div>
    <?php endif; ?>
</section>

<footer class="footer">
    <div class="footer-menus">
        <div class="container">
            <div class="footer-service-areas">
                <h4>Areas We Service</h4>

                <a href="/plumbing-aloha">Aloha</a>
                <a href="/plumbing-beaverton">Beaverton</a>
                <a href="/plumbing-happy-valley">Happy Valley</a>
                <a href="/plumbing-hillsboro">Hillsboro</a>
                <a href="/plumbing-milwaukie">Milwaukie</a>
                <a href="/plumbing-oregon-city">Oregon City</a>
                <a href="/plumbing-portland">Portland</a>
                <a href="/plumbing-sherwood">Sherwood</a>
                <a href="/plumbing-tigard">Tigard</a>
                <a href="/plumbing-west-linn">West Linn</a>
                <p class="mt-4">
                Are looking for plumbers in <b>Redmond, OR</b>? Check out our trusted friends <a href="https://www.plumbersredmondoregon.com/" target="_blank" rel="noopener">Plumbers Redmond Oregon</a>
                </p>
            </div>

            <div class="row">
                <div class="col-sm-4 mb-5">
                    <h4>Quick links</h4>
                    <nav class="nav flex-column">
                        <a class="nav-link" href="/">Home</a>
                        <a class="nav-link" href="/schedule-appointment">Schedule Appointment</a>
                        <a class="nav-link" href="/blog">Blog</a>
                    </nav>

                    <?php
                    // Get the latest post from the blog.
                    $latest = new WP_Query([
                        'posts_per_page' => 3,
                        'post_type'      => 'post',
                    ]);
                    ?>
                    <h4>Cornel's Latest Tips</h4>
                    <nav class="nav flex-column">
                        <?php while($latest->have_posts()) : $latest->the_post(); ?>
                            <a class="nav-link" href="<?php echo get_the_permalink(); ?>"><?php echo the_title(); ?></a>
                        <?php endwhile; wp_reset_postdata(); ?>
                        <a class="nav-link" href="<?php echo get_permalink(get_option('page_for_posts')); ?>">
                            <strong>See All <i class="fas fa-caret-right"></i></strong>
                        </a>
                    </nav>
                </div>

                <div class="col-sm-4 mb-5">
                    <h4>Company Info</h4>
                    <nav class="nav flex-column">
                        <span class="nav-link">Open <?php echo cp_config('hours.formatted'); ?></span>
                        <span class="nav-link">CCB #226109</span>
                        <a class="nav-link" href="tel:<?php echo cp_config('brand.phone'); ?>"><?php echo cp_config('brand.phone'); ?></a>
                        <a class="nav-link" href="mailto:<?php echo cp_config('brand.email'); ?>"><?php echo cp_config('brand.email'); ?></a>
                    </nav>

                    <h4>Connect With Us</h4>
                    <nav class="nav flex-column">
                        <a class="nav-link" target="_blank" href="<?php echo cp_config('brand.facebook'); ?>"><i class="fab fa-facebook-square"></i> Facebook</a>
                        <a class="nav-link" target="_blank" href="<?php echo cp_config('brand.twitter'); ?>"><i class="fab fa-twitter-square"></i> Twitter</a>
                        <a class="nav-link" target="_blank" href="<?php echo cp_config('brand.instagram'); ?>"><i class="fab fa-instagram"></i> Instagram</a>
                    </nav>
                </div>
                <div class="col-sm-4 mb-5 align-self-center">
                    <a href="/"><img class="logo logo-hero" src="<?php cp_asset('images/cp-logo-760x439.png'); ?>"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright color-light text-center">
        &copy; <?php echo date('Y'); ?> by Cornel's Plumbing. All rights reserved.
    </div>
</footer>
