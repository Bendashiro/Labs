<?php

namespace App\Features\Pages;

use App\Http\Models\News;

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
            27
        );
    }
    public static function render()
    {
        $news = array_reverse(News::all());
        view('pages/news-inbox', compact('news'));
    }
}
