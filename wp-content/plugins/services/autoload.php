<?php
spl_autoload_register('simplarity_autoloader');

function simplarity_autoloader($class_name)
{
    // Si le namespace de la class contienet App alors on rentre dans la fonction
    if (strpos($class_name, 'App') !== false) {
        // __FILE__ correspond de la class dans lequel on est 'autoload.php', la fonction plugin_dir_path retourne le chemin jusqu'au dossier contenu __FILE__  on stock ce chemin dans une variable $classes_dir
        $classes_dir = plugin_dir_path(__FILE__);

        $class_file = str_replace('\\', DIRECTORY_SEPARATOR, $class_name) . '.php';
        require_once $classes_dir . $class_file;
       }
}