<?php

/*
Template Name: Page Builder With Banner
*/

$blogPage = get_post(get_queried_object_id());

$hasImage = has_post_thumbnail($blogPage->ID);
?>
<div class="sticky-anchor"></div>

<div class="page-banner<?php echo $hasImage ? ' with-image' : ''; ?>">
    <?php if ($hasImage) { ?>
    <div class="page-banner-background">
        <?php echo get_the_post_thumbnail($blogPage->ID, 'page-banner'); ?>
        <div class="overlay"></div>
    </div>
    <?php } ?>

    <div class="container">
        <h1 class="page-banner-title"><?php echo get_the_title($blogPage->ID); ?></h1>
    </div>
</div>
<div class="blog-roll">
    <div class="container">
        <div class="row">
            <div class="col">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    get_template_part('templates/blocks/blog-excerpt');
                }
            }
            ?>
            </div>

            <aside class="col-lg-auto">
                <?php get_sidebar(); ?>
            </aside>
        </div>
    </div>
</div>