<?php
require_once "init.php";

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
        $request = 'DELETE FROM `marqueur` WHERE `id` ='.(int)$_POST['currentClub'];
        $req = $db->prepare($request);
        $req->execute();
        $req = $db->query('SELECT id FROM marqueur WHERE id > '.(int)$_POST['currentClub']);
        $clubs = $req->fetchAll(PDO::FETCH_ASSOC);
        foreach ($clubs as $club){
            $request = 'UPDATE marqueur SET'.' id="'.((int)$club['id']-1).'" WHERE id='.(int)$club['id'].'';
            $req = $db->prepare($request);
            $req->execute();
        }
        $db->prepare('ALTER TABLE marqueur AUTO_INCREMENT ='.$club['id'])->execute();
        break;
}

//echo "<script type='text/javascript'> history.go(-2); </script>";
die;
?>