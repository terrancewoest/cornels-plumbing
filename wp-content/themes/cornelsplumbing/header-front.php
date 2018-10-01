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

        <nav class="nav nav-main nav-sticky align-items-center">
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
            <span class="nav-link"><a href="#" class="btn btn-outline-primary"><?php echo cp_config('brand.phone'); ?></a></span>
            <span class="nav-link"><a href="#quote" class="btn btn-highlight scroll-to header-offset">Free Quote</a></span>
        </nav>
    </div>
</header>