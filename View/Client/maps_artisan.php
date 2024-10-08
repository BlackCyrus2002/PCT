<?php require_once('php_model.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('head_maps.php') ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch/dist/geosearch.css" />
</head>

<body>

    <!--partie de l'entete-->
    <header>
        <div>
            <div class="logo"><img src="../../Public/image/mylogo.png" alt=""></div>
        </div>
        <?php require('search.php') ?>
        <?php require('nav.php') ?>
    </header>
    <section>
        <div class="image_arriereplan">
            <p>Entrez en contacte avec tout les artizans que vous souhaitez !</p>
        </div>
    </section>
    <br>

    <section style="padding: 5%;">
        <form action="" method="post">
            <input type="text" id="searchInput" placeholder="Rechercher un métier..." style="margin-bottom: 10px;"
                class="form-control" name="art_job" required>
            <button type="submit" hidden name="art_search"></button>
        </form>
        <?php

        //Les positions des artisans sont collectées dans le tableau $positions
        $positions = [];
        while ($fil = mysqli_fetch_array($user)) {
            $positions[] = [
                'latitude' => $fil['latitude'],
                'longitude' => $fil['longitude'],
                'metier' => $fil['metier'],
                'personne' => $fil['nom'] . ' ' . $fil['prenom']
            ];
        }
        ?>
        <div id="map"
            style="height: 400px; width: 100%;border-radius:10px;box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.267);z-index:1">
        </div>
    </section>

    <?php require('footer.php') ?>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-geosearch/dist/geosearch.umd.js"></script>
    <script>
    function initMap() {
        var mapOptions = {
            zoom: 12,
            center: [8, 0]
        };

        var map = L.map('map').setView(mapOptions.center, mapOptions.zoom);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; 2024 Mon artisan'
        }).addTo(map);

        //Ce tableau est encodé en JSON et intégré dans le script JavaScript.
        var positions = <?php echo json_encode($positions); ?>;
        var markers = [];

        positions.forEach(function(pos) {
            //le contenu du popup (popup) est construit en concaténant le métier et le nom de la personne, séparés par une balise <br> pour un retour à la ligne.
            var popup = pos.metier + "<br>" + pos.personne;

            //Le script JavaScript utilise la longitude et la latitude pour placer les marqueurs sur la carte.
            var marker = L.marker([pos.latitude, pos.longitude]).addTo(map)
                .bindPopup(popup)
                .openPopup();
        });

        var markerLayer = L.layerGroup(markers).addTo(map);

        // Ajouter la barre de recherche
        const {
            GeoSearchControl,
            OpenStreetMapProvider
        } = window.GeoSearch;
        const provider = new OpenStreetMapProvider();

        const customMarkerIcon = L.icon({
            iconUrl: 'https://cdn4.iconfinder.com/data/icons/small-n-flat/24/map-marker-512.png', // Remplacez par l'URL de votre icône
            iconSize: [45, 45], // Taille de l'icône
            iconAnchor: [12, 41], // Point d'ancrage de l'icône
            popupAnchor: [1, -34], // Point d'ancrage de la popup
            shadowSize: [41, 41] // Taille de l'ombre
        });

        const searchControl = new GeoSearchControl({
            provider: provider,
            style: 'bar',
            autoComplete: true,
            autoCompleteDelay: 250,
            searchLabel: 'Entrer le lieu',
            marker: {
                icon: customMarkerIcon, // Utiliser l'icône personnalisée
                draggable: false, // Si vous voulez que le marqueur soit déplaçable
            }

        });

        map.addControl(searchControl);

        // Ajouter un marqueur pour la position actuelle de l'utilisateur
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var userLat = position.coords.latitude;
                var userLon = position.coords.longitude;

                var userMarker = L.marker([userLat, userLon], {
                    icon: L.icon({
                        iconUrl: 'https://cdn4.iconfinder.com/data/icons/small-n-flat/24/map-marker-512.png',
                        iconSize: [45, 45],
                        iconAnchor: [12, 41],
                        popupAnchor: [1, -34],
                        shadowSize: [41, 41]
                    })
                }).addTo(map).bindPopup("Moi").openPopup();

                map.setView([userLat, userLon], mapOptions.zoom);
            });
        } else {
            alert("La géolocalisation n'est pas prise en charge par ce navigateur.");
        }

    }

    document.addEventListener('DOMContentLoaded', initMap);
    </script>
</body>

</html>