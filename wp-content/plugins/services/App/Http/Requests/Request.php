<?php

namespace App\Http\Requests;

class Request
{
    private static $errors = array();

    // On créer une function du nom validation qui attend un paramètre de type array. Ce paramètre va être rempli via le fichier Mailcontroller
    public static function validation(array $data)
    {
        //Pour chaque entrée on lance une  des méthode çi-dessous selon la valeur du tableau $data
        foreach ($data as $input_name => $verification) {
            // on lance la function de la class,'email'ou 'required' selon ce que vaut $verification et on rempli le paramètre de la function avec $input_name
            call_user_func([self::class, $verification], $input_name);
            //En même temps qu'on fait les vérifications pour savoir si les champs sont bien remplis mais le message doit faire au moins 250 caratères et le client n'en a écrit que 100, un message d'ereur s'affichera pour lui dire que le message est trop court mais en meme temps la page s'est rechargé et donc tout ce qui avait été écrit perdu.C'est pour ca que même si le message est mauvais on le stock dans $_SESSION
        }

        //On vérifie que $errors contient quelque chose
        if (count(self::$errors) != 0) {
            $message = "";
            foreach (self::$errors as $key => $value) {
                $message .= $value . '<br>';
            }
            //On rempli de notre $_SESSION avec toutes nos erreurs réécrite pour que l'affichage soit mieux présenté
            $_SESSION['notice'] = [
                'status' => 'error',
                'message' => $message
            ];
            //on créer $_SESSION['old'] que si il y a des erreurs
            foreach ($data as $input_name => $validation) {
                $_SESSION['old'][$input_name] = $_POST[$input_name];
            }
            wp_safe_redirect(wp_get_referer());
            // Permet d'arreter le script tant qu'il y a des erreurs
            exit;
        }
    }
    public static function required(string $input_name)
    {
        if ($_POST[$input_name] == "") {
            self::$errors[$input_name] = sprintf(__('Le champ %s est obligatoire'), $input_name);
        }
    }
    public static function email(string $input_name)
    {
        if (!is_email($_POST[$input_name])) {
            self::$errors[$input_name] = sprintf(__('Le champ %s doit être un format email'), $input_name);
        }
    }
}
