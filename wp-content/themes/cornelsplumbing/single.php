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
        </div>
    </div>

    <div class="container">
        <div class="row">
            <article class="col-sm-9 mb-4">
                <div class="card card-shadow card-content">
                    <div class="card-body">
                        <?php the_content(get_the_ID()); ?>
                    </div>
                </div>
            </article>

            <aside class="col-sm-3 sidebar">
                <div class="is-sticky my-4">
                    <ul>
                        <li>Sed posuere consectetur est at lobortis.</li>
                        <li>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</li>
                        <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
                        <li>Donec ullamcorper nulla non metus auctor fringilla.</li>
                        <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                    </ul>
                    <a href="#" class="btn btn-primary">Get Free Quote</a>
                </div>
            </aside>
        </div>
    </div>
</div>
