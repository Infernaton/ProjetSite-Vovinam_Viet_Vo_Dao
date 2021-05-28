<?php
require_once 'php/init.php';

$eventBefFetch = $db->query('SELECT * FROM event WHERE type LIKE "Compétition" Order by id');
$eventComp = $eventBefFetch->fetchAll(PDO::FETCH_ASSOC);
$eventBefFetch2 = $db->query('SELECT * FROM event WHERE type LIKE "Stage" Order by id');
$eventComp2 = $eventBefFetch2->fetchAll(PDO::FETCH_ASSOC);

date_default_timezone_set('Europe/Paris');
$date = explode("/",date('Y/m/d', time()));

function dateFR($date){
    //date format yyyy/mm/dd => dd/mm/yyyy
    $date = explode("/", $date);
    return $date[2]."/".$date[1]."/".$date[0];
}

function printTournament($index){
    global $eventComp;
    
    $eventComp[$index]['prerequis']==''?$prerequis='' : $prerequis= 'Prerequis: '.$eventComp[$index]['prerequis'];

    echo '<div class="compet_new" id="t-'.$eventComp[$index]['id'].'">',
    '<h4>'.$eventComp[$index]['title'].'</h4>',
    '<p class="date">'.dateFR($eventComp[$index]['dateDebut']).' - '.dateFR($eventComp[$index]['dateFin']).'</p>',
    '<p class="descr">'.$eventComp[$index]['description'].'</p>',
    '<p class="prerequis">'.$prerequis.'</p>',
    '</div>';
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

<div class="container mt-5">
    <br>
    <div class="text-center"><h1 class="content-title-blue">Tous les évènements</h1></div>

    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#compet" aria-expanded="false" aria-controls="collapseExample">
    Compétition
    </button>
    

    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#stages" aria-expanded="false" aria-controls="collapseExample">
        Stages
    </button>

    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#forma" aria-expanded="false" aria-controls="collapseExample">
        Formations
    </button>
    
   

    <div class="collapse" id="compet">
        
        <br>
        <div class="text-center"><h1 class="content-title-blue">Compétitions</h1></div>
        
    
        <div class="inline">
            <a class="btn btn-outline-secondary" onclick="multiCollapseButton('season', 'first')">A venir</a>
            <a class="btn btn-outline-secondary" onclick="multiCollapseButton('season', 'second')">Précédente compétitions</a>
              
        </div>
            
                <div id="season"></div>
            </div>
            <div class="hide">
                <div id="first">
                <h3> Compétitions à venir</h3>
                <?php 
                for ($i=0;$i<count($eventComp);$i++){
                    $dateDebut= explode("/",$eventComp[$i]['dateDebut']);
                    if ($dateDebut[0] > $date[0]){ //Comparaison de l'année
                        printTournament($i);
                    }
                    else if($dateDebut[0] == $date[0]){ 
                        if($dateDebut[1] > $date[1]){//Comparaison du mois
                            printTournament($i);
                        }
                        elseif($dateDebut[1] == $date[1]){
                            if($dateDebut[2] >= $date[2]) { //Comparaison du jour
                                printTournament($i);
                            }
                        }
                    }
                }
                ?>
                </div>
                <div id="second">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="deroulantb" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Année</button>
                            <div class="dropdown-menu" aria-labelledby="deroulantb">
                                <button class="dropdown-item" type="button"onclick="selectYear('2016-2020')">2016-2020</button>
                                <button class="dropdown-item" type="button"onclick="selectYear('2011-2015')">2011-2015</button>
                                <button class="dropdown-item" type="button"onclick="selectYear('2005-2010')">2005-2010</button>
                                <button class="dropdown-item" type="button"onclick="selectYear('2000-2004')">2000-2004</button>
                            </div>
                    </div>
                    <h3>Précédentes compétitions</h3>
                    <div id="compete">
                    <?php 
                    for ($i=0;$i<count($eventComp);$i++){
                        $dateDebut= explode("/",$eventComp[$i]['dateDebut']);
                        if ($dateDebut[0] < $date[0]){ //Comparaison de l'année
                            printTournament($i);
                        }
                        else if($dateDebut[0] == $date[0]){ 
                            if($dateDebut[1] < $date[1]){//Comparaison du mois
                                printTournament($i);
                            }
                            elseif($dateDebut[1] == $date[1]){
                                if($dateDebut[2] < $date[2]) { //Comparaison du jour
                                    printTournament($i);
                                }
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    
    <div class="collapse" id="stages">
    <div class="container pt-2 my-3 border">
    <div class="text-center"><h1 class="content-title-blue">Stage</h1></div>
    
    
    <div class="inline">
        <div class="dropdown"> </div>
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Filtre
            </button>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <div id="subfilterNamesContainer">
                <label>
                    <input type="checkbox" value="A" class="default"> Technique</input>
                </label>
                <label>
                    <input type="checkbox" value="B" class="default"> Arbitrage</input>
                </label>
                <br>
                <label>
                    <input type="checkbox" value="C" class="default"> Dirigeant</input>
                </label>
                <label>
                    <input type="checkbox" value="D" class="default"> Encadrant</input>
                </label>
            </div>
        </div>
    </div>
    
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
<div class="container pt-2 my-3 border">
    <div class="collapse" id="forma">
    <div class="inline">
    <div class="text-center mt-5">
            <h2 class="content-title-yellow">Formations</h2>

    </div>
    
        <div>
            <h3><span class="ml-3">Formations des Maîtres</span></h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate 
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
                sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div>
            <h3><span class="ml-3">Formations des Cadres</span></h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate 
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
                sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div>
            <h3><span class="ml-3">Séminaires</span></h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate 
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
                sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>   
    </div>        
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="scripts/internship.js"></script>