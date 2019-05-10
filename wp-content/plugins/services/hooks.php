<?php
//Appel des class utilisé
//Project
use App\Features\PostTypes\ProjectsPostTypes;
use App\Features\Taxonomies\ProjectsTaxonomy;
use App\Features\MetaBoxes\ProjectDetailsMetabox;
//Services
use App\Features\PostTypes\ServicesPostTypes;
use App\Features\Taxonomies\ServicesTaxonomy;
use App\Features\MetaBoxes\ServiceDetailsMetabox;
//Team
use App\Features\PostTypes\TeamPostTypes;
use App\Features\Taxonomies\TeamTaxonomy;
//Testimonial
use App\Features\PostTypes\TestimonialPostTypes;
use App\Features\Taxonomies\TestimonialTaxonomy;
//Partie Mail
use App\Features\Pages\Page;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NewsController;
//Setup
use App\Setup;
use App\Database\Database;
//Roles
use App\Features\Roles\Role;

//Initialisation des class utiliser
//Pour l'utilisation des hooks, on ne peut pas utiliser la manière Class::fonction mais Class::class,'fonction'
//Projet
add_action('init',[ProjectsPostTypes::class , 'register']);
add_action('init',[ProjectsTaxonomy::class , 'register']);
//Services
add_action('init',[ServicesPostTypes::class , 'register']);
add_action('init',[ServicesTaxonomy::class , 'register']);
//Team
add_action('init',[TeamPostTypes::class , 'register']);
add_action('init',[TeamTaxonomy::class , 'register']);
//Testimonial
add_action('init',[TestimonialPostTypes::class , 'register']);
add_action('init',[TestimonialTaxonomy::class , 'register']);
//Iniatialisation des metaboxes
add_action('add_meta_boxes_projects', [ProjectDetailsMetabox::class , 'add_meta_box']);
add_action('add_meta_boxes_services', [ServiceDetailsMetabox::class , 'add_meta_box']);
//Sauvegarde metabox
add_action('save_post_' . ProjectsPostTypes::$slug,[ProjectDetailsMetabox::class,'save']);
add_action('save_post_' . ServicesPostTypes::$slug,[ServiceDetailsMetabox::class,'save']);
//session qui sert aux mail
add_action('init',[Setup::class , 'start_session']);
//style
add_action('admin_enqueue_scripts',[Setup::class,'enqueue_scripts']);
//Mail
add_action('admin_menu',[Page::class,'init']);
add_action('admin_post_send-mail', [MailController::class, 'send_mail']);
add_action('admin_post_nopriv_send-mail', [MailController::class, 'send_mail']);

add_action('admin_post_send-news', [NewsController::class, 'send_news']);
add_action('admin_post_nopriv_send-news', [NewsController::class, 'send_news']);
register_activation_hook(__DIR__ . '/services.php', [Database::class, 'init']);
add_action('admin_action_mail-delete', [MailController::class, 'delete']);
add_action('admin_action_news-delete', [NewsController::class, 'delete']);
//Roles
register_activation_hook(__DIR__ . '/services.php', [Role::class, 'config_role']);