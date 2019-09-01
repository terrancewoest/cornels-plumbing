<?php
// Cache buster to rebuild the testimonials cache
if (isset($_GET['recache_testimonials'])) {
    $testimonials = [];
} else {
    $testimonials = apc_fetch('cp_testimonials');
}
?>
<section id="testimonials" class="section section-testimonials" data-highlight-nav="testimonials">
    <div class="top-anchor"></div>

    <div class="container">
        <div class="section-block">
            <h2 class="section-tag">Testimonials</h2>

            <h3 class="section-title mb-0">We aim for quick, professional, and quality work. But don't take our word for it! See what our satisfied customers have to say.</h3>
        </div>

        <div class="section-block">
            <div class="testimonials" data-testimonials data-build="<?php echo $testimonials ? 'false' : 'true'; ?>"></div>
            <?php
            if ($testimonials) {
                foreach(array_chunk($testimonials, 3) as $testimonialRow) {
                $row++;
                ?>
                <div class="row">

                    <?php foreach($testimonialRow as $testimonial) { ?>
                    <div class="col-sm-6 col-md-4 mb-4">
                        <div class="card card-shadow card-testimonial">
                            <div class="card-body">
                                <div class="row no-gutters mb-3">
                                    <div class="col-auto pr-3">
                                        <img class="rounded-circle card-img" src="<?php echo $testimonial['profile_photo_url']; ?>">
                                    </div>
                                    <div class="col">
                                        <h5 class="card-title mb-1"><?php echo $testimonial['author_name']; ?></h5>
                                        <span class="stars stars-<?php echo $testimonial['rating']; ?>"><span class="rating"></span></span>
                                    </div>
                                </div>
                                <p class="card-subtitle mb-1 text-muted">Posted <?php echo $testimonial['relative_time_description']; ?></p>
                                <p class="card-text"><?php echo stripslashes($testimonial['text']); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                    <?php if ($row == 2) { ?>
                    <div class="col-sm-6 col-md-4 mb-4">
                        <div class="card card-shadow card-action color-secondary">
                            <a href="https://search.google.com/local/writereview?placeid=<?php echo cp_config('google.place-id'); ?>" target="_blank" class="card-body">
                                <div class="card-icon"><i class="fas fa-plus"></i></div>
                                <h4 class="card-title">Add your review</h4>
                                <p class="card-text">At the end of the day, it's happy customers that keep us in business. Tell us how we did!</p>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <?php
                }
            } ?>
            <span class="d-none" id="map-hook">
        </div>

        <div class="section-block text-center">
            <h4 class="section-heading mb-5">Why do our customers love us?</h4>

            <div class="row mb-5 justify-content-center">
                <div class="col-6 col-sm-2 mb-4">
                    <div class="feature feature-small-icon">
                        <div class="feature-icon color-secondary">
                            <i class="far fa-clock"></i>
                        </div>
                        <p>Always on-time and prepared</p>
                    </div>
                </div>
                <div class="col-6 col-sm-2 mb-4">
                    <div class="feature feature-small-icon">
                        <div class="feature-icon color-secondary">
                            <i class="far fa-wrench"></i>
                        </div>
                        <p>Quality craftsmanship</p>
                    </div>
                </div>
                <div class="col-6 col-sm-2 mb-4">
                    <div class="feature feature-small-icon">
                        <div class="feature-icon color-secondary">
                            <i class="far fa-smile-wink"></i>
                        </div>
                        <p>Friendly and personable</p>
                    </div>
                </div>
                <div class="col-6 col-sm-2 mb-4">
                    <div class="feature feature-small-icon">
                        <div class="feature-icon color-secondary">
                            <i class="far fa-box-full"></i>
                        </div>
                        <p>Quality sourced materials</p>
                    </div>
                </div>
                <div class="col-6 col-sm-2 mb-4">
                    <div class="feature feature-small-icon">
                        <div class="feature-icon color-secondary">
                            <i class="far fa-handshake-alt"></i>
                        </div>
                        <p>Clean and respectful</p>
                    </div>
                </div>
            </div>

            <p class="section-text">
                We only work with the best materials available and provide a 1 year guarantee on all labor. We never compromise quality for time and give all our clients realistic schedules that accommodate their lives. We strive for honest customer service, so contracts are only paid in full when the finished work is to your complete satisfaction.
            </p>
        </div>
    </div>

    <div class="bottom-anchor"></div>
</section>
