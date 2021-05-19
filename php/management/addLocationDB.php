<?php
require_once "../init.php";

var_dump($_POST);

switch ($_POST["submit"]){
    case 'valid':
        //Prepare to add the object
        $req = $db->prepare('INSERT INTO marqueur (
            titre, enseignant, contact, club_comite, lien, coordonee, Comite
            ) VALUES (:titre, :enseignant, :contact, :club_comite, :lien, :coordonee, :Comite)');

        $req->bindValue(':titre' , $_POST["titre"]); 
        $req->bindValue(':enseignant' , $_POST["enseignant"]);
        $req->bindValue(':contact' , $_POST["contact"]);
        $req->bindValue(':club_comite', "club");
        $req->bindValue(':lien' , $_POST["lien"]);
        $req->bindValue(':Comite' , $_POST["comiteValue"]);

        $coo = explode(",", ($_POST["result"]));
        $req->bindValue(':coordonee' , base64_encode(serialize($coo)));

        $req->execute();        
        echo "\n Envoie réussi";
        break;
    
    case 'modify':
        $coo = base64_encode(serialize(explode(",", ($_POST["result"]))));
        $request = 'UPDATE marqueur SET'.' titre="'.$_POST['titre'].'", enseignant="'.$_POST['enseignant'].'", contact="'.$_POST['contact'].'", lien="'.$_POST['lien'].'", coordonee="'.$coo.'", Comite="'.$_POST['comiteValue'].'" '.'WHERE id='.(int)$_POST['currentClub'].'';
        $req = $db->prepare($request);
        $req->execute();
        break;

    case 'delete':
        break;
}

echo "<script type='text/javascript'> history.go(-1); </script>";
die;
?>