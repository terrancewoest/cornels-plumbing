<?php get_template_part('templates/blocks/top-bar'); ?>

<header class="header header-main">
    <div class="container">
        <nav class="nav nav-main align-items-center">
            <a class="nav-link flex-fill logo logo-nav" href="<?php echo get_home_url(); ?>">
                <img src="<?php cp_asset('images/cp-logo-252x150.png'); ?>">
            </a>

            <a class="nav-link scroll-to" href="#services" data-highlight-on="services">
                Services
                <span class="active-icon"><i class="fas fa-caret-up"></i></span>
            </a>

            <a class="nav-link scroll-to header-offset" href="<?php echo get_permalink(get_option('page_for_posts')); ?>">
                Cornel's Tips &amp; Tricks
                <span class="active-icon"><i class="fas fa-caret-up"></i></span>
            </a>

            <span class="nav-link"><a href="#quote" class="btn btn-highlight scroll-to header-offset">Free Quote</a></span>
        </nav>
    </div>
</header>