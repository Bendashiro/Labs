<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Http\Models\News;

class NewsController
{
    public static function send_news()
    {
        //On verifie si le formulaire est bien authentique
        if (!wp_verify_nonce($_POST['_wpnonce'], 'send-news')) {
            return;
        };

        // Maintenant à chaque fois qu'il y a une tentatve réussie ou raté d'envoie de mail,on lance la methode 'validation'
        Request::validationNews([
            'email2' => 'email',
        ]);
        // Nous récupérons les données envoyé par le formulaire qui se retrouve dans la variable $_POST
        $email = sanitize_email($_POST['email2']);
        //sI LE MAIL EST BIEN ENVOYÉ STATUS = 'SUCCES' SINON 'ERROR'
        if (wp_mail('hich1997@hotmail.com', '' , $email)) {
            $_SESSION['noticeN'] = [
                'status' => 'success',
                'message' => 'Votre e-mail a bien été envoyé'
            ];
            //Si le mail est envoyé supprime les valeur des inputs
            unset($_SESSION['old']);
            //Sauvegarde des mails dans la base de données
            $new = new News();
            $new->userid = get_current_user_id();
            $new->email = $email;
            //Sauvegarde
            $new->save();
        } else {
            $_SESSION['noticeN'] = [
                'status' => 'danger',
                'message' => 'Une erreur est survenue, veuillez vous corriger'
            ];
        }
        wp_safe_redirect(wp_get_referer());
    }
    public static function delete()
    {
        $id = $_POST['id'];
        if (News::delete($id)) {
            $_SESSION['notice'] = [
                'status' => 'success',
                'message' => 'La News a bien été supprimé'
            ];
            wp_safe_redirect(menu_page_url('news-client'));
        } else {
            $_SESSION['notice'] = [
                'status' => 'error',
                'message' => 'un Problème est survenu,veuillez réésayer'
            ];
            wp_safe_redirect(wp_get_referer());
        }
    }
}
