<?php
function kookboek_register_menu() {
    register_nav_menu('main-menu', __('Main Menu'));
}
add_action('after_setup_theme', 'kookboek_register_menu');
?>
