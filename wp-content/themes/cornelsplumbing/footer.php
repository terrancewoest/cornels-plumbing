<section id="quote" class="section section-quote text-center">
    <div class="container mb-5">
        <h2 class="section-tag">Schedule Appointment</h2>
        <h3 class="section-title mb-4">Lets get started! Your free quote is a form (or a call) away.</h3>
        <p class="section-text">Describe your plumbing issue in detail below and we’ll get in touch with you within 24 business hours.</p>
    </div>

    <div class="container container-skinny"><?php echo do_shortcode('[formidable id=7]'); ?></div>
</section>

<footer class="footer">
    <div class="footer-menus">
        <div class="container">
            <div class="row mb-5">
                <div class="col">
                    <h4>Quick links</h4>
                    <nav class="nav flex-column">
                        <a class="nav-link" href="#">Home</a>
                        <a class="nav-link" href="#">Schedule Appointment</a>
                        <a class="nav-link" href="#">Blog</a>
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
                        <a class="nav-link" href="#"><?php echo cp_config('brand.phone'); ?></a>
                        <a class="nav-link" href="#"><?php echo cp_config('brand.email'); ?></a>
                        <a class="nav-link" href="#"><?php echo cp_config('hours.formatted'); ?></a>
                    </nav>

                    <h4>Connect With Us</h4>
                    <nav class="nav flex-column">
                        <a class="nav-link" href="#"><i class="fab fa-facebook-square"></i> Facebook</a>
                        <a class="nav-link" href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
                        <a class="nav-link" href="#"><i class="fab fa-instagram"></i> Instagram</a>
                    </nav>
                </div>
                <div class="col align-self-center">
                    <a href="/"><img class="logo logo-hero" src="<?php cp_asset('images/cp-logo-760x439.png'); ?>"></a>
                </div>
            </div>
            <hr class="mb-5">
            <h4>Cornel's Latest Tips</h4>
            <div class="row mb-3">
                <div class="col"><a href="#">Nullam quis risus eget urna mollis ornare vel eu leo.</a></div>
                <div class="col"><a href="#">Nullam quis risus eget urna mollis ornare vel eu leo.</a></div>
                <div class="col"><a href="#">Nullam quis risus eget urna mollis ornare vel eu leo.</a></div>
            </div>

            <p class="text-center"><a class="more-link" href="">See More <i class="fas fa-caret-right"></i></a></p>
        </div>
    </div>
    <div class="footer-copyright color-light text-center">
        &copy; <?php echo date('Y'); ?> by Cornel's Plumbing
    </div>
</footer>
