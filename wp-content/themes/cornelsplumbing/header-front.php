<?php get_template_part('templates/blocks/top-bar'); ?>

<header class="header header-front">
    <div class="container">
        <nav class="nav nav-main justify-content-center align-items-center">
            <a class="nav-link" href="#">Services</a>
            <a class="nav-link" href="#">Preventative Care</a>
            <a class="nav-link" href="#">Testimonials</a>
            <a class="nav-link" href="#">About Us</a>
            <a class="nav-link" href="#">Cornel's Tips &amp; Tricks</a>
        </nav>

        <nav class="nav nav-main nav-sticky align-items-center">
            <a class="nav-link flex-fill logo logo-nav" href="#">
                <img src="<?php cp_asset('images/cp-logo-252x150.png'); ?>">
            </a>
            <a class="nav-link" href="#">Services</a>
            <a class="nav-link" href="#">Preventative Care</a>
            <a class="nav-link" href="#">Testimonials</a>
            <a class="nav-link" href="#">About Us</a>
            <a class="nav-link" href="#">Cornel's Tips &amp; Tricks</a>
            <span class="nav-link"><a href="#" class="btn btn-outline-primary"><?php echo cp_config('brand.phone'); ?></a></span>
            <span class="nav-link"><a href="#" class="btn btn-highlight">Free Quote</a></span>
        </nav>
    </div>
</header>