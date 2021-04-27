<link rel="stylesheet" href="css/add.css">
<!-- The map-->
<script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet'/>
<!-- GeoCoding, to transform simple address to Coordinate on the map-->
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css" type="text/css">
<script src="https://unpkg.com/es6-promise@4.2.4/dist/es6-promise.auto.min.js"></script>
<script src="https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.min.js"></script>

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
            <style>
              body { margin: 0; padding: 0; }
              #map { position: relative; top: 0; bottom: 20%; width: 80%; height: 80%}
            </style>
            <div class="row">
              <div class="col-sm-6"><div id=map></div></div>
              <div class="col-sm-6"><div id="coordonee"></div>
            </div> 
            <label class="data disabled" for="result"> <b>Coordonée GPS</b></label>
            <input class="list-group-item disabled" type="text" name="result" id="coo" placeholder="GPS">
          </div>
        </div> 
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
  </form> 
  
  
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoieWFuaXNqIiwiYSI6ImNrbHZlajB4ajB2dGUzMW13cmllNGc3YzkifQ.4dAbWneZCPCv8o2MidDbyQ';
var map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/mapbox/streets-v11',
  center: [-79.4512, 43.6568],
  zoom: 13
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
results.innerText = '';
});
</script>