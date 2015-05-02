<?php
function register_theme_menus() {
    register_nav_menus([
        'navigation-menu' => __('Navigation Menu')
    ]);
}
add_action('init', 'register_theme_menus');
?>