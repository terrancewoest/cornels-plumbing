<?php
$reason = '';
$open = true;

// Is today one of the closed days in the config?
if (in_array(date('Y-m-d'), cp_config('closed'))) {
    $reason .= 'holiday';
    $open = false;
}

// In one of the open days of the week?
if (date('w') < cp_config('hours.weekstart') || date('w') > cp_config('hours.weekend')) {
    $reason .= 'weekend';
    $open = false;
}

// Are we before opening time or after closing time?
if (date('G') < cp_config('hours.timestart') || date('G') > cp_config('hours.timeend')) {
    $reason .= 'afterhours';
    $open = false;
}

?>
<div class="topbar">
    <div class="container d-flex flex-row text-center">
        <p class="topbar-hours flex-fill">
            <?php echo cp_config('hours.formatted'); ?>
            <?php if ($open) : ?>
                <span class="ml-2 badge badge-success">NOW OPEN</span>
            <?php else : ?>
                <span class="ml-2 badge badge-danger">CLOSED</span>
            <?php endif ?>
        </p>
        <p class="topbar-phone flex-fill">(503) 123-1234</p>
        <p class="topbar-email flex-fill">contact@cornelsplumbing.com</p>
        <p class="topbar-social flex-fill">
            <a href="#"><i class="fab fa-facebook-square"></i></a>
            <a href="#"><i class="fab fa-twitter-square"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </p>
    </div>
</div>