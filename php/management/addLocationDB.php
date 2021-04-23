<?php
require_once "../init.php";

//Get the data from the url
$url = parse_url($_SERVER['REQUEST_URI']);
parse_str($url["query"],$result);
var_dump($result);

//Prepare to add the object
$req = $db->prepare('INSERT INTO marqueur (
    titre, description, type, lien
    ) VALUES (:titre, :description, :type, :lien)');


$req->bindValue(':titre' , $result["titre"]); 
$req->bindValue(':enseignant' , $result["enseignant"]);
$req->bindValue('contact' , $result["contact"]);
$req->bindValue(':type', $result["type"]);
$req->bindValue(':lien' , $result["lien"]);
$req->bindValue(':coordonee' , $base64_encode(serialize($coo)));
$coo = explode("," ($result["coordonee"]));

$req->execute();

echo "\n Envoie réussi";
//echo "<script type='text/javascript'> history.go(-1); </script>";
die;
?>