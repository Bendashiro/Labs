<?php
namespace App\Features\Taxonomies;

use App\Features\PostTypes\TeamPostTypes;

class TeamTaxonomy
{
    public static $slug = 'team_taxonomy';
    public static function register()
    {
        $labels = [
            'name' => __('Type de team'),
            'singular_name' => __('Type de team')
        ];
        $args = [
            'labels' => $labels,
            'hierarchical' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_admin_column' => true
        ];
        register_taxonomy(self::$slug, [TeamPostTypes::$slug], $args);
    }
}