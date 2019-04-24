<?php
//Appel des class utilisé
use App\Features\PostTypes\ServicesPostTypes;
use App\Features\Taxonomies\ServicesTaxonomy;
use App\Features\MetaBoxes\ServiceDetailsMetabox;
use App\Setup;



//Initialisation des class utiliser
//Pour l'utilisation des hooks, on ne peut pas utiliser la manière Class::fonction mais Class::class,'fonction'
add_action('init',[ServicesPostTypes::class , 'register']);
add_action('init',[ServicesTaxonomy::class , 'register']);


add_action('add_meta_boxes_services', [ServiceDetailsMetabox::class , 'add_meta_box']);

add_action('save_post_' . ServicesPostTypes::$slug,[ServiceDetailsMetabox::class,'save']);

add_action('admin_init',[Setup::class , 'start_session']);
add_action('admin_enqueue_scripts',[Setup::class,'enqueue_scripts']);