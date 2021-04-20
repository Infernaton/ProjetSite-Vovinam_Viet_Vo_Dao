<?php 
//require_once "management/db.php";

session_start();
/*
$req = $db->query('SELECT U.username FROM user as U');
$resultDB = $req->fetchAll(PDO::FETCH_ASSOC);
*/
//The different status
$pages = [
    'home' => ['home'],
    'federation' => ['/federation','/map','/contacts','/lien','/legal'],
    'directionTech' => ['/conseilMaitre','/listeMaitre','/calendrier','/stage','/competition','/changeGrade','/formation'],
    'vietVoDao' => ['/discipline','/histoire','/fedeMondial','/grandMaitres'],
    'affiliation' => ['/doc','/modaliteAffiliation','/faq','/licencies','/passeport'],
    'actualite' => ['actualite'],
    'contacts' => ['/contacts','/faq','/personnaliteFede'],
];
$del = ['logOut'];
?>