<?php 
require_once "management/db.php";

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

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .');';
    echo '</script>';
}
function getAccessToken() {
    return 'pk.eyJ1IjoieWFuaXNqIiwiYSI6ImNrbHZlajB4ajB2dGUzMW13cmllNGc3YzkifQ.4dAbWneZCPCv8o2MidDbyQ';
}
function transformToBelt($data,$size){
    echo '<div class="text-center">';
    for ($i=0; $i<count($data); $i+=4){
        $pathBelt = "assets/img/ceintures/";
        $num = $data[2+$i][0]; //The number of the belt

        //Find the color
        switch (strtolower($data[1+$i])){
            case 'rouge':
                $color = 'R';
                //Test for the basic red belt
                if ($num == '('){
                    $num = 0;
                    $i=-2;
                }
                break;
            case 'jaune':
                $color = 'J';
                break;
            case 'noire';
            case 'noir' :
                $color = 'N';
                if ($num == "1"){
                    if ($data[2+$i][1]== '0'){
                        $num = '10';
                    }
                }
                break;
            case 'bleue';
            case 'bleu' :
                $color = 'B';
                break;
            case 'blanche':
                $color = 'Bl';
                $num = 'S';
                break;
            default:
                $color = '';
        }
        $belt = "C".$color.$num.".png";
        //var_dump($belt);
        echo '<img src="'.$pathBelt.$belt.'" height="'.$size.'">';
    }
    echo '</div>';
}

//The different status
$pages = [
    'home' => ['home'],
    'actualite' => ['actualite'],
    'directionTech' => ['/evenement','/conseilMaitre','/listeMaitre','/changeGrade'],
    'vietVoDao' => ['/discipline','/histoire','/grandMaitres','/fedeMondial'],
    'affiliation' => ['/doc','/modaliteAffiliation','/faq','/licencies','/passeport'],
    'federation' => ['/federation','/map','/contacts','/lien','/legal'],
    'contacts' => ['/contacts','/faq','/personnaliteFede'],
    /*'login' => ['/login','/register'],*/
];
$del = ['logOut'];
?>