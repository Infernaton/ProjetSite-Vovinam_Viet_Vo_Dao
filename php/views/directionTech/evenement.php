<?php
require_once 'php/init.php';
date_default_timezone_set('Europe/Paris');
$date = explode("/",date('Y/m/d', time()));

$selectedYear = $date[0];
//var_dump($_POST);
if($_POST){
    if (isset($_POST['sortYear'])){
        if ($_POST['sortYear']=="all"){
            $selectedYear = null;
        }
    }else {
        $selectedYear = $_POST['newYear'];
        //l.97 la décision de l'année
    }
}

$someFilter = 'WHERE dateDebut like "'.$selectedYear.'%"';
$request = 'SELECT * FROM event '.$someFilter.' Order by `dateDebut` DESC';

$req = $db->query($request);
$eventAll = $req->fetchAll(PDO::FETCH_ASSOC);

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
function printEvent($currentEvent){
    global $_POST;
    $currentEvent['prerequis']==''?$prerequis='' : $prerequis= 'Prerequis: '.$currentEvent['prerequis'];
    ?>
    <div class="event_new" id="t-<?php echo $currentEvent['id'] ?>">
        <div class="row">
            <div class="col-1">
                <p class="date text-center">
                    <?php 
                        if(isset($_POST['sortYear'])){
                            if ($_POST['sortYear']=="all"){
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
    <div class="row">
        <div id="filter" class="col-12 col-md-3">
            <h3>Filtre</h3>
            <hr>
            <form action="" method="post" enctype="multipart/form-data">
                <div>
                    <h5>Méthode d'affichage</h5>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="sortAll" name="sortYear" value="all">
                        <label for="sortAll" class="custom-control-label">Tout les évènements</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="sortByYear" name="sortYear" value="year" checked="checked">
                        <label for="sortByYear" class="custom-control-label">Trie par Année</label>
                    </div>
                </div>
                <hr>
                <div>
                    <h5>Rechercher les Evénements</h5>
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="championship" name="type[]">
                        <label class="custom-control-label" for="championship">Compétition</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="training" name="type[]">
                        <label class="custom-control-label" for="training">Formation</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="internship" name="type[]">
                        <label class="custom-control-label" for="internship">Stage</label>
                    </div>
                </div>
                <hr>
                
                <button type="submit" class="btn btn-secondary">Rechercher</button>
            </form>
        </div>
        <div id="content" class="col-12 col-md-9">
            <div id="date" class="selectYear">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="btn-toolbar">
                        <div class="btn-group">
                            <button id="prev" name="newYear" type="submit" value="<?php echo $selectedYear-1?>" class="btn btn-secondary">← <?php echo $selectedYear-1?></button></a>
                            <button id="current" type="submit" class="btn btn-light"><?php echo $selectedYear?></button>
                            <button id="next" name="newYear" type="submit" value="<?php echo $selectedYear+1?>" class="btn btn-secondary"><?php echo $selectedYear+1?> →</button>
                        </div>
                    </div>
                </form>
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
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="scripts/internship.js"></script>