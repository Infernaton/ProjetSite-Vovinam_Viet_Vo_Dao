<?php
$greatMastersBeforeFetch = $db->query('SELECT * FROM specialist ORDER BY id');
$greatMastersDB = $greatMastersBeforeFetch->fetchAll(PDO::FETCH_ASSOC);
?>
<link rel="stylesheet" href="css/add.css">

<div id="container" class="container mt-2 mt-md-5">
    <h1 id="panel" class="content-title-red">PANEL ADMINISTRATEUR</h1>
        <button class="collapsible icon">Maître</button>
            <div class="content">
                <a href="?c=admin&p=1">
                    <button class = "btn-panel">Ajouter un Grand Maître</button>
                </a>
                <?php 
                for ($i=0;$i<count($greatMastersDB);$i++){
                    echo '<a href="?c=admin&p=1&m='.$greatMastersDB[$i]['id'].'">'.$greatMastersDB[$i]['name'].'</a> <br>';
                }
                ?>
            </div>  
        <button class="collapsible">Club</button>
            <div class="content"> 
                <a href="?c=admin&p=2">
                    <button class = "btn-panel">Ajouter un club</button>
                </a>
            </div> 
        <button class="collapsible">Evènement</button>
            <div class="content"> 
                <a href="?c=admin&p=3">
                    <button class = "btn-panel">Ajouter un évènement</button>
                </a>
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