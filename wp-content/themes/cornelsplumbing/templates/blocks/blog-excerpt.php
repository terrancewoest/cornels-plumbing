<?php
$hasImage = has_post_thumbnail(get_the_ID());
?>
<a class="card card-shadow card-article card-accent card-accent-primary mb-4" href="<?php echo get_the_permalink(); ?>">
    <?php if ($hasImage) { ?>
        <?php the_post_thumbnail('page-banner', ['class' => 'card-img']); ?>
    <?php } ?>

    <div class="card-body">
        <h5 class="card-title"><?php echo get_the_title(); ?></h5>
        <p class="card-text"><?php echo get_the_excerpt(); ?></p>
    </div>
</a>