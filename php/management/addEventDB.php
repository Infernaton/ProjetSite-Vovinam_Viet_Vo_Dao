<?php
require_once "../init.php";

//Get the data from the url
$url = parse_url($_SERVER['REQUEST_URI']);
parse_str($url["query"],$result);
var_dump($result);

//Prepare to add the object
$req = $db->prepare('INSERT INTO event (
    type, title, description, dateDebut, dateFin, function
    ) VALUES (:type, :title, :description, :dateDebut, :dateFin, :prerequis)');

$req->bindValue(':type' , $result["type"]); 
$req->bindValue(':title' , $result["title"]);
$req->bindValue(':description', $result["description"]);
$req->bindValue(':dateDebut' , $result["dateDebut"]);
$req->bindValue(':dateFin' , $result["dateFin"]);
$req->bindValue(':prerequis' , $result["prerequis"]);

$req->execute();

echo "\n Envoie réussi";
echo "<script type='text/javascript'> history.go(-1); </script>";
die;
?>