<?php get_header(); ?>
<div id="contenu">
    <div id="titre"><br>
        <hr class="divider">
        <h1 class="titre1">La page demandée n'éxiste pas</h1>
        <hr class="divider">
    </div>
    <div class="option">
        <p>
            La page demandée n'éxiste pas. Voici les pages disponibles sur Apical :
        </p>
        <ul>
        <?php
        $args = array(
        'sort_column' => 'menu_order',
        );
        $pages = get_pages($args);
        
        foreach ($pages as $page) {
        echo '<li><a href="#">' . esc_html($page->post_title) . '</a></li>';
        }//Meme fonctionnement que pour le navbar
        ?>
        </ul>
    </div>  
</div>
<div id="publicite">
    <p>Site fièrement hébergé chez <a href="http://www.a2hosting.com?aid=5ca65a17be949" target="_top" id="hosting">A2 Hosting</a>.</p>
    <p><a href="https://www.a2hosting.com?aid=5ca65a17be949&amp;bid=ed1c4a67" target="_top"><img src="//affiliates.a2hosting.com/accounts/default1/banners/ed1c4a67.jpg" alt="" title="" width="728" height="90" /></a><img style="border:0" src="https://affiliates.a2hosting.com/scripts/imp.php?aid=5ca65a17be949&amp;bid=ed1c4a67" width="1" height="1" alt="" /></p>
</div>
</div>
<?php get_footer(); ?>