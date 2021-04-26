<link rel="stylesheet" href="css/federation1.css">
<script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet'/>
<?php 
    require_once 'php/init.php';
    $listClubBeforeFetch = $db->query('SELECT * FROM marqueur WHERE club_comite like "club"');
    $listClub = $listClubBeforeFetch->fetchAll(PDO::FETCH_ASSOC);
    $listComiteBeforeFetch = $db->query('SELECT * FROM marqueur WHERE club_comite="comite"');
    $listComite = $listComiteBeforeFetch->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($listClub);
?>
<div class="container mt-5">
        <!-- Titre -->
        <div class="text-center">
            <div style="padding: 50px; display: inline-flex;">
                <h1 class="content-title-blue">Les Régions</h1><h1>&nbsp;et&nbsp;</h1><h1 class="content-title-red">Clubs</h1>
            </div>
        </div>
        <!-- Chargement de la map grande taille -->
        <div class="row">
            <div class="col-sm-12">
                <div id='map' style='width: auto; height: 600px;'></div>
                <div class='map-overlay' id='legend'></div>
            </div>
        </div>
        <!-- Liste des Comités Régionaux -->
        <div class="text-center">
            <!-- Titre -->
            <div style="padding: 50px; display: inline-flex;">
                <h2 class="content-title-blue">Les Régions</h2>
            </div>
            <!-- Liste -->
            <div>
                Liste des comités et leurs infos
            </div>
        </div>
        <!-- Liste des clubs -->
        <div class="text-center">
            <!-- Titre -->
            <div style="padding: 50px; display: inline-flex;">
                <h2 class="content-title-red">Les clubs</h2>
            </div>
            <!-- Liste -->
            <div>
                <?php 
                foreach ($listClub as $club){
                    $contact = explode("–", $club['contact']);
                    $contactSentence = "<p>Contact :<br>";
                    for ($i=0;$i <count($contact); $i++){
                        if ($contact[$i] == ""){
                            $contactSentence .= "-----";
                        }elseif ($i+1 ==count($contact)) {
                            $contactSentence .= " ".$contact[$i];
                        }else {
                            $contactSentence .= " ".$contact[$i]." -";
                        }
                    }
                    echo '<p><strong><a href='.$club['lien'].' target=_blank style=color:#e82226;>'.$club['titre'].'</a></strong></p>',
                    '<p>Enseignant principal : '.$club["enseignant"].'</p>',
                    ''.$contactSentence.'</p>';
                }

                ?>
            </div>
        </div>
    </div>
    <!-- Scripts et configurations de la map -->
        <script>
            // Génération de la map
    mapboxgl.accessToken = 'pk.eyJ1IjoieWFuaXNqIiwiYSI6ImNrbHZlajB4ajB2dGUzMW13cmllNGc3YzkifQ.4dAbWneZCPCv8o2MidDbyQ';
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [2.40,46.70],
    zoom: 5.1
    });
    // Au chargement de la map >
    map.on('load', function () {
        // Légendes de la carte
        var layers = ['Comités régionaux', 'Clubs'];
        var colors = ['#1c55a3', '#e82226'];
        for (i = 0; i < layers.length; i++) {
            var layer = layers[i];
            var color = colors[i];
            var item = document.createElement('div');
            var key = document.createElement('span');
            key.className = 'legend-key';
            key.style.backgroundColor = color;

            var value = document.createElement('span');
            value.innerHTML = layer;
            item.appendChild(key);
            item.appendChild(value);
            legend.appendChild(item);
        }
        // Chargement des deux markers utilisés
        const markers = [
            {url: 'assets/img/markers/blue_marker1.png', id: 'blue_marker'},
            {url: 'assets/img/markers/red_marker1.png', id: 'red_marker'}
        ]
        // Chargement HTML des markers
        markers.forEach(marker => {
            map.loadImage(marker.url, function(error,image){
                map.addImage(marker.id,image, {
                    pixelRatio : 1.25,
                });
            })
        });
        
        // Liste des clubs, avec position et description
        map.addSource('club', {
                    'type': 'geojson',
                        'data': {
                            'type': 'FeatureCollection',
                            'features': [
                                <?php                                  
                                foreach ($listClub as $club){
                                    $coo = unserialize(base64_decode($club['coordonee']));
                                    $contact = explode("–", $club['contact']);
                                    $contactSentence = "<p>Contact :<br>";
                                    for ($i=0;$i <count($contact); $i++){
                                        if ($contact[$i] == ""){
                                            $contactSentence .= "-----";
                                        }elseif ($i+1 ==count($contact)) {
                                            $contactSentence .= " ".$contact[$i];
                                        }else {
                                            $contactSentence .= " ".$contact[$i]." -";
                                        }
                                        
                                    }
                                    //print_r($contact);
                                    
                                    if (count($coo) > 1){
                                        echo "{",
                                            "'type': 'Feature',",
                                            "'properties': {",
                                                "'description': ",
                                                    '"<p><strong><a href='.$club['lien'].' target=_blank style=color:#e82226;>'.$club['titre'].'</a></strong></p><p>Enseignant principal : '.$club["enseignant"].'</p>',
                                                    ''.$contactSentence.'</p>',
                                                    '"},',
                                            "'geometry': {",
                                                "'type': 'Point',",
                                                "'coordinates': [".(float)$coo[1].','.(float)$coo[0]."]",
                                                "}",
                                            "},";
                                    }
                                }
                                ?>
                            ]
                        }
                    });
        // Liste des comités, avec position et description
        map.addSource('comite', {
                    'type': 'geojson',
                        'data': {
                            'type': 'FeatureCollection',
                            'features': [
                                <?php                                  
                                foreach ($listComite as $club){
                                    $coo = unserialize(base64_decode($club['coordonee']));
                                    $contact = explode("–", $club['contact']);
                                    $contactSentence = "<p>Contact :<br>";
                                    for ($i=0;$i <count($contact); $i++){
                                        if ($contact[$i] == ""){
                                            $contactSentence .= "-----";
                                        }elseif ($i+1 ==count($contact)) {
                                            $contactSentence .= " ".$contact[$i];
                                        }else {
                                            $contactSentence .= " ".$contact[$i]." -";
                                        }
                                        
                                    }
                                    //print_r($contact);
                                    
                                    if (count($coo) > 1){
                                        echo "{",
                                            "'type': 'Feature',",
                                            "'properties': {",
                                                "'description': ",
                                                    '"<p><strong><a href='.$club['lien'].' target=_blank style=color:#e82226;>'.$club['lien'].'</a></strong></p><p>Enseignant principal : '.$club["enseignant"].'</p>',
                                                    ''.$contactSentence.'</p>',
                                                    '"},',
                                            "'geometry': {",
                                                "'type': 'Point',",
                                                "'coordinates': [".(float)$coo[1].','.(float)$coo[0]."]",
                                                "}",
                                            "},";
                                    }
                                }
                                ?>
                            ]
                        }
                    });
                    
                    
                    // Add a symbol layer
                    map.addLayer({
                        'id': 'regions',
                        'type': 'symbol',
                        'source': 'comite',
                        'layout': {
                            'icon-image': 'blue_marker'
                        }   
                    });
                    map.addLayer({
                        'id': 'clubs',
                        'type': 'symbol',
                        'source': 'club',
                        'layout': {
                            'icon-image': 'red_marker'
                        }   
                    },'regions');
                }
            );

        // Zoom sur la position d'un comité une fois click dessus
        map.on('click', 'regions', function (e) {
            // Centre la carte sur un click d'un comité
            map.flyTo({
                center: e.features[0].geometry.coordinates,
                zoom:10
            });

            var coordinates = e.features[0].geometry.coordinates.slice();
            var description = e.features[0].properties.description;
            
            // Check si c'est pas déjà zoom
            while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
            coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
            }
            // Affiche le popup avec les infos du comité cliqué
            new mapboxgl.Popup()
            .setLngLat(coordinates)
            .setHTML(description)
            .addTo(map);
        });
        
        // Change le curseur une fois la souris sur le marker
        map.on('mouseenter', 'regions', function () {
            map.getCanvas().style.cursor = 'pointer';
        });
        
        // Change le curseur quand la souris quitte le marker
        map.on('mouseleave', 'regions', function () {
            map.getCanvas().style.cursor = '';
            });
            
        // Zoom sur la position d'un club une fois click dessus
        map.on('click', 'clubs', function (e) {
            // Centre la carte sur un click d'un club
            map.flyTo({
                center: e.features[0].geometry.coordinates,
                zoom:10
            });
            var coordinates = e.features[0].geometry.coordinates.slice();
            var description = e.features[0].properties.description;
            
            // Check si c'est pas déjà zoom
            while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
            coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
            }
            // Affiche le popup avec les infos du club cliqué
            new mapboxgl.Popup()
            .setLngLat(coordinates)
            .setHTML(description)
            .addTo(map);
        });
        
        // Change le curseur une fois la souris sur le marker
        map.on('mouseenter', 'clubs', function () {
            map.getCanvas().style.cursor = 'pointer';
        });
        
        // Change le curseur quand la souris quitte le marker
        map.on('mouseleave', 'clubs', function () {
            map.getCanvas().style.cursor = '';
            });

    </script>