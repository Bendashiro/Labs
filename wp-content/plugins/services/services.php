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
$caps = [
    'moderate_comments',
    'manage_categories',
    'manage_links',
    'unfiltered_html',
    'edit_pages',
    'edit_others_pages',
    'edit_published_pages',
    'edit_private_pages',
    'publish_pages',
    'delete_pages',
    'delete_others_pages',
    'delete_private_pages',
    'read_private_pages',
    'delete_published_pages',
];
$editorCapa = get_role('editor')->capabilities;
$editor = get_role('editor');
foreach ($caps as $cap) :
    $editor->remove_cap($cap);
endforeach;
