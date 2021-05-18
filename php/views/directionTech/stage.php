<?php
require_once 'php/init.php';

$eventBefFetch = $db->query('SELECT * FROM event WHERE type LIKE "Stage" Order by id');
$eventComp = $eventBefFetch->fetchAll(PDO::FETCH_ASSOC);

date_default_timezone_set('Europe/Paris');
$date = explode("/",date('d/m/Y', time()));

function printStage($index){
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

    <div class="container">
        <!-- Titre -->
        <div class="text-center mt-5">
            <h2 class="content-title-yellow">Stages GRT Coupes</h2>
        </div>
        <!-- Sommaire -->
        <div class="container mt-5">
    <br>
    <div class="text-center"><h1 class="content-title-blue">Stage</h1></div>
    
    <!--Drawer for all season-->
    <div class="inline">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Filtre
            </button>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <div id="subfilterNamesContainer">
                <label>
                    <input type="checkbox" value="A" class="default"> Technique
                </label>
                <label>
                    <input type="checkbox" value="B" class="default"> Arbitrage
                </label>
                <br>
                <label>
                    <input type="checkbox" value="C" class="default"> Dirigeant
                </label>
                <label>
                    <input type="checkbox" value="D" class="default"> Encadrant
                </label>
            </div>
        </div>
    </div>
    <div class="container pt-2 my-3 border">
        <div id="season"></div>
        </div>
        <div class="hide">
            <div id="first">
            <?php 
            
            printStage($i);
            ?>
            </div>
         </div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="scripts/internship.js"></script>