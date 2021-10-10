<?php
$afterHours = cp_is_after_hours();
$phonesClosed = cp_phones_closed();
?>
<div class="topbar topbar-mobile">
    <div class="container text-center">
        <p class="topbar-hours">
            <?php echo cp_config('hours.formatted'); ?>

            <?php if (!$afterHours) : ?>
                <span class="ml-2 badge badge-success">NOW OPEN</span>
            <?php elseif ($afterHours && !$phonesClosed) : ?>
                <span class="ml-2 badge badge-danger">CLOSED (phones open)</span>
            <?php else : ?>
                <span class="ml-2 badge badge-danger">CLOSED</span>
            <?php endif; ?>
        </p>
        <p class="topbar-phone"><a href="tel:<?php echo cp_page_contact_number(); ?>"><?php echo cp_page_contact_number(); ?></a></p>
        <p class="topbar-email"><a href="mailto:<?php echo cp_config('brand.email'); ?>"><?php echo cp_config('brand.email'); ?></a></p>

    </div>
</div>