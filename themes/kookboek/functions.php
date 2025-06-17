<?php
// Menu locaties registreren
function register_my_menus() {
    register_nav_menus([
        'main-menu'  => __('Main Menu', 'text_domain'),
        'other-menu' => __('Other Menu', 'text_domain'),
    ]);
}
add_action('after_setup_theme', 'register_my_menus');

// Widget gebied registreren
function add_theme_widgets() {
    register_sidebar([
        'name'          => __('Footer Widget Area', 'text_domain'),
        'id'            => 'footer-widget-area',
        'description'   => __('A widget area located in the footer.', 'text_domain'),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);
}
add_action('widgets_init', 'add_theme_widgets');

// Extra classes toevoegen aan <li> elementen in menu
function add_additional_class_on_li($classes, $item, $args) {
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// Extra classes toevoegen aan <a> elementen in menu
function add_additional_class_on_a($attributes, $item, $args) {
    if (empty($attributes['class'])) {
        $attributes['class'] = '';
    }
    if (isset($args->add_a_class)) {
        $attributes['class'] .= ' ' . $args->add_a_class;
    }
    return $attributes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);
