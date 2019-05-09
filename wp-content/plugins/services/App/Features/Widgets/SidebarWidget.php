<?php
namespace App\Features\Widgets;
class SidebarWidget extends \WP_Widget
{
    public static $slug = "sidebar";

    /**
     * Comme en javascript quand on créait une class on mettais un construct comme ça quand on faisait un extend de cette class on pouvait faire un super() qui permettait de rajouter ou de réduire le nombre de paramètres.
     * Pour cet exemple c'est pareil, on etend wordpress qui s'appel WP_Widget et on réutilise certains de ces paramètres comme : l'identifiant, et le title à qui on attribue des valeurs
     * le construct est lancé lorsque l'on instancie la class on passe à la class parent aux slug et au titre
     */
    function __construct()
    {
        parent::__construct(
            self::$slug,
            __('Search')
        );
    }

    //On enregistre notre widget dans le backoffice pour qu'il soit accessible et qu'on puisse s'en servir, on passe en paramètre la class pour qu'il charge un widget avec toutes les propriétés qu'on définira plus bas dans widget() et form() etc..
    public static function register()
    {
        register_widget(self::class);
    }

    //method 'widget' de la class WP_Widget qui permet de rendre un visuel dans le front-end
    public function widget($args, $instance)
    {
        // On créer deux variables et pour chacune de es variables on génère un name dont on va se servir dans notre formulaire (view)
        echo 'Ce qui est affiché dans le frontend';
    }

    // On utilise la methode update qui attend 2 paramètres qui vont être automatiquement remplis par la class WP_Widget,le 1er paramètres va contenir les données entrées fans le formulaire, et le second paramètre les anciennes données qui avaient été enregistrer grâce à ce formulaire
    public function update($new_instance, $old_instance)
    {
        //On créer une variable de type Array
        $instance = [];
        //Avant de stocker les données dans le tableau on fait un peu de sécurité en utilisant la method strip_tags()
        // https://www.php.net/manual/fr/function.strip-tags.php
        $instance['title']= (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
    }
}