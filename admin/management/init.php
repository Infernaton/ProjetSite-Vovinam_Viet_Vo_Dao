<?php 
//Fichier qui repertories toutes choses qui ont besoin d'être modifiées facilement, comme le répertoires d'images où des valeurs
require_once "db.php";
require_once "popUpAdmin.php";
require_once "handleImage.php";

session_start();

$bdd= tryConnection(); //La Base de donnée

function tryConnection(){
    $configBdd = [
        ["bddType"=>"mysql", "bddName"=>"vietvodao", "bddHost"=>"localhost","bddUser"=>"root", "bddPassword"=>""],
        ["bddType"=>"mysql", "bddName"=>"vxjgaxtviet", "bddHost"=>"vxjgaxtviet.mysql.db", "bddUser"=>"vxjgaxtviet", "bddPassword"=>"vOv1nAmVo"]
    ];

    foreach ($configBdd as $config){
        try{
            $bdd = Db::getInstance($config["bddType"], $config["bddName"], $config["bddHost"], $config["bddUser"], $config["bddPassword"]);
            if ($bdd->getIsBddConnect()){
                return $bdd;
            }
        }catch(Exception $e){
        }
    }
    return null;
}

function getSaveDirr($target){
    //Dossier où sont stockées les images --A modifier si besoin--
    $target_dirr = '../../assets/img/';
    // Le '../' signifie que l'on retourne 1 fois en arrière dans la navigation des dossiers
    switch ($target){
        case 'forDB':
            return $target_dirr;
            break;
        case 'forPreview':
            $toReturn = '';
            for ($i=1;$i<substr_count($target_dirr,'../'); $i++){
                $toReturn .= "../";
            }
            return $toReturn;
            break;
    }  
}

function getAccessToken() {
    return 'pk.eyJ1IjoieWFuaXNqIiwiYSI6ImNrbHZlajB4ajB2dGUzMW13cmllNGc3YzkifQ.4dAbWneZCPCv8o2MidDbyQ';
}
function getSliderDirr() {
    return '../assets/img/caroussel/';
}
function getAccessAdmin() {
    return @file_get_contents('management/mdp.txt');
}
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
//Pouvoir modifer les symboles de style dans les inputs
function translateToInput($string){
    //Edit the response to make it easy to design in edit mode
    $string = str_replace("<br>", "\r\n", $string);
    $string = str_replace("<mark class='bg-danger'>", "[", $string);
    $string = str_replace("</mark>", "]", $string); 
    //To delete the <a> tag to the link
    $string = str_replace([substr($string, strpos($string,"<a"), strpos($string, "\">")-strpos($string,"<a")),"</a>", "\">"], "", $string);

    return str_replace(["<b>","</b>", "<i>", "</i>", "<ins>", "</ins>", "<del>", "</del>"], ["**","**", "*", "*", "_", "_", "--", "--"], $string);
}
?>