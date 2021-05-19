<link rel="stylesheet" href="css/federation1.css">
<!-- The map-->
<script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet'/>
<!-- GeoCoding, to transform simple address to Coordinate on the map-->
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css" type="text/css">
<script src="https://unpkg.com/es6-promise@4.2.4/dist/es6-promise.auto.min.js"></script>
<script src="https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.min.js"></script>
<?php 
    require_once 'php/init.php';
    $listClubBeforeFetch = $db->query('SELECT * FROM marqueur WHERE club_comite like "club"');
    $listClub = $listClubBeforeFetch->fetchAll(PDO::FETCH_ASSOC);
    $listComiteBeforeFetch = $db->query('SELECT * FROM marqueur WHERE club_comite="comite"');
    $listComite = $listComiteBeforeFetch->fetchAll(PDO::FETCH_ASSOC);
?>
<style>
.tooltip-inner {
    background-color:white;
    color: black;
    box-shadow:3px 3px 2px black,
        inset 0 -3em 3em rgba(0,0,0,0.1),
             0 0  0 2px rgb(255,255,255),
             0.3em 0.3em 1em rgba(0,0,0);
}
.tooltip.bs-tooltip-bottom .arrow:before {
    border-bottom-color: black !important;
}
.tooltip.bs-tooltip-top .arrow:before {
    border-top-color: black !important;
}

.mapboxgl-popup-content {
    border-color: #91785D;
    max-width: 250px;
    box-shadow: 3px 3px 2px #8B5D33,
        inset 0 -3em 3em rgba(0,0,0,0.1),
             0 0  0 2px rgb(255,255,255),
             0.3em 0.3em 1em rgba(0,0,0,0.3);
    font-family: 'Oswald';
}
.mapboxgl-popup-anchor-top .mapboxgl-popup-tip,
.mapboxgl-popup-anchor-top-left .mapboxgl-popup-tip,
.mapboxgl-popup-anchor-top-right .mapboxgl-popup-tip {
    border-bottom-color: #e82226;
    }
.mapboxgl-popup-anchor-bottom .mapboxgl-popup-tip,
.mapboxgl-popup-anchor-bottom-left .mapboxgl-popup-tip,
.mapboxgl-popup-anchor-bottom-right .mapboxgl-popup-tip {
    border-top-color: #e82226;
    }
.mapboxgl-popup-anchor-left .mapboxgl-popup-tip {
    border-right-color: #e82226;
    }
.mapboxgl-popup-anchor-right .mapboxgl-popup-tip {
    border-left-color: #e82226;
    }
