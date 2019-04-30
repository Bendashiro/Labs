<?php

namespace App\Features\Taxonomies;

use App\Features\PostTypes\ProjectsPostTypes;

class ProjectsTaxonomy
{
    public static $slug = 'recipe_taxonomy';

    public static function register()
    {
        $labels = [
            'name' => __('Type de Projects'),
            'singular_name' => __('Type de Projects')
        ];
        $args = [
            'labels' => $labels,
            'hierarchical' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_admin_column' => true
        ];
        register_taxonomy(self::$slug, [ProjectsPostTypes::$slug], $args);
    }
}