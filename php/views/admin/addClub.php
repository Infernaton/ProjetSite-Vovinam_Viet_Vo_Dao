<link rel="stylesheet" href="css/add.css">

  <form action="php/management/addLocationDB.php">
    <div id="container" class="container">
        <div class ="content">
          <h1>Ajouter un Club</h1>
          <div class="form">
            <label class="data" for="titre"><b>Titre</b></label>
            <input class="inputData" type="text" placeholder="Nom du club" name="titre" id="titre" required>
          </div>
          <div class="form">
            <label class="data" for="Enseignant"><b>Enseignant</b></label>
            <input class="inputData" type="text" placeholder="Nom de l'enseignant" name="enseignant" id="enseignant" >
          </div>
          <div class="form">
            <label class="data" for="Contact"><b>Contact</b></label>
            <input class="inputData" type="text" placeholder="Contact" name="contact" id="contact">
          </div>
          <div class="form">
            <label class="data" for="club / comite"><b>club / comite</b></label>
            <input class="inputData" type ="text" placeholder="club ou comite" name="club_comite" id="club_comite" required></input>
          </div>
          <div class="form">
            <label class="data" for="lien"><b>lien</b></label>
            <input class="inputData" type="text" placeholder="lien du site" name="lien" id="lien">
          </div>
          <div class="form">
            <label class="data" for="coordonée"><b>Coordonée</b></label>
            <input class="inputData" type="text" placeholder="Coordonée" name="coordonee" id="coordonee">
          </div>
          <div class ="boutton">
            <div id="btn-object">
                <a onclick="history.go(-1);"><button class="btn-annul annim" type="button" id='undo'>Annuler</button></a>
            </div>
            <div id="btn-Action">
                <input type="submit" class="btn-modObject annim" value="Confirmer" name="submit" id="confirm">
            </div>
          </div>
        </div>
      </div>
    </div> 
  </form> 