<?php

namespace App\Http\Models;

class Mail
{
    //les propriétés de l'objet model. Les propriété de l'objet qui sont représentative de la structure de la table dans la base de donnée.
    public $id;
    public $userid;
    public $name;
    public $email;
    public $subjects;
    public $content;
    public $created_at;
    protected static $table = 'mg_ser_mail';
    /**
     * Fonction qui est appelé lors de l'instance d'un objet.
     */
    public function __construct()
    {
        //on rempli la date de création
        $this->created_at = current_time('mysql');
    }

    public function save()
    {
        global $wpdb;
        //nous nous utilisons la methode insert de l'objet $wpdb;
        return $wpdb->insert(
            $wpdb->prefix . 'ser_mail',
            //içi nous affichons toutes les colonnes avec leur valeur sous forme d'objet.
            [
                'id' => $this->id,
                'userid' => $this->userid,
                'names' => $this->name,
                'email' => $this->email,
                'subjects' => $this->subjects,
                'content' => $this->content,
                'created_at' => $this->created_at,
            ]
        );
    }
    //On créer une function qui récupère tous les mails qui ont été enregistré dans la base de donnée
    public static function all()
    {
        global $wpdb;
        $table = self::$table;
        $query = "SELECT * FROM $table";
        return $wpdb->get_results($query);
    }

    //On créer une seconde function 'find()' pour faire une requête différente de 'all()', find elle ira récupérer dans la base de donnée les mails dont l'id vaut ce qui est passé dans l'url.
    public static function find($id)
    {
        global $wpdb;
        $table = self::$table;
        $query = "SELECT * FROM $table WHERE id = $id";
        //nous ajoutons ces lignes afin de ne pas renvoyé un simple objet mais bien un objet Mail
        $objet = $wpdb->get_row($query);
        $mail = new Mail();
        foreach ($objet as $key => $value) {
            $mail->$key = $value;
        }
        return $mail;
    }
    //Function qui va nous permettre de supprimer un mail dans la base de donné, cette function attend un paramètre '$id' que l'on va remplir par la suite quand on va appelé cette function
    public static function delete($id)
    {
        global $wpdb;
        //delete est une methode de notre cass wpdb
        return $wpdb->delete(
            self::$table,
            [
                'id' => $id
            ]
        );
    }
}
