<?php require_once('php_model.php') ?>
<?php
if (!empty($_GET['id_art'])) {
    $id_art = $_GET['id_art'];
    $art = $con->prepare("SELECT ID,nom,prenom,sexe,telephone,tel_wa,metier,deb_act,fin_act,longitude,
            latitude,dur_act,jr_act,pays,ville,commune,quartier,gmail,path_photo FROM artisans WHERE ID=?");
    $art->bind_param('i', $id_art);
    $art->execute();
    $result = $art->get_result();

    if ($result->num_rows > 0) {
        $only_art = $result->fetch_assoc();
    } else {
        echo "Artisan non trouvé.";
        exit();
    }
}
if (empty($_GET['id_art'])) {
    header("Location: publication.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require('head.php') ?>
    <link rel="stylesheet" href="../../Public/css/artisan/media_artisans.css">
    <title><?php echo $only_art['nom'] . ' ' . $only_art['prenom'] ?> </title>

    <style>
        #photo-couverture::before {
            content: "";
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url("<?php echo $only_art['path_photo'] ?>");
            background-size: cover;
            background-position: center;
            z-index: -1;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }

        .art_creation {
            height: 300px;
            width: 250px;
            border-radius: 10px;
            box-shadow: 2px 4px 8px rgba(0, 0, 0, 0.267);
            margin-right: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <header>
        <div>
            <div class="logo"><img src="../../Public/image/logo.jpg" alt=""></div>
        </div>
        <?php require('search.php') ?>
        <?php require('nav.php') ?>
    </header>

    <section class="image_arriereplan_orange">
        <div class="image_arriereplan">
            <p>entrez en contacte avec tout les artizans que vous souhaitez !</p>
        </div>
    </section>

    <section class="profile">

        <div id="photo-couverture">

        </div>
        <div class="profile-card">
            <div class="info-pers">
                <div class="img-profile"> <img src="<?php echo $only_art['path_photo'] ?>" alt=""></div>
                <div class="detail-item name">
                    <?php echo $only_art['nom'] . ' ' . $only_art['prenom'] ?>
                </div>
                <div class="detail-item gray">
                    <a href="tel:+225<?php echo $only_art['telephone'] ?>" style="color: black;" target="_blank">
                        +225 <?php echo $only_art['telephone'] ?>
                    </a>
                </div>
                <div class="detail-item metier">
                    <?php echo $only_art['metier'] ?>
                </div>

            </div>
            <div class="icon">
                <a href="https://wa.me/+225<?php echo $only_art['tel_wa'] ?>" style="text-decoration: none;" id="contacter" target="_blank">WhatsApp</a>
                <div class="icon-etoile">
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p class="calendrier">
                    <i class="fa-regular fa-calendar-days"></i>
                    <span>
                        <?php echo $only_art['deb_act'] . 'H-' . $only_art['fin_act'] . 'H' ?>
                    </span>
                </p>

            </div>
        </div>
        <div class="details">
            <div class="information">
                <div class="section-display">
                    <div class="detail-item">
                        <p class="gray" style="color:gray">Nom de l'entreprise</p>
                        <p>La maison</p>
                    </div><br>

                    <div class="detail-item">
                        <p class="gray" style="color:gray"> Année d'experience</p>
                        <p><?php echo $only_art['dur_act'] ?> ans</p>
                    </div><br>

                    <div class="detail-item">
                        <p class="gray" style="color:gray">Jours d'activités</p>
                        <p> <?php echo $only_art['jr_act'] ?></p>
                    </div><br>

                    <div class=" detail-item  lieu">
                        <p class="gray"> <i class="fa-solid fa-location-crosshairs"></i>Lieu d'atelier ou magasin
                        </p>
                        <p class="gray">
                            <?php echo $only_art['pays'] . ' / ' . $only_art['ville'] . ' / ' . $only_art['quartier'] ?>
                        </p>
                    </div><br>

                    <div class=" detail-item ">
                        <p class="gray" style="color:gray">Email</p>
                        <p> <?php echo $only_art['gmail'] ?></p>
                    </div><br>

                </div>

            </div>

        </div><br>
    </section>
    <section>
        <!-- section publication et geolocalisation-->
        <div class="header">
            <ul>
                <li id="click-publication">Publication</li>
                <li id="click-geolocalisation">Géolocalisation</li>
            </ul>
        </div>

        <!--section video photo et localisation-->
        <div class=" items-publications geolocalisation">
            <div class="translation">
                <div id="item-video-photo">
                    <ul>
                        <li id="click-photo">Images</li>
                        <li id="click-video">Vidéos</li>
                    </ul>

                    <div class="image">
                        <?php
                        $all_picture = "SELECT id_photo, comment, path_photo,id_artisan, publish_date FROM galerie_photo  WHERE id_artisan= " . $only_art['ID'] . " ORDER BY publish_date";
                        $all_pictures = mysqli_query($con, $all_picture);
                        while ($image = $all_pictures->fetch_assoc()) { ?>
                            <img src="<?php echo $image['path_photo'] ?>" alt="" class="art_creation">
                        <?php } ?>
                    </div>
                    <div class="video">
                        Ici video
                    </div>
                </div>

                <div id="carte-localisation" style="padding: 5%;">
                    <div id="map" style="height:100%; width: 100%;border-radius:10px;box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.267);z-index:1">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require('footer.php') ?>
    <script src="../../Public/js/artisan/page_profile.js" defer></script>
    <script src="../../Public/js/artisan/media_artisans.js"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <script>
        function initMap() {
            var mapOptions = {
                zoom: 15,
                center: [0, 0]
            };

            var map = L.map('map').setView(mapOptions.center, mapOptions.zoom);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; 2024 Rasaci'
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
</body>

</html>