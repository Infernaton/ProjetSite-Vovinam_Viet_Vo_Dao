<?php
//Get the index of the current master in the url
$currentMaster = null;
if (isset($_GET['m'])) {
  if ($_GET['m'] != null) {
    $index = $_GET['m'];
    $req = $db->query('SELECT * FROM specialist as s WHERE s.id = '.$index.'');
    $currentMaster = $req->fetch(PDO::FETCH_ASSOC);
    
    $currentMaster['biographyShort'] = str_replace(array("\r","\n"),array("","{n}"),$currentMaster['biographyShort']);
    $currentMaster['function'] = str_replace(array("\r","\n"),array("","{n}"),$currentMaster['function']);

    switch ($currentMaster['hierarchy']){
      case 'great-master':
        $currentMaster['hierarchy'] = 'Grand Maître';
        break;
      case 'master':
        $currentMaster['hierarchy'] = 'Maître';
        break;
      default:
        $currentMaster['hierarchy'] = 'none';
    }
    //var_dump($currentMaster);
  } else {
    $index = -1;
  }
} else {
  $index = -1;
}
?>

<form action="management/addMasterDB.php" method="post" enctype="multipart/form-data">
  <div id="container" class="container">

    <div class="text-center">
      <div class="p-2" style="float:left;">
        <a onclick="history.go(-1);"><button class="btn-annul annim" type="button">← Retour</button></a>
      </div>
      <h1 id="addGM" class="content-title-red" >Ajouter un Maître</h1>
      <br><br>
      <h5> <span class="note">*</span> : Champs Obligatoires</h5>
    </div>

    <div class="row">
      <div class="col-md-5 col-12">
        <div class="text-center">
          <div id="previewImgDiv" class="responsive" style="background-image:url(../assets/img/no-picture.png);";>
            <div class="hoverEle">
              <p class="center">Changer l'image</p>
            </div>
            <input class="hide" type="text" name="oldImage" id="oldImage">
            <input class="inputData input-file" type="file" name="newImage" id="newImage" accept=".png, .jpeg, .jpg" required onchange="previewFile(this);">          
          </div>
          <p>Taille recommandée: 512 x 512 pixels </p>
        </div>

        <div class="row">
          <div class="col-12">
            <label class="data" for="name"><b>Nom Complet</b><span class="note">*</span></label>
            <input class="inputData form-control" type="text" placeholder="Nom" name="name" id="name" required>
          </div>
          <div class="col-12 col-md-6">
            <label class="data" for="birth"><b>Date de Naissance</b><span class="note">*</span></label>
            <input class="inputData form-control" type="text" placeholder="'jj/mm/aaaa' ou 'aaaa'" name="birth" id="birth" required>    
          </div>
          <div class="col-12 col-md-6">
            <label class="data" for="death"><b>Date du Décès</b></label>
            <input class="inputData form-control" type="text" placeholder="(Optionnel)" name="death" id="death">
          </div>
        </div>
      </div>

      <div class="col-md-7 col-12">

        <label class="data" for="currFunction"><b>Hiérarchie</b><span class="note">*</span></label>
        <input class="inputData" list="list" placeholder="----" name="hierarchy" id="hierarchy" required>
        <datalist id="list">
          <option value="Grand Maître">
          <option value="Maître">
        </datalist>

        <label class="data" for="biography"><b>Courte Biographie</b></label>
        <textarea class="inputData form-control" rows="6" cols="60" placeholder="(Optionnel)" name="biography" id="biography"></textarea>

        <label class="data" for="function"><b>Fonction(s) occupée(s) <br>(séparées d'une virgule, si plusieurs)</b></label>
        <textarea class="inputData form-control" cols="60" placeholder="Fonction actuelle et passée" name="function" id="function"></textarea>

        <input class="hide" name="currentMaster" value="<?php echo $index?>" id="currentMaster">

      </div>

      <div class="col-12">
        <div class ="d-flex justify-content-between mt-3">
          <button type="button" class="btn-annul annim" type="button" id='undo'><a onclick="history.go(-1);">Annuler</a></button>
          <!--<button type="submit" class="btn-modObject annim undo hide" value="delete" name="submit" id="delete">Supprimer</button>-->
          <button class="btn-modObject annim undo hide" id="delete" type="button" data-toggle="modal" data-target="#remove">Supprimer</button>
          <button type="submit" class="btn-modObject annim confirm" value="valid" name="submit" id="confirm">Valider</button>
        </div>
      </div>
    </div>

    <div class="modal fade" id="remove">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <div class="modal-header">
            <h4 class="modal-title">Supprimer les données du Maître</h4>
          </div>

          <div class="modal-footer">
            <div class="d-flex justify-content-between mb-3">
              <div id="btn-reset" class="p-2">
                <button type="button" class="btn-annul annim undo" data-dismiss="modal">Annuler</button>
              </div>
              <div id="btn-Action" class="p-2">
                <button type="submit" class="btn-modObject annim confirm" value="delete" name="submit">Valider la suppression</button>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</form>

<script src="scripts/previewPicture.js"></script>
<script>
if (<?php echo $index?> != -1){
  if (<?php echo json_encode($currentMaster)?> != null){
    document.getElementsByTagName("h1")[0].innerHTML = "Modifier les infos du Maître";
    document.getElementById("confirm").value = "modify";
    document.getElementById("confirm").innerHTML = "Modifier";
    document.getElementById("delete").classList.remove('hide');
    document.getElementById("undo").classList.add('hide');

    //if we click on an existant master, we have to fill all the cointainer with data
    document.getElementById("name").value = "<?php echo $currentMaster['name'] ?>";
    document.getElementById("biography").value = "<?php echo $currentMaster['biographyShort'] ?>".replaceAll('{n}', '\n');
    document.getElementById("birth").value = "<?php echo $currentMaster['birthday'] ?>";
    document.getElementById("death").value = "<?php echo $currentMaster['deathDate'] ?>";
    document.getElementById("function").value = "<?php echo $currentMaster['function'] ?>".replaceAll('{n}', '\n');
    document.getElementById("hierarchy").value = "<?php echo $currentMaster['hierarchy'] ?>";
    document.getElementById("previewImgDiv").style = "background-image:url('<?php echo getSaveDirr("forPreview").$currentMaster['pictureProfile'] ?>');";
    document.getElementById("oldImage").value = "<?php echo $currentMaster['pictureProfile']?>"
    document.getElementById("newImage").required = false;
  }
}
</script>