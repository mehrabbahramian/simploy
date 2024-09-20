<?php
function namira_stlw_enqueue_script()
{
    $version = "1.0.01";
    wp_enqueue_script("namira-stlw-bootstrap", get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), $version, true);
    wp_enqueue_script("namira-stlw-custom", get_template_directory_uri() . '/js/script.js', array(), $version, true);
}
add_action("wp_enqueue_scripts", "namira_stlw_enqueue_script");
