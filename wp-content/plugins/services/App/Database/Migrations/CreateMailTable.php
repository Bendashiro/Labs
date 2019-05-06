<?php
namespace App\Database\Migrations;
class CreateMailTable
{
    public static function up()
    {
        //Nous récupérons la'objet $wpdb qui est global afin de pouvoir interagir avec la base de données.
        global $wpdb;
        // $wpdb->prefix permet de récupérer le prefix
        $table_name = $wpdb->prefix . 'ser_mail';
        //Création de la table via sql pur voir https://dev.mysql.com/doc/refman/5.7/en/create-table.html
        $wpdb->query("CREATE TABLE IF NOT EXISTS $table_name (
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            userid INT NOT NULL,
            names VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            subjects TEXT NOT NULL,
            content TEXT NOT NULL,
            created_at TIMESTAMP 
        )
        COLLATE utf8mb4_unicode_520_ci
        ;");
    }
}