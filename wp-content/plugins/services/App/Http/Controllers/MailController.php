<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Http\Models\Mail;

class MailController
{
    public static function send_mail()
    {
        //On verifie si le formulaire est bien authentique
        if (!wp_verify_nonce($_POST['_wpnonce'], 'send-mail')) {
            return;
        };

        // Maintenant à chaque fois qu'il y a une tentatve réussie ou raté d'envoie de mail,on lance la methode 'validation'
        Request::validation([
            'name' => 'required',
            'email' => 'email',
            'subjects' => 'required',
            'message' => 'required'
        ]);
        // Nous récupérons les données envoyé par le formulaire qui se retrouve dans la variable $_POST
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $subjects = sanitize_text_field($_POST['subjects']);
        $message = sanitize_text_field($_POST['message']);
        //sI LE MAIL EST BIEN ENVOYÉ STATUS = 'SUCCES' SINON 'ERROR'
        if (wp_mail('hich1997@hotmail.com', $subjects, $message, '', $name, $email)) {
            $_SESSION['notice'] = [
                'status' => 'success',
                'message' => 'Votre e-mail a bien été envoyé'
            ];
            //Si le mail est envoyé supprime les valeur des inputs
            // unset($_SESSION['old']);
            //Sauvegarde des mails dans la base de données
            $mail = new Mail();
            $mail->userid = get_current_user_id();
            $mail->name = $name;
            $mail->email = $email;
            $mail->subjects = $subjects;
            $mail->content = $message;
            //Sauvegarde
            $mail->save();
        } else {
            $_SESSION['notice'] = [
                'status' => 'error',
                'message' => 'Une erreur est survenue, veuillez vous corriger'
            ];
        }
        wp_safe_redirect(wp_get_referer());
    }
    public static function delete()
    {
        $id = $_POST['id'];
        if (Mail::delete($id)) {
            $_SESSION['notice'] = [
                'status' => 'success',
                'message' => 'Le Mail a bien été supprimé'
            ];
            wp_safe_redirect(menu_page_url('mail-client'));
        } else {
            $_SESSION['notice'] = [
                'status' => 'error',
                'message' => 'un Problème est survenu,veuillez réésayer'
            ];
            wp_safe_redirect(wp_get_referer());
        }
    }
}
