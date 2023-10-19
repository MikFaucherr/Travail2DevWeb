<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Apical | Formation PUB020 : WordPress, 2023 </title>
        <link rel="stylesheet" href="/wp-content/themes/themeDev/style.css">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script defer src="/wp-content/themes/themeDev/javascript/script.js"></script>

    </head>

    <!--Partie du haut Début-->
    <div id="partiehaut">
        <div id="entete">
            <div id="logo">
                <a href=""><img id="image_apical" class="logo" src="https://apical.xyz/medias/fr/LogoApical-blanc.svg" alt="Apical, ma plateforme d'apprentissage" /></a>
            </div>
            <div id="petitlogo">
                <a href=""><img class="petitlogo" id="accueil" src="https://apical.xyz/medias/commun/Accueil-MenuSecondaire.svg"></a>
                <img class="petitlogo"src="https://apical.xyz/medias/commun/Rechercher-MenuSecondaire.svg">
                <a href="#" id="login-link"><img class="petitlogo" src="https://apical.xyz/medias/commun/Login-MenuSecondaire.svg"></a>
            </div>
        </div>

        <div id="authentification">
        <span id="fermer-authentification">&times;</span>

        <div id="erreur" class="erreur-message"></div>

        <div id="formulaire">
            <form method="post" id="formulaire">
                <div class="label">
                    <label for="usager">*Usager: </label><br>
                    <label for="motdepasse">*Mot de passe: </label>
                </div>
                <div class="lereste">
                    <div class="textbox">
                        <input type="text" name="usager" id="usager"><br><br>
                        <input type="password" name="password" id="password" class="input input_mot_de_passe">
                    </div>
                    <div class="connecter">
                        <label for="checkbox"></label>
                        <input type="checkbox" name="connecter"> Rester connecté
                    </div>
                    <div class="soumettre">
                        <input type="submit" class="bouton" value="Soumettre">
                    </div><br>
                    <div class="nouvelusager"><br>
                        <a href="<?php echo wp_registration_url(); ?>">Nouvel usager</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    </div>
    <!--Partie du haut Fin-->

    <!--Formulaire-->
    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = isset($_POST['usager']) ? sanitize_user($_POST['usager']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    //Recupere les valeurs des aatribut

    if (empty($password)) {
        echo '<script>
                $("#erreur").html("Le champ du mot de passe est vide.");
             </script>';//Si le mot de passe est vide
    } 
    else if (empty($username)) {
        echo '<script>
                $("#erreur").html("Le champ usager est vide.");
             </script>';//Si le nom de l'usager est vide
    }
    else {
        $credentials = array(
            'user_login'    => $username,
            'user_password' => $password,
            'remember'      => isset($_POST['connecter']),//Recupere si le ckeckbox a ete coché
        );//Rentre dans un tableau les donnes pour se connecter

        $user = wp_signon($credentials);//Tente de se connecter

        if (is_wp_error($user)) {
            echo '<script>
                    $("#erreur").html("' . esc_html($user->get_error_message()) . '");
                 </script>';
        } //Affiche les erreurs qui empeche la connection
        else {
            wp_redirect(admin_url()); //Redirige vers le dashboard
            exit;
        }
    }
}
?>
    <!--Formulaire-->

    <nav class="navprincipale">
        <div class="container">
            <?php
            $args = array(
                'sort_column' => 'menu_order',
            );

            $pages = get_pages($args);

            foreach ($pages as $page) {
                echo '<a href="x">' . esc_html($page->post_title) . '</a>';
            }//Recupere les titre des pages de mon site en ordre de mise en ligne
            ?>
        </div>
    </nav>
