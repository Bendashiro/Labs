<?php
/***
 * Plugin Name: Services
 * Author: Plugin Author
 * Text Domain: projects
 * Domain Path: /languages
 */
namespace App\Features\PostTypes;

class ProjectsPostTypes
{
    public static $slug = 'projects';
    public static function register()
    {
        register_post_type(
            // on remplace le slug qui était écrit en dur 'recipe' par la variable, on fait cela car à notre function register_post_type par son identifiant à plusieurs endroits, si jamais on décide de changer l'identifiant qui est 'Projects' par 'carotte' bah il faudra le changer a de nombreux endroit si on laisse cela en dur c'est pour cela qu'on à choisis de créer une variable, on change la valeur de la variable et tout lesendroits ou son identifiant est utilisé sera mis à jours.
            self::$slug,
            [
                'labels' => [
                    'name' => __('Projects'),
                    'singular_name' => __('Project'),
                    'add_new' => __('Ajouter'),
                    'add_new_item' => __('Ajouter une Project'),
                    'edit_item' => __('Modifier la Project'),
                    'new_item' => __('Nouveau Project'),
                    'view_item' => __('Voir la Project'),
                    'view_items' => __('Voir les Projects'),
                    'search_items' => __('Rechercher des Projects'),
                    'not_found' => __('Pas de Project trouvées.'),
                    'not_found_in_trash' => ('Pas de Projects dans la corbeille.'),
                    'all_items' => __('Toutes les Projects'),
                    'archives' => __('Projects archivées'),
                    'filter_items_list' => __('Filtre de Project'),
                    'items_list_navigation' => __('Navigation de Project'),
                    'items_list' => __('Liste Project'),
                    'item_published' => __('Project publiée.'),
                    'item_published_privately' => __('Project publiée en privé.'),
                    'item_reverted_to_draft' => __('La Project est retournée au brouillon.'),
                    'item_scheduled' => __('Project planifiée.'),
                    'item_updated' => __('Project mise à jours.'),

                ],
                'public' => true,
                'has_archive' => true,
                'rewrite' => [
                    'slug' => 'Projects',
                ],
                // On active la possibilité d'assigner une catégorie à notre Project grâce à la taxonomie 'category', rajoutez là puis allez voir,une fois fait essayez de rajouter un second arguement dans le tableau 'post_tag' et voyez ce que cela fait.
                'taxonomies' => ['category', 'post_tag'],
                'menu_icon' => 'dashicons-clipboard',
                // On choisis dans supports ce qu'on veut rendre accessible dans notre post-type, un titre,un textarea,un extrait et la possibilité de rajouter une image mise en avant.
                'supports' =>  ['title', 'editor', 'thumbnail'],
            ]
        );
    }
}