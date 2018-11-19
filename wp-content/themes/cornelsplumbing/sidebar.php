<div class="sidebar is-sticky header-offset">
<?php if (is_singular('post')) :
    // Get the latest post from the blog.
    $latest = new WP_Query([
        'posts_per_page' => 3,
        'post_type'      => 'post',
        'post__not_in'   => [get_the_ID()],
    ]);

    if ($latest->have_posts()) : ?>
    <div class="sidebar-block">
        <h4 class="sidebar-block-title">More Tips & Tricks</h4>
        <nav class="nav nav-list flex-column mb-4">
        <?php while($latest->have_posts()) : $latest->the_post(); ?>

            <a class="nav-link" href="<?php echo get_the_permalink(); ?>">
                <span class="nav-icon"><i class="far fa-fw fa-angle-right"></i></span><?php echo the_title(); ?>
            </a>

        <?php endwhile; ?>
        </nav>
    </div>
    <?php wp_reset_postdata(); endif; ?>
<?php endif; ?>

    <div class="sidebar-block card card-coupon-alt card-clickable text-center">
        <div class="card-body">
            <h4 class="card-title">Limited Time Offer!</h4>
            <p class="card-text mb-0">We are giving <span class="emphasis">10% off</span> all drain cleaning for first time customers. Call today or schedule online!</p>

            <a href="tel:<?php echo cp_config('brand.phone'); ?>" class="btn btn-link btn-lg"><?php echo cp_config('brand.phone'); ?></a>
            <a href="#quote" class="btn btn-secondary scroll-to">Schedule Online</a>
        </div>
    </div>

    <div class="sidebar-block social-proof-icons">
        <div class="d-flex justify-content-center align-items-center mb-2">
            <a href="#" class="mr-2"><img src="<?php cp_asset('images/yelpreview.png'); ?>"></a>
            <a href="#"><img src="<?php cp_asset('images/googlereview.png'); ?>"></a>
        </div>

        <div class="d-flex justify-content-center align-items-center">
            <a href="#"><img src="<?php cp_asset('images/angieslistreview.png'); ?>"></a>
        </div>
    </div>

</div>