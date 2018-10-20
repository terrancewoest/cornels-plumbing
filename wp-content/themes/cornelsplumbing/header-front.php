<?php get_template_part('templates/blocks/top-bar'); ?>

<header class="header header-front">
    <div class="container">
        <nav class="nav nav-main justify-content-center align-items-center">
            <a class="nav-link scroll-to" href="#services">
                Services
                <span class="active-icon"><i class="fas fa-caret-up"></i></span>
            </a>
            <a class="nav-link scroll-to header-offset" href="#testimonials">
                Testimonials
                <span class="active-icon"><i class="fas fa-caret-up"></i></span>
            </a>
            <a class="nav-link scroll-to header-offset" href="#about">
                About Us
                <span class="active-icon"><i class="fas fa-caret-up"></i></span>
            </a>
            <a class="nav-link scroll-to header-offset" href="#blog">
                Cornel's Tips &amp; Tricks
                <span class="active-icon"><i class="fas fa-caret-up"></i></span>
            </a>
        </nav>

        <nav class="nav nav-main nav-sticky header-sticky align-items-center">
            <a class="nav-link flex-fill logo logo-nav" href="#">
                <img src="<?php cp_asset('images/cp-logo-252x150.png'); ?>">
            </a>
            <a class="nav-link scroll-to" href="#services" data-highlight-on="services">
                Services
                <span class="active-icon"><i class="fas fa-caret-up"></i></span>
            </a>
            <a class="nav-link scroll-to header-offset" href="#testimonials" data-highlight-on="testimonials">
                Testimonials
                <span class="active-icon"><i class="fas fa-caret-up"></i></span>
            </a>
            <a class="nav-link scroll-to header-offset" href="#about" data-highlight-on="about">
                About Us
                <span class="active-icon"><i class="fas fa-caret-up"></i></span>
            </a>
            <a class="nav-link scroll-to header-offset" href="#blog" data-highlight-on="blog">
                Cornel's Tips &amp; Tricks
                <span class="active-icon"><i class="fas fa-caret-up"></i></span>
            </a>
            <span class="nav-link d-md-none d-xl-flex"><a href="#" class="btn btn-outline-primary"><?php echo cp_config('brand.phone'); ?></a></span>
            <span class="nav-link"><a href="#quote" class="btn btn-highlight scroll-to header-offset">Schedule Quote</a></span>
        </nav>

    </div>

    <div class="mobile-menu">
        <div class="container static-section justify-content-end align-items-center">
            <button class="navicon">
                Menu
                <span class="bars">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </span>
            </button>
        </div>

        <div class="header-sticky py-3">
            <div class="container d-flex align-items-center ">
                <div class="flex-grow-1">
                    <a href="#quote" class="btn btn-highlight btn-small scroll-to header-offset">Get Quote</a>
                </div>
                <button class="navicon">
                    Menu
                    <span class="bars">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </span>
                </button>
            </div>
        </div>

        <div class="mobile-overlay d-flex flex-column">
            <div class="mobile-overlay-header">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col">
                            <a class="logo logo-nav" href="#">
                                <img src="<?php cp_asset('images/cp-logo-252x150.png'); ?>">
                            </a>
                        </div>
                        <div class="col-auto">
                            <button class="navicon">
                                Menu
                                <span class="bars">
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-social text-center">
                <a href="<?php echo cp_config('brand.facebook'); ?>" target="_blank"><i class="fab fa-facebook-square mr-3"></i></a>
                <a href="<?php echo cp_config('brand.twitter'); ?>" target="_blank"><i class="fab fa-twitter-square mr-3"></i></a>
                <a href="<?php echo cp_config('brand.instagram'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <nav class="nav nav-mobile justify-content-center align-items-center flex-column flex-grow-1">

                <a class="nav-link scroll-to close-overlay" href="#services" data-highlight-on="services">
                    Services
                </a>
                <a class="nav-link scroll-to close-overlay header-offset" href="#testimonials" data-highlight-on="testimonials">
                    Testimonials
                </a>
                <a class="nav-link scroll-to close-overlay header-offset" href="#about" data-highlight-on="about">
                    About Us
                </a>
                <a class="nav-link scroll-to close-overlay header-offset" href="#blog" data-highlight-on="blog">
                    Cornel's Tips &amp; Tricks
                </a>
                <a class="nav-link scroll-to close-overlay header-offset btn btn-highlight" href="#blog" data-highlight-on="blog">
                    Schedule Quote
                </a>
            </nav>
            <?php get_template_part('templates/blocks/top-bar-mobile'); ?>
        </div>
    </div>
</header>