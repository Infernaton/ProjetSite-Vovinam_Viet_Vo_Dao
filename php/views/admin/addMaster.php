?>

<!doctype html>
<html lang="fr">
<link rel="stylesheet" href="css/addObjectpage.css">

<body>

  <form action="php/management/addMasterDB.php">
    <div id="container" class="container">

        <h1>Ajout un Grand Maître à la Galerie</h1>

        <label class="data" for="name"><b>Nom</b></label>
        <input class="inputData" type="text" placeholder="Nom" name="name" id="name" required>

        <label class="data" for="image"><b>Lien Image</b></label>
        <input class="inputData" type="text" placeholder="Lien d'une Image" name="image" id="image" required>

        <label class="data" for="description"><b>Biographie</b></label>
        <textarea class="inputData" rows="4" cols="50" placeholder="Biographie.." name="biography" id="biography" required></textarea>

        <label class="data" for="category"><b>Naissance</b></label>
        <input class="inputData" type="text" placeholder="Naissance" name="birth" id="birth" required>

        <label class="data" for="tags"><b>Décès</b></label>
        <input class="inputData" type="text" placeholder="Date du décès (optionnel)" name="death" id="death">

        <div id="btn-object">
            <a onclick="history.go(-1);"><button class="btn-annul annim" type="button" id='undo'>Annuler</button></a>
        </div>
        <div id="btn-Action">
            <input type="submit" class="btn-modObject annim" value="Confirmer" name="submit" id="confirm">
        </div>
      </div>
    </div> 
  </form> 
</body> 