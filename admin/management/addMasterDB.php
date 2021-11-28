<?php
require_once 'init.php';

$_POST["biography"] = str_replace(["'",'"'],['\\\'',"\\\""],$_POST["biography"]);
$_POST["function"] = str_replace(["'",'"'],['\\\'',"\\\""],$_POST["function"]);

//If we want to upload a new image for the current Master
if ($_FILES['newImage']['error']==0){
    $hf = new HandleFile("maitres");
    $target_file = $hf->handleImage();
}else {
    //If we want to stay with the current image
    $target_file = $_POST['oldImage'];
}

$_POST["death"] == null? $deathValue = "---" : $deathValue = $_POST["death"];
switch ($_POST['hierarchy']){
    case 'Grand Maître':
        $_POST['hierarchy'] = 'great-master';
        break;
    case 'Maître':
        $_POST['hierarchy'] = 'master';
        break;
    default:
        $_POST["hierarchy"] = str_replace(["'",'"'],['\\\'',"\\\""],$_POST["hierarchy"]);
}
$_POST["function"] = $_POST['belt'].','.$_POST["function"];

switch ($_POST['submit']){
    case 'valid':
        $bdd->addMaster(
            ["name"=>$_POST["name"], 
            "image"=>$target_file, 
            "biography"=>$_POST["biography"], 
            'birthday'=>$_POST["birth"],
            'deathDate'=>$deathValue,
            'function'=>$_POST["function"],
            'hierarchy'=>$_POST["hierarchy"]]
        );
        echo "\n Envoie réussi";
        break;

    case 'modify':
        $bdd->modifyMaster(
            ["id"=>$_POST["currentMaster"],
            "name"=>$_POST["name"], 
            "image"=>$target_file, 
            "biography"=>$_POST["biography"], 
            'birthday'=>$_POST["birth"],
            'deathDate'=>$deathValue,
            'function'=>$_POST["function"],
            'hierarchy'=>$_POST["hierarchy"]]
        );
        break;
    case 'delete':
        $bdd->delMaster($_POST['currentMaster']);
        break;
}

echo "<script type='text/javascript'> history.go(-2); </script>";
die;