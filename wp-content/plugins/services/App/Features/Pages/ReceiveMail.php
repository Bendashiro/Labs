<?php

namespace App\Features\Pages;

use App\Http\Models\Mail;
use App\Http\Controllers\MailController;

class ReceiveMail
{
    /**
     * Iniatialisation de la page.
     * @return void
     */
    public static function init()
    {
        add_menu_page(
            __('Mails client reçus'),
            __('Mail Client'),
            'edit_private_pages',
            'mail-client',
            [self::class,'render'],
            'dashicons-email-alt',
            26
        );
    }
    public static function render()
    {
        echo "<h1> Verifier vos mails client</h1>";
        if($_GET['action']=='show')
        {
            $id = $_GET['id'];
            $mail = Mail::find($id);
            view('pages/show-mail', compact('mail'));
        } else {
            $mails = array_reverse(Mail::all());
            view('pages/mail-inbox', compact('mails'));
        }
        // call_user_func([MailController::class, $action]);
    }
}