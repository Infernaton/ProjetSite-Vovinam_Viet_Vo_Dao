<?php
require_once "../init.php";

//Get the data from the url
$url = parse_url($_SERVER['REQUEST_URI']);
parse_str($url["query"],$result);
//var_dump($result);

$result["death"] == null? $deathValue = "---" : $deathValue = $result["death"];

//Prepare to add the object
$req = $db->prepare('INSERT INTO specialist (
    name, pictureProfile, biographyShort, birthday, deathDate, pa_function, curr_function
    ) VALUES (:name, :image, :biography, :birthday, :deathDate, :pa_function, :curr_function)');

$req->bindValue(':name' , $result["name"]);
$req->bindValue(':image' , $result["image"]);
$req->bindValue(':biography', $result["biography"]);
$req->bindValue(':birthday' , $result["birth"]);
$req->bindValue(':deathDate' , $deathValue);
$req->bindValue(':pa_function' , $result["paFunction"]);
$req->bindValue(':curr_function' , $result["currFunction"]);

$req->execute();

//echo "\n Envoie réussi";
echo "<script type='text/javascript'> history.go(-1); </script>";
die;
?>