<?php
//Get the index of the current master in the url
if (isset($_GET['m'])) {
  if ($_GET['m'] != null) {
    $index = $_GET['m'];
    $req = $db->query('SELECT * FROM specialist as s WHERE s.id = '.$index.'');
    $currentMaster = $req->fetch(PDO::FETCH_ASSOC);
  } else {
    $index = -1;
  }
} else {
  $index = -1;
}
?>
<link rel="stylesheet" href="css/add.css">

<form action="php/management/addMasterDB.php" method="post" enctype="multipart/form-data">
  <div id="container" class="container mt-5">
    <div class="text-center">
      <h1 id="addGM" class="content-title-red" >Ajouter un Maître</h1>
      <br><br>
      <h5> <span class="note">*</span> : Champs Obligatoire</h5>
    </div>
    <div class="row" id="master-row">
      <div class="col-sm-5">
        <label class="data" for="name"><b>Nom Complet</b><span class="note">*</span></label>
        <input class="inputData" type="text" placeholder="Nom" name="name" id="name" required>

        <label class="data" for="image"><b>Photo</b><span class="note">*</span></label>
        <input class="inputData" type="file" placeholder="Lien d'une Image" name="image" id="image" accept="image/png, image/jpeg" required>

        <label class="data" for="birth"><b>Date de Naissance</b><span class="note">*</span></label>
        <input class="inputData" type="text" placeholder="'jj/mm/aaaa' ou 'aaaa'" name="birth" id="birth" required>

        <label class="data" for="death"><b>Date du Décès</b></label>
        <input class="inputData" type="text" placeholder="(Optionnel)" name="death" id="death">

        <label class="data" for="currFunction"><b>Hierarchy</b><span class="note">*</span></label>
        <input class="inputData" list="list" placeholder="----" name="hierarchy" id="hierarchy" required>
        <datalist id="list">
          <option value="Grand Maître">
          <option value="Maître">
        </datalist>
      </div>

      <div class="col-sm-7">
        <label class="data" for="biography"><b>Courte Biographie</b></label>
        <textarea class="inputData" rows="6" cols="60" placeholder="(Optionnel)" name="biography" id="biography"></textarea>

        <label class="data" for="function"><b>Fonction(s) occupée(s) <br>(séparées d'une virgule, si plusieurs)</b></label>
        <textarea class="inputData" cols="60" placeholder="Fonction actuelle et passée" name="function" id="function"></textarea>

        <input class="hide" name="currentMaster" value="<?php echo $index?>" id="currentMaster">
        
        <div class="d-flex justify-content-between mt-4">

          <div id="btn-object">
            <a onclick="history.go(-1);"><button class="btn-annul annim" type="button" id='undo'>Annuler</button></a>
          </div>

          <div id="btn-Action" style="margin-right: 5%;">
            <button type="submit" class="btn-modObject annim" value="valid" name="submit" id="confirm">Valider</button>
          </div>

        </div>
      </div>

    </div>
  </div> 
</form> 
<script>
if (<?php echo $index?> != -1){
  if (<?php echo json_encode($currentMaster)?> != null){
    document.getElementsByTagName("h1")[0].innerHTML = "Modifier les infos du Maître";
    document.getElementById("confirm").value = "modify";

    //if we click on an existant master, we have to fill all the cointainer with data
    document.getElementById("name").value = "<?php echo $currentMaster['name'] ?>";
    document.getElementById("biography").value = "<?php echo $currentMaster['biographyShort'] ?>";
    document.getElementById("birth").value = "<?php echo $currentMaster['birthday'] ?>";
    document.getElementById("death").value = "<?php echo $currentMaster['deathDate'] ?>";
    document.getElementById("function").value = "<?php echo $currentMaster['function'] ?>";
    document.getElementById("hierarchy").value = "<?php echo $currentMaster['hierarchy'] ?>";
    //Pouvoir modifier une image dans la DB
    /**
     * https://www.tutorialrepublic.com/faq/how-to-preview-an-image-before-it-is-uploaded-using-jquery.php
     * pour tester
     * 
     * changer l'input de base de l'image en no-require
     * mettre la prévisualisation de l'image actuelle
     * mettre un input require invisible qui prend en entrer le chemin de l'image
     */
  }
}
</script>