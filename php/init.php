<?php 
require_once "management/db.php";

session_start();

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .');';
    echo '</script>';
}

//The different status
$pages = [
    'home' => ['home'],
    'federation' => ['/federation','/map','/contacts','/lien','/legal'],
    'directionTech' => ['/conseilMaitre','/listeMaitre','/calendrier','/stage','/competition','/changeGrade','/formation'],
    'vietVoDao' => ['/discipline','/histoire','/grandMaitres','/fedeMondial'],
    'affiliation' => ['/doc','/modaliteAffiliation','/faq','/licencies','/passeport'],
    'actualite' => ['actualite'],
    'contacts' => ['/contacts','/faq','/personnaliteFede'],
    'login' => ['/login','/register'],
    'admin' => ['/admin','/addMaster','/addClub','/event'],
];
$del = ['logOut'];
?>