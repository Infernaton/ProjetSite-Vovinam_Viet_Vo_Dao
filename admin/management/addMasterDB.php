<?php
require_once 'init.php';

//var_dump($_POST);
//var_dump($_FILES);

$_POST["biography"] = str_replace(["'",'"'],['\\\'',"\\\""],$_POST["biography"]);
$_POST["function"] = str_replace(["'",'"'],['\\\'',"\\\""],$_POST["function"]);

//If we want to upload a new image for the current Master
if ($_FILES['newImage']['error']==0){
    //If there no new file, $_FILES['newImage']['error'] = 4;
    $target_dir = getSaveDirr('forDB')."maitres/";
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

switch ($_POST['submit']){
    case 'valid':
        //Prepare to add the object
        $req = $db->prepare('INSERT INTO specialist (
            name, pictureProfile, biographyShort, birthday, deathDate, function, hierarchy
            ) VALUES (:name, :image, :biography, :birthday, :deathDate, :function, :hierarchy)');

        $req->bindValue(':name' , $_POST["name"]);
        $req->bindValue(':image' , $target_file);
        $req->bindValue(':biography', $_POST["biography"]);
        $req->bindValue(':birthday' , $_POST["birth"]);
        $req->bindValue(':deathDate' , $deathValue);
        $req->bindValue(':function' , $_POST["function"]);
        $req->bindValue(':hierarchy' , $_POST["hierarchy"]);

        $req->execute();
        echo "\n Envoie réussi";
        break;

    case 'modify':
        $request = 'UPDATE specialist SET'.' name="'.$_POST["name"].'", pictureProfile="'.$target_file.'", birthday="'.$_POST["birth"].'", deathDate="'.$deathValue.'", function="'.$_POST["function"].'", biographyShort="'.$_POST["biography"].'", hierarchy="'.$_POST["hierarchy"].'" WHERE id='.(int)$_POST['currentMaster'].'';
        //var_dump($request);
        $req = $db->prepare($request);
        $req->execute();
        break;
    case 'delete':
        $request = 'DELETE FROM `specialist` WHERE `id` ='.(int)$_POST['currentMaster'];
        $db->prepare($request)->execute();
        $req = $db->query('SELECT id FROM specialist WHERE id > '.(int)$_POST['currentMaster']);
        $masters = $req->fetchAll(PDO::FETCH_ASSOC);
        foreach ($masters as $master){
            $request = 'UPDATE specialist SET'.' id="'.((int)$master['id']-1).'" WHERE id='.(int)$master['id'].'';
            $req = $db->prepare($request);
            $req->execute();
        }
        $incr = $db->query('SELECT `AUTO_INCREMENT` FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = "vietvodao" AND TABLE_NAME = "specialist"')->fetch(PDO::FETCH_ASSOC);
        if (isset($master['id'])) {
            $db->prepare('ALTER TABLE specialist AUTO_INCREMENT ='.$master['id'])->execute();
        }else {
            $db->prepare('ALTER TABLE specialist AUTO_INCREMENT ='.$incr['AUTO_INCREMENT']-1)->execute();
        }
        break;
}

echo "<script type='text/javascript'> history.go(-2); </script>";
die;

?>