.inline-flex {
    display: inline-flex;
}
@media screen and (max-width: 767px) {
    .inline-flex{
        display: block;
    }
    h4 small{
        font-size:65%;
    }
}
</style>
<div class="container mt-2 mt-md-5">
        <!-- Titre -->
        <div class="text-center">
            <div class="mt-5 mb-5 inline-flex">
                <h1 class="content-title-blue">Les Régions</h1><h1>&nbsp;et&nbsp;</h1><h1 class="content-title-red">Clubs</h1>
            </div>
        </div>

        <!-- Chargement de la map grande taille -->
        <div class="row">
            <div class="col-12">
                <div id='map' style='width: auto; height: 600px;'></div>
                <div class='map-overlay' id='legend'></div>
            </div>
        </div>
        <!-- Liste des Comités Régionaux -->
        <div class="text-center">
            <!-- Titre -->
            <div class="row mt-5 mb-5">
                <div class="col-sm-12"> <h2 class="content-title-blue">Les Régions</h2> </div>
                <div class="col-sm-12"> <h4 class="text-info font-italic"><small><i class="fas fa-question-circle"></i> Cliquez sur un Comité ci-dessous pour voir les clubs se trouvant dans la même région</small></h4></div>
            </div>
            <!-- Liste -->
            <div class="row">
                <?php 
                foreach ($listComite as $comite){
                    $rt = explode(" : ", $comite['contact']);
                    $pdt = explode(" : ",$comite["enseignant"]);
                    $tooltipContent = "<p>Président de ce Comité : <br><strong>".$pdt[0]."</strong><br> (Contact: ".$pdt[1].")</p>".
                                    "<p>Responsable Technique : <br><strong>".$rt[0]."</strong><br> (Contact: ".$rt[1].")</p>"
                    ?>
                        <button class="col-12 col-sm-6 col-md-4 btn clickable" 
                            onClick='selectClub(["<?php echo $comite['Comite'].'","'.$comite['titre']?>"])' 
                            data-toggle="tooltip" title='<?php echo $tooltipContent?>'>
                            <h4><strong>Comité <?php echo $comite['titre']?> </strong></h4>
                            <p> Site web: <a href='<?php echo $comite['lien']?>' target='_blank' style=color:#e82226;>
                                <?php 
                                $lien = $comite['lien'];
                                $printLien = '';

                                strlen($lien) < 25? $count=strlen($lien):$count=25;
                                for($i=0;$i<$count;$i++){
                                    $printLien .= $lien[$i];
                                }
                                if ($count==25) { $printLien .= '...';}

                                echo $printLien; ?>
                            </a></p>
                        </button>
                                           
                    <hr>
                <?php
                }
                ?>                
            </div>
        </div>
        <!-- Liste des clubs -->
        <div class="text-center">
            <!-- Titre -->
            <div id="titleClub" class="row mt-5 mb-5">
                <div class="col-12"><h2 class="content-title-red">Les clubs</h2></div>
                <div class="col-12"><h3 id="select"><small></small></h3></div>
                <div class="col-12"> <h4 class="text-info font-italic"><small><i class="fas fa-question-circle"></i> Cliquez sur un Club pour connaître sa position sur la carte.</small></h4></div>
                
            </div>
            <!-- Liste -->
            <div id="listClub" class="row">
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
                    $tooltipClub = "<p>Enseignant principal : <br>".$club["enseignant"]."</p>".
                                    $contactSentence."</p>";
                    if (count($coo)==1) {
                        $coo = [null, null];
                    }
                    ?>
                    <div class="club col-12 col-sm-6 col-md-4 clickable" 
                        data-toggle="tooltip" title='<?php echo $tooltipClub?>'>
                            <div class="m-1">
                                <!--<h5><a href=<?php echo $club['lien']?> target=_blank style=color:#e82226;><?php echo $club['titre']?></a></h5>
                                <p class="hide comite"> <?php echo $club['Comite']?></p>-->
                                <h5><strong><?php echo $club['titre']?> </strong></h5>
                                <p> Site web: <a href='<?php echo $club['lien']?>' target='_blank' style=color:#e82226;>
                                <?php 
                                $lien = $club['lien'];
                                $printLien = '';

                                strlen($lien) < 25? $count=strlen($lien):$count=25;
                                for($i=0;$i<$count;$i++){
                                    $printLien .= $lien[$i];
                                }
                                if ($count==25) { $printLien .= '...';}

                                echo $printLien; ?>
                                </a></p>
                                <a class="link" onClick=zoomTo([<?php echo $coo[1].','.$coo[0]?>])>Montrer sur la carte</a>
                                <p class="hide comite"> <?php echo $club['Comite']?></p>
                            </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <script src="scripts/searchClub.js"></script>
    <script>
        //Tool Tip des Comités
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip({html: true, placement: "top"});   
        });
    </script>

    <!-- Configurations de la map -->
    <script>
    // Génération de la map
    mapboxgl.accessToken = '<?php echo getAccessToken()?>';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [2.40,46.70],
        zoom: 5.1
    });

    // Au chargement de la map
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
                    pixelRatio : 1.2,
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
                            $contactSentence = "<p><strong>Contact :</strong><br>";
                            for ($i=0;$i <count($contact); $i++){
                                if ($contact[$i] == ""){
                                    $contactSentence .= "-----";
                                }elseif ($i+1 == count($contact)) {
                                    $contactSentence .= " ".$contact[$i];
                                }else {
                                    $contactSentence .= " ".$contact[$i]." -";
                                }
                            }
                                                               
                            if (count($coo) > 1){ ?>
                                {
                                'type': 'Feature',
                                'properties': {
                                    'description':
                                        "<p><strong><a href='<?php echo $club['lien']?>' target='_blank' style=color:#e82226;><?php echo$club['titre'] ?></a></strong></p> <hr>" +
                                        "<p>Enseignant principal : <strong><?php echo $club["enseignant"] ?></strong></p>" +
                                        "<?php echo $contactSentence ?></p>",
                                    },
                                'geometry': {
                                    'type': 'Point',
                                    'coordinates': ["<?php echo (float)$coo[1] ?>","<?php echo (float)$coo[0]?>"],
                                    }
                                },
                            <?php
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
                                foreach ($listComite as $comite){
                                    $coord = unserialize(base64_decode($comite['coordonee']));

                                    $rt = explode(" : ", $comite['contact']);
                                    $pdt = explode(" : ",$comite["enseignant"]);
                                    
                                    if (count($coo) > 1){ ?>
                                        {
                                        'type': 'Feature',
                                        'properties': {
                                            'description':
                                                "<h4><strong>Comité <?php echo $comite['titre']?> </strong></h4>Site web: <a href='<?php echo $comite['lien']?>' target='_blank' style=color:#e82226;><?php echo $comite['lien'] ?></a> <hr>"+
                                                "<p>Président de ce Comité : <br><strong><?php echo $pdt[0]?></strong><br> (Contact: <?php echo $pdt[1] ?>)</p> <hr>" +
                                                "<p>Responsable Technique : <br><strong><?php echo $rt[0] ?></strong><br> (Contact: <?php echo $rt[1] ?>)</p>",
                                            },
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': ["<?php echo (float)$coord[1] ?>","<?php echo (float)$coord[0]?>"],
                                            }
                                        },
                                    <?php
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
                'icon-image': 'blue_marker',
                'visibility': 'visible',
            }   
        });
        map.addLayer({
            'id': 'clubs',
            'type': 'symbol',
            'source': 'club',
            'layout': {
                'icon-image': 'red_marker',
                'visibility': 'none',
                }   
        },'regions');
    });
    // Zoom sur la position d'un comité une fois click dessus
    map.on('click', 'regions', function (e) {
            // Centre la carte sur un click d'un comité
            map.flyTo({
                center: e.features[0].geometry.coordinates,
                zoom:7
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

    map.on('zoom', function () {
        if (map.getZoom() < 6){
            map.setLayoutProperty(
                'clubs',
                'visibility',
                'none'
            );
        }else {
            map.setLayoutProperty(
                'clubs',
                'visibility',
                'visible'
            );
        }
    });

    function zoomTo(coord){
        if (coord[0] != null){
            let scrollPageState = document.documentElement.scrollTop;
            for (let i=scrollPageState; i>210; i-=50){
                document.documentElement.scrollTop = i;
            }
            map.flyTo({
                center: coord,
                zoom: 12,
            });
        }
    }
    </script>