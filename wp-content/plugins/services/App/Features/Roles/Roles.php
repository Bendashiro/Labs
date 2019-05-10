<?php
namespace App\Features\Roles;

class Role
{
    public static function config_role()
    {
        $editorCapa = get_role('editor')->capabilities;
        $editor = get_role('editor');
        $editor->remove_cap('level_7');
    }
}