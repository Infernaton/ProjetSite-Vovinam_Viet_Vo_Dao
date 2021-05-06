<link rel="stylesheet" href="css/add.css">

<form action="php/management/addMasterDB.php">
  <div id="container" class="container">
    <div class="text-center">
      <h1 id="addGM" class="content-title-red" >Ajout un Grand Maître à la Galerie</h1>
      <br><br>
      <h5> <span class="note">*</span> : Champs Obligatoire</h5>
    </div>
    <div class="row" id="master-row">
      <div class="content col-sm-5">
        <label class="data" for="name"><b>Nom Complet</b><span class="note">*</span></label>
        <input class="inputData" type="text" placeholder="Nom" name="name" id="name" required>

        <label class="data" for="image"><b>Photo</b><span class="note">*</span></label>
        <input class="inputData" type="text" placeholder="Lien d'une Image" name="image" id="image" required>

        <label class="data" for="birth"><b>Date de Naissance</b><span class="note">*</span></label>
        <input class="inputData" type="text" placeholder="'jj/mm/aaaa' ou 'aaaa'" name="birth" id="birth" required>

        <label class="data" for="tags"><b>Date du Décès</b></label>
        <input class="inputData" type="text" placeholder="(Optionnel)" name="death" id="death">

        <label class="data" for="currFunction"><b>Fonction Actuelle</b><span class="note">*</span></label>
        <textarea class="inputData" cols="40" placeholder="Fonction occupé actuellement par la personne" name="currFunction" id="currFunction" required></textarea>
      </div>
      <div class="content col-sm-7">
        <label class="data" for="biography"><b>Courte Biographie</b></label>
        <textarea class="inputData" rows="6" cols="50" placeholder="(Optionnel)" name="biography" id="biography"></textarea>

        <label class="data" for="paFunction"><b>Ancienne Fonction(s) occupée(s) <br>(séparées d'une virgule, si plusieurs)</b></label>
        <textarea class="inputData" cols="50" placeholder="Optionnel si aucune fonction effectuée dans le passé" name="paFunction" id="paFunction"></textarea>
      </div>
    </div>
    <div class="d-flex justify-content-between mb-3">
      <div id="btn-object">
        <a onclick="history.go(-1);"><button class="btn-annul annim" type="button" id='undo'>Annuler</button></a>
      </div>

      <div id="btn-Action">
        <button type="submit" class="btn-modObject annim" value="valide" name="submit" id="confirm">Valider</button>
      </div>
    </div>
  </div> 
</form> 