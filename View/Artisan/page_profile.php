<?php
require_once '../../App/Config/database.php';

if (!empty($_GET['id_art'])) {
    $id_art = $_GET['id_art'];
    $art = $con->prepare("SELECT ID,nom,prenom,sexe,telephone,tel_wa,metier,deb_act,fin_act,longitude,
            latitude,dur_act,jr_act,pays,ville,commune,quartier,gmail,path_photo,lieu_travail FROM artisans WHERE ID=?");
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
    header("Location: tableau_de_bord.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../Public/image/mylogo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../Public/css/artisan/page_profile.css">
    <title>
        <?php echo $only_art['nom'] . ' ' . $only_art['prenom'] ?>
    </title>
</head>

<body>
    <div class="photo-couverture ">
    </div>

    <div class="profile-card apparaitre">
        <div class="info-pers">
            <div class="img-profile"> <img src="<?php echo $only_art['path_photo'] ?>" alt=""></div>
            <div class="detail-item name">
                <?php echo $only_art['nom'] . ' ' . $only_art['prenom'] ?>
            </div>
            <div class="detail-item gray">+225 <?php echo $only_art['telephone'] ?></div>
            <div class="detail-item gray">
                <?php echo $only_art['gmail'] ?>
            </div>
            <div class="detail-item metier">
                <?php echo $only_art['metier'] ?>
            </div>

        </div>
        <div class="icon apparaitre ">
            <a href="photo.php?id_artisan=<?php echo $only_art['ID'] ?>">
                <i class="fa-solid fa-camera"></i>
            </a>

            <div class="icon-etoile ">
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>

            <a href="update_profile.php?id_art=<?php echo $only_art['ID'] ?>&& nom=<?php echo $only_art['nom'] . ' ' . $only_art['prenom'] ?>"
                style="text-decoration: none;">
                <div id="modifier">modifier le profile</div>
            </a>
            <p class="calendrier">
                <i class="fa-regular fa-calendar-days"></i>
                <span>
                    <?php echo (new DateTime($only_art['deb_act']))->format('H') . 'H' . (new DateTime($only_art['deb_act']))->format('i'); ?>
                    -
                    <?php echo (new DateTime($only_art['fin_act']))->format('H') . 'H' . (new DateTime($only_art['fin_act']))->format('i'); ?>
                </span>
            </p>

        </div>

    </div>

    <div class="details">
        <div class="information  ">
            <div class="section-display ">
                <div class="detail-item apparaitre">
                    <p class="gray">nom de l'entreprise</p>
                    <p><?php echo $only_art['lieu_travail'] ?></p>
                </div>

                <div class="detail-item apparaitre ">
                    <p class="gray"> Année d'experience</p>
                    <p><?php echo $only_art['dur_act'] ?> ans</p>
                </div>

                <div class="detail-item apparaitre">
                    <p class="gray">jour d'activité</p>
                    <p> <?php echo $only_art['jr_act'] ?> </p>
                </div>

                <div class=" detail-item  lieu apparaitre">
                    <p class="gray"> <i class="fa-solid fa-location-crosshairs"></i>Lieu d'atelier ou magasin </p>
                    <p class="gray">
                        <?php echo $only_art['pays'] . ' / ' . $only_art['ville'] . ' / ' . $only_art['quartier'] ?>
                    </p>
                </div>
                <div class=" detail-item apparaitre ">
                    <p class="gray">contact professionel</p>
                    <p>+225 <?php echo $only_art['telephone'] ?></p>
                    <p><?php echo $only_art['gmail'] ?></p>
                </div>

            </div>

        </div>
    </div>

    <script src="../../Public/js/artisan/tableau_de_bord.js"></script>
    <script src="../../Public/js/artisan/intersection_observer.js"></script>
</body>

</html>