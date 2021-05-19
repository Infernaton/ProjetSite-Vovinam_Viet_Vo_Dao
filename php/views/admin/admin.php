<?php
$req = $db->query('SELECT * FROM specialist ORDER BY id');
$greatMastersDB = $req->fetchAll(PDO::FETCH_ASSOC);
$req = $db->query('SELECT * FROM marqueur ORDER BY id');
$clubsDB =$req->fetchAll(PDO::FETCH_ASSOC);
$req = $db->query('SELECT * FROM event ORDER BY id');
$eventDB = $req->fetchAll(PDO::FETCH_ASSOC);
?>
<link rel="stylesheet" href="css/add.css">
<style>
.p-2{
    padding: 0!important;
}
</style>

<div id="container" class="container mt-2 mt-md-5">
    <h1 id="panel" class="content-title-red">PANEL ADMINISTRATEUR</h1>
    <div class="collapsible d-flex justify-content-between">
        <div class="p-2">Maîtres</div>
        <div class="p-2 text-center">
            <a href="?c=admin&p=1">
                <button class="confirm">+ Ajouter un Maître</button>
            </a>
        </div>
    </div>
        <div class="content">
            <div class="in">
                <select name="masterSelect" class="custom-select mb-3" onchange="select('masterList',this.value)">
                    <option value="all">Tous les Maîtres</option>
                    <option value="great-master">Grands Maîtres</option>
                    <option value="master">Maîtres</option>
                </select>
                <div class="row" id="masterList">
                    <?php 
                    for ($i=0;$i<count($greatMastersDB);$i++){
                        echo '<div class="col-12 col-sm-6 col-lg-3 btn-panel '.$greatMastersDB[$i]['hierarchy'].'">',
                            '<a href="?c=admin&p=1&m='.$greatMastersDB[$i]['id'].'">',
                            '<button class="list-object">'.$greatMastersDB[$i]['name'].'</button>',
                            '</a> </div>';
                    }
                    ?>
                </div>
            </div>  
        </div>  
    <div class="collapsible d-flex justify-content-between">
        <div class="p-2">Clubs</div>
        <div class="p-2">
            <a href="?c=admin&p=2">
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
                                '<a href="?c=admin&p=2&club='.$clubsDB[$i]['id'].'">',
                                '<button class="list-object">'.$clubsDB[$i]['titre'].'</button>',
                                '</a> </div>';
                        }
                    }?>
                </div>
            </div>  
        </div> 
    <div class="collapsible d-flex justify-content-between">
        <div class="p-2">Evènements</div>
        <div class="p-2">
            <a href="?c=admin&p=3">
                <button class="confirm">+ Ajouter un évènement</button>
            </a>
        </div>
    </div>
        <div class="content"> 
            <div class="in">
                <select name="eventSelect" class="custom-select mb-3" onchange="select('eventList',this.value)">
                    <option value="all">Tous les Evènements</option>
                    <option value="stage">Stage</option>
                    <option value="competition">Compétition</option>
                    <option value="formation">Formation</option>
                    <option value="autre">Autre</option>
                </select>
                <div class="row" id="eventList">
                    <?php 
                    for ($i=0;$i<count($eventDB);$i++){
                        $eventDB[$i]["type"] = strtolower(str_replace(array('é','è','ë','ê','à','â','ä','î','ï'), "e", $eventDB[$i]["type"]));
                        echo '<div class="col-12 col-sm-6 col-lg-3 btn-panel '.$eventDB[$i]['type'].'">',
                            '<a href="?c=admin&p=3&e='.$eventDB[$i]['id'].'">',
                            '<button class="list-object">'.$eventDB[$i]['title'].'</button>',
                            '</a> </div>';
                    }
                    ?>
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