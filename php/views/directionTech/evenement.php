<?php
require_once 'php/init.php';
$selectedYear = 2020;
if($_POST){
    $selectedYear = $_POST['newYear'];
}
$req = $db->query('SELECT * FROM event WHERE dateDebut like "'.$selectedYear.'%" Order by `dateDebut` DESC');
$eventAll = $req->fetchAll(PDO::FETCH_ASSOC);

date_default_timezone_set('Europe/Paris');
$date = explode("/",date('Y/m/d', time()));

function dateFR($date){
    //date format yyyy/mm/dd => dd/mm/yyyy
    $months = cal_info(0)['abbrevmonths'];
    $date = explode("/", $date);
    return "<span class='day'>".$date[2]."</span> <span class='month'>".$months[(int)$date[1]]."</span> <br>".$date[0];
}
function printEvent($currentEvent){
    $currentEvent['prerequis']==''?$prerequis='' : $prerequis= 'Prerequis: '.$currentEvent['prerequis'];

    echo '<div class="compet_new" id="t-'.$currentEvent['id'].'">',
    '<div class="row">',
    '<div class="col-1"><p class="date text-center">'.dateFR($currentEvent['dateDebut']).'</p></div>',
    '<div class="col-11"><h4>'.$currentEvent['title'].'</h4>',
    '<p class="descr">'.$currentEvent['description'].'</p>',
    '<p class="prerequis">'.$prerequis.'</p>',
    '</div></div></div>';
}
?>

<link rel="stylesheet" href="css/directionTech.css">
<div class="container">
    <div class="text-center">
        <h1 class="content-title-blue">Tous les évènements</h1>
    </div>
    <div class="row">
        <div id="filter" class="col-12 col-md-3">
            <button class="btn btn-primary" type="button">filtre</button>
        </div>
        <div id="content" class="col-12 col-md-9">
            <div id="date" class="selectYear">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="btn-toolbar">
                        <div class="btn-group">
                            <button id="prev" name="newYear" type="submit" value="<?php echo $selectedYear-1?>" class="btn btn-secondary">← <?php echo $selectedYear-1?></button></a>
                            <button id="current" type="submit" class="btn btn-light"><?php echo $selectedYear?></button>
                            <button id="next" name="newYear" type="submit" value="<?php echo $selectedYear+1?>" class="btn btn-secondary"><?php echo $selectedYear+1?>→</button>
                        </div>
                    </div>
                </form>
            </div>
            <?php
                for ($i=0; $i < count($eventAll); $i++) {
                    printEvent($eventAll[$i]);
                }
            ?>
        </div>
    </div>
</div>
<!--
<div class="container mt-5">
    <br>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#compet" aria-expanded="false" aria-controls="collapseExample">Compétition</button>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#stages" aria-expanded="false" aria-controls="collapseExample">Stages</button>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#forma" aria-expanded="false" aria-controls="collapseExample">Formations</button>

    <div class="collapse" id="compet">
        <br>
        <div class="text-center">
            <h1 class="content-title-blue">Compétitions</h1>
        </div>
        
        <div class="inline">
            <a class="btn btn-outline-secondary" onclick="multiCollapseButton('season', 'first')">A venir</a>
            <a class="btn btn-outline-secondary" onclick="multiCollapseButton('season', 'second')">Précédente compétitions</a>
        </div>
            
        <div id="season"></div>
            
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
        <div class="text-center">
            <h1 class="content-title-blue">Stage</h1>
        </div>
        <div class="inline">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filtre</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <div id="subfilterNamesContainer">
                            <input type="checkbox" value="A" class="default"> Technique</input>
                            <input type="checkbox" value="B" class="default"> Arbitrage</input>
                            <input type="checkbox" value="C" class="default"> Dirigeant</input>
                            <input type="checkbox" value="D" class="default"> Encadrant</input>
                        </div>
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
   

    <div class="collapse" id="forma">
    <br>
        <div class="text-center"><h1 class="content-title-blue">Formations</h1></div>
        
    
        <div class="inline">
            <a class="btn btn-outline-secondary" onclick="multiCollapseButton('season', 'first')">A venir</a>
            <a class="btn btn-outline-secondary" onclick="multiCollapseButton('season', 'second')">Précédente compétitions</a>
              
        </div>
            
                <div id="season"></div>
            </div>
            <div class="hide">
                <div id="first">
                <h3> Formations à venir</h3>
                <?php 
                for ($i=0;$i<count($eventComp);$i++){
                    $dateDebut= explode("/",$eventComp[$i]['dateDebut']);
                    if ($dateDebut[0] > $date[0]){ //Comparaison de l'année
                        printFormation($index);
                    }
                    else if($dateDebut[0] == $date[0]){ 
                        if($dateDebut[1] > $date[1]){//Comparaison du mois
                            printFormation($index);
                        }
                        elseif($dateDebut[1] == $date[1]){
                            if($dateDebut[2] >= $date[2]) { //Comparaison du jour
                                printFormation($index);
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
                    <h3>Précédentes Formations</h3>
                    <div id="format">
                    <?php 
                    for ($i=0;$i<count($eventComp);$i++){
                        $dateDebut= explode("/",$eventComp[$i]['dateDebut']);
                        if ($dateDebut[0] < $date[0]){ //Comparaison de l'année
                            printFormation($index);
                        }
                        else if($dateDebut[0] == $date[0]){ 
                            if($dateDebut[1] < $date[1]){//Comparaison du mois
                                printFormation($index);
                            }
                            elseif($dateDebut[1] == $date[1]){
                                if($dateDebut[2] < $date[2]) { //Comparaison du jour
                                    printFormation($index);
                                }
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>       
</div>-->

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="scripts/internship.js"></script>