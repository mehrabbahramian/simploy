<?php
function namira_stlw_enqueue_style()
{
    $version = "1.0.01";
    wp_enqueue_style("bootstrap-style-cdn", 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css');
    wp_enqueue_style("bootstrap-css", get_template_directory_uri() . '/css/bootstrap.min.css', array(), $version);
    wp_enqueue_style("namira-stlw-css", get_template_directory_uri() . '/css/app.css', array(), $version);
    wp_enqueue_style("namira-stlw-icons", 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');
}
add_action("wp_enqueue_scripts", "namira_stlw_enqueue_style");
