<?php
// Fonction pour définir le modèle de page 404
function my_custom_404() {
    global $wp_query;

    // Vérifie si c'est une page 404
    if (is_404()) {
        
        $custom_404_slug = '404.php';//Recupere nom page ou amener

        $custom_404_id = url_to_postid($custom_404_slug);//Prend son id

        
        if ($custom_404_id) {
            $wp_query->set('page_id', $custom_404_id); //redirige vers la page
        }
    }
}

add_action('template_redirect', 'my_custom_404');//Pour que la fonction s'active
?>
