<?php
namespace App\Features\Pages;

class Page
{
    public static function init()
    {
        ReceiveMail::init();
        Newsletter::init();
    }
}
