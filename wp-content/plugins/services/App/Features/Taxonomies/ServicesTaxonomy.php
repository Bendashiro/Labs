<?php

namespace App\Features\Taxonomies;

use App\Features\PostTypes\ServicesPostTypes;

class ServicesTaxonomy
{
    public static $slug = 'recipe_taxonomy';

    public static function register()
    {
        $labels = [
            'name' => __('Type de services'),
            'singular_name' => __('Type de services')
        ];
        $args = [
            'labels' => $labels,
            'hierarchical' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_admin_column' => true
        ];
        register_taxonomy(self::$slug, [ServicesPostTypes::$slug], $args);
    }
}