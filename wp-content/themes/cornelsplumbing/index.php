<?php
the_post();
$hasImage = has_post_thumbnail(get_the_ID());
?>

<div class="page-banner<?php echo $hasImage ? ' with-image' : ''; ?>">
    <?php if ($hasImage) : ?>
    <div class="page-banner-background">
        <?php echo get_the_post_thumbnail(get_the_ID(), 'page-banner'); ?>
        <div class="overlay"></div>
    </div>
    <?php endif; ?>

    <div class="container">
        <h1 class="page-banner-title"><?php echo get_the_title(); ?></h1>
    </div>
</div>

<div class="sticky-anchor"></div>

<div class="container">
    <?php the_content(); ?>
</div>
