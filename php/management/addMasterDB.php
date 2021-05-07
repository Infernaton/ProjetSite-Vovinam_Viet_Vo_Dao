<?php
require_once "../init.php";
/*
var_dump($_POST);
var_dump($_FILES);
*/
$target_dir = "../../assets/img/maitres/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check file size
if ($_FILES["image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
$target_file = str_replace("../","",$target_file);

$_POST["death"] == null? $deathValue = "---" : $deathValue = $_POST["death"];

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

//$req->execute();

//echo "\n Envoie réussi";
//echo "<script type='text/javascript'> history.go(-1); </script>";
die;

?>