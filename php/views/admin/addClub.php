<?php
//Get the index of the current master in the url
$currentClub = null;
if (isset($_GET['club'])) {
  if ($_GET['club'] != null) {
    $index = $_GET['club'];
    $req = $db->query('SELECT * FROM marqueur as s WHERE s.id = '.$index.'');
    $currentClub = $req->fetch(PDO::FETCH_ASSOC);
  } else {
    $index = -1;
  }
} else {
  $index = -1;
}
?>

<link rel="stylesheet" href="css/add.css">
<!-- The map-->
<script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet'/>
<!-- GeoCoding, to transform simple address to Coordinate on the map-->
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css" type="text/css">
<script src="https://unpkg.com/es6-promise@4.2.4/dist/es6-promise.auto.min.js"></script>
<script src="https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.min.js"></script>

<style>
  body { margin: 0; padding: 0; }
  #map { 
    position: relative;
    top: 10%; 
    bottom: 20%; 
    width: 100%; 
    height: 80%
  }
  #coordonee {
    position: absolute;
    z-index: 1;
  }
</style>

<form action="php/management/addLocationDB.php">
  <div id="container" class="container mt-2 mt-md-5">
    <div class="text-center"><h1 class="content-title-red">Ajouter un Club</h1></div>
  
    <div class="row pt-5">
    <div class="col-12 col-md-8">
      <div class="row">
        <div class="col-12">
          <div id="coordonee" style=></div>
        </div>
        <div class="col-12">
          <div id="map" style="height:400px; max-height:100%"></div>
        </div>
      </div>
      
    </div>
    <div class="col-12 col-md-4">
      <div class="row mt-3">
      <div class="col-12">
        <label class="data" for="titre"><b>Titre</b></label>
        <input class="inputData form-control" type="text" placeholder="Nom du club" name="titre" id="titre" required>
      </div>
      <div class="col-12">
        <label class="data" for="Enseignant"><b>Enseignant Principal</b></label>
        <input class="inputData form-control" type="text" placeholder="Nom de l'enseignant" name="enseignant" id="enseignant" >
      </div>
      <div class="col-12">
        <label class="data" for="Contact"><b>Contacter le club</b></label>
        <input class="inputData form-control" type="text" placeholder="Contact" name="contact" id="contact">
      </div>
      <div class="col-12">
        <label class="data" for="lien"><b>Lien du site Web</b></label>
        <input class="inputData form-control" type="text" placeholder="Lien du site" name="lien" id="lien">
      </div>
      <div class="col-12 mt-3">
        <input class="list-group-item form-control" type="text" name="result" id="coo" placeholder="Coordonée GPS" required readonly>
      </div>
      </div>
          
      <div class ="d-flex justify-content-between mt-3">
        <div id="btn-object" class="p-2">
          <a onclick="history.go(-1);"><button class="btn-annul annim" type="button" id='undo'>Annuler</button></a>
        </div>
        <div id="btn-Action" class="p-2">
          <button type="submit" class="btn-modObject annim" value="valide" name="submit" id="confirm">Valider</button>
        </div>
      </div>
    </div>
    </div>
  </div>
</form> 
  
  
<script>
mapboxgl.accessToken = '<?php echo getAccessToken()?>';
var map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/mapbox/streets-v11',
  center: [2, 47],
  zoom: 4
});
var geocoder = new MapboxGeocoder({
  accessToken: mapboxgl.accessToken,
  //types: 'country,region,place,postcode,locality,neighborhood',
  mapboxgl: mapboxgl
});

//geocoder.addTo('#coordonee')
document.getElementById('coordonee').appendChild(geocoder.onAdd(map));

// Get the geocoder results container.
var results = document.getElementById('coo');
 
// Add geocoder result to container.
geocoder.on('result', function (e) {
  value = e.result.geometry.coordinates
  results.value = value
});
 
// Clear results container when search is cleared.
geocoder.on('clear', function () {
results.value = '';
});
</script>