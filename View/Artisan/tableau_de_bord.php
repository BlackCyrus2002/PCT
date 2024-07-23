<?php
session_start();
require_once('../../View/Client/error_message.php');
require_once('../../App/Config/database.php');
require_once('../../App/Model/evenement.php');
require_once('../../App/Model/post_pict.php');

if (isset($_SESSION['user_id'])) {
    $id = $_SESSION['user_id'];
    $artisan = $_SESSION['artisan_id'];
    $users = $con->prepare("SELECT ID,nom,prenom,sexe,telephone,tel_wa,metier,deb_act,fin_act,longitude,
            latitude,dur_act,jr_act,pays,ville,commune,quartier,gmail,path_photo FROM artisans WHERE ID = ?");
    $users->bind_param('i', $artisan);
    $users->execute();
    $result = $users->get_result();

    if ($result->num_rows > 0) {
        $only_art = $result->fetch_assoc();
    } else {
        echo "Utilisateur non trouvé.";
        exit();
    }
}
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../View/Artisan/connexion.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <link rel="stylesheet" href="../../Public/css/artisan/tableau_de_bord.css">
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Tableau de bord</title>

</head>

<body>
    <?php require_once('nav.php') ?>

    <section>

        <div class="container-absolute apparaitre">
            <?php include_once('help.php') ?>
            <?php include_once('instruction.php') ?>
            <?php include_once('conversation.php') ?>
            <?php include_once('pack.php') ?>
            <?php include_once('confidentialite.php') ?>

        </div>
        <?php require_once('aside.php') ?>
        <div class="container">

            <?php require_once('evenement.php') ?>
            <?php require_once('statistique.php') ?>
            <?php require_once('evolution.php') ?>
            <?php require_once('galerie.php') ?>
            <?php require_once('publicite.php') ?>
            <?php require_once('parametre.php') ?>
            <?php require_once('localisation.php') ?>
            <?php require_once('message.php') ?>

        </div>

    </section>
    <script src="../../Public/js/artisan/tableau_de_bord.js"></script>
    <script src="../../Public/js/artisan/intersection_observer.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre',
                    'Octobre', 'Novembre', 'Décembre'
                ],
                datasets: [{
                    label: 'Commande et service',
                    data: [12, 19, 3, 5, 2, 3, 12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        function initMap() {
            var mapOptions = {
                zoom: 15,
                center: [0, 0]
            };

            var map = L.map('map').setView(mapOptions.center, mapOptions.zoom);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; 2024 Mon artisan'
            }).addTo(map);

            var latitude = <?php echo json_encode($only_art['latitude']); ?>;
            var longitude = <?php echo json_encode($only_art['longitude']); ?>;
            var art =
                <?php echo json_encode($only_art['nom'] . ' ' . $only_art['prenom'] . '<br><center>' . $only_art['quartier'] . '</center>'); ?>;
            var marker = L.marker([parseFloat(latitude), parseFloat(longitude)]).addTo(map)
                .bindPopup(art)
                .openPopup();

        }

        document.addEventListener('DOMContentLoaded', initMap);
    </script>
    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var preview = document.getElementById("preview");
                preview.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

</body>

</html>