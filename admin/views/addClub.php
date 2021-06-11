<?php
//Get the index of the current master in the url
$currentClub = null;
$req = $db->query('SELECT * FROM marqueur WHERE club_comite LIKE "comite" ORDER BY id');
$comiteDB =$req->fetchAll(PDO::FETCH_ASSOC);
if (isset($_GET['club'])) {
  if ($_GET['club'] != null) {
    $index = $_GET['club'];
    $req = $db->query('SELECT * FROM marqueur as s WHERE s.id = '.$index.'');
    $currentClub = $req->fetch(PDO::FETCH_ASSOC);
    $currentClub['coordonee'] = [unserialize(base64_decode($currentClub['coordonee']))[1],unserialize(base64_decode($currentClub['coordonee']))[0]];
    //var_dump($currentClub);
  } else {
    $index = -1;
  }
} else {
  $index = -1;
}
?>
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

<form action="management/addLocationDB.php" method="post" enctype="multipart/form-data">
  <div id="container" class="container">

    <div class="text-center">
      <div class="p-2" style="float:left;">
        <a onclick="history.go(-1);"><button class="btn-annul annim" type="button">← Retour</button></a>
      </div>
      <h1 class="content-title-red">Ajouter un Club</h1>
      <br><br>
      <h5> <span class="note">*</span> : Champs Obligatoires</h5>
    </div>
  
    <div class="row pt-3">
      <div class="col-12 col-md-8">
        <div class="row">
          <div class="col-12">
            <div id="coordonee"></div>
          </div>
          <div class="col-12">
            <div id="map" style="height:400px; max-height:100%"></div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <div class="row mt-3">
          <div class="col-12">
            <label class="data" for="titre"><b>Titre</b><span class="note">*</span></label>
            <input class="inputData form-control" type="text" placeholder="Nom du club" name="titre" id="titre" required>
          </div>

          <div class="col-12">
            <label class="data" for="Enseignant"><b>Enseignant Principal</b></label>
            <input class="inputData form-control" type="text" placeholder="Nom" name="enseignant" id="enseignant" >
          </div>

          <div class="col-12">
            <label class="data" for="Contact"><b>Contacter le club</b></label>
            <input class="inputData form-control" type="text" placeholder="Nom - Tél - Mail (si fournis)" name="contact" id="contact">
          </div>

          <div class="col-12">
            <div class="row">
              <div class="col-12 col-md-6">
                <label class="data" for="lien"><b>Lien du site Web</b></label>
                <input class="inputData form-control" type="text" placeholder="http:\\ ..." name="lien" id="lien">
              </div>

              <div class="col-12 col-md-6">
                <label class="data" for="comite"><b>Comite</b><span class="note">*</span></label>
                <select style="overflow-y:auto;" name="list" id="comite" onchange="comiteData(this.value)" class="custom-select inputData form-control">
                  <?php 
                    foreach ($comiteDB as $comite){
                      echo '<option value="'.$comite["titre"].'">'.$comite["titre"].'</option>';
                    }
                  ?>
                <input class="hide" type="text" name="comiteValue" id="comiteValue" value="" required>
              </div>
            </div>
          </div>

          <div class="col-12 mt-3">
            <input class="list-group-item form-control" type="text" name="result" id="coo" placeholder="Coordonée GPS" required readonly>
          </div>
          <input class="hide" name="currentClub" value="<?php echo $index?>" id="currentClub">
        </div> 

        <div class ="d-flex justify-content-between mt-3">
          <button type="button" class="btn-annul annim" type="button" id='undo'><a onclick="history.go(-1);">Annuler</a></button>
          <button type="submit" class="btn-modObject annim undo hide" value="delete" name="submit" id="delete">Supprimer</button>
          <button type="submit" class="btn-modObject annim confirm" value="valid" name="submit" id="confirm">Valider</button>
        </div>
      </div>
    </div>

  </div>
</form> 

<script>
let centerMap, zoomMap;
if (<?php echo $index ?>!= -1){
  centerMap = <?php echo json_encode($currentClub['coordonee'])?>; 
  zoomMap = 10;
}else {
  centerMap = [2, 47]; 
  zoomMap = 5;
}
mapboxgl.accessToken = '<?php echo getAccessToken()?>';
var map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/mapbox/streets-v11',
  center: centerMap,
  zoom: zoomMap
});
var geocoder = new MapboxGeocoder({
  accessToken: mapboxgl.accessToken,
  mapboxgl: mapboxgl
});

if (<?php echo $index?> != -1){
  map.on('load', function () {
    const marker = {url: '../assets/img/markers/red_marker1.png', id: 'red_marker'};
    map.loadImage(marker.url, function(error,image){
      map.addImage(marker.id,image, {
        pixelRatio : 0.8,
      });
    });

    map.addSource('club', {
      'type': 'geojson',
      'data': {
        'type': 'FeatureCollection',
        'features': [
          {
            'type': 'Feature',
            'properties': {
              'title': 'Ancien Point'
            },
            'geometry': {
              'type': 'Point',
              'coordinates': centerMap
            }
          }
        ]
      }
    })
    map.addLayer({
      'id': 'clubs',
      'type': 'symbol',
      'source': 'club',
      'layout': {
        'icon-image': 'red_marker',
      }   
    });
  })
}

//geocoder.addTo('#coordonee')
document.getElementById('coordonee').appendChild(geocoder.onAdd(map));

// Get the geocoder results container.
var results = document.getElementById('coo');
 
// Add geocoder result to container.
geocoder.on('result', function (e) {
  value = e.result.geometry.coordinates
  results.value = value
});
</script>

<script>
function comiteData(value) {
  //Name of a region -> Name of his symbole
  let comiteDB = <?php echo json_encode($comiteDB)?>;
  let input = document.getElementById("comiteValue");
  let isComiteExist = false;
  comiteDB.forEach(comite => {
    if (comite['titre'] == value) {
      isComiteExist = true;
      input.value = comite['Comite'];
    }
  })
}
function comiteDataReverse(value) {
  //Name of the symbole -> Name of his region
  let comiteDB = <?php echo json_encode($comiteDB)?>;
  let input = document.getElementById("comite");
  let isComiteExist = false;
  comiteDB.forEach(comite => {
    if (comite['Comite'] == value) {
      isComiteExist = true;
      input.value = comite['titre'];
    }
  })
}
</script>

<script>
if (<?php echo $index?> != -1){
  if (<?php echo json_encode($currentClub)?> != null){
    document.getElementsByTagName("h1")[0].innerHTML = "Modifier le Club";
    document.getElementById("confirm").value = "modify";
    document.getElementById("confirm").innerHTML = "Modifier";
    document.getElementById("delete").classList.remove('hide');
    document.getElementById("undo").classList.add('hide');

    document.getElementById("titre").value = "<?php echo $currentClub["titre"]?>";
    document.getElementById("enseignant").value = "<?php echo $currentClub["enseignant"]?>";
    document.getElementById("contact").value = "<?php echo $currentClub["contact"]?>";
    document.getElementById("lien").value = "<?php echo $currentClub["lien"]?>";
    document.getElementById("comiteValue").value = "<?php echo $currentClub["Comite"]?>";
    comiteDataReverse("<?php echo $currentClub["Comite"]?>")
    
    document.getElementById("coo").value = "<?php echo $currentClub['coordonee'][1].','.$currentClub['coordonee'][0]?>";
  }
}
</script>