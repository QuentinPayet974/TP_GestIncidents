<?php

/* Script gestion des tickets PHP
 * et d'enregistrement sécurisé des utilisateurs
 * Protection par injection de PDO 
 * 
 * @author btssio
 * 
 * La version PHP 5.6 minimum est requise !
 */

 // opérateur ternaire condition ? action si vrai : action si faux
 // Traitement de la requête (demande) de l'internaut
$demande = (empty($_GET['chx'] )) ? 'accueil' : $_GET['chx'] ;

// On route l'utilisateur en fonction de sa demande
switch ($demande) {
    case 'login' :
        require __DIR__ . '/vues/login.php';
        break;
    case 'accueil' :
        require __DIR__ .  '/vues/accueil.php';
        break;

    case 'liste' :
        require __DIR__ .  '/vues/liste_tickets.php';
        break;

    case 'projet' :
        require __DIR__ .  '/vues/projet.html';
        break;
        
    default:
        http_response_code(404);
        require __DIR__ . '/vues/404.php';
        break;

}

?>
