<?php
function reformatDate($dateStringDB){
    return str_replace("/","-",$dateStringDB);
}
function translateToInput($string){
    //Edit the response to make it easy to design in edit mode
    $string = str_replace("<br>", "\r\n", $string);
    $string = str_replace("<mark class='bg-danger'>", "[", $string);
    $string = str_replace("</mark>", "]", $string); 
    //To delete the <a> tag to the link
    $string = str_replace([substr($string, strpos($string,"<a"), strpos($string, "\">")-strpos($string,"<a")),"</a>", "\">"], "", $string);

    return str_replace(["<b>","</b>", "<i>", "</i>", "<ins>", "</ins>", "<del>", "</del>"], ["**","**", "*", "*", "_", "_", "--", "--"], $string);
}

//Get the index of the current master in the url
$currentEvent = null;
if (isset($_GET['e'])) {
  if ($_GET['e'] != null) {
    $index = $_GET['e'];
    $req = $db->query('SELECT * FROM event as s WHERE s.id = '.$index.'');
    $currentEvent = $req->fetch(PDO::FETCH_ASSOC);
    //$currentEvent['description'] = str_replace(array("\r","\n"),array("","{n}"),$currentEvent['description']);
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
            <h1 id="addGM" class="content-title-red">Créer un nouvel évènement</h1> <i class="fas fa-question-circle" data-toggle="modal" data-target="#useSymbols" style="cursor: pointer;"></i>
        </div>
        <div class="modal fade" id="useSymbols">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Comment Styliser le texte des réponses ?</h3>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li>Souligner, mettre en gras/italique ... C'est possible de le faire ici pour le rendre plus vivant !</li>
                        </ul>
                        <p>Mais Comment ? C'est ce que nous allons voir maintenant.</p>
                        <h4><ins>Styliser le texte</ins></h4>
                        <p>
                            Tout d'abord, il n'est possible de styliser uniquement la réponse, cela ne marche pas avec la question. <br>
                            Il est ensuite possible de styliser le texte de 5 manières différentes:<br>
                            <b>Gras</b>, <ins>Soulignement</ins>, <i>Italique</i>, <del>Barré</del>, et <mark class='bg-danger'>Mise en Valeur</mark>. <br> <br>
                        </p>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4">
                                <p>
                                    **Texte** → <b>Texte</b> <br>
                                    <br>
                                    _Texte_ → <ins>Texte</ins>
                                </p>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <p>
                                    *Texte* → <i>Texte</i> <br>
                                    <br>
                                    --Texte-- → <del>Texte</del>
                                </p>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <p>
                                    [Texte] => <mark class='bg-danger'>Texte</mark>
                                </p>
                            </div>
                        </div>
                        <p>
                            On peux également fusionner des styles entre eux, par exemple faire un texte en italique et en gras: <br>
                            ***Texte*** → <b><i>Texte</i></b> <br>
                            Ou encore souligné et mettre en gras : <br>
                            _**Texte**_ → <b><ins>Texte</ins></b> <br>
                            Ou même appliquer du style à l'intérieur d'un autre style: <br>
                            *Texte d'exemple, [texte] d'exemple* → <i>Texte d'exemple, <mark class='bg-danger'>texte</mark> d'exemple</i><br>
                            <br>
                            Il n'y a pas vraiment de limite au nombre de style que vous pouvez mettre dans une réponse, alors testez par vous même ! <br>
                            <br>
                            Pour finir, en mode Edition, le style choisit ne s'affichera pas, il ne sera montré qu'après avoir validé les nouveaux changements.
                        </p>
                        <h4><ins>Liens Hypertextes</ins></h4>
                        <p>
                            Pour créer des liens cliquables dans un réponse, rien de plus simple, vous avez juste à mettre votre liens dans votre réponse. Et comme pour la stylisation, il sera transformé en liens cliquable apres validation des changements. <br>
                            https://www.exemple_de_liens.fr => <a href="">https://www.exemple_de_liens.fr</a> <br> (<i>Lien d'exemple, ne fonctionne pas</i>)
                        </p>
                    </div>
                </div>
            </div>
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
                <input class="inputData form-control" list="list" type="text" placeholder="  -" name="event" id="event" onchange="isAStage()" required>
                <datalist id="list">
                    <option value="Compétition">
                    <option value="Stage">
                    <option value="Formation">
                    <option value="Autre">
                </datalist>
            </div>

            <div id="infoStage" class="row hide">
                <div class="col-12 col-md-6">
                    <div id="ObjContainer">
                        <label class="data" for="event"><b>Objectif du Stage</b></label>
                        <input class="inputData form-control" list="listObj" type="text" placeholder="  -" name="objectif" id="objectif">
                        <datalist id="listObj">
                            <option value="Technique">
                            <option value="Arbitrage">
                            <option value="Dirigeant">
                            <option value="Encadrant">
                        </datalist>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <label class="data" for="prerequis"><b>Prérequis</b></label>
                    <input class="inputData form-control" type="text" placeholder="Prérequis" name="prerequis" id="prerequis">
                </div>
            </div>

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
function isAStage() {
    if (document.getElementById('event').value == 'Stage'){
        document.getElementById('infoStage').classList.remove('hide');
    }else{
        document.getElementById('infoStage').classList.add('hide');
    }
}
if (<?php echo $index?> != -1){
  if (<?php echo json_encode($currentEvent)?> != null){
    document.getElementsByTagName("h1")[0].innerHTML = "Modifier les infos de l'évènement";
    document.getElementById("confirm").value = "modify";
    
    //if we click on an existant master, we have to fill all the cointainer with his data
    document.getElementById("title").value = "<?php echo $currentEvent['title'] ?>";
    document.getElementById("description").value = "<?php echo translateToInput($currentEvent['description'])?>";
    document.getElementById("dateDebut").value = "<?php echo reformatDate($currentEvent['dateDebut'])?>";
    document.getElementById("dateFin").value = "<?php echo reformatDate($currentEvent['dateFin'])?>";
    document.getElementById("event").value = "<?php echo $currentEvent['type'] ?>";
    document.getElementById("prerequis").value = "<?php echo $currentEvent['prerequis'] ?>";
    document.getElementById("objectif").value = "<?php echo $currentEvent['objectif'] ?>";
    document.getElementById("previewImgDiv").style = "background-image:url(<?php echo getSaveDirr("forPreview").$currentEvent['image'] ?>);";
    document.getElementById("oldImage").value = "<?php echo $currentEvent['image']?>"
    document.getElementById("newImage").required = false;
    isAStage();
  }
}
</script>