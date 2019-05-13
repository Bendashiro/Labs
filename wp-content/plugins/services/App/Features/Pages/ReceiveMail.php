<?php

namespace App\Features\Pages;

use App\Http\Models\Mail;
use App\Http\Middleware\CheckPermission;

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
            [self::class, 'render'],
            'dashicons-email-alt',
            26
        );
    }
    public static function render()
    {
        if ($_GET['action'] == 'show') {
            $id = $_GET['id'];
            $mail = Mail::find($id);
            view('pages/show-mail', compact('mail'));
        } else {
            $mails = array_reverse(Mail::all());
            view('pages/mail-inbox', compact('mails'));
        }
    }
}
