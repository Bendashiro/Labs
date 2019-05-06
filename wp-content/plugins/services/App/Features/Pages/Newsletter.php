<?php

namespace App\Features\Pages;

class Newsletter
{
    public static function init()
    {
        add_menu_page(
            __('News reçus'),
            __('News Client'),
            'edit_private_pages',
            'news-client',
            [self::class, 'render'],
            'dashicons-email',
            30
        );
    }
    public static function send_news()
    {
        echo "<h1> Verifier vos news client</h1>";
        $new = array_reverse(News::all());
        view('pages/news-inbox', compact('news'));
    }
}
