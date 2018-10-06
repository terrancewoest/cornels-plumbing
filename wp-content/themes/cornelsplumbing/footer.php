<section id="quote" class="section section-quote text-center">
    <?php if (!is_page('schedule-appointment')) : ?>
    <div class="container mb-5">
        <h2 class="section-tag">Schedule Appointment</h2>
        <h3 class="section-title mb-4">Lets get started! Your free quote is a form (or a call) away.</h3>
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
            <div class="row mb-5">
                <div class="col">
                    <h4>Quick links</h4>
                    <nav class="nav flex-column">
                        <a class="nav-link" href="/">Home</a>
                        <a class="nav-link" href="/schedule-appointment">Schedule Appointment</a>
                        <a class="nav-link" href="/blog">Blog</a>
                    </nav>

                    <h4>Specialty Services</h4>
                    <nav class="nav flex-column">
                        <a class="nav-link" href="#">Hydro-Jetting</a>
                        <a class="nav-link" href="#">Sewer Scope</a>
                        <a class="nav-link" href="#">Drain Snake / Cleaning</a>
                    </nav>
                </div>

                <div class="col">
                    <h4>Company Info</h4>
                    <nav class="nav flex-column">
                        <a class="nav-link" href="tel:<?php echo cp_config('brand.phone'); ?>"><?php echo cp_config('brand.phone'); ?></a>
                        <a class="nav-link" href="mailto:<?php echo cp_config('brand.email'); ?>"><?php echo cp_config('brand.email'); ?></a>
                        <span class="nav-link"><?php echo cp_config('hours.formatted'); ?></span>
                    </nav>

                    <h4>Connect With Us</h4>
                    <nav class="nav flex-column">
                        <a class="nav-link" target="_blank" href="<?php echo cp_config('brand.facebook'); ?>"><i class="fab fa-facebook-square"></i> Facebook</a>
                        <a class="nav-link" target="_blank" href="<?php echo cp_config('brand.twitter'); ?>"><i class="fab fa-twitter-square"></i> Twitter</a>
                        <a class="nav-link" target="_blank" href="<?php echo cp_config('brand.instagram'); ?>"><i class="fab fa-instagram"></i> Instagram</a>
                    </nav>
                </div>
                <div class="col align-self-center">
                    <a href="/"><img class="logo logo-hero" src="<?php cp_asset('images/cp-logo-760x439.png'); ?>"></a>
                </div>
            </div>
            <hr class="mb-5">
            <h4>Cornel's Latest Tips</h4>
            <?php
            // Get the latest post from the blog.
            $latest = new WP_Query([
                'posts_per_page' => 3,
                'post_type'      => 'post',
            ]);
            ?>
            <div class="row mb-3">
            <?php while($latest->have_posts()) : $latest->the_post(); ?>

                <div class="col"><a href="<?php echo get_the_permalink(); ?>"><?php echo the_title(); ?></a></div>

            <?php endwhile; wp_reset_postdata(); ?>
            </div>

            <p class="text-center"><a class="more-link" href="<?php echo get_permalink(get_option('page_for_posts')); ?>">See All <i class="fas fa-caret-right"></i></a></p>
        </div>
    </div>
    <div class="footer-copyright color-light text-center">
        &copy; <?php echo date('Y'); ?> by Cornel's Plumbing
    </div>
</footer>
