<link rel="stylesheet" href="css/add.css">
<form action="php/management/addObjectDB.php">
    <div id="container" class="container">
        <div class="text-center"> 
            <h1 id="addGM" class="content-title-blue">Créer un nouvel évènement</h1>
        </div>
    <div class="row">
        

        <div class="col-sm-6">
            <label class="data" for="title"><b>Titre</b></label>
            <input class="inputData" type="text" placeholder="Titre" name="title" id="title" required>

            <label class="data" for="debut"><b>Date de Début de l'évènement</b></label>
            <input class="inputData" type="text" placeholder="jj/mm/aaaa" name="debut" id="dateDebut">
            <label class="data" for="fin"><b>Date de Fin de l'évènement</b></label>
            <input class="inputData" type="text" placeholder="jj/mm/aaaa" name="fin" id="dateFin">
        </div>

        <div class="col-sm-6">
            <div id="categoryContainer">
                <label class="data" for="event"><b>Type d'évènement</b></label>
                <input class="inputData" list="list" type="text" placeholder="  -" name="event" id="event" required>
                <datalist id="list">
                    <option value="Compétition">
                    <option value="Stage">
                    <option value="Formation">
                    <option value="Autre">
                </datalist>
            </div>
            <label class="data" for="prerequis"><b>Prérequis</b></label>
            <input class="inputData" type="text" placeholder="Prérequis (Optionnel, comme dans le cas d'un stage)" name="prerequis" id="prerequis">
        </div>

        <div class="col-sm-12">
            <label class="data" for="description"><b>Description</b></label>
            <textarea class="inputData" rows="4" cols="100" name="description" placeholder="Description.." id="description"></textarea>
        </div>        

        <div id="btn-object">
            <div id="btn-reset">
                <a onclick="history.go(-1);"><button class="btn-annul hidden annim" type="button" id='undo'>Annuler</button></a>
            </div>
            <div id="btn-Action">
                <input type="submit" class="btn-modObject annim" value="Confirmer" name="submit" id="confirm">
            </div>
        </div>
    </div>
    </div> 
</form> 