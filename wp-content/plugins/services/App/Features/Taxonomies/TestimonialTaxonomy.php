<?php
namespace App\Features\Taxonomies;

use App\Features\PostTypes\TestimonialPostTypes;

class TestimonialTaxonomy
{
    public static $slug = 'testimonial_taxonomy';
    public static function register()
    {
        $labels = [
            'name' => __('Type de testimonial'),
            'singular_name' => __('Type de testimonial')
        ];
        $args = [
            'labels' => $labels,
            'hierarchical' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_admin_column' => true
        ];
        register_taxonomy(self::$slug, [TestimonialPostTypes::$slug], $args);
    }
}