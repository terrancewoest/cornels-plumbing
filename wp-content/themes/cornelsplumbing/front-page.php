<?php get_header('front'); ?>

<section class="hero">
    <div class="hero-background">
        <img src="<?php cp_asset('images/hero-background.jpg'); ?>">
    </div>

    <div class="hero-content d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-auto">
                    <img class="logo logo-hero" src="<?php cp_asset('images/cp-logo-760x439.png'); ?>">
                </div>
                <div class="col-auto">
                    <h1>
                        The Portland Metro Area's favorite
                        <span class="highlight">Licensed, Local, and Family Run</span>
                        plumbers for the last 35+ years.
                    </h1>
                    <a class="btn btn-highlight btn-hero" href="#">Schedule a FREE Quote Online</a>
                    <a class="btn btn-outline-dark btn-hero" href="#">... or just call us <?php echo cp_config('phone'); ?></a>
                </div>
            </div>
        </div>
    </div>

    <div class="hero-card">
        <div class="row text-center">
            <div class="col">
                <a href="#"><img src="<?php cp_asset('images/googlereview.png'); ?>"></a>
            </div>
            <div class="col">
                <a href="#"><img src="<?php cp_asset('images/yelpreview.png'); ?>"></a>
            </div>
            <div class="col">
                <a href="#"><img src="<?php cp_asset('images/angieslistreview.png'); ?>"></a>
            </div>
        </div>
    </div>
</section>

<section class="section section-services text-center">
    <div class="container">
        <h2 class="section-tag">Our Services</h2>

        <h3 class="section-title">Have a plumbing issue? We've got you covered.</h3>

        <p class="section-text">Blurb about how long we’ve been in business, we’ll do pretty much anything residential, if you don’t see what you need listed here give us a call.</p>

        <div class="section-block">
            <div class="row">
                <div class="col">
                    <div class="feature feature-icon">
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>Name of service</h4>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    </div>
                </div>

                <div class="col">
                    <div class="feature feature-icon">
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>Name of service</h4>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    </div>
                </div>

                <div class="col">
                    <div class="feature feature-icon">
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>Name of service</h4>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    </div>
                </div>
            </div>

        <div class="row">
            <div class="col">
                <div class="feature feature-icon">
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h4>Name of service</h4>
                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                </div>
            </div>

            <div class="col">
                <div class="feature feature-icon">
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h4>Name of service</h4>
                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                </div>
            </div>

            <div class="col">
                <div class="feature feature-icon">
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h4>Name of service</h4>
                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                </div>
            </div>
        </div>
        </div>

        <p class="section-subtitle">Don't see what you need? these are common jobs, but definitely not the extend of what we do. Doesn't hurt to call us! <a href="tel:<?php echo cp_config('phone'); ?>"><?php echo cp_config('phone'); ?></a></p>

        <a href="#" class="btn btn-lg btn-primary">Get a FREE quote online</a>
    </div>
</section>

<?php get_footer(); ?>