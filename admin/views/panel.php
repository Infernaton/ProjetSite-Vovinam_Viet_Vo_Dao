<?php
$req = $db->query('SELECT * FROM specialist ORDER BY id');
$greatMastersDB = $req->fetchAll(PDO::FETCH_ASSOC);
$req = $db->query('SELECT * FROM marqueur ORDER BY id');
$clubsDB =$req->fetchAll(PDO::FETCH_ASSOC);
$req = $db->query('SELECT * FROM event Order by `dateDebut` DESC');
$eventDB = $req->fetchAll(PDO::FETCH_ASSOC);
//Sort by year event
$yearList = array();
foreach($eventDB as $event){
    //Event sort by year
    $year = explode("/", $event['dateDebut'])[0];
    //If a year is already in the table, we put the event in it
    if (array_key_exists($year, $yearList)){
        array_push($yearList[$year], $event);
    }
    //If not, we create that year
    else {
        $yearList[$year] = [$event];
    }
}
//var_dump($yearList);

$eventType = $db->query('SELECT DISTINCT type FROM event')->fetchAll(PDO::FETCH_ASSOC);
//To know all the type of event, if a new appear, we don't have to add it manually
$hierarchy = $db->query('SELECT DISTINCT hierarchy FROM specialist')->fetchAll(PDO::FETCH_ASSOC);
?>
<style>
body {
    overflow-y: scroll;
}
.p-2{
    padding: 0!important;
}
</style>

<div id="container" class="container">
    <h1 id="panel" class="content-title-red">PANEL ADMINISTRATEUR</h1>
    <!-- Maîtres -->
    <div class="collapsible d-flex justify-content-between">
        <div class="p-2">Maîtres</div>
        <div class="p-2 text-center">
            <a href="?p=addMaster">
                <button class="confirm">+ Ajouter un Maître</button>
            </a>
        </div>
    </div>
        <div class="content">
            <div class="in">
                <select name="masterSelect" class="custom-select mb-3" onchange="select('masterList',this.value)">
                    <option value="all">Tous les Maîtres</option>
                    <!--<option value="great-master">Grands Maîtres</option>
                    <option value="master">Maîtres</option>-->
                    <?php
                    foreach ($hierarchy as $h){
                        $print = $h['hierarchy'];
                        $type_value = strtolower(str_replace(array('é','è','ë','ê','à','â','ä','î','ï'), "e", $print));
                        switch ($print){
                            case 'great-master':
                                $print = 'Grand Maître';
                                break;
                            case 'master':
                                $print = 'Maître';
                                break;
                        }
                        echo '<option value="'.$type_value.'">'.$print.'</option>';
                    }
                    ?>
                </select>
                <div class="row" id="masterList">
                    <?php 
                    for ($i=0;$i<count($greatMastersDB);$i++){
                        echo '<div class="col-12 col-sm-6 col-lg-3 btn-panel '.$greatMastersDB[$i]['hierarchy'].'">',
                            '<a href="?p=addMaster&m='.$greatMastersDB[$i]['id'].'">',
                            '<button class="list-object">'.$greatMastersDB[$i]['name'].'</button>',
                            '</a> </div>';
                    }
                    ?>
                </div>
            </div>  
        </div>  
    <!-- Clubs -->
    <div class="collapsible d-flex justify-content-between">
        <div class="p-2">Clubs</div>
        <div class="p-2">
            <a href="?p=addClub">
                <button class="confirm">+ Ajouter un club</button>
            </a>
        </div>
    </div>
        <div class="content"> 
            <div class="in">
                <select name="clubSelect" class="custom-select mb-3" onchange="select('clubList',this.value)">
                    <option value="all">Tous les Clubs</option>
                <?php 
                    foreach ($clubsDB as $comite){
                        if ($comite['club_comite'] == "comite"){
                            echo '<option value="'.$comite['Comite'].'">'.$comite['titre'].'</option>';
                        }
                    }
                ?>
                </select>
                <div class="row" id="clubList">
                <?php //var_dump($clubsDB) ?>
                    <?php 
                    for ($i=0;$i<count($clubsDB);$i++){
                        if ($clubsDB[$i]["club_comite"] == "club"){
                            echo '<div class="col-12 col-sm-6 col-lg-3 btn-panel '.$clubsDB[$i]['Comite'].'">',
                                '<a href="?p=addClub&club='.$clubsDB[$i]['id'].'">',
                                '<button class="list-object">'.$clubsDB[$i]['titre'].'</button>',
                                '</a> </div>';
                        }
                    }?>
                </div>
            </div>  
        </div> 
    <!-- Evènements -->
    <div class="collapsible d-flex justify-content-between">
        <div class="p-2">Evènements</div>
        <div class="p-2">
            <a href="?p=event">
                <button class="confirm">+ Ajouter un évènement</button>
            </a>
        </div>
    </div>
        <div class="content"> 
            <div class="in">
                <select name="eventSelect" class="custom-select mb-3" onchange="select('eventList',this.value)">
                    <option value="all">Tous les Evènements</option>
                    <?php
                    foreach ($eventType as $e){
                        $type = $e['type'];
                        $type_value = strtolower(str_replace(array('é','è','ë','ê','à','â','ä','î','ï'), "e", $type));
                        echo '<option value="'.$type_value.'">'.$type.'</option>';
                    }
                    ?>
                </select>
                <div class="row" id="eventList">
                    <?php 
                    foreach ($yearList as $year => $list){
                        echo '<h3 class="year col-12">'.$year.'</h3>';
                        foreach ($list as $event){
                            $event["type"] = strtolower(str_replace(array('é','è','ë','ê','à','â','ä','î','ï'), "e", $event["type"]));
                            echo '<div class="col-12 col-sm-6 col-lg-3 btn-panel '.$event['type'].'">',
                            '<a href="?p=event&e='.$event['id'].'">',
                            '<button class="list-object">'.$event['title'].'</button>',
                            '</a> </div>';
                        }
                    }/*
                    for ($i=0;$i<count($eventDB);$i++){
                        $eventDB[$i]["type"] = strtolower(str_replace(array('é','è','ë','ê','à','â','ä','î','ï'), "e", $eventDB[$i]["type"]));
                        echo '<div class="col-12 col-sm-6 col-lg-3 btn-panel '.$eventDB[$i]['type'].'">',
                            '<a href="?p=event&e='.$eventDB[$i]['id'].'">',
                            '<button class="list-object">'.$eventDB[$i]['title'].'</button>',
                            '</a> </div>';
                    }*/
                    ?>
                </div>
            </div>  
        </div>
    <!-- Autre -->
    <div class="collapsible d-flex justify-content-between">
        <div class="p-2">Modifier le site</div>
    </div>
        <div class="content"> 
            <div class="in">
                <div class="row" id="eventList">
                    <div class="col-12 col-md-6 btn-panel">
                        <a href="?p=news">
                            <button class="list-object">Actualités</button>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 btn-panel">
                        <a href="?p=modifyFAQ">
                            <button class="list-object">FAQ</button>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 btn-panel">
                        <a href="?p=calendars">
                            <button class="list-object">Calendriers Fédéraux</button>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 btn-panel">
                        <a href="?p=sliders">
                            <button class="list-object">Modifier les Sliders</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</div>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>
<script>
function select(list,value){
    let currentList = document.getElementById(list);
    let objects = Array.from(currentList.getElementsByClassName('btn-panel'));
    if (value != 'all'){
        objects.forEach(object => {
            console.log(object);
            if (!object.classList.contains(value)){
                object.classList.add('hide');
            }else {
                object.classList.remove('hide');
            }
        })
    }else {
        objects.forEach(object => {
            object.classList.remove('hide');
        })
    }
}
</script>