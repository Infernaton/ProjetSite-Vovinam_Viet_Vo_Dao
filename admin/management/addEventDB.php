<?php
require_once "init.php";
function str_replace_first($from, $to, $content){
    $from = '/'.preg_quote($from, '/').'/';
    return preg_replace($from, $to, $content, 1);
}
//Transformer des strings ressemblant à des liens en liens hypertextes
function plainToHyperlinks($string){
    $url = '~(?:(https?)://([^\s<]+)|(www\.[^\s<]+?\.[^\s<]+))(?<![\.,:])~i';
    return preg_replace($url, '<a href="$0" target="_blank">$0</a>', $string);
}
//Transformer les symboles de styles vers des balises HTML
function translateToHTML($string){
    //Edit the response to make it easy to design in edit mode
    $string = str_replace("\r\n","<br>", $string);
    $string = str_replace("[", "<mark class='bg-danger'>", $string);
    $string = str_replace("]", "</mark>", $string);

    //Count the number of symbole there is in the text
    $uses = [substr_count($string, "**")/2, substr_count($string, "*")/2, substr_count($string, "_")/2, substr_count($string, "--")/2, substr_count($string, "http")];

    for ($a=0; $a < $uses[0]; $a++) {
        $string = str_replace_first("**", "<b>", $string);
        $string = str_replace_first("**", "</b>", $string);
    }
    for ($a=0; $a < $uses[1]; $a++) {
        $string = str_replace_first("*", "<i>", $string);
        $string = str_replace_first("*", "</i>", $string);
    }
    for ($a=0; $a < $uses[2]; $a++) {
        $string = str_replace_first("_", "<ins>", $string);
        $string = str_replace_first("_", "</ins>", $string);
    }
    for ($a=0; $a < $uses[3]; $a++) {
        $string = str_replace_first("--", "<del>", $string);
        $string = str_replace_first("--", "</del>", $string);
    }
    for ($a=0; $a < $uses[4]; $a++) {
        $string = plainToHyperlinks($string);
    }
    return $string;
}

if ($_FILES['newImage']['error']==0){
    //If there no new file, $_FILES['newImage']['error'] = 4;
    $target_dir = getSaveDirr('forDB')."events/";
    $target_file = $target_dir . basename($_FILES["newImage"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["newImage"]["tmp_name"]);
        if($check !== false) {
            //echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check file size
    if ($_FILES["newImage"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["newImage"]["tmp_name"], $target_file)) {
            //echo "The file ". htmlspecialchars( basename( $_FILES["newImage"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    $target_file = str_replace("../","",$target_file);
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
        //Prepare to add the object
        $req = $db->prepare('INSERT INTO `event` (
            type, title, description, dateDebut, dateFin, prerequis, objectif, image
            ) VALUES (:type, :title, :description, :dateDebut, :dateFin, :prerequis, :objectif, :image)');

        $req->bindValue(':type' , $_POST["event"]); 
        $req->bindValue(':title' , $_POST["title"]);
        $req->bindValue(':description', translateToHTML($_POST["description"]));
        $req->bindValue(':dateDebut' , $_POST["debut"]);
        $req->bindValue(':dateFin' , $_POST["fin"]);
        $req->bindValue(':prerequis' , $_POST["prerequis"]);
        $req->bindValue(':objectif' , $_POST["objectif"]);
        $req->bindValue(':image' , $target_file);

        $req->execute();
        echo "\n Envoie réussi";
        break;

    case 'modify':
        $request = 'UPDATE event SET'.' type="'. $_POST["event"].'", title="'.$_POST["title"].'", description="'.translateToHTML($_POST["description"]).'", dateDebut="'.$_POST["debut"].'", dateFin="'.$_POST["fin"].'", prerequis="'.$_POST["prerequis"].'", objectif="'.$_POST["objectif"].'", image="'.$target_file.'" WHERE id='.(int)$_POST['currentEvent'].'';
        $req = $db->prepare($request);
        $req->execute();
        break;

    case 'delete':
        break;
}

echo "<script type='text/javascript'> history.go(-2); </script>";
die;
?>