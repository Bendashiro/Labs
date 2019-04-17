<?php

class Menu
{
    public static function register_menu()
    {
        register_nav_menu('main-menu', 'menu de la barre de navigation');
    }
}
add_action('after_setup_theme', [Menu::register_menu()]);