<?php 
//Fichier qui repertories toutes choses qui ont besoin d'être modifiées facilement, comme le répertoires d'images où des valeurs
require_once "db.php"; //La Base de donnée

function getSaveDirr(){
    //Dossier où sont stockées les images --A modifier si besoin--
    return '../../assets/img/';
    // Le '../' signifie que l'on retourne 1 fois en arrière dans la navigation des dossiers
}
?>