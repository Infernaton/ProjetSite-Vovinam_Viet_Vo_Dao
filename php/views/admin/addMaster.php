<link rel="stylesheet" href="css/add.css">

  <form action="php/management/addMasterDB.php">
    <div id="container" class="container">
      
          <h1 id="addGM">Ajout un Grand Maître à la Galerie</h1>
        <div class ="content">
          <label class="data" for="name"><b>Nom</b></label>
          <input class="inputData" type="text" placeholder="Nom" name="name" id="name" required>

          <label class="data" for="image"><b>Lien Image</b></label>
          <input class="inputData" type="text" placeholder="Lien d'une Image" name="image" id="image" required>

          <label class="data" for="biography"><b>Biographie</b></label>
          <textarea class="inputData" rows="4" cols="50" placeholder="Biographie.." name="biography" id="biography" required></textarea>

          <label class="data" for="birth"><b>Naissance</b></label>
          <input class="inputData" type="text" placeholder="Naissance" name="birth" id="birth" required>

          <label class="data" for="tags"><b>Décès</b></label>
          <input class="inputData" type="text" placeholder="Date du décès (optionnel)" name="death" id="death">

          <label class="data" for="function"><b>Fonction(s) (séparées d'une virgule)</b></label>
          <input class="inputData" type="text" placeholder="Liste des Fonctions qu'il a occupé durant sa vie" name="function" id="function">
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
  </form> 