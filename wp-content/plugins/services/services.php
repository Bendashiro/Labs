<?php
/**
 * Plugin Name:     Services
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     services/
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Services/
 */

// Your code starts here.

 require_once('autoload.php');

 require_once('init.php');
 

 $roleadmin = get_role('administrator');
 $roleeditor = get_role('editor');
 $adminCapa = get_role('administrator')->capabilities;
 $editorCapa = get_role('editor')->capabilities;
 