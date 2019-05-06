<?php

/**
 * Fonction pour rendre une view
 * 
 * @param string $path chemin du fichier à partir du dossier views sans l'extension .html.php
 * @return void
 */

// Rajout d'un second paramètre qui par défaut vaut un tableau vide.
function view($path, $data = array())
{
    // https://www.php.net/manual/fr/function.extract.php
    extract($data);
    // Cette function = helper, me permet de faire un include plus rapidement je récupère juste le chemin du fichier à partur du dossier views sans l'extention dans le fichier ServiceDetailsMetabox.php. Ce chemin est envoyé dans la variable $path,puis je complète le chemin avec la variable global et l'extension
    include(SER_VIEW_DIR . $path . '.html.php');
}

/**
 * Extrait la valeur dans un tableau si la valeur existe dans ce tableau
 * cela permet de na pas avoir d'erreur lorsque l'on créer un nouveau post
 *
 * @param string $key la meta key dans la vase de donnée
 * @param array $data le tableau resultant de get_post_meta
 * @return void
 */
function extract_data_attr(string $key, array $data)
{
    // Vérification que la clé existe bien dans le tableau
    if (array_key_exists($key, $data)) {
        return esc_attr($data[$key][0]);
    }
    return '';
}

function update_post_metas($post_id, $data)
{
    // Je fais un foreach pour chaque donnée dans le tableau data je veux récupéré la aclef et la valeur 
    foreach ($data as $key => $value) {
        //j'utlise la fonction wordpress update_post_meta qui attend 3 paramètres, l'id du post qu'il faut sauvegarder ou mettre à jours, la clef(l'étiquette) qu'on donne à la row(tirroir) dans la base de données ,et la valeur qu'on stocke dans la row
        update_post_meta($post_id, $key, $value);
    }
}

// On créer un helper pour assainir les données avec sanitize text field seulement si l'element $key est contenu dans le tableau $data
// https://www.php.net/manual/fr/function.array-key-exists.php
function post_data($key, $data)
{
    if (array_key_exists($key, $data)) {
        return sanitize_text_field($data[$key]);
    }
    return '';
}

function wpb_change_title_text($title)
{
    $screen = get_current_screen();

    if ('services' == $screen->post_type) {
        $title = __('Entrez le titre du service');
    }
    elseif ('projects' == $screen->post_type) {
        $title = __('Entrez le titre du projet');
    }
    elseif ('team' == $screen->post_type) {
        $title = __('Entrez le nom du collaborateur');
    }
    elseif ('testimonial' == $screen->post_type) {
        $title = __("Entrez l'auteur du témoignage");
    }
    return $title;
}

add_filter('enter_title_here', 'wpb_change_title_text');