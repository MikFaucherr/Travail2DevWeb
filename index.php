<?php get_header(); ?>
    <div id="contenu">
        <div id="titre">
            <br>
            <hr class="divider">
            <h1 class="titre1">Formation PUB020 : WordPress, 2023</h1>
            <hr class="divider">
        </div>
        <div id="boutondev">
            <a class="bouton" id="developper">Tout réduire</a><br><br>
        </div>
        <?php
        $args = array(
            'post_type' => 'post',  // On veux du type post
        );
        
        $the_query = new WP_Query($args); //Nouvelle requete avec les conditions
        
        if ($the_query->have_posts()) : //Si il y a des post de type post
            $compteur = 1; //Compteur de post
            $compteurcomments = 1; //Compteur pour les commentaires
            while ($the_query->have_posts()) : $the_query->the_post();//Tant qu'il y a des post
                echo "<div class='lespost'>"; 
                echo "<div class='toggle'>" . $compteur . ". " . get_the_title() . "</div>";//Affiche le post

                echo "<div class='commentaires' style='display: none;'>";
                $commentaires = get_comments(array('post_id' => get_the_ID()));
                foreach ($commentaires as $comment) {
                    echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$compteur.$compteurcomments {$comment->comment_content}</p>";
                    $compteurcomments++;
                }//Boucle pour afficher les commentaires
                
                echo "</div>"; 
                echo "</div>"; 
                $compteur++;
            endwhile;
        
            wp_reset_postdata();  // Réinitialiser les données du post
        endif;

        ?>

    </div>
    <hr class="divider-publicite">
    <div id="publicite">
    <h10>Site fièrement hébergé chez <a href="http://www.a2hosting.com?aid=5ca65a17be949" target="_top" id="hosting">A2 Hosting</a></h10><br><br>
        <a href="https://www.a2hosting.com?aid=5ca65a17be949&amp;bid=ed1c4a67" target="_top">
            <img src="//affiliates.a2hosting.com/accounts/default1/banners/ed1c4a67.jpg" alt="" title="" style="max-width: 100%; height: auto; display: block; margin: 0 auto;">
        </a>
        <img style="border:0" class="image_publicite" src="https://affiliates.a2hosting.com/scripts/imp.php?aid=5ca65a17be949&amp;bid=ed1c4a67" width="1" height="1" alt="" >
</div>
    <hr class="divider-publicite">
</div>
<?php get_footer(); ?>