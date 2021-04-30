<link rel="stylesheet" href="css/add1.css">

  <form action="php/management/addMasterDB.php">
    <div id="container" class="container">
      <div class="row">
        <h1 id="addGM">Ajout un Grand Maître à la Galerie</h1>
        <div class ="content">
          <div class = "nom">
            <label class="data" for="name"><b>Nom</b></label>
            <input class="inputData" type="text" placeholder="Nom" name="name" id="name" required>
          </div>
          <div class = "img">
            <label class="data" for="image"><b>Lien Image</b></label>
            <input class="inputData" type="text" placeholder="Lien d'une Image" name="image" id="image" required>
          </div>
          <div class = "bio">
            <label class="data" for="biography"><b>Biographie</b></label>
            <textarea class="inputData" rows="4" cols="50" placeholder="Biographie.." name="biography" id="biography" required></textarea>
          </div>
          <div class = "naiss">
            <label class="data" for="birth"><b>Naissance</b></label>
            <input class="inputData" type="text" placeholder="Naissance" name="birth" id="birth" required>
          </div>
          <div class = "deces">
            <label class="data" for="tags"><b>Décès</b></label>
            <input class="inputData" type="text" placeholder="Date du décès (optionnel)" name="death" id="death">
          </div>
          <div class = "fonction">
            <label class="data" for="function"><b>Fonction(s) (séparées d'une virgule)</b></label>
            <input class="inputData" type="text" placeholder="Liste des Fonctions qu'il a occupé durant sa vie" name="function" id="function">
          </div>
          <div class ="boutton">
            <div id="btn-object">
                <a onclick="history.go(-1);"><button class="btn-annul annim" type="button" id='undo'>Annuler</button></a>
            </div>
            <div id="btn-Action">
                <button type="submit" class="btn-modObject annim" value="valide" name="submit" id="confirm">Valider</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
</form> 