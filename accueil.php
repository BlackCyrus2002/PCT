<?php require_once('App/Config/database.php') ?>
<?php require_once('View/Client/error_message.php') ?>
<?php require_once('App/Model/abonne_model.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accueil</title>
    <link rel="stylesheet" href="Public/css/accueil.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://fonts.googleapis.com/css2?family=Julee&family=Tangerine:wght@400;700&display=swap"
        rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" href="Public/image/mylogo.png" type="image/x-icon">
</head>

<body>
    <header>
        <div class="logo">
            <img src="public/image/new_logo.jpg" alt=" logo">
        </div>
        <!--menu d'ouverture et de fermeture pour mobile-->
        <i class="fa-solid fa-bars" id="ouvrir_menu"></i>
        <nav class="container apparaitre">
            <ul>
                <li><a href="#">accueil</a></li>
                <li><a href="#pourquoi">presentation</a></li>
                <li><a href="#avantage">avantage</a></li>
                <li><a href="#avis">avis</a></li>
                <li id="connexion">
                    <a href="View/Client/connexion/connexion.php" class="login">Connexion</a>
                </li>
            </ul>
        </nav>

        <div class="container2 apparaitre">
            <div class="text">
                <div>
                    <h2>
                        <strong style="color: orangered;">Bien</strong>venue <br>
                        sur "Mon Artisan"
                    </h2>
                </div>
            </div>
            <div class="photo1 apparaitre">
                <img src="Public/image/photo1.jpg" alt="" />
            </div>
            <div class="photo2 apparaitre">
                <img src="Public/image/photo2.jpg" alt="" />
            </div>
        </div>
        <!-- recherche artisans et connection pour ecran mobile-->
        <div class="recherche btn_connexion">
            <button class="btn apparaitre">
                <a href="View/Client/publication.php" style="text-decoration: none;display:block">
                    Recherche d'artisans
                </a>
            </button>
            <button id="connexion-mobile">
                <a href="View/Client/connexion.php" style="text-decoration: none;display:block">Connexion</a>
            </button>
        </div>
    </header>
    <!-- contient toutes les div pourquoi, offre, promotion ,avantage galerie  -->

    <section>
        <!--section: pourquoi creer un compte-->
        <div class="pourquoi apparaitre" id="pourquoi">
            <h2 style="font-size: 30px;"><span>Pourquoi!</span> Créer un compte ?</h2>
            <br>

            <p style="font-size: 20px;">
                Occupant une place très importante dans l'économie ivoirienne,
                employant 44% de la population active et constituant la moitié du PIB
                nationale nous constatons que les acteurs du secteur informel doté
                d'expérience peinent à faire connaître leurs compétences et
                réalisations auprès des populations aussi ces populations désireux de
                bénéficier de certains services que propose ces artisans ne savent pas
                comment et quand les trouver et peine à entrer en contact avec ces
                derniers plus rapidement et en toute simplicité.
            </p>
            <br>

            <p style="font-size: 20px;">
                C'est de là qu'est venu l'idée de la création d'une plateforme qui
                pourra aider ces artisans à mieux se faire connaître auprès des
                populations à travers l'auto promotion de leur biens et services, et
                aussi au population de facilement avoir recours à ces derniers pour
                assoupir leurs différents besoins. Si vous êtes un artisan et que vous
                souhaitiez faire la promotion de vos produits et services via notre
                plateforme, vous êtes alors invité à créer un compte d'artisan afin de
                bénéficier des multiples avantages que propose la plateforme avec des
                tableaux de bord artisans, suivie et gestion de l'évolution de votre
                activité exposition de vos différentes biens, réalisations et de
                choisir des packs publicitaires.
            </p>
        </div>
        <!-- section offre -->
        <div class="offre apparaitre">
            <div class="artisans">
                <img src="Public/image/profile1.jpg" alt="" />
                <h5>offre artisans</h5>
            </div>

            <div class="client">
                <img src="Public/image//profile2.jpg" alt="" />
                <h5>offre artisans</h5>
            </div>
        </div>

        <!--section promotion-->
        <div class="float1 apparaitre">
            <img src="Public/image/pot_argile.jpg" alt="" />
            <div class="promotion">
                <h3><span>Promo</span>tion</h3>
                <p style="font-size: 20px;">
                    'Mon artisan' est une plateforme dédiée à promouvoir les métiers
                    artisanaux de la côte d'ivoire voir l'auto promotion des biens et
                    services artisanaux produits par les artisans eux même.
                </p>
            </div>
        </div>

        <!-- avantage et image-->
        <div class="float2 apparaitre" id="avantage">
            <div class="avantage">
                <h3>Avantages</h3>
                <p style="font-size: 20px;">
                    La plateforme vous permet de bénéficier de nombreux avantages afin
                    de vous fournir un usage responsable et de qualité.
                </p>
            </div>
            <img src="Public/image/float2.jpg" alt="" />
        </div>

        <!-- artisans localisation client-->

        <div class="localisation">
            <div class="section">
                <h3>Localisation</h3>
                <p>
                    Avec sa fonctionnalité de géolocalisation intégrée, vous pouviez
                    connaître l’emplacement des ateliers et magasins des artisans.
                </p>
            </div>
            <div class="section">
                <h3>Artisans</h3>
                <p>
                    La plateforme vous permettra d’avoir une identité numérique, de
                    booster votre visibilité. Mettre en lumière vos produits et vos
                    réalisations auprès d’un grand nombre de prospect, faciliter la mise
                    en relation Artisans-clients, vous permet de faire un choix d’un
                    pack publicitaire promotionnel.
                </p>
            </div>
            <div class="section">
                <h3>Clients</h3>
                <p>
                    Géolocalisation de l’atelier des artisans présents dans votre zone
                    de couverture depuis votre position en fonction de vos besoins et
                    entrer en contact rapide avec possibilité de voir les informations
                    sur les artisans qui vous intéressent.
                </p>
            </div>
        </div>

        <!--galerie-->
        <div class="carte apparaitre">
            <img src="Public/image/carte_mondial.jpg" alt="" />
        </div>

        <!-- carousel image-->
        <h1 id="galerie">Galérie</h1>
        <div class="carousel apparaitre">
            <div class="carousel-item active apparaitre" id="photo1">
                <img src="Public/image/image_carousel1.jpg" alt="Image1" />
            </div>
            <div class="carousel-item apparaitre" id="photo2">
                <img src="Public/image/image_carousel2.jpg" alt="Image 2" />
            </div>
            <div class="carousel-item apparaitre" id="photo3">
                <img src="Public/image/image_carousel3.jpg" alt="Image 2" />
            </div>
            <div class="carousel-item apparaitre" id="photo4">
                <img src="Public/image/image_carousel4.jpg" alt="Image 2" />
            </div>
            <div class="carousel-item apparaitre" id="photo5">
                <img src="Public/image/image_carousel5.jpg" alt="Image 2" />
            </div>
            <div class="carousel-controls apparaitre">
                <button class="prev-btn">&lt;</button>
                <button class="next-btn">&gt;</button>
            </div>
        </div>

        <!-- creation service -->

        <div class="creations services apparaitre">
            <div class="creation apparaitre">
                <h3 style="font-size: 30px;">Création</h3><br>
                <p style="font-size: 20px;">
                    Exposition de vos différentes réalisations, œuvres artisanales,
                    moderne et traditionnelle.
                </p>

                <img src="Public/image/voiture.jpg" alt="" />
            </div>

            <div class="service">
                <h3 style="font-size: 30px;">Service</h3><br>
                <p style="font-size: 20px;">
                    Rapidité, efficacité des services proposés et les différentes
                    intervention d'urgence par les artisans.
                </p>

                <img src="Public/image/femme.jpg" alt="" />
            </div>
            <div class="contact apparaitre">
                <h3 style="font-size: 30px;">Contact</h3><br>
                <p style="font-size: 20px;">
                    Contactez nous pour tout besoins ou aide vous pouvez nous retouvez
                    sur:........
                </p>
            </div>
        </div>

        <!--section des avis-->

        <div class="avis apparaitre" id="avis">
            <h1>Avis</h1>
        </div>

        <div class="commentaires">
            <div class="personnes">
                <div class="commentaire">
                    <p>
                        Merci infiniment, grâce à cette plateforme, je me retrouve dans
                        mes activités.
                    </p>
                    <div class="profile">
                        <img src="Public/image/profil4.jpg" alt="Zakaria gondo" />
                        <h3>Zakaria gondo</h3>
                    </div>
                </div>
                <div class="commentaire">
                    <p>
                        J'ai eu plus de clients lorsque j'ai commencé à utiliser cette
                        plateforme.
                    </p>
                    <div class="profile">
                        <img src="Public/image/profil3.jpg" alt="Kouamé elenne" />
                        <h3>Kouamé elenne</h3>
                    </div>
                </div>
                <div class="commentaire">
                    <p>
                        Depuis que j'ai commencé à utiliser cette plateforme, mes
                        activités sont plus rentables.
                    </p>
                    <div class="profile">
                        <img src="Public/image/image_carousel5.jpg" alt="Brice kouassi" />
                        <h3>Brice kouassi</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--pieds de la page en footer-->

    <footer>
        <ul>
            <h2>Adresse</h2>
            <li>Entreprise 44</li>
            <li>PTC uvci</li>
            <li>28 BP 536 ABIDJAN 28</li>
            <li>ABIDJAN COTE D'IVOIRE</li>
        </ul>
        <ul>
            <h2>Information</h2>
            <li>mention legale</li>
            <li>politique de confidentialité</li>
            <li>ClOSSAIRE SEO Glop CI</li>
            <li>Droit d'utilisation</li>
        </ul>
        <form action="" method="post">
            <div class="email">
                <input type="email" name="email_client" id="email_client" placeholder="email" />
                <button name="abonne_send">Envoyé</button><br>
                <div style="margin-top:5px">

                    <?php
                    if ($email_error) { ?>
                    <script>
                    Swal.fire({
                        imageUrl: "Public/image/512.webp",
                        title: "Oops...",
                        text: "<?php echo $email_error ?>",
                        imageWidth: 100,
                        imageHeight: 100,
                    });
                    </script>
                    <?php } ?>

                    <?php
                    if ($email_save) { ?>
                    <script>
                    Swal.fire({
                        imageUrl: "Public/image/512 (3).webp",
                        title: "Félicitation",
                        text: "<?php echo $email_save ?>",
                        imageWidth: 100,
                        imageHeight: 100,
                    });
                    </script>
                    <?php } ?>

                    <?php
                    if ($email_exist) { ?>
                    <script>
                    Swal.fire({
                        imageUrl: "Public/image/512 (1).webp",
                        title: "Déjà existant",
                        text: "<?php echo $email_exist ?>",
                        imageWidth: 100,
                        imageHeight: 100,
                    });
                    </script>
                    <?php } ?>
                </div>
            </div>
        </form>
    </footer>

    <script src="Public/js/accueil.js"></script>
</body>

</html>