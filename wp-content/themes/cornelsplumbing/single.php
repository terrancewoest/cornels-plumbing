<?php the_post(); ?>
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
                <div class="card card-shadow card-content">
                    <div class="card-body the-content">
                        <?php the_content(get_the_ID()); ?>
                    </div>
                </div>
            </article>

            <aside class="col-auto">
                <?php get_sidebar(); ?>
            </aside>
        </div>
    </div>
</div>

<div id="quoteModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Get a free quote!</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo do_shortcode('[formidable id=7]'); ?>
            </div>
        </div>
    </div>
</div>