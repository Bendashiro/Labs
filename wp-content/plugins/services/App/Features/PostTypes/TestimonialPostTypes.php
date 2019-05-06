<?php
/***
 * Plugin NAme: Services
 * Author: Plugin Author
 * Text Domain: Testimonial
 * Domain Path: /languages
 */
namespace App\Features\PostTypes;

class TestimonialPostTypes
{
    public static $slug = 'testimonial';
    public static function register()
    {
        add_theme_support('post-thumbnails');
        register_post_type(
            // on remplace le slug qui était écrit en dur 'recipe' par la variable, on fait cela car à notre function register_post_type par son identifiant à plusieurs endroits, si jamais on décide de changer l'identifiant qui est 'services' par 'carotte' bah il faudra le changer a de nombreux endroit si on laisse cela en dur c'est pour cela qu'on à choisis de créer une variable, on change la valeur de la variable et tout lesendroits ou son identifiant est utilisé sera mis à jours.
            self::$slug,
            [
                'labels' => [
                    'name' => __('Testimoniaux'),
                    'singular_name' => __('Testimonial'),
                    'add_new' => __('Ajouter testimonial'),
                    'add_new_item' => __('Ajouter une Testimonial'),
                    'edit_item' => __('Modifier la Testimonial'),
                    'new_item' => __('Nouveau Testimonial'),
                    'view_item' => __('Voir la Testimonial'),
                    'view_items' => __('Voir les Testimoniaux'),
                    'search_items' => __('Rechercher des Testimoniaux'),
                    'not_found' => __('Pas de Testimonial trouvées.'),
                    'not_found_in_trash' => ('Pas de Testimoniaux dans la corbeille.'),
                    'all_items' => __('Toutes les Testimoniaux'),
                    'archives' => __('Testimoniaux archivées'),
                    'filter_items_list' => __('Filtre de Testimonial'),
                    'items_list_navigation' => __('Navigation de Testimonial'),
                    'items_list' => __('Liste Testimonial'),
                    'item_published' => __('Testimonial publiée.'),
                    'item_published_privately' => __('Testimonial publiée en privé.'),
                    'item_reverted_to_draft' => __('La Testimonial est retournée au brouillon.'),
                    'item_scheduled' => __('Testimonial planifiée.'),
                    'item_updated' => __('Testimonial mise à jours.'),
                ],
                'public' => true,
                'has_archive' => true,
                'rewrite' => [
                    'slug' => 'testimonial',
                ],
                // On active la possibilité d'assigner une catégorie à notre service grâce à la taxonomie 'category', rajoutez là puis allez voir,une fois fait essayez de rajouter un second arguement dans le tableau 'post_tag' et voyez ce que cela fait.
                'taxonomies' => ['category', 'post_tag'],
                'menu_icon' => 'dashicons-id-alt',
                // On choisis dans supports ce qu'on veut rendre accessible dans notre post-type, un titre,un textarea,un extrait et la possibilité de rajouter une image mise en avant.
                'supports' =>  ['title', 'editor', 'excerpt', 'thumbnail'],
            ]
        );
    }
}
