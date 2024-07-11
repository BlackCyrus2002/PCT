<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('head.php') ?>
    <title>Maps Artisan</title>
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
        <div id="map" style="height: 400px; width: 100%;border-radius:10px;box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.267);z-index:1">
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

            var positions = [
                [5.434429, -3.985790],
                [5.427659, -3.986595],
                [5.369792, -4.000857],
                [5.411834, -4.019740],
                [5.398162, -3.983176],
                [5.446183, -3.998111],
                [5.454386, -3.965495],
                [5.420037, -3.957598],
                [5.387225, -3.989527],
                [5.377996, -3.957083]
            ];

            positions.forEach(function(pos) {
                var marker = L.marker([pos[0], pos[1]]).addTo(map)
                    .bindPopup('artisan')
                    .openPopup();
            });

        }

        document.addEventListener('DOMContentLoaded', initMap);
    </script>

</body>

</html>