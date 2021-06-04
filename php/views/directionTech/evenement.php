<?php
require_once 'php/init.php';
date_default_timezone_set('Europe/Paris');
$date = explode("/",date('Y/m/d', time()));

$selectedYear = $date[0];
$someFilter = [];
//var_dump($_POST);
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
            switch ($key) {
                case 'train':
                    array_push($someFilter, 'type like "Formation"');
                    break;
                case 'champ':
                    array_push($someFilter, 'type like "Compétition"');
                    break;
                case 'inter':
                    array_push($someFilter, 'type like "Stage"');
                    break;
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
    $allFilter = '';
}

$request = 'SELECT * FROM event '.$allFilter.' Order by `dateDebut` DESC';
//var_dump($request);
$req = $db->query($request);
$eventAll = $req->fetchAll(PDO::FETCH_ASSOC);

//var_dump($eventAll);

function dateFR($date,$seeYear = True){
    //date format yyyy/mm/dd => dd/mm/yyyy
    $months = cal_info(0)['abbrevmonths'];
    $date = explode("/", $date);
    if ($seeYear){
        return "<span class='day'>".$date[2]."</span> <span class='month'>".$months[(int)$date[1]]."</span> <br>".$date[0];
    }else{
        return "<span class='day'>".$date[2]."</span> <span class='month'>".$months[(int)$date[1]]."</span> <br>";
    }
}
function printEvent($currentEvent){
    global $_POST;
    $currentEvent['prerequis']==''?$prerequis='' : $prerequis= 'Prerequis: '.$currentEvent['prerequis'];

    /*background-image: url(<?php echo $currentEvent['image']?>)*/
    ?>
    <div class="p-2" style="">
    <div class="event_new" id="t-<?php echo $currentEvent['id'] ?>" >
        <div class="row">
            <div class="col-1">
                <p class="date text-center">
                    <?php 
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
            <div class="data col-11">
                <div class="d-flex justify-content-between">
                    <h4><?php echo $currentEvent['title']?></h4>
                    <p><?php echo $currentEvent['type'] ?></p>
                </div>
                <p class="descr"><?php echo $currentEvent['description']?></p>
                <p class="prerequis"><?php echo $prerequis?></p>
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
</style>
<div class="container">
    <div class="text-center">
        <h1 class="content-title-blue">Tous les évènements</h1>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div id="filter" class="col-12 col-md-3">
                <h3>Filtre</h3>
                <hr>
                <div id="sortYear">
                    <h5>Méthode d'affichage</h5>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="sortAll" name="sortYear" value="sortAll">
                        <label for="sortAll" class="custom-control-label">Tout les évènements</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="sortByYear" name="sortYear" value="sortByYear" checked = true>
                        <label for="sortByYear" class="custom-control-label">Trie par Année</label>
                    </div>
                </div>
                <hr>
                <div id="type">
                    <h5>Rechercher les Evénements</h5>
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
                    </div>
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
                        case "champ":
                            document.getElementById(type).checked = true;
                            break;
                        case "train":
                            document.getElementById(type).checked = true;
                            break;
                        case "inter":
                            document.getElementById(type).checked = true;
                            break;
                    }
                }
                break;
        }
    };
</script>