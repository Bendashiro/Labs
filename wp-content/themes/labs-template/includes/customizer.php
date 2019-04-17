<?php

class Customizer
{
    /**
     * https://developer.wordpress.org/reference/classes/wp_customize_manager/
     *
     * @param [type] $wp_customize
     * @return void
     */
    public static function add_customization($wp_customize)
    {
        //Partie écriture

        //ajout d'un panel avec des options,le panel ne s'affiche que s'il possède des section
        $wp_customize->add_panel('panel-a', [
            'priority'       => 10,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => __('Writing'),
            'description'    => __('This panel give u acces to all customization about writing')
        ]);

        //Partie titre

        //ajout d'une section à un panel définie, si pas de panel,la section sera directement visible
        //La section n'est visible que si elle contient des controls.
        $wp_customize->add_section('section-a', [
            'panel'         => 'panel-a',
            'title'         => __("Titres"),
            'description'   => __("Modifiez vos titres à partir d'ici!")
        ]);
        //Ajout d'un setting qui contiendra des informations dans la base de donnée sous la clé ID (premier paramètre)
        //En 2 mots le setting se lit au control
        //La clé est utilisé pour récuperer les valeurs dans le thème grâce a la fonction get_theme_mod()
        //Le type theme mod est indispensable si l'on veut pouvoir les récuperer et les utliser dans nos pages
        $wp_customize->add_setting('setting-title-a', [
            'type'          => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        //Ajout d'un control(un label avec input et autre information).Le control ne peut pas exister seul
        //Attention le setting doit déjà être créer afin que le control puisse s'ajouter.
        $wp_customize->add_control('control-title-a', [
            'section'       => 'section-a',
            'settings'      => 'setting-title-a',
            'label'         => __("Titre d'accueil"),
            'description'   => __('Personnalisez le texte du titre et ajouter un indicateur de couleur grâce à ["coloré"]'),
            'type'          => 'textarea'
        ]);

        //Second titre
        $wp_customize->add_setting('setting-title-b', [
            'type'          => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('control-title-b', [
            'section'       => 'section-a',
            'settings'      => 'setting-title-b',
            'label'         => __("Titre de la partie client"),
            'description'   => __('Personnalisez le texte du titre'),
            'type'          => 'textarea'
        ]);

        //3éme titre
        $wp_customize->add_setting('setting-title-c', [
            'type'          => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('"control-"title-c', [
            'section'       => 'section-a',
            'settings'      => 'setting-title-c',
            'label'         => __("Titre de la partie services de la page d'accueil et de services"),
            'description'   => __('Personnalisez le texte du titre et ajouter un indicateur de couleur grâce à ["coloré"]'),
            'type'          => 'textarea'
        ]);
        //4ème titre
        $wp_customize->add_setting('setting-title-d', [
            'type'          => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('control-title-d', [
            'section'       => 'section-a',
            'settings'      => 'setting-title-d',
            'label'         => __('Titre de la partie team'),
            'description'   => __('Personnalisez le texte du titre et ajouter un indicateur de couleur grâce à ["coloré"]'),
            'type'          => 'textarea'
        ]);
        //5ème titre
        $wp_customize->add_setting('setting-title-e', [
            'type'          => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('control-title-e', [
            'section'       => 'section-a',
            'settings'      => 'setting-title-e',
            'label'         => __('Titre de la partie promotion'),
            'description'   => __('Personnalisez le texte du titre'),
            'type'          => 'textarea'
        ]);
        //6ème Titre
        $wp_customize->add_setting('setting-title-f', [
            'type'          => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('control-title-f', [
            'section'       => 'section-a',
            'settings'      => 'setting-title-f',
            'label'         => __('Titre de la partie contact'),
            'description'   => __('Personnalisez le texte du titre et ajouter un indicateur de couleur grâce à ["coloré"]'),
            'type'          => 'textarea'
        ]);
        //7ème titre
        $wp_customize->add_setting('setting-title-g', [
            'type'          => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('control-title-g', [
            'section'       => 'section-a',
            'settings'      => 'setting-title-g',
            'label'         => __('Second Titre de la partie contact'),
            'description'   => __('Personnalisez le texte du titre'),
            'type'          => 'textarea'
        ]);
        //8ème Titre
        $wp_customize->add_setting('setting-title-h', [
            'type'          => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('control-title-h', [
            'section'       => 'section-a',
            'settings'      => 'setting-title-h',
            'label'         => __('Titre de la partie projet de la page Services'),
            'description'   => __('Personnalisez le texte du titre et ajouter un indicateur de couleur grâce à ["coloré"]'),
            'type'          => 'textarea'
        ]);


        //Partie Paragraphe
        $wp_customize->add_section('section-b', [
            'panel'         => 'panel-a',
            'title'         => __("Paragraphes"),
            'description'   => __("Modifiez vos paragraphes à partir d'ici!")
        ]);

        // Partie accueil
        // Premier paragraphes
        $wp_customize->add_setting('setting-para-a', [
            'type'          => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('control-para-a', [
            'section'       => 'section-b',
            'settings'      => 'setting-para-a',
            'label'         => __("Paragraphe de la partie accueil"),
            'description'   => __('Personnalisez le texte du paragraphe'),
            'type'          => 'textarea'
        ]);
        // Second paragraphes
        $wp_customize->add_setting('setting-para-b', [
            'type'          => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('control-para-b', [
            'section'       => 'section-b',
            'settings'      => 'setting-para-b',
            'label'         => __("Second paragraphe de la partie accueil"),
            'description'   => __('Personnalisez le texte du paragraphe'),
            'type'          => 'textarea'
        ]);

        // Partie client
        //1er client
        $wp_customize->add_setting('setting-para-c', [
            'type'          => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('control-para-c', [
            'section'       => 'section-b',
            'settings'      => 'setting-para-c',
            'label'         => __("Premier paragraphe de la partie client"),
            'description'   => __('Personnalisez le texte du paragraphe'),
            'type'          => 'textarea'
        ]);
        //2ème client
        $wp_customize->add_setting('setting-para-d', [
            'type'          => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('control-para-d', [
            'section'       => 'section-b',
            'settings'      => 'setting-para-d',
            'label'         => __("Second paragraphe de la partie client"),
            'description'   => __('Personnalisez le texte du paragraphe'),
            'type'          => 'textarea'
        ]);
        //3ème client
        $wp_customize->add_setting('setting-para-e', [
            'type'          => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('control-para-e', [
            'section'       => 'section-b',
            'settings'      => 'setting-para-e',
            'label'         => __("Troisième paragraphe de la partie client"),
            'description'   => __('Personnalisez le texte du paragraphe'),
            'type'          => 'textarea'
        ]);
        //4ème client
        $wp_customize->add_setting('setting-para-f', [
            'type'          => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('control-para-f', [
            'section'       => 'section-b',
            'settings'      => 'setting-para-f',
            'label'         => __("Quatrième paragraphe de la partie client"),
            'description'   => __('Personnalisez le texte du paragraphe'),
            'type'          => 'textarea'
        ]);
        //5ème client
        $wp_customize->add_setting('setting-para-g', [
            'type'          => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('control-para-g', [
            'section'       => 'section-b',
            'settings'      => 'setting-para-g',
            'label'         => __("Cinquième paragraphe de la partie client"),
            'description'   => __('Personnalisez le texte du paragraphe'),
            'type'          => 'textarea'
        ]);
        //6ème client
        $wp_customize->add_setting('setting-para-h', [
            'type'          => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('control-para-h', [
            'section'       => 'section-b',
            'settings'      => 'setting-para-h',
            'label'         => __("Sixième paragraphe de la partie client"),
            'description'   => __('Personnalisez le texte du paragraphe'),
            'type'          => 'textarea'
        ]);

        //Partie promotion
        $wp_customize->add_setting('setting-para-i', [
            'type'          => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('control-para-i', [
            'section'       => 'section-b',
            'settings'      => 'setting-para-i',
            'label'         => __("Paragraphe de la partie promotion"),
            'description'   => __('Personnalisez le texte du paragraphe'),
            'type'          => 'textarea'
        ]);
        //Partie contact
        // Paragraphe de la partie contact
        $wp_customize->add_setting('setting-para-j', [
            'type'          => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('control-para-j', [
            'section'       => 'section-b',
            'settings'      => 'setting-para-j',
            'label'         => __("Paragraphe de la partie contact"),
            'description'   => __('Personnalisez le texte du paragraphe'),
            'type'          => 'textarea'
        ]);
        // Adresse de la partie contact
        $wp_customize->add_setting('setting-para-k', [
            'type'          => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('control-para-k', [
            'section'       => 'section-b',
            'settings'      => 'setting-para-k',
            'label'         => __("Adresse contact"),
            'description'   => __("Personnalisez le texte de l'adresse"),
            'type'          => 'textarea'
        ]);
        // Numéro de tel
        $wp_customize->add_setting('setting-para-l', [
            'type'          => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('control-para-l', [
            'section'       => 'section-b',
            'settings'      => 'setting-para-l',
            'label'         => __("Numéro de tel de la partie contact"),
            'description'   => __("Personnalisez le numéro de tel.Le codeur vous laisse avoir avoir acces au caratère pour ajouter tel: ou fax:,ce n'est point une médisance de sa part"),
            'type'          => 'textarea'
        ]);
        //Adresse mail
        $wp_customize->add_setting('setting-para-m', [
            'type'          => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('control-para-m', [
            'section'       => 'section-b',
            'settings'      => 'setting-para-m',
            'label'         => __("Adresse mail de la partie contact"),
            'description'   => __("Personnalisez l'adresse mail de contact, et ajouté le caratère 'µ' pour passer à la ligne suivante "),
            'type'          => 'email'
        ]);

        //Espace Bouton
        $wp_customize->add_section('section-c', [
            'panel'         => 'panel-a',
            'title'         => __("Boutons"),
            'description'   => __("Modifiez vos boutons à partir d'ici!")
        ]);
        //Premier bouton
        $wp_customize->add_setting('setting-button-a', [
            'type'          => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('control-button-a', [
            'section'       => 'section-c',
            'settings'      => 'setting-button-a',
            'label'         => __("Bouton de la partie accueil"),
            'description'   => __('Personnalisez le texte du bouton'),
            'type'          => 'textarea'
        ]);
        //Second bouton
        $wp_customize->add_setting('setting-button-b', [
            'type'          => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('control-button-b', [
            'section'       => 'section-c',
            'settings'      => 'setting-button-b',
            'label'         => __("Bouton de la partie services"),
            'description'   => __('Personnalisez le texte du bouton'),
            'type'          => 'textarea'
        ]);
        //3ème bouton
        $wp_customize->add_setting('setting-button-c', [
            'type'          => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('control-button-c', [
            'section'       => 'section-c',
            'settings'      => 'setting-button-c',
            'label'         => __("Bouton de la partie promotion"),
            'description'   => __('Personnalisez le texte du bouton'),
            'type'          => 'textarea'
        ]);
        //4ème bouton
        $wp_customize->add_setting('setting-button-d', [
            'type'          => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('control-button-d', [
            'section'       => 'section-c',
            'settings'      => 'setting-button-d',
            'label'         => __("Bouton de la partie contact"),
            'description'   => __('Personnalisez le texte du bouton'),
            'type'          => 'textarea'
        ]);
        //5ème bouton
        $wp_customize->add_setting('setting-button-e', [
            'type'          => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('control-button-e', [
            'section'       => 'section-c',
            'settings'      => 'setting-button-e',
            'label'         => __("Bouton de la partie project"),
            'description'   => __('Personnalisez le texte du bouton'),
            'type'          => 'textarea'
        ]);
    }
}
add_action('customize_register', [Customizer::class, 'add_customization']);