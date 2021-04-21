<link rel="stylesheet" href="css/federation.css">
<script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet'/>

<div class="container">
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
                <div class='map-overlay' id='features'><h4 style="margin: 10px;">Carte des comités régionaux et leur clubs</h4></div>
                <div class='map-overlay' id='legend'></div>
            </div>
        </div>
        <!-- Liste des Comités Régionaux -->
        <div class="text-center">
            <!-- Titre -->
            <div style="padding: 50px; display: inline-flex;">
                <h1 class="content-title-blue">Les Régions</h1>
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
                <h1 class="content-title-red">Les clubs</h1>
            </div>
            <!-- Liste -->
            <div>
                Liste des clubs par régions et leurs infos
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
    center: [2.40,47.45],
    zoom: 5
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
            {url: '../assets/img/markers/blue_marker.png', id: 'blue_marker'},
            {url: '../assets/img/markers/red_marker.png', id: 'red_marker'}
        ]
        // Chargement HTML des markers
        markers.forEach(marker => {
            map.loadImage(marker.url, function(error,image){
                map.addImage(marker.id,image);
            })
        });
        // Liste des clubs, avec position et description
        map.addSource('club', {
                    'type': 'geojson',
                        'data': {
                            'type': 'FeatureCollection',
                            'features': [
                                {
                                'type': 'Feature',
                                'properties': {'description':
                                                "<strong>ECOLE VOVINAM VIET VO DAO- Paris 12E</strong><p><a href='http://paris.vovinam.fr' target='_blank' style='color:#e82226;'>ECOLE VOVINAM VIET VO DAO</a></p><p>Enseignant principal : Maître SFORZA Aldo</p><p>Contact : NGUYỄN Hùng – <a style='color:#e82226;' href='tel:06.62.12.72.28'>06.62.12.72.28</a></p>",},
                                'geometry': {
                                    'type': 'Point',
                                    'coordinates': [2.40148012,48.8326985]
                                    }
                                },
                                {
                                'type': 'Feature',
                                'properties': {'description':
                                                "<strong>U.M.S.P.C SECT. VOVINAM VIET VO DAO</strong><p><a href='http://vovinam.pontault.free.fr' target='_blank' style='color:#e82226;'>U.M.S.P.C SECT. VOVINAM VIET VO DAO</a></p><p>Enseignant principal : Maître TRẰN Antonella</p><p>Contact : MARTINS Daniel  – <a style='color:#e82226;' href='tel:06.66.02.39.47'>06.66.02.39.47</a></p>",},
                                'geometry': {
                                    'type': 'Point',
                                    'coordinates': [2.603671,48.778046]
                                    }
                                },
                                {
                                'type': 'Feature',
                                'properties': {'description':
                                                "<strong>ASS.CULTURELLE VOVINAM V.V.D. 77</strong><p><a href='http://vovinam.moissy.free.fr' target='_blank' style='color:#e82226;'>ASS.CULTURELLE VOVINAM V.V.D. 77</a></p><p>Enseignant principal : MARTINS Daniel</p><p>Contact : MARTINS Daniel  – <a style='color:#e82226;' href='tel:06.66.02.39.47'>06.66.02.39.47</a></p>",},
                                'geometry': {
                                    'type': 'Point',
                                    'coordinates': [2.5790146, 48.633755]
                                    }
                                }

                            ]
                        }
                    })
        // Liste des comités, avec position et description
        map.addSource('comite', {
                    'type': 'geojson',
                        'data': {
                            'type': 'FeatureCollection',
                            'features': [
                                {
                                'type': 'Feature',
                                'properties': {'description':
                                                "<strong>Comité Vovinam-Viet Vo Dao de Normandie</strong><p><a href='http://www.vovinam-caen.com' target='_blank' style='color:blue;'>Comité de Normandie</a></p>",},
                                'geometry': {
                                    'type': 'Point',
                                    'coordinates': [-0.357452,49.189114]
                                    }
                                }
                                ,
                                {
                                'type': 'Feature',
                                'properties': {'description':
                                                "<strong>Comité Vovinam-Viet Vo Dao du Grand-Est</strong><p><a href='http://www.vovinam-reims.com' target='_blank' style='color:blue;'>Comité du Grand-Est</a></p>",},
                                'geometry': {
                                    'type': 'Point',
                                    'coordinates': [4.023365,49.273242]
                                    }
                                },
                                {
                                'type': 'Feature',
                                'properties': {'description':
                                                "<strong>Comité Vovinam-Viet Vo Dao d'Île de France</strong><p><a href='http://www.vovinam-idf.fr' target='_blank' style='color:blue;'>Comité d'Île de France</a></p>",},
                                'geometry': {
                                    'type': 'Point',
                                    'coordinates': [2.293141,48.687693]
                                    }
                                },
                                {
                                'type': 'Feature',
                                'properties': {'description':
                                                "<strong>Comité Vovinam-Viet Vo Dao de la Nouvelle-Aquitaine (Limousin) </strong><p><a href='http://www.vovinam-limousin.fr' target='_blank' style='color:blue;'>Comité de la Nouvelle-Aquitaine</a></p>",},
                                'geometry': {
                                    'type': 'Point',
                                    'coordinates': [1.303053,45.916689]
                                    }
                                },
                                {
                                'type': 'Feature',
                                'properties': {'description':
                                                "<strong>Comité Vovinam-Viet Vo Dao de la Nouvelle-Aquitaine (Poitiers) </strong><p><a href='http://www.vovinam-caen.com' target='_blank' style='color:blue;'>Comité de la Nouvelle-Aquitaine</a></p>",},
                                'geometry': {
                                    'type': 'Point',
                                    'coordinates': [0.388512,46.573685]
                                    }
                                },
                                {
                                'type': 'Feature',
                                'properties': {'description':
                                                "<strong>Comité Vovinam-Viet Vo Dao d'Auvergne-Rhône-Alpes</strong><p><a href='http://www.vietvodaolyon.free.fr' target='_blank' style='color:blue;'>Comité d'Auvergne-Rhône-Alpes</a></p>",},
                                'geometry': {
                                    'type': 'Point',
                                    'coordinates': [4.694197,45.766722]
                                    }
                                }
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


        
        // Centre la carte sur un click d'un comité
        map.on('click', 'regions', function (e) {
            map.flyTo({
            center: e.features[0].geometry.coordinates,
            zoom:10
            });
        });
        // Zoom sur la position d'un comité une fois click dessus
        map.on('click', 'regions', function (e) {
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
            
        // Centre la carte sur un click d'un club
        map.on('click', 'clubs', function (e) {
            map.flyTo({
            center: e.features[0].geometry.coordinates,
            zoom:10
            });
        });
        // Zoom sur la position d'un club une fois click dessus
        map.on('click', 'clubs', function (e) {
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