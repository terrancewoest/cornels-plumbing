<?php get_template_part('templates/blocks/top-bar'); ?>

<header class="header">
    <div class="container-fluid">
        <nav class="nav nav-main align-items-center">
            <a class="nav-link flex-fill logo logo-nav" href="<?php echo get_home_url(); ?>">
                <img src="<?php cp_asset('images/cp-logo-252x150.png'); ?>">
            </a>

            <a class="nav-link" href="/">
                Home
                <span class="active-icon"><i class="fas fa-caret-up"></i></span>
            </a>

            <div class="nav-item dropdown">
                <a class="nav-link"
                    href="#"
                    id="servicesDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                >
                    Services
                    <span class="active-icon"><i class="fas fa-caret-up"></i></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                    <a class="dropdown-item" href="/drain-cleaning">Drain Cleaning</a>
                    <a class="dropdown-item" href="/plumbing">Plumbing</a>
                    <a class="dropdown-item" href="/sewer-line-repair">Sewer Repair</a>
                    <a class="dropdown-item" href="/water-services">Water Services</a>
                    <a class="dropdown-item" href="/water-heaters">Water Heaters</a>
                </div>
            </div>

            <a class="nav-link" href="<?php echo get_permalink(get_option('page_for_posts')); ?>">
                Cornel's Tips &amp; Tricks
                <span class="active-icon"><i class="fas fa-caret-up"></i></span>
            </a>

            <span class="nav-link"><a href="#" class="btn btn-outline-primary">
                <?php
                if (is_page('drain-cleaning') || is_page('sewer-repair')) {
                    echo '(971) 270-4864';
                } else {
                    echo cp_config('brand.phone');
                }
                ?>
            </a></span>
            <span class="nav-link"><a href="#quote" class="btn btn-highlight scroll-to header-offset">Schedule Quote</a></span>
        </nav>

        <nav class="nav nav-main nav-sticky header-sticky align-items-center">
            <a class="nav-link flex-fill logo logo-nav" href="<?php echo get_home_url(); ?>">
                <img src="<?php cp_asset('images/cp-logo-252x150.png'); ?>">
            </a>

            <a class="nav-link" href="/">
                Home
                <span class="active-icon"><i class="fas fa-caret-up"></i></span>
            </a>

            <div class="nav-item dropdown">
                <a class="nav-link"
                    href="#"
                    id="servicesDropdownSticky"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                >
                    Services
                    <span class="active-icon"><i class="fas fa-caret-up"></i></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="servicesDropdownSticky">
                    <a class="dropdown-item" href="/drain-cleaning">Drain Cleaning</a>
                    <a class="dropdown-item" href="/plumbing">Plumbing</a>
                    <a class="dropdown-item" href="/sewer-repair">Sewer Repair</a>
                    <a class="dropdown-item" href="#">Water Services</a>
                    <a class="dropdown-item" href="/water-heaters">Water Heaters</a>
                </div>
            </div>

            <a class="nav-link" href="<?php echo get_permalink(get_option('page_for_posts')); ?>">
                Cornel's Tips &amp; Tricks
                <span class="active-icon"><i class="fas fa-caret-up"></i></span>
            </a>

            <span class="nav-link"><a href="#" class="btn btn-outline-primary">
            <?php
                if (is_page('drain-cleaning') || is_page('sewer-repair')) {
                    echo '(971) 270-4864';
                } else {
                    echo cp_config('brand.phone');
                }
            ?>
            </a></span>
            <span class="nav-link"><a href="#quote" class="btn btn-highlight scroll-to header-offset">Schedule Quote</a></span>
        </nav>

    </div>

    <div class="mobile-menu">
        <div class="container static-section d-flex justify-content-end align-items-center">
            <a class="flex-fill logo logo-nav" href="<?php echo get_home_url(); ?>">
                <img src="<?php cp_asset('images/cp-logo-252x150.png'); ?>">
            </a>

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
                    <a href="/#quote" class="btn btn-highlight btn-small">Get Quote</a>
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
                            <a class="logo logo-nav" href="<?php echo get_home_url(); ?>">
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
            <p class="mobile-social pt-4 mb-0 text-center">
                <a href="<?php echo cp_config('brand.facebook'); ?>" target="_blank"><i class="fab fa-facebook-square mr-3"></i></a>
                <a href="<?php echo cp_config('brand.twitter'); ?>" target="_blank"><i class="fab fa-twitter-square mr-3"></i></a>
                <a href="<?php echo cp_config('brand.instagram'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
            </p>
            <nav class="nav nav-mobile justify-content-center align-items-center flex-column flex-grow-1">

                <a class="nav-link" href="/#services" data-highlight-on="services">
                    Services
                </a>
                <a class="nav-link" href="/#testimonials" data-highlight-on="testimonials">
                    Testimonials
                </a>
                <a class="nav-link" href="/#about" data-highlight-on="about">
                    About Us
                </a>
                <a class="nav-link" href="/#blog" data-highlight-on="blog">
                    Cornel's Tips &amp; Tricks
                </a>
                <a class="nav-link btn btn-highlight" href="/#blog" data-highlight-on="blog">
                    Schedule Quote
                </a>
            </nav>
            <?php get_template_part('templates/blocks/top-bar-mobile'); ?>
        </div>
    </div>
</header>