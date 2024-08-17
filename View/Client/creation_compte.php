<?php require_once('../../App/Config/database.php') ?>
<?php require_once('error_message.php') ?>
<?php require_once('../../App/Model/art_insc.php') ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <link rel="shortcut icon" href="../../Public/image/mylogo.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Bootstrap Select CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

    <!-- Bootstrap Select JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <link rel="stylesheet" href="../../Public/css/creation_de_compte.css">
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

    <title>Inscription</title>
    <style>
    .select optgroup {
        font-weight: bold;
    }
    </style>
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
                            <?php echo $nom_error; ?>
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

                        <div style="text-align: left;">
                            <select name="metier" id="metier" class="selectpicker form-control " data-live-search="true"
                                required>
                                <option value="">Selectionner un métier</option>
                                <optgroup label="Agro-alimentaire, Alimentation, Restauration">
                                    <option value="Meuniers">Meuniers</option>
                                    <option value="Transformateurs de fruits et légumes">
                                        Transformateurs de fruits et légumes
                                    </option>
                                    <option value="Fabricants de condiments et assaisonnements">
                                        Fabricants de condiments et assaisonnements
                                    </option>
                                    <option value="Transformateurs de grains et de tubercules">
                                        Transformateurs de grains et de tubercules</option>
                                    <option value="Fabricants de produits amylacés">
                                        Fabricants de produits amylacés
                                    </option>
                                    <option value="Fabricants d’huiles et de graisses brutes">
                                        Fabricants d’huiles et de graisses brutes, raffinées et comestibles</option>
                                    <option value="Bouchers et charcutiers">
                                        Bouchers, charcutiers, transformateurs et conservateurs de viande et de
                                        volailles</option>
                                    <option value="Préparateurs de produits à base de viande">
                                        Préparateurs de produits à base de viande
                                    </option>
                                    <option value="Transformateurs de poissons et crustacés">
                                        Transformateurs et conservateurs de poissons, de crustacés et de mollusques
                                    </option>
                                    <option value="Fabricants de produits laitiers">
                                        Fabricants de produits laitiers et glaces alimentaires
                                    </option>
                                    <option value="Fabricants de beurre et de fromage">
                                        Fabricants de beurre, de fromage et de beurre de karité</option>
                                    <option value="Fabricants de boissons artisanales">
                                        Fabricants de boissons artisanales
                                    </option>
                                    <option value="Boulangers, pâtissiers, biscuitiers">
                                        Boulangers, pâtissiers, biscuitiers
                                    </option>
                                    <option value="Fabricants de friandises">
                                        Fabricants de friandises à base d’arachide, de
                                        sucre caramélé, de miel, de pâtes alimentaires
                                    </option>
                                    <option value="Petits restaurateurs">
                                        Petits restaurateurs, traiteurs, cuisiniers
                                    </option>
                                    <option value="Fabricants de plats et de galettes">
                                        Fabricants de plats, de galettes, beignets et
                                        d’autres produits alimentaires
                                    </option>
                                    <option value="Fabricants d’aliments pour animaux">
                                        Fabricants d’aliments pour animaux
                                    </option>
                                </optgroup>

                                <optgroup label="Mines et Carrières, Construction et Bâtiment">
                                    <option value="Orpailleurs traditionnels">
                                        Orpailleurs traditionnels
                                    </option>
                                    <option value="Extracteurs de produits de carrières, d’argiles,">
                                        Extracteurs de produits de carrières, d’argiles, de minéraux chimiques et
                                        d’engrais minéraux
                                    </option>
                                    <option value="Puisatiers">
                                        Puisatiers et autres spécialistes d’activités de forage
                                    </option>
                                    <option value="Tailleurs, fondeurs de pierres, marbriers">
                                        Tailleurs, fondeurs de pierres, marbriers
                                    </option>
                                    <option value="Briquetiers, bétonniers, tuiliers">
                                        Briquetiers, bétonniers, tuiliers
                                    </option>
                                    <option value="Maçonnerie">
                                        Maçonnerie</option>
                                    <option value="Constructeurs de cases, d’ouvrages d’art">
                                        Constructeurs de cases, d’ouvrages d’art
                                    </option>
                                    <option value="Charpentiers, coffreurs, plombiers, carreleurs">
                                        Charpentiers, coffreurs, plombiers, carreleurs</option>
                                    <option value="Vitriers, miroitiers, plâtriers">
                                        Vitriers, miroitiers, plâtriers</option>
                                    <option value="Décorateurs-staffeurs, peintres, électriciens bâtiment">
                                        Décorateurs-staffeurs, peintres, électriciens bâtiment
                                    </option>
                                </optgroup>

                                <optgroup
                                    label="Métaux, Constructions métalliques, Mécanique, Électromécanique, Électronique, Électricité">
                                    <option value="Forgerons, chaudronniers, métallurgistes">
                                        Forgerons, chaudronniers, métallurgistes
                                    </option>
                                    <option value="Ferrailleurs, tourneurs, fraiseurs, affûteurs">
                                        Ferrailleurs, tourneurs, fraiseurs, affûteurs
                                    </option>
                                    <option value="Fabricants de matériels et équipements agricoles">
                                        Fabricants de matériels et équipements agricoles et forestiers</option>
                                    <option value="Menuisiers métalliques, en aluminium">
                                        Menuisiers métalliques, en aluminium
                                    </option>
                                    <option value="Soudeurs, modeleurs sur métaux">
                                        Soudeurs, modeleurs sur métaux
                                    </option>
                                    <option value="Réparateurs et mécaniciens">
                                        Réparateurs et mécaniciens de véhicules, cycles et cyclomoteurs
                                    </option>
                                    <option value="Réparateurs de pompe hydraulique, carrossiers">
                                        Réparateurs de pompe hydraulique, carrossiers
                                    </option>
                                    <option value="Électriciens, électroniciens, mécatronicien">
                                        Électriciens, électroniciens, mécatronicien
                                    </option>
                                    <option value="Fabricants et réparateurs de machines-outils">
                                        Fabricants et réparateurs de machines-outils, petit outillage
                                    </option>
                                    <option value="Serruriers">Serruriers, réparateurs
                                        d’équipements de foyers
                                    </option>
                                    <option value="Spécialistes en froid climatisation">
                                        Spécialistes en froid climatisation, rebobineurs
                                    </option>
                                </optgroup>

                                <optgroup label="Bois et assimilés, Mobilier et Ameublement">
                                    <option value="Menuisiers bois, ébénistes">
                                        Menuisiers bois, ébénistes
                                    </option>
                                    <option value="Bucherons, charbonniers">
                                        Bucherons, charbonniers
                                    </option>
                                    <option value="Constructeurs de pirogues">
                                        Constructeurs de pirogues et embarcations
                                    </option>
                                    <option value="Fabricants d’instruments">
                                        Fabricants d’instruments de musique en bois
                                    </option>
                                    <option value="Sculpteurs sur bois">
                                        Sculpteurs sur bois, fabricants d’objets divers à base de bois</option>
                                    <option value="Fabricants d’articles en liège, sparterie">
                                        Fabricants d’articles en liège, sparterie</option>
                                    <option value="Menuisiers">
                                        Menuisiers sur bambous, rônier et rotin
                                    </option>
                                </optgroup>

                                <optgroup label="Textile, Habillement, Cuirs et Peaux">
                                    <option value="Filateurs et tisserand(e)s">
                                        Filateurs et tisserand(e)s
                                    </option>
                                    <option value="Tailleurs, couturiers, brodeurs">
                                        Tailleurs, couturiers, brodeurs
                                    </option>
                                    <option value="Fabricants d’objets et accessoires en tissu">
                                        Fabricants d’objets et accessoires en tissu</option>
                                    <option value="Teinturiers, sérigraphes sur tissu">
                                        Teinturiers, sérigraphes sur tissu
                                    </option>
                                    <option value="Tapissiers">
                                        Tapissiers
                                    </option>
                                    <option value="Fabricants de vêtements">Fabricants de vêtements</option>
                                    <option value="Tanneurs, cordonniers, maroquiniers">
                                        Tanneurs, cordonniers, maroquiniers
                                    </option>
                                    <option value=""></option>
                                    <option value="Relieurs, cireurs de chaussures">
                                        Relieurs, cireurs de chaussures
                                    </option>
                                </optgroup>

                                <optgroup label="Audiovisuel et Communication">
                                    <option value="Photographes et cameramen">
                                        Photographes et cameramen
                                    </option>
                                    <option value="Maquettistes et graveurs">
                                        Maquettistes et graveurs
                                    </option>
                                    <option value="Imprimeurs">
                                        Imprimeurs
                                    </option>
                                    <option value="Installateurs de matériels audiovisuels">
                                        Installateurs de matériels audiovisuels
                                    </option>
                                </optgroup>

                                <optgroup label="Hygiène et Soins corporels">
                                    <option value="Coiffeurs, tresseuses, esthéticiens">
                                        Coiffeurs, tresseuses, esthéticiens
                                    </option>
                                    <option value="Fabricants de savons, parfums et cosmétiques">
                                        Fabricants de savons, parfums et cosmétiques
                                    </option>
                                </optgroup>

                                <optgroup label="Artisanat d’Art et Décoration">
                                    <option value="Artisans d’art ">
                                        Artisans d’art
                                    </option>
                                    <option value="Créateurs de pièces décoratives">
                                        Créateurs de pièces décoratives</option>
                                    <option value="Fabricants de produits artisanaux variés">
                                        Fabricants de produits artisanaux variés
                                    </option>
                                </optgroup>
                            </select>
                        </div>


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
                            <input type="time" class="form-control" required name="deb_act" id="deb_act" />
                            <span style="color:red">
                                <?php echo $deb_act_error ?>
                            </span><br>
                        </div>
                        <div class="col-sm-6">
                            <label for="fin_act">Fin (H)</label>
                            <input type="time" class="form-control" required name="fin_act" id="fin_act">
                            <span style="color:red">
                                <?php echo $fin_act_error ?>
                            </span><br>
                        </div>
                    </div>
                </div>
                <div >
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="longitude" id="longitude" class="form-control" required><br>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="latitude" id="latitude" class="form-control" required>
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

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <script>
    var map = L.map('map').setView([5.345317, -4.024429], 13); // Centre initial

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '© 2024 Mon artisan'
    }).addTo(map);

    // Ajout du contrôle de recherche de géocodeur
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

    // Avoir la position de l'artisan 
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var lat = position.coords.latitude;
            var lon = position.coords.longitude;
            document.getElementById('latitude').value = lat;
            document.getElementById('longitude').value = lon;

        });
    }

    // Gérer les clics sur la carte pour la position (map cacher)
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
    <script>
    $(document).ready(function() {
        $('.selectpicker').selectpicker();
    });
    </script>
</body>

</html>