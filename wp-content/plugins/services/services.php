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
$teams = [
    'publish_teams',
    'edit_teams',
    'edit_others_teams',
    'delete_teams',
    'delete_others_teams',
    'read_private_teams',
    'edit_team',
    'delete_team',
    'read_team'
];
$testimonials = [
    'publish_testimonials',
    'edit_testimonials',
    'edit_others_testimonials',
    'delete_testimonials',
    'delete_others_testimonials',
    'read_private_testimonials',
    'edit_testimonial',
    'delete_testimonial',
    'read_testimonial'
];
$services = [
    'publish_services',
    'edit_services',
    'edit_others_services',
    'delete_services',
    'delete_others_services',
    'read_private_services',
    'edit_service',
    'delete_service',
    'read_service'
];
$projects = [
    'publish_projects',
    'edit_projects',
    'edit_others_projects',
    'delete_projects',
    'delete_others_projects',
    'read_private_projects',
    'edit_project',
    'delete_project',
    'read_project'
];
$adminCapa = get_role('administrator')->capabilities;
$admin = get_role('administrator');
foreach ($teams as $team) :
    $admin->add_cap($team);
endforeach;
foreach ($projects as $project) :
    $admin->add_cap($project);
endforeach;
foreach ($services as $service) :
    $admin->add_cap($service);
endforeach;
foreach ($testimonials as $testimonial) :
    $admin->add_cap($testimonial);
endforeach;