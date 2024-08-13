<?php require_once('php_model.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('head.php') ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <title>Mes artisans</title>
    <style>
    ul li a {
        font-family: 'Times New Roman', Times, serif;
        font-size: 20px;
    }

    h2 {
        font-family: 'Times New Roman', Times, serif;
        font-weight: bold;
    }
    </style>
</head>

<body>

    <div class="container-fluid">
        <!--partie de l'entete-->
        <header>
            <div>
                <div class="logo"><img src="../../Public/image/new_logo.jpg" alt=""></div>
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
        <div class="container">
            <h5 class="links-style">Coiffure</h5>
            <hr style="border-bottom: 2px solid grey;width:100px">
        </div>

        <div style="background-color: rgba(128, 128, 128, 0.03);padding-top:20px;padding-bottom:20px">
            <section class="container">
                <div class="formation_content">
                    <div class="scroll_tag">
                        <?php while ($fil = mysqli_fetch_array($coiff)) { ?>
                        <a href="profil_artisans.php?id_art=<?php echo $fil['ID'] ?>&& nom=<?php echo $fil['nom'] . ' ' . $fil['prenom'] ?>"
                            style="color: black;text-decoration:none">
                            <div class="div_scroll" target="_blank">
                                <center>
                                    <img src="../../Public/image/user.png" alt="" class="art_photo">
                                    <h5 style="font-family: Georgia, 'Times New Roman', Times, serif;font-weight:bold">
                                        <?php
                                            $nom = $fil['nom'] . ' ' . $fil['prenom'];
                                            // Texte d'exemple avec des caractères spéciaux
                                            $post_art = $nom;

                                            // Utilisation d'une expression régulière pour diviser la chaîne en mots
                                            preg_match_all('/[\p{L}\p{M}\d\.,;-?_:\'-]+/u', $post_art, $matches);

                                            // Sélectionne les 2 premiers mots et les réassemble
                                            $name = implode(' ', array_slice($matches[0], 0, 2));

                                            // Affiche les 2 premiers mots
                                            echo $name;
                                            ?>
                                    </h5>
                                    <div style="display: flex;align-items:center">
                                        <div style="margin-right: 5px;color:blue;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-tags" viewBox="0 0 16 16">
                                                <path
                                                    d="M3 2v4.586l7 7L14.586 9l-7-7zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586z" />
                                                <path
                                                    d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1z" />
                                            </svg>
                                        </div>
                                        <div style="padding-top:5px">
                                            <h6
                                                style="font-family: Georgia, 'Times New Roman', Times, serif;font-weight:bold">
                                                <?php echo $fil['metier'] ?>
                                            </h6>
                                        </div>
                                    </div>
                                    <div style="display: flex;align-items:center">
                                        <div style="margin-right: 5px;color:blue;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.3 1.3 0 0 0-.37.265.3.3 0 0 0-.057.09V14l.002.008.016.033a.6.6 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.6.6 0 0 0 .146-.15l.015-.033L12 14v-.004a.3.3 0 0 0-.057-.09 1.3 1.3 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465s-2.462-.172-3.34-.465c-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411" />
                                            </svg>
                                        </div>
                                        <div style="padding-top:10px">
                                            <h6
                                                style="font-family: Georgia, 'Times New Roman', Times, serif;font-weight:bold">
                                                <?php echo $fil['commune'] . ' / ' . $fil['quartier'] ?>
                                            </h6>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="tel:+225<?php echo $fil['telephone'] ?>" class="btn btn-primary"
                                            style="box-shadow: 2px 6px 10px rgba(0, 0, 0, 0.247);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                            </svg>
                                            Appeler
                                        </a>
                                    </div>
                                </center>

                            </div>
                        </a>

                        <?php } ?>
                    </div>
                </div>

            </section>
        </div>
        <div class="container">
            <h5 class="links-style">Couture</h5>
            <hr style="border-bottom: 2px solid grey;width:100px">
        </div>
        <div style="background-color: rgba(128, 128, 128, 0.03);padding-top:20px;padding-bottom:20px">
            <section class="container">
                <div class="formation_content">
                    <div class="scroll_tag">
                        <?php while ($fil = mysqli_fetch_array($cout)) { ?>
                        <a href="profil_artisans.php?id_art=<?php echo $fil['ID'] ?>&& nom=<?php echo $fil['nom'] . ' ' . $fil['prenom'] ?></a>"
                            style="color: black;text-decoration:none">
                            <div class="div_scroll" target="_blank">
                                <center>
                                    <img src="../../Public/image/user.png" alt="" class="art_photo">
                                    <h5 style="font-family: Georgia, 'Times New Roman', Times, serif;font-weight:bold">
                                        <?php
                                            $nom = $fil['nom'] . ' ' . $fil['prenom'];
                                            // Texte d'exemple avec des caractères spéciaux
                                            $post_art = $nom;

                                            // Utilisation d'une expression régulière pour diviser la chaîne en mots
                                            preg_match_all('/[\p{L}\p{M}\d\.,;-?_:\'-]+/u', $post_art, $matches);

                                            // Sélectionne les 2 premiers mots et les réassemble
                                            $name = implode(' ', array_slice($matches[0], 0, 2));

                                            // Affiche les 2 premiers mots
                                            echo $name;
                                            ?>
                                    </h5>
                                    <div style="display: flex;align-items:center">
                                        <div style="margin-right: 5px;color:blue;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-tags" viewBox="0 0 16 16">
                                                <path
                                                    d="M3 2v4.586l7 7L14.586 9l-7-7zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586z" />
                                                <path
                                                    d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1z" />
                                            </svg>
                                        </div>
                                        <div style="padding-top:10px">
                                            <h6
                                                style="font-family: Georgia, 'Times New Roman', Times, serif;font-weight:bold">
                                                <?php echo $fil['metier'] ?>
                                            </h6>
                                        </div>
                                    </div>
                                    <div style="display: flex;align-items:center">
                                        <div style="margin-right: 5px;color:blue;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.3 1.3 0 0 0-.37.265.3.3 0 0 0-.057.09V14l.002.008.016.033a.6.6 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.6.6 0 0 0 .146-.15l.015-.033L12 14v-.004a.3.3 0 0 0-.057-.09 1.3 1.3 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465s-2.462-.172-3.34-.465c-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411" />
                                            </svg>
                                        </div>
                                        <div style="padding-top:10px">
                                            <h6
                                                style="font-family: Georgia, 'Times New Roman', Times, serif;font-weight:bold">
                                                <?php echo $fil['commune'] . ' / ' . $fil['quartier'] ?>
                                            </h6>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="tel:+225<?php echo $fil['telephone'] ?>" class="btn btn-primary"
                                            style="box-shadow: 2px 6px 10px rgba(0, 0, 0, 0.247);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                            </svg>
                                            Appeler
                                        </a>
                                    </div>
                                </center>

                            </div>
                        </a>

                        <?php } ?>
                    </div>
                </div>

            </section>
        </div>
        <div class="container">
            <h5 class="links-style">Menuiserie</h5>
            <hr style="border-bottom: 2px solid grey;width:100px">
        </div>
        <div style="background-color: rgba(128, 128, 128, 0.03);padding-top:20px;padding-bottom:20px">
            <section class="container">
                <div class="formation_content">
                    <div class="scroll_tag">
                        <?php while ($fil = mysqli_fetch_array($menu)) { ?>
                        <a href="profil_artisans.php?id_art=<?php echo $fil['ID'] ?>&& nom=<?php echo $fil['nom'] . ' ' . $fil['prenom'] ?>"
                            style="color: black;text-decoration:none">
                            <div class="div_scroll" target="_blank">
                                <center>
                                    <img src="../../Public/image/user.png" alt="" class="art_photo">
                                    <h5 style="font-family: Georgia, 'Times New Roman', Times, serif;font-weight:bold">
                                        <?php
                                            $nom = $fil['nom'] . ' ' . $fil['prenom'];
                                            // Texte d'exemple avec des caractères spéciaux
                                            $post_art = $nom;

                                            // Utilisation d'une expression régulière pour diviser la chaîne en mots
                                            preg_match_all('/[\p{L}\p{M}\d\.,;-?_:\'-]+/u', $post_art, $matches);

                                            // Sélectionne les 2 premiers mots et les réassemble
                                            $name = implode(' ', array_slice($matches[0], 0, 2));

                                            // Affiche les 2 premiers mots
                                            echo $name;
                                            ?>
                                    </h5>
                                    <div style="display: flex;align-items:center">
                                        <div style="margin-right: 5px;color:blue;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-tags" viewBox="0 0 16 16">
                                                <path
                                                    d="M3 2v4.586l7 7L14.586 9l-7-7zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586z" />
                                                <path
                                                    d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1z" />
                                            </svg>
                                        </div>
                                        <div style="padding-top:10px">
                                            <h6
                                                style="font-family: Georgia, 'Times New Roman', Times, serif;font-weight:bold">
                                                <?php echo $fil['metier'] ?>
                                            </h6>
                                        </div>
                                    </div>
                                    <div style="display: flex;align-items:center">
                                        <div style="margin-right: 5px;color:blue;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.3 1.3 0 0 0-.37.265.3.3 0 0 0-.057.09V14l.002.008.016.033a.6.6 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.6.6 0 0 0 .146-.15l.015-.033L12 14v-.004a.3.3 0 0 0-.057-.09 1.3 1.3 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465s-2.462-.172-3.34-.465c-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411" />
                                            </svg>
                                        </div>
                                        <div style="padding-top:10px">
                                            <h6
                                                style="font-family: Georgia, 'Times New Roman', Times, serif;font-weight:bold">
                                                <?php echo $fil['commune'] . ' / ' . $fil['quartier'] ?>
                                            </h6>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="tel:+225<?php echo $fil['telephone'] ?>" class="btn btn-primary"
                                            style="box-shadow: 2px 6px 10px rgba(0, 0, 0, 0.247);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                            </svg>
                                            Appeler
                                        </a>
                                    </div>
                                </center>

                            </div>
                        </a>

                        <?php } ?>
                    </div>
                </div>

            </section>
        </div>
        <div class="container">
            <h5 class="links-style">Voir tout</h5>
            <hr style="border-bottom: 2px solid grey;width:100px">
        </div>
        <div style="background-color: rgba(128, 128, 128, 0.03);padding-top:20px;padding-bottom:20px">
            <section class="container">
                <div class="row">
                    <?php while ($fil = mysqli_fetch_array($user)) { ?>
                    <div class="col-xl-3 col-md-4" style="margin-bottom: 20px;">
                        <a href="profil_artisans.php?id_art=<?php echo $fil['ID'] ?>&& nom=<?php echo $fil['nom'] . ' ' . $fil['prenom'] ?>"
                            style="color: black;text-decoration:none">
                            <div class="contact">
                                <center>
                                    <img src="../../Public/image/user.png" alt="" class="art_photo">
                                    <h5 style="font-family: Georgia, 'Times New Roman', Times, serif;font-weight:bold">
                                        <?php
                                            $nom = $fil['nom'] . ' ' . $fil['prenom'];
                                            // Texte d'exemple avec des caractères spéciaux
                                            $post_art = $nom;

                                            // Utilisation d'une expression régulière pour diviser la chaîne en mots
                                            preg_match_all('/[\p{L}\p{M}\d\.,;-?_:\'-]+/u', $post_art, $matches);

                                            // Sélectionne les 2 premiers mots et les réassemble
                                            $name = implode(' ', array_slice($matches[0], 0, 2));

                                            // Affiche les 2 premiers mots
                                            echo $name;
                                            ?>
                                    </h5>
                                    <div style="display: flex;align-items:center">
                                        <div style="margin-right: 5px;color:blue;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-tags" viewBox="0 0 16 16">
                                                <path
                                                    d="M3 2v4.586l7 7L14.586 9l-7-7zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586z" />
                                                <path
                                                    d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1z" />
                                            </svg>
                                        </div>
                                        <div style="padding-top:10px">
                                            <h6
                                                style="font-family: Georgia, 'Times New Roman', Times, serif;font-weight:bold">
                                                <?php echo $fil['metier'] ?>
                                            </h6>
                                        </div>
                                    </div>
                                    <div style="display: flex;align-items:center">
                                        <div style="margin-right: 5px;color:blue;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.3 1.3 0 0 0-.37.265.3.3 0 0 0-.057.09V14l.002.008.016.033a.6.6 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.6.6 0 0 0 .146-.15l.015-.033L12 14v-.004a.3.3 0 0 0-.057-.09 1.3 1.3 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465s-2.462-.172-3.34-.465c-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411" />
                                            </svg>
                                        </div>
                                        <div style="padding-top:10px">
                                            <h6
                                                style="font-family: Georgia, 'Times New Roman', Times, serif;font-weight:bold">
                                                <?php echo $fil['commune'] . ' / ' . $fil['quartier'] ?>
                                            </h6>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="tel:+225<?php echo $fil['telephone'] ?>" class="btn btn-primary"
                                            style="box-shadow: 2px 6px 10px rgba(0, 0, 0, 0.247);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                            </svg>
                                            Appeler
                                        </a>
                                    </div>
                                </center>

                            </div>
                        </a>

                    </div>
                    <?php } ?>

                </div>

            </section>
        </div>
        <?php require('footer.php') ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <?php require_once('script_maps.php') ?>
</body>

</html>