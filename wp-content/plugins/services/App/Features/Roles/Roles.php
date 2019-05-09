<?php
namespace App\Features\Roles;

class Role
{
    public static function init()
    {
        $editor = get_role('editor')->capabilities;
    }
}