<?php
/***
 * Plugin NAme: Services
 * Author: Plugin Author
 * Text Domain: team
 * Domain Path: /languages
 */
namespace App\Features\PostTypes;

class TeamPostTypes
{
    public static $slug = 'team';
    public static function register()
    {
        add_theme_support('post-thumbnails');
        register_post_type(
            // on remplace le slug qui était écrit en dur 'recipe' par la variable, on fait cela car à notre function register_post_type par son identifiant à plusieurs endroits, si jamais on décide de changer l'identifiant qui est 'services' par 'carotte' bah il faudra le changer a de nombreux endroit si on laisse cela en dur c'est pour cela qu'on à choisis de créer une variable, on change la valeur de la variable et tout lesendroits ou son identifiant est utilisé sera mis à jours.
            self::$slug,
            [
                'labels' => [
                    'name' => __('Team'),
                    'singular_name' => __('Team'),
                    'add_new' => __('Ajouter'),
                    'add_new_item' => __('Ajouter un membre de la team'),
                    'edit_item' => __('Modifier la team'),
                    'new_item' => __('Nouvelle team'),
                    'view_item' => __('Voir la team'),
                    'view_items' => __('Voir les Team'),
                    'search_items' => __('Rechercher des Team'),
                    'not_found' => __('Pas de team trouvées.'),
                    'not_found_in_trash' => ('Pas de Team dans la corbeille.'),
                    'all_items' => __('Toutes les Team'),
                    'archives' => __('Team archivées'),
                    'filter_items_list' => __('Filtre de service'),
                    'items_list_navigation' => __('Navigation de team'),
                    'items_list' => __('Liste team'),
                    'item_published' => __('Team publiée.'),
                    'item_published_privately' => __('Team publiée en privé.'),
                    'item_reverted_to_draft' => __('La team est retournée au brouillon.'),
                    'item_scheduled' => __('Team planifiée.'),
                    'item_updated' => __('Team mise à jours.'),
                ],
                'public' => true,
                'has_archive' => true,
                'rewrite' => [
                    'slug' => 'team',
                ],
                // On active la possibilité d'assigner une catégorie à notre service grâce à la taxonomie 'category', rajoutez là puis allez voir,une fois fait essayez de rajouter un second arguement dans le tableau 'post_tag' et voyez ce que cela fait.
                'taxonomies' => ['category', 'post_tag'],
                'menu_icon' => 'dashicons-groups',
                // On choisis dans supports ce qu'on veut rendre accessible dans notre post-type, un titre,un textarea,un extrait et la possibilité de rajouter une image mise en avant.
                'supports' =>  ['title', 'editor', 'thumbnail'],
            ]
        );
    }
}
