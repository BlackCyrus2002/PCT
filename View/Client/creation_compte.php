<?php require_once('../../App/Config/database.php') ?>
<?php require_once('error_message.php') ?>
<?php require_once('../../App/Model/art_insc.php') ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />

    <link rel="stylesheet" href="../../Public/css/creation_de_compte.css">
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <title>Inscription</title>

</head>

<body>

    <form method="post" enctype="multipart/form-data">
        <div class="container"><br>
            <h2>Création de compte</h2>
            <h3>Information sur l'artisan</h3>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" required name="nom" id="nom">
                        <span style="color:red">
                            <?php echo $nom_error ?>
                        </span><br>
                    </div>
                    <div class="col-md-6">
                        <label for="prenom"> Prénom</label>
                        <input type="text" class="form-control" required name="prenom" id="prenom">
                        <span style="color:red">
                            <?php echo $prenom_error ?>
                        </span><br>

                    </div>
                    <div class="col-md-8">
                        <label for="sexe"> Sexe</label>
                        <select name="sexe" id="sexe" class="form-control" required>
                            <option value="">Selectionner votre sexe </option>
                            <option value="H">Homme</option>
                            <option value="F">Femme</option>
                        </select>
                        <span style="color:red">
                            <?php echo $sexe_error ?>
                        </span><br>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="telephone">Téléphone</label>
                        <input type="text" class="form-control" required name="telephone" id="telephone">
                        <span style="color:red">
                            <?php echo $telephone_error ?>
                        </span><br>
                    </div>
                    <div class="col-md-6">
                        <label for="tel_wa">WhatsApp</label>
                        <input type="number" class="form-control" name="tel_wa" id="tel_wa"><br>
                    </div>
                </div>
            </div>
            <h3>Information sur votre métier</h3>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <label for="metier"> Votre métier</label>
                        <input type="text" name="metier" id="metier" class="form-control" required>
                        <span style="color:red">
                            <?php echo $metier_error ?>
                        </span><br>
                    </div>
                </div>
                <div>
                    <label>Heure d'activité ?</label>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="deb_act">Début (H)</label>
                            <input type="number" class="form-control" required name="deb_act" id="deb_act" />
                            <span style="color:red">
                                <?php echo $deb_act_error ?>
                            </span><br>
                        </div>
                        <div class="col-sm-6">
                            <label for="fin_act">Fin (H)</label>
                            <input type="number" class="form-control" required name="fin_act" id="fin_act">
                            <span style="color:red">
                                <?php echo $fin_act_error ?>
                            </span><br>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row" hidden>
                        <div class="col-sm-6">
                            <input type="text" name="longitude" id="longitude" class="form-control" required
                                readonly><br>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="latitude" id="latitude" class="form-control" required readonly>
                        </div>

                    </div><br>
                    <div id="map"
                        style="height: 400px;border-radius:10px;box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.267);z-index:1"
                        hidden>
                    </div>
                </div>
            </div>

            <div>
                <center>
                    <button type="submit" name="suivant">Suivant</button>
                </center>
            </div>
        </div>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <script>
    var map = L.map('map').setView([5.345317, -4.024429], 13); // Initial center

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '© 2024 Mon artisan'
    }).addTo(map);

    // Add geocoder search control
    var geocoder = L.Control.Geocoder.nominatim();
    L.Control.geocoder({
            geocoder: geocoder,
            defaultMarkGeocode: false
        })
        .on('markgeocode', function(e) {
            var lat = e.geocode.center.lat;
            var lon = e.geocode.center.lng;
            document.getElementById('latitude').value = lat;
            document.getElementById('longitude').value = lon;

            if (marker) {
                map.removeLayer(marker);
            }

            marker = L.marker([lat, lon]).addTo(map)
                .bindPopup(e.geocode.name)
                .openPopup();

            map.setView([lat, lon], 13);
        })
        .addTo(map);

    // Get user's location
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var lat = position.coords.latitude;
            var lon = position.coords.longitude;
            document.getElementById('latitude').value = lat;
            document.getElementById('longitude').value = lon;

        });
    }

    // Handle map clicks
    var marker;
    map.on('click', function(e) {
        var lat = e.latlng.lat;
        var lon = e.latlng.lng;
        document.getElementById('latitude').value = lat;
        document.getElementById('longitude').value = lon;

        if (marker) {
            map.removeLayer(marker);
        }

        marker = L.marker([lat, lon]).addTo(map)
            .bindPopup('Emplacement sélectionné.')
            .openPopup();
    });
    </script>

</body>

</html>