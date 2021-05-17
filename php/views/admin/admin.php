<?php
$req = $db->query('SELECT * FROM specialist ORDER BY id');
$greatMastersDB = $req->fetchAll(PDO::FETCH_ASSOC);
$req = $db->query('SELECT * FROM marqueur ORDER BY id');
$clubsDB =$req->fetchAll(PDO::FETCH_ASSOC);
$req = $db->query('SELECT * FROM event ORDER BY id');
$eventDB = $req->fetchAll(PDO::FETCH_ASSOC);
?>
<link rel="stylesheet" href="css/add1.css">
<style>
.p-2{
    padding: 0;
}
</style>

<div id="container" class="container mt-2 mt-md-5">
    <h1 id="panel" class="content-title-red">PANEL ADMINISTRATEUR</h1>
    <div class="collapsible d-flex justify-content-between">
        <div class="p-2">Maître</div>
        <div class="p-2">
            <a href="?c=admin&p=1">
                <button class="confirm">+ Ajouter un Maître</button>
            </a>
        </div>
    </div>
        <div class="content">
            <div class="in">
                <div class="row">
                    <?php 
                    for ($i=0;$i<count($greatMastersDB);$i++){
                        echo '<div class="col-12 col-sm-6 col-lg-3 btn-panel">',
                            '<a href="?c=admin&p=1&m='.$greatMastersDB[$i]['id'].'">',
                            '<button class="">'.$greatMastersDB[$i]['name'].'</button>',
                            '</a> </div>';
                    }
                    ?>
                </div>
            </div>  
        </div>  
    <div class="collapsible d-flex justify-content-between">
        <div class="p-2">Club</div>
        <div class="p-2">
            <a href="?c=admin&p=1">
                <button class="confirm">+ Ajouter un club</button>
            </a>
        </div>
    </div>
        <div class="content"> 
            <div class="in">
                <div class="row">
                <?php //var_dump($clubsDB) ?>
                    <?php 
                    for ($i=0;$i<count($clubsDB);$i++){
                        echo '<div class="col-12 col-sm-6 col-lg-3 btn-panel">',
                            '<a href="?c=admin&p=2&club='.$clubsDB[$i]['id'].'">',
                            '<button class="">'.$clubsDB[$i]['titre'].'</button>',
                            '</a> </div>';
                    }
                    ?>
                </div>
            </div>  
        </div> 
    <div class="collapsible d-flex justify-content-between">
        <div class="p-2">Evènement</div>
        <div class="p-2">
            <a href="?c=admin&p=3">
                <button class="confirm">+ Ajouter un évènement</button>
            </a>
        </div>
    </div>
        <div class="content"> 
            <div class="in">
                <div class="row">
                    <?php 
                    for ($i=0;$i<count($eventDB);$i++){
                        echo '<div class="col-12 col-sm-6 col-lg-3 btn-panel">',
                            '<a href="?c=admin&p=3&e='.$eventDB[$i]['id'].'">',
                            '<button class="">'.$eventDB[$i]['title'].'</button>',
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