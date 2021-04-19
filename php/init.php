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
    'directionTech' => ['/conseilMaitre','/calendrier','/listeMaitre','/stage','/coupes','/changeGrade','/formation'],
    'vietVoDao' => ['/discipline','/histoire','/fedeMondial','/grandMaitres'],
    'affiliation' => ['/doc','/modalitéAffiliation','/faq','/licenciés','/passeport'],
    'actualite' => ['actualite'],
    'contacts' => ['/contacts','/faq','/personnaliteFede'],
];
$del = ['logOut'];
?>