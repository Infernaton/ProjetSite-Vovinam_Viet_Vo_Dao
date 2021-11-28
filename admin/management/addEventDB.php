<?php
require_once "init.php";

if ($_FILES['newImage']['error']==0){
    $hf = new HandleFile("events");
    $target_file = $hf->handleImage();
}else {
    //If we want to stay with the current image
    $target_file = $_POST['oldImage'];
}

//Just in case we have to stock a date with the form dd/mm/yyyy
$_POST['debut'] = str_replace("-","/",$_POST['debut']);
$_POST['fin'] = str_replace("-","/",$_POST['fin']);

//var_dump($_POST);

switch ($_POST['submit']){
    case 'valid':
        $bdd->addEvent(
            ["title"=>$_POST["title"], 
            "type"=>$_POST["event"], 
            "description"=>translateToHTML($_POST["description"]), 
            'dateDebut'=>$_POST["debut"],
            'dateFin'=>$_POST["fin"],
            'image'=>$target_file,
            "prerequis"=>"",
            "objectif"=>null]
        );
        echo "\n Envoie réussi";
        break;

    case 'modify':
        $bdd->modifyEvent(
            ["id"=>$_POST['currentEvent'],
            "title"=>$_POST["title"], 
            "type"=>$_POST["event"], 
            "description"=>translateToHTML($_POST["description"]), 
            'dateDebut'=>$_POST["debut"],
            'dateFin'=>$_POST["fin"],
            'image'=>$target_file,
            "prerequis"=>"",
            "objectif"=>null]
        );
        break;

    case 'delete':
        break;
}

echo "<script type='text/javascript'> history.go(-2); </script>";
die;
?>