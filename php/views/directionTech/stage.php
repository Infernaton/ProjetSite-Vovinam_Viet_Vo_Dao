<?php
require_once 'php/init.php';

$eventBefFetch = $db->query('SELECT * FROM event WHERE type LIKE "Stage" Order by id');
$eventComp = $eventBefFetch->fetchAll(PDO::FETCH_ASSOC);

date_default_timezone_set('Europe/Paris');
$date = explode("/",date('Y/m/d', time()));

function dateFR($date){
    //date format yyyy/mm/dd => dd/mm/yyyy
    $date = explode("/", $date);
    return $date[2]."/".$date[1]."/".$date[0];
}
function printStage($index){
    global $eventComp;

    $eventComp[$index]['prerequis']==''?$prerequis='' : $prerequis= 'Prerequis: '.$eventComp[$index]['prerequis'];

    echo '<div class="compet_new" id="t-'.$eventComp[$index]['id'].'">',
    '<h4>'.$eventComp[$index]['title'].'</h4>',
    '<p class="date">'.dateFR($eventComp[$index]['dateDebut']).' - '.dateFR($eventComp[$index]['dateFin']).'</p>',
    '<p class="descr">'.$eventComp[$index]['description'].'</p>',
    '<p class="prerequis">'.$prerequis.'</p>',
    '</div>';
}



?>
<link rel="stylesheet" href="css/directionTech.css">

<div class="container">
    <!-- Titre -->
    <div class="text-center mt-5">
        <h1 class="content-title-blue">Stage</h1>
    </div>
    <!-- Sommaire -->
    <div class="mt-5">
        <br>
    
            <!--Drawer for all season-->
            <div class="inline">
                <div class="dropdown"> </div>
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filtre</button>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <div id="subfilterNamesContainer">
                            <input type="checkbox" value="A" class="default"> Technique</input>
                            <input type="checkbox" value="B" class="default"> Arbitrage</input>
                            <br>
                            <input type="checkbox" value="C" class="default"> Dirigeant</input>
                            <input type="checkbox" value="D" class="default"> Encadrant</input>
                        </div>
                    </div>
                </div>
    
            <div id="season"></div>
           <?php 
            for ($i=0;$i<count($eventComp);$i++){
                $dateDebut= explode("/",$eventComp[$i]['dateDebut']);
                if ($dateDebut[0] < $date[0]){ //Comparaison de l'année
                    printStage($i);
                }
                else if($dateDebut[0] == $date[0]){ 
                    if($dateDebut[1] < $date[1]){//Comparaison du mois
                        printStage($i);
                    }
                    elseif($dateDebut[1] == $date[1]){
                        if($dateDebut[2] < $date[2]) { //Comparaison du jour
                            printStage($i);
                        }
                    }
                }
            }
            ?>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="scripts/internship.js"></script>