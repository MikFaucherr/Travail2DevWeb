//Formulaire//
$("#authentification").hide(); //On le cache quand on refresh la page

$("#login-link").click(function () {
    $("#authentification").fadeIn();
});//Fais apparaitre le formulaire


$("#fermer-authentification").click(function () {
    $("#authentification").fadeOut();
});//Ferme le formulaire avec le x


//Contenu des posts
$('#developper').on('click', function () {
    $('.commentaires').each(function () {
        var isVisible = $(this).is(':visible');
        if (isVisible) {
            $(this).slideUp();
        } else {
            $(this).slideDown();
        }
    });
});//Fais apparaitre tout les commentaires de tout les posts

$('.toggle').on('click', function () {
    $(this).next('.commentaires').slideToggle();
});//Lorsque toggle est selectionner on fais slide en toggle les commentaires

jQuery(document).ready(function($) {
    $('accueil').on('click', function() {
        window.location.href = '/';
    });
});//Permet de revenir a la page d'accueil