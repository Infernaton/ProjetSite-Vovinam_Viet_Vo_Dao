<?php
/*
--- Popup quand on clique, image
--- saut de ligne pour description
--- couleur pour type d'event
--+ couleur par event
tri par trimestre
--- passage de grade pour nouvel event => Détéction automatique de nouveau type d'event
*/
require_once 'php/init.php';
date_default_timezone_set('Europe/Paris');
$today = ["2021","02","12"];
$today = explode("/",date('Y/m/d', time()));

$req = $db->query('SELECT DISTINCT type FROM event');
$eventType = $req->fetchAll(PDO::FETCH_ASSOC);  //To know all the type of event, if a new appear, we don't have to add it manually

$selectedYear = $today[0]; //On prend l'année
$someFilter = [];
//var_dump($_POST);
//On ajoute des requêtes SQL dans le cas où un tri est demandé
if($_POST){
    if (isset($_POST['sortYear'])){
        //Entre "sortAll pour faire apparaitre tous les events ou "sortByYear" pour un classement par année
        if ($_POST['sortYear']=="sortAll"){
            $selectedYear = null;
        }else {
            if (isset($_POST['newYear'])){
                $selectedYear = $_POST['newYear'];  //l.97 la décision de l'année
            }
        }
        array_push($someFilter, 'dateDebut like "'.$selectedYear.'%"');
    }
    if (isset($_POST['type'])){
        foreach ($_POST['type'] as $key => $value) {
            foreach($eventType as $type){
                $type = $type['type'];
                $idType = substr(strtolower($type), 0, 4);
                if($idType == $key){
                    array_push($someFilter, 'type like "'.$type.'"');
                    break;
                }
            }
        }
    }
}
//var_dump($someFilter);
//On modifie la requete SQL en fonction des résultat du tri
if (count($someFilter)>0){
    $allFilter = 'WHERE (';
    for ($i=0; $i< count($someFilter); $i++){
        $allFilter .= $someFilter[$i];
        if (isset($someFilter[$i+1])){
            if (explode(" ",$someFilter[$i])[0] == explode(" ",$someFilter[$i+1])[0]){
                $allFilter .= ' OR ';
            }else {
                $allFilter .= ') AND (';
            }
        }
    }
    $allFilter .= ')';
}else {
    $allFilter = 'WHERE dateDebut like "'.$selectedYear.'%"';
}
$request = 'SELECT * FROM event '.$allFilter.' Order by `dateDebut` DESC';
//var_dump($request);
$req = $db->query($request);
$eventAll = $req->fetchAll(PDO::FETCH_ASSOC);

//var_dump($eventType);
//var_dump($eventAll);

function dateFR($date,$seeYear = False){
    //date format yyyy/mm/dd => dd/mm/yyyy
    $months = cal_info(0)['abbrevmonths'];
    $date = explode("/", $date);
    if ($seeYear){
        return "<span class='day'>".$date[2]."</span> <span class='month'>".$months[(int)$date[1]]."</span> <br>".$date[0];
    }else{
        return "<span class='day'>".$date[2]."</span> <span class='month'>".$months[(int)$date[1]]."</span> <br>";
    }
}
function dateComparison($date1,$date2){
    $isDate1_inf_Date2 = false;
    if ($date1[0] < $date2[0]){ //Comparaison de l'année
        $isDate1_inf_Date2 = true;
    }
    else if($date1[0] == $date2[0]){ 
        if($date1[1] < $date2[1]){//Comparaison du mois
            $isDate1_inf_Date2 = true;
        }
        elseif($date1[1] == $date2[1]){
            if($date1[2] < $date2[2]) { //Comparaison du jour
                $isDate1_inf_Date2 = true;
            }
        }
    }
    return $isDate1_inf_Date2;
}

function printEvent($currentEvent){
    global $_POST, $today;
    $currentEvent['prerequis']==''? $prerequis='' : $prerequis= 'Prerequis: '.$currentEvent['prerequis'];

    /*background-image: url(<?php echo $currentEvent['image']?>)*/
    ?>
    <div class="event_new <?php echo substr(strtolower($currentEvent['type']), 0, 4);?>" id="t-<?php echo $currentEvent['id'] ?>" >
        <div class="row">
            <div class="col col-xl-1 padding-right-0">
                <?php 
                dateComparison(explode("/",$currentEvent['dateDebut']),$today) ? $datePast='past-date' : $datePast='';
                
                echo '<p class="date '.$datePast.' text-center">';
                        if(isset($_POST['sortYear'])){
                            if ($_POST['sortYear']=="sortAll"){
                                echo dateFR($currentEvent['dateDebut'], true);
                            }else {
                                echo dateFR($currentEvent['dateDebut']);
                            }
                        }else {
                            echo dateFR($currentEvent['dateDebut']);
                        }
                    ?>
                </p>
            </div>
            <div class="col col-sm-3 col-md-4 col-xl-2">
                <img class="img_fill" src="<?php echo $currentEvent['image'] ?>" alt="evt-Img" data-toggle="modal" data-target="#e-<?php echo $currentEvent['id'] ?>">
                
            </div>
            <div class="col-12 col-sm-7 col-md-6 col-xl-9 data">
                <div class="d-flex justify-content-between">
                    <h4><?php echo $currentEvent['title']?></h4>
                    <p><?php echo $currentEvent['type'] ?></p>
                </div>
                <p class="descr"><?php echo str_replace("\r\n", "<br>", $currentEvent['description'])?></p>
                <p class="prerequis"><?php echo $prerequis?></p>
            </div>
        </div>
        <div class="modal fade" id="e-<?php echo $currentEvent['id'] ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <img class="img_fill" src="<?php echo $currentEvent['image'] ?>" alt="evt-Img">
                </div>
            </div>
        </div>
    </div>

    <?php
}
function no_event(){
    ?>
    <div class="text-center">
        <p><i>Aucun évènement de trouvé avec ces critères de recherche</i></p>
    </div>
    <?php
}
?>

<link rel="stylesheet" href="css/directionTech.css">
<style>
    html{
        overflow-y:scroll;
    }
    .padding-right-0{
        padding-right: 0!important;
    }
    <?php 
        foreach($eventType as $type){
            $idType = substr(strtolower($type['type']), 0, 4);
            $color = [0,0,0];
            for($i=0;$i<strlen($idType)-1;$i++){
                $charV = intdiv(intdiv(mb_ord($idType[$i]),4)*8,1);
                $color[$i] += $charV;
                echo "/*". $charV ."*/\n";
            }
            $color = "rgb(".$color[0].",".$color[1].",".$color[2].")";
            echo ".".$idType."{background-color:".$color."}\n";
        }
    ?>
</style>
<div class="container">
    <div class="text-center" style="padding: 0 0 5%;">
        <h1 class="content-title-blue">Tous les évènements</h1>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div id="filter" class="col-12 col-md-3">
                <h3>Filtres</h3>
                <hr>
                <div id="sortYear">
                    <h5>Méthode d'affichage</h5>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="sortAll" name="sortYear" value="sortAll">
                        <label for="sortAll" class="custom-control-label">Tout les évènements</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="sortByYear" name="sortYear" value="sortByYear" checked=true>
                        <label for="sortByYear" class="custom-control-label">Trie par Année</label>
                    </div>
                </div>
                <hr>
                <div id="type">
                    <h5>Rechercher les Evénements</h5>
                    <?php 
                        foreach($eventType as $key => $type){
                            $type = $type['type'];
                            $idType = substr(strtolower($type), 0, 4);
                        ?>
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="<?php echo $idType ?>" name="type[<?php echo $idType ?>]">
                            <label class="custom-control-label" for="<?php echo $idType ?>"><?php echo $type ?></label>
                        </div>
                        <?php
                        }
                    ?><!--
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="champ" name="type[champ]">
                        <label class="custom-control-label" for="champ">Compétition</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="train" name="type[train]">
                        <label class="custom-control-label" for="train">Formation</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="inter" name="type[inter]">
                        <label class="custom-control-label" for="inter">Stage</label>
                    </div>-->
                </div>
                <hr>
                <button type="submit" class="btn btn-secondary">Rechercher</button>
            </div>
            <div id="content" class="col-12 col-md-9">
                <div id="date" class="selectYear">
                    <div class="btn-toolbar">
                        <div class="btn-group">
                            <button id="prev" name="newYear" type="submit" value="<?php echo $selectedYear-1?>" class="btn btn-secondary">← <?php echo $selectedYear-1?></button></a>
                            <button id="current" type="button" class="btn btn-light"><?php echo $selectedYear?></button>
                            <button id="next" name="newYear" type="submit" value="<?php echo $selectedYear+1?>" class="btn btn-secondary"><?php echo $selectedYear+1?> →</button>
                        </div>
                    </div>
                </div>
                <?php
                if (count($eventAll)>0){
                    for ($i=0; $i < count($eventAll); $i++) {
                        printEvent($eventAll[$i]);
                    }
                }else {
                    no_event();
                }
                ?>
            </div>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="scripts/internship.js"></script>
<script>
    <?php echo "let research = ".json_encode($_POST)."; \n";?>
    for(const option in research) {
        switch (option) {
            case "sortYear":
                document.getElementById(research[option]).checked = true;
                if (research[option] == "sortAll"){
                    document.getElementById("date").classList.add('hide');
                }
                else{
                    document.getElementById("date").classList.remove('hide');
                }
                break;
            case "type":
                for(const type in research[option]) {
                    switch (type) {
                        <?php
                        foreach($eventType as $key => $type){
                            $idType = substr(strtolower($type['type']), 0, 4);
                            echo "case '".$idType."': \n";
                            echo "  document.getElementById(type).checked = true;\n";
                            echo "  break;\n";
                        }
                        ?>
                    }
                }
                break;
        }
    };
    document.getElementsByTagName('body')[0].classList.add("padding-right-0")
</script>