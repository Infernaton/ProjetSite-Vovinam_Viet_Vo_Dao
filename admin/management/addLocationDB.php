<?php
require_once "init.php";

switch ($_POST["submit"]){
    case 'valid':
        $bdd->addClub(
            ["titre"=>$_POST["titre"], 
            "enseignant"=>$_POST["enseignant"], 
            "contact"=>$_POST["contact"], 
            'club_comite'=>"club",
            'lien'=>$_POST["lien"],
            'Comite'=>$_POST["comiteValue"],
            'coordonee'=>base64_encode(serialize(explode(",", ($_POST["result"]))))]
        );
        echo "\n Envoie réussi";
        break;
    
    case 'modify':
        $bdd->modifyClub(
            ["id"=>$_POST["currentClub"],
            "titre"=>$_POST["titre"], 
            "enseignant"=>$_POST["enseignant"], 
            "contact"=>$_POST["contact"], 
            'lien'=>$_POST["lien"],
            'Comite'=>$_POST["comiteValue"],
            'coordonee'=>base64_encode(serialize(explode(",", ($_POST["result"]))))]
        );
        break;

    case 'delete':
        $bdd->delClub($_POST["currentClub"]);
        break;
}

echo "<script type='text/javascript'> history.go(-2); </script>";
die;
?>