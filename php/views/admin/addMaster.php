<link rel="stylesheet" href="css/add1.css">

<form action="php/management/addMasterDB.php">
  <div id="container" class="container">
    <div class="text-center">
      <h1 id="addGM" class="content-title-red" >Ajout un Grand Maître à la Galerie</h1>
    </div>
    <div class="row" id="master-row">
      <div class="content col-sm-5">
        <div class = "nom">
          <label class="data" for="name"><b>Nom Complet</b></label>
          <input class="inputData" type="text" placeholder="Nom" name="name" id="name" required>
        </div>

        <div class = "img">
          <label class="data" for="image"><b>Photo</b></label>
          <input class="inputData" type="text" placeholder="Lien d'une Image" name="image" id="image" required>
        </div>

        <div class = "naiss">
          <label class="data" for="birth"><b>Date de Naissance</b></label>
          <input class="inputData" type="text" placeholder="Naissance" name="birth" id="birth" required>
        </div>

        <div class = "deces">
          <label class="data" for="tags"><b>Date du Décès</b></label>
          <input class="inputData" type="text" placeholder="Décès (optionnel)" name="death" id="death">
        </div>

      </div>
      <div class="content col-sm-7">

        <div class = "bio">
          <label class="data" for="biography"><b>Courte Biographie</b></label>
          <textarea class="inputData" rows="4" cols="50" placeholder="Biographie.." name="biography" id="biography" required></textarea>
        </div>

        <div class = "fonction">
          <label class="data" for="function"><b>Fonction(s) (séparées d'une virgule)</b></label>
          <textarea class="inputData" cols="50" placeholder="Liste des Fonctions qu'il a occupé durant sa vie" name="function" id="function"></textarea>
        </div>
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