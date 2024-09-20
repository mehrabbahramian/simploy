<?php
function namira_stlw_menu()
{
    $locations = array(
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu'
    );
    register_nav_menus($locations);
}
add_action("init", "namira_stlw_menu");
