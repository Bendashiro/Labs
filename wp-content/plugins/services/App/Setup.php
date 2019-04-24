<?php
namespace App;
class Setup
{
    /**
     * Fonction pour démarrer une session afin de pouvoir utiliser la variable $_SESSION
     * 
     * @return void
     */
    public static function start_session()
    {
        if (!session_id()) {
            session_start();
        }
    }
    public static function enqueue_scripts($page)
    {
        wp_enqueue_style('flaticon', SER_PLUGIN_URL . "/resources/assets/css/flaticon.css");
    }
}