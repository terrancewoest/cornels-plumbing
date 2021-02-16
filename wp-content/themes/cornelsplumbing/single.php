<?php
the_post();

$next_post = get_next_post();
$last_post = get_previous_post();
?>
<div class="sticky-anchor"></div>

<div class="single">
    <div class="page-banner alt-version<?php echo has_post_thumbnail() ? ' with-image' : ''; ?>">
        <?php if (has_post_thumbnail()) { ?>
        <div class="page-banner-background">
            <?php echo get_the_post_thumbnail(get_the_ID(), 'page-banner'); ?>
            <div class="overlay"></div>
        </div>
        <?php } ?>

        <div class="container">
            <h1 class="page-banner-title"><?php the_title(); ?></h1>
            <p class="page-banner-meta mb-0">
                <span class="item item-date"><strong>Posted:</strong> <?php echo get_the_date(); ?></span>
                <span class="item item-social">

                    <a target="_blank"
                       href="https://www.facebook.com/sharer/sharer.php?u=<?php echo htmlentities(get_the_permalink()); ?>"
                    ><i class="fab fa-fw fa-facebook-square"></i> Share on Facebook</a>

                    <a target="_blank"
                       href="https://twitter.com/intent/tweet?original_referer=<?php echo urlencode(get_the_permalink()); ?>&amp;text=<?php echo urlencode(get_the_title()); ?>&amp;url=<?php echo urlencode(get_the_permalink()); ?>"
                    ><i class="fab fa-fw fa-twitter-square"></i> Tweet this Tip</a>
                </span>
            </p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <article class="col mb-4">
                <div class="card card-shadow card-content mb-4">
                    <div class="card-body the-content">
                        <?php the_content(get_the_ID()); ?>
                    </div>
                </div>

                <div class="row">
                    <?php if ($last_post) : ?>
                    <div class="col-sm-6 mb-3">
                        <a href="<?php echo get_the_permalink($last_post); ?>" class="card card-clickable card-article card-shadow">
                            <div class="card-body">
                                <p class="card-text text-uppercase mb-2"><strong><i class="far fa-angle-left mr-3"></i> Last Post</strong></p>
                                <h4 class="card-title mb-0"><?php echo $last_post->post_title; ?></h4>
                            </div>
                        </a>
                    </div>
                    <?php else : ?>
                    <div class="col-sm-6"></div>
                    <?php endif; ?>

                    <?php if ($next_post) : ?>
                    <div class="col-sm-6 mb-3">
                        <a href="<?php echo get_the_permalink($next_post); ?>" class="card card-clickable card-article card-shadow">
                            <div class="card-body text-right">
                                <p class="card-text text-uppercase mb-2"><strong>Next Post <i class="far fa-angle-right ml-3"></i></strong></p>
                                <h4 class="card-title mb-0"><?php echo $next_post->post_title; ?></h4>
                            </div>
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
            </article>

            <?php /*
            <aside class="col-lg-auto">
                <?php get_sidebar(); ?>
            </aside>
            */ ?>
        </div>
    </div>
</div>