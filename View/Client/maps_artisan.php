<?php require_once('../../App/Config/database.php') ?>
<?php require_once('error_message.php') ?>
<?php require_once('../../App/Model/all_art.php') ?>
<?php require_once('../../App/Model/all_metier.php') ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('head.php') ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <title>Localisation d'artisan </title>
</head>

<body>

    <!--partie de l'entete-->
    <header>
        <div>
            <div class="logo"><img src="../../Public/image/logo.jpg" alt=""></div>
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
        <input type="text" id="searchInput" placeholder="Rechercher un métier..." style="margin-bottom: 10px;"
            class="form-control">
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

    <script>
    function initMap() {
        var mapOptions = {
            zoom: 12,
            center: [0, 0]
        };

        var map = L.map('map').setView(mapOptions.center, mapOptions.zoom);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; 2024 Mon artisan'
        }).addTo(map);

        //Ce tableau est encodé en JSON et intégré dans le script JavaScript.
        var positions = <?php echo json_encode($positions); ?>;
        positions.forEach(function(pos) {
            //le contenu du popup (popup) est construit en concaténant le métier et le nom de la personne, séparés par une balise <br> pour un retour à la ligne.
            var popup = pos.metier + "<br>" + pos.personne;

            //Le script JavaScript utilise la longitude et la latitude pour placer les marqueurs sur la carte.
            var marker = L.marker([pos.latitude, pos.longitude]).addTo(map)
                .bindPopup(popup)
                .openPopup();
        });

    }

    document.addEventListener('DOMContentLoaded', initMap);
    </script>

</body>

</html>