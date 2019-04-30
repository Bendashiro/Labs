<?php

class Menu
{
    public static function register_menu()
    {
        register_nav_menu('main-menu', 'menu de la barre de navigation');
    }
    
    public static function add_class_a($class)
    {
        if (in_array('current-menu-item', $class)) {
            $class[] = 'active';
        }
        return $class;
    }
}
add_action('after_setup_theme', [Menu::class, 'register_menu']);
add_filter('nav_menu_css_class', [Menu::class,'add_class_a'], 10, 1);