<?php 
require_once "management/db.php";

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
    'federation' => ['/federation','/map','/contacts','/lien','/legal'],
    'directionTech' => ['/evenement','/conseilMaitre','/listeMaitre','/changeGrade'],
    'vietVoDao' => ['/discipline','/histoire','/grandMaitres','/fedeMondial'],
    'affiliation' => ['/doc','/modaliteAffiliation','/faq','/licencies','/passeport'],
    'actualite' => ['actualite'],
    'contacts' => ['/contacts','/faq','/personnaliteFede'],
    /*'login' => ['/login','/register'],*/
];
$del = ['logOut'];
?>