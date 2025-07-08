<?php
add_action('after_setup_theme', 'verbalink_add_image_size');
function verbalink_add_image_size()
{
    add_image_size('transcribe_country', 68, 50, false);

}

