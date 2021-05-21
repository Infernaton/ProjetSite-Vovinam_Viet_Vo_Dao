<?php 
//Fichier qui repertories toutes choses qui ont besoin d'être modifiées facilement, comme le répertoires d'images où des valeurs
require_once "db.php"; //La Base de donnée

function getSaveDirr($target){
    //Dossier où sont stockées les images --A modifier si besoin--
    $target_dirr = '../../assets/img/';
    // Le '../' signifie que l'on retourne 1 fois en arrière dans la navigation des dossiers
    switch ($target){
        case 'forDB':
            return $target_dirr;
            break;
        case 'forPreview':
            $toReturn = '';
            for ($i=1;$i<substr_count($target_dirr,'../')){
                $toReturn .= "../";
            }
            return $toReturn;
            break;
    }
    
}
?>