<?php
require_once 'php/init.php';

$eventBefFetch = $db->query('SELECT * FROM event WHERE type LIKE "Compétition" Order by id');
$eventComp = $eventBefFetch->fetchAll(PDO::FETCH_ASSOC);

date_default_timezone_set('Europe/Paris');
$date = explode("/",date('d/m/Y', time()));

function printTournament($index){
    global $eventComp;
    
    $eventComp[$index]['prerequis']==''?$prerequis='' : $prerequis= 'Prerequis: '.$eventComp[$index]['prerequis'];

    echo '<div class="compet_new" id="t-'.$eventComp[$index]['id'].'">',
    '<h4>'.$eventComp[$index]['title'].'</h4>',
    '<p class="date">'.$eventComp[$index]['dateDebut'].' - '.$eventComp[$index]['dateFin'].'</p>',
    '<p class="descr">'.$eventComp[$index]['description'].'</p>',
    '<p class="prerequis">'.$prerequis.'</p>',
    '</div>';
}

?>

<link rel="stylesheet" href="css/directionTech.css">

<div class="container mt-5">
    <br>
    <div class="text-center"><h1 class="content-title-blue">Compétitions</h1></div>
    
    <!--Drawer for all season-->
    <div class="inline">
        <a class="btn btn-outline-secondary" onclick="multiCollapseButton('season', 'first')">A venir</a>
        <a class="btn btn-outline-secondary" onclick="multiCollapseButton('season', 'second')">Précédente compétitions</a>
            <!--Apply the information from the button we push-->
    </div>
    <div class="container pt-2 my-3 border">
        <div id="season"></div>
        </div>
        <div class="hide">
            <div id="first">
            <h3> Compétitions à venir</h3>
            <?php 
            for ($i=0;$i<count($eventComp);$i++){
                $dateDebut= explode("/",$eventComp[$index]['dateDebut']);
                if ($dateDebut[2] >= $date[2]){ //Comparaison de l'année
                    if ($dateDebut[1] >= $date[1]){ //Comparaison du mois
                        if($dateDebut[0] > $date[0]) { //Comparaison du jour
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
                    $dateDebut= explode("/",$eventComp[$index]['dateDebut']);
                    if ($dateDebut[2] <= $date[2]){ //Comparaison de l'année
                        if ($dateDebut[1] <= $date[1]){ //Comparaison du mois
                            if($dateDebut[0] < $date[0]) { //Comparaison du jour
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
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="scripts/internship.js"></script>