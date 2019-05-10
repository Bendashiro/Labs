<?php
namespace App\Http\Middleware;
class CheckPermission
{
    /**
     * Verification des droits de l'utilisateur
     * 
     * @param string $capability
     * @return void
     */
    public static function check(string $capability)
    {
        if(!current_user_can($capability)) {
            view('code/403');
            exit;
        }
    }
}