<?php
namespace App\Database;
use App\Database\Migrations\CreateMailTable;
use App\Database\Migrations\CreateNewsTable;
class Database
{
    /**
     * Initialisation de la base de donnée. Cette méthode est déclanché lorsque l'on active le plugin
     *
     * @return void
     */
    public static function init()
    {
        //Création des tables dans la base de données.
        self::migration();
    }

    public static function migration()
    {
        CreateMailTable::up();
        CreateNewsTable::up();
    }
}