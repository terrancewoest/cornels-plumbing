<?php

/*
Template Name: Page Builder With Banner
*/

the_post();

$hasImage = has_post_thumbnail(get_the_ID());
?>
<div class="page-banner<?php echo $hasImage ? ' with-image' : ''; ?>">
    <?php if ($hasImage) { ?>
    <div class="page-banner-background">
        <?php the_post_thumbnail('page-banner'); ?>
        <div class="overlay"></div>
    </div>
    <?php } ?>

    <div class="container">
        <h1 class="page-banner-title"><?php the_title(); ?></h1>
    </div>
</div>
<?php

the_content();