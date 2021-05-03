<link rel="stylesheet" href="css/add1.css">
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
    margin-left: 35%;
  }
</style>

<form action="php/management/addLocationDB.php">
  <div id="container" class="container mt-5">
    <div class="text-center"><h1 class="content-title-red">Ajouter un Club</h1></div>
  
    <div class="row pt-5">
    <div class="col-sm-8">
      <div id="coordonee"></div>
      <div id=map></div>
    </div>
    <div class="col-sm-4 ">
      
      <div class="form">
        <label class="data" for="titre"><b>Titre</b></label>
        <input class="inputData" type="text" placeholder="Nom du club" name="titre" id="titre" required>
      </div>
      <div class="form">
        <label class="data" for="Enseignant"><b>Enseignant Principal</b></label>
        <input class="inputData" type="text" placeholder="Nom de l'enseignant" name="enseignant" id="enseignant" >
      </div>
      <div class="form">
        <label class="data" for="Contact"><b>Contacter le club</b></label>
        <input class="inputData" type="text" placeholder="Contact" name="contact" id="contact">
      </div>
      <div class="form">
        <label class="data" for="lien"><b>Lien du site Web</b></label>
        <input class="inputData" type="text" placeholder="Lien du site" name="lien" id="lien">
      </div>
      <div class="form">
        <label class="data disabled" for="result"> <b>Coordonée GPS</b></label>
        <input class="list-group-item disabled" type="text" name="result" id="coo" placeholder="GPS" required>
      </div>
          
      <div class ="d-flex justify-content-between mb-3">
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
mapboxgl.accessToken = 'pk.eyJ1IjoieWFuaXNqIiwiYSI6ImNrbHZlajB4ajB2dGUzMW13cmllNGc3YzkifQ.4dAbWneZCPCv8o2MidDbyQ';
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