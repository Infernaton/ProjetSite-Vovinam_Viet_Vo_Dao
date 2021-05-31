<?php
function reformatDate($dateStringDB){
    return str_replace("/","-",$dateStringDB);
}
//Get the index of the current master in the url
$currentEvent = null;
if (isset($_GET['e'])) {
  if ($_GET['e'] != null) {
    $index = $_GET['e'];
    $req = $db->query('SELECT * FROM event as s WHERE s.id = '.$index.'');
    $currentEvent = $req->fetch(PDO::FETCH_ASSOC);
    $currentEvent['description'] = str_replace(array("\r","\n"),array("","{n}"),$currentEvent['description']);
  } else {
    $index = -1;
  }
} else {
  $index = -1;
}
?>
<form action="management/addEventDB.php" method="post" enctype="multipart/form-data">
    <div id="container" class="container">
        <div class="text-center">
            <h1 id="addGM" class="content-title-red">Créer un nouvel évènement</h1>
        </div>
    <div class="row">
        <div class="col-12 col-md-4">

            <div id="previewImgDiv" class="responsive" style="background-image:url(../assets/img/no-picture.png);";>
                <div class="hoverEle">
                    <p class="center">Changer l'image</p>
                </div>
                <input class="hide" type="text" name="oldImage" id="oldImage">
                <input class="inputData input-file" type="file" name="newImage" id="newImage" accept=".png, .jpeg, .jpg" required onchange="previewFile(this);">
            </div>
            <label class="data" for="title"><b>Titre</b></label>
            <input class="inputData form-control" type="text" placeholder="Titre" name="title" id="title" required>

            <label class="data" for="debut"><b>Date de Début de l'évènement</b></label>
            <input class="inputData form-control" type="date" placeholder="jj/mm/aaaa" name="debut" id="dateDebut" required>
            <label class="data" for="fin"><b>Date de Fin de l'évènement</b></label>
            <input class="inputData form-control" type="date" placeholder="jj/mm/aaaa" name="fin" id="dateFin" required>
            
        </div>

        <div class="col-12 col-md-8">

            <div id="categoryContainer">
                <label class="data" for="event"><b>Type d'évènement</b></label>
                <input class="inputData form-control" list="list" type="text" placeholder="  -" name="event" id="event" required>
                <datalist id="list">
                    <option value="Compétition">
                    <option value="Stage">
                    <option value="Formation">
                    <option value="Autre">
                </datalist>
            </div>
            <div id="ObjContainer">
                <label class="data" for="event"><b>Objéctif de l'évènement</b></label>
                <input class="inputData form-control" list="listObj" type="text" placeholder="  -" name="event" id="event" required>
                <datalist id="listObj">
                    <option value="Technique">
                    <option value="Arbitrage">
                    <option value="Dirigeant">
                    <option value="Encadrant">
                </datalist>
            </div>
            <label class="data" for="prerequis"><b>Prérequis (Optionnel, comme dans le cas d'un stage)</b></label>
            <input class="inputData form-control" type="text" placeholder="Prérequis" name="prerequis" id="prerequis">
            <label class="data" for="description"><b>Description</b></label>
            <textarea class="inputData form-control" rows="10" cols="100" name="description" placeholder="Description.." id="description"></textarea>

            <input class="hide" name="currentEvent" value="<?php echo $index?>" id="currentEvent">
            
        </div>
    </div>        

        <div class="d-flex justify-content-between mb-3">
            <div id="btn-reset" class="p-2">
                <a onclick="history.go(-1);"><button class="btn-annul hidden annim undo" type="button" id='undo'>Annuler</button></a>
            </div>
            <div id="btn-Action" class="p-2">
                <button type="submit" class="btn-modObject annim confirm" value="valid" name="submit" id="confirm">Valider</button>
            </div>
        </div>
</form> 

<script src="scripts/previewPicture.js"></script>
<script>
if (<?php echo $index?> != -1){
  if (<?php echo json_encode($currentEvent)?> != null){
    document.getElementsByTagName("h1")[0].innerHTML = "Modifier les infos de l'évènement";
    document.getElementById("confirm").value = "modify";
    
    //if we click on an existant master, we have to fill all the cointainer with data
    document.getElementById("title").value = "<?php echo $currentEvent['title'] ?>";
    let desc = "<?php echo $currentEvent['description'] ?>";
    document.getElementById("description").value = desc.replaceAll('{n}', '\n');
    document.getElementById("dateDebut").value = "<?php echo reformatDate($currentEvent['dateDebut'])?>";
    document.getElementById("dateFin").value = "<?php echo reformatDate($currentEvent['dateFin'])?>";
    document.getElementById("event").value = "<?php echo $currentEvent['type'] ?>";
    document.getElementById("prerequis").value = "<?php echo $currentEvent['prerequis'] ?>";
    document.getElementById("previewImgDiv").style = "background-image:url(<?php echo getSaveDirr("forPreview").$currentEvent['image'] ?>);";
    document.getElementById("oldImage").value = "<?php echo $currentEvent['image']?>"
    document.getElementById("newImage").required = false;
  }
}
</script>