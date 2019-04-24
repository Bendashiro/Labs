<?php
/***
 * Plugin NAme: Services
 * Author: Plugin Author
 * Text Domain: services
 * Domain Path: /languages
 */
namespace App\Features\PostTypes;

class ServicesPostTypes
{
    public static $slug = 'services';
    public static function register()
    {
        register_post_type(
            // on remplace le slug qui était écrit en dur 'recipe' par la variable, on fait cela car à notre function register_post_type par son identifiant à plusieurs endroits, si jamais on décide de changer l'identifiant qui est 'services' par 'carotte' bah il faudra le changer a de nombreux endroit si on laisse cela en dur c'est pour cela qu'on à choisis de créer une variable, on change la valeur de la variable et tout lesendroits ou son identifiant est utilisé sera mis à jours.
            self::$slug,
            [
                'labels' => [
                    'name' => __('Services'),
                    'singular_name' => __('Service'),
                    'add_new' => __('Ajouter'),
                    'add_new_item' => __('Ajouter une service'),
                    'edit_item' => __('Modifier la service'),
                    'new_item' => __('Nouvelle service'),
                    'view_item' => __('Voir la service'),
                    'view_items' => __('Voir les services'),
                    'search_items' => __('Rechercher des services'),
                    'not_found' => __('Pas de service trouvées.'),
                    'not_found_in_trash' => ('Pas de services dans la corbeille.'),
                    'all_items' => __('Toutes les services'),
                    'archives' => __('Services archivées'),
                    'filter_items_list' => __('Filtre de service'),
                    'items_list_navigation' => __('Navigation de service'),
                    'items_list' => __('Liste service'),
                    'item_published' => __('Service publiée.'),
                    'item_published_privately' => __('Service publiée en privé.'),
                    'item_reverted_to_draft' => __('La service est retournée au brouillon.'),
                    'item_scheduled' => __('Service planifiée.'),
                    'item_updated' => __('Service mise à jours.'),

                ],
                'public' => true,
                'has_archive' => true,
                'rewrite' => [
                    'slug' => 'services',
                ],
                // On active la possibilité d'assigner une catégorie à notre service grâce à la taxonomie 'category', rajoutez là puis allez voir,une fois fait essayez de rajouter un second arguement dans le tableau 'post_tag' et voyez ce que cela fait.
                'taxonomies' => ['category', 'post_tag'],
                'menu_icon' => 'dashicons-media-spreadsheet',
                // On choisis dans supports ce qu'on veut rendre accessible dans notre post-type, un titre,un textarea,un extrait et la possibilité de rajouter une image mise en avant.
                'supports' =>  ['title', 'editor', 'thumbnail'],
            ]
        );
    }
}
