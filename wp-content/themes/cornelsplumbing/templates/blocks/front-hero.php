<section class="hero">
    <div class="hero-background">
        <img src="<?php cp_asset('images/hero-background.jpg'); ?>">
    </div>

    <div class="hero-content d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-auto">
                    <img class="logo logo-hero" src="<?php cp_asset('images/cp-logo-760x439.png'); ?>">
                </div>
                <div class="col-lg-auto">
                    <h1>
                        The Portland Metro Area's favorite
                        <span class="highlight">Licensed, Local, and Family Run</span>
                        plumbers for the last 35+ years.
                    </h1>
                    <a class="btn btn-highlight btn-hero scroll-to header-offset" href="#quote">Schedule a Quote Online</a>
                    <a class="btn btn-outline-dark btn-hero" href="tel:<?php echo cp_config('brand.phone'); ?>">Or just call us: <?php echo cp_config('brand.phone'); ?></a>
                </div>
            </div>
        </div>
    </div>

    <div class="hero-card">
        <div class="row text-center">
            <div class="col">
                <a target="_blank" href="<?php echo cp_config('brand.google'); ?>"><img src="<?php cp_asset('images/googlereview.png'); ?>"></a>
            </div>
            <div class="col">
                <a target="_blank" href="<?php echo cp_config('brand.yelp'); ?>"><img src="<?php cp_asset('images/yelpreview.png'); ?>"></a>
            </div>
            <div class="col">
                <a target="_blank" href="<?php echo cp_config('brand.angies'); ?>"><img src="<?php cp_asset('images/angieslistreview.png'); ?>"></a>
            </div>
        </div>
    </div>
</section>
