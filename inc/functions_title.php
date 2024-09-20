<?php
function namira_stlw_title()
{
    add_theme_support("title-tag");
}
add_action("after_setup_theme", "namira_stlw_title");
