<?php
require_once "../init.php";

//Get the data from the url
$url = parse_url($_SERVER['REQUEST_URI']);
parse_str($url["query"],$result);
var_dump($result);

$result["death"] == null? $deathValue = "---" : $deathValue = $result["death"];

//Prepare to add the object
$req = $db->prepare('INSERT INTO specialist (
    name, image, biography, birthday, deathDate
    ) VALUES (:name, :image, :biography, :birthday, :deathDate)');

$req->bindValue(':name' , $result["name"]); 
$req->bindValue(':image' , $result["image"]);
$req->bindValue(':biography', $result["biography"]);
$req->bindValue(':birthday' , $result["birth"]);
$req->bindValue(':deathDate' , $deathValue);

$req->execute();

echo "\n Envoie réussi";
//echo "<script type='text/javascript'> history.go(-2); </script>";
die;
?>