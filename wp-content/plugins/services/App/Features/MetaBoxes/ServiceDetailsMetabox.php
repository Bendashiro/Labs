<?php

namespace App\Features\MetaBoxes;

use App\Features\PostTypes\ServicesPostTypes;

class ServiceDetailsMetabox
{
    public static $slug = 'services_details_metabox';
    /**
     * Ajout d'une meta box au type de contenu qui sont passé dans le tableau $screens
     * @return void
     */
    public static function add_meta_box()
    {
        $screen = [ServicesPostTypes::$slug];
        add_meta_box(
            self::$slug,                //Unique ID
            __('Details des Services'), //Box title
            [self::class, 'render'],    //Content callback,must be of type callable
            $screen                     //Post Type
        );
    }
    /**
     * Function pour rendre le code html dans la metabox
     * 
     * @return void
     */
    public static function render()
    {

        $data = get_post_meta(get_the_ID() , 'key_selected_icon');
        $icon = $data[0];
        //echo get_post_meta(get_the_ID() , 'selected_icon' , true);
        // extract_data_attr('selected_icon',$data);
        /* TEST */
        // echo get_post_meta(get_the_ID(), 'key_selected_icon', true);
        /* TEST */

        view('metaboxes/services-detail', compact('icon'));
    }

    public static function save($post_id)
    {

    
        if (count($_POST) != 0) {
            // Je créer un tableau dans lequel je stock les données récupéré par ma requête auxquelles j'assigne des clefs
            $data = $_POST['ser-icon'];
            //$blabla = $_POST['selected_icon'];
            // J'utilise le helper update_post_metas que j'ai créer dans le fichier helpers.php, je passe deux variables, $post_id qui contient l'id du post , et $data qui contient un tableau de données récupéré
            update_post_metas($post_id, ['key_selected_icon' => $data]);
        }
    }
}
