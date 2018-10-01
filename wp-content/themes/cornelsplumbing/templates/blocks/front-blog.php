<?php
// Get the latest post from the blog.
$latest = new WP_Query([
    'posts_per_page' => 3,
    'post_type'      => 'post',
]);
?>
<section id="blog" class="section section-blog" data-highlight-nav="blog">
    <div class="top-anchor"></div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-5 offset-1">
                <h2 class="section-tag">Cornel's Tips & Tricks</h2>

                <h3 class="section-title mb-4">Plumbing can get expensive. But it doesn't have to cost an arm and a leg!</h3>

                <p class="section-text">The most expensive plumbing problems can usually be prevented or mitigated through proper care and maintenance. Here are the latest of Cornel’s latest tips and tricks that you can do at home to keep your home’s plumbing flowing.</p>
            </div>

            <div class="col-4 offset-1">
            <?php if ($latest->have_posts()) : ?>

                <nav class="nav nav-blog flex-column mb-4">
                <?php while($latest->have_posts()) : $latest->the_post(); ?>

                    <a class="nav-link" href="<?php echo get_the_permalink(); ?>">
                        <span class="nav-icon"><i class="far fa-angle-right"></i></span>
                        <?php echo the_title(); ?>
                    </a>

                <?php endwhile; ?>
                </nav>

                <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="btn btn-primary">See All <i class="far fa-angle-right"></i></a>

            <?php wp_reset_postdata(); endif; ?>
            </div>
        </div>
    </div>

    <div class="bottom-anchor"></div>
</section>