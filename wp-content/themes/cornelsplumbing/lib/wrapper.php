<?php

/*
|--------------------------------------------------------------------------
| Base Template Wrapping
|--------------------------------------------------------------------------
|
| This file handles wrapping the themes template files with a base
| wrapper file so as to not have to duplicate header/footer calls
| within similar templates.
*/

/**
 * Includes the set content template.
 */
function cp_content_template() {
    global $wrapperContentTemplate;

    include($wrapperContentTemplate);
}