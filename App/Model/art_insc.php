<?php
require_once('../../App/Config/database.php');
if (isset($_POST['suivant'])) {

    if (
        !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['telephone']) &&
        !empty($_POST['metier']) && !empty($_POST['deb_act']) && !empty($_POST['fin_act'])
    ) {
        /*$nom = $_POST['nom'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $phone_wa = $_POST['phone_wa'];
        $password_user = password_hash($_POST['password'], PASSWORD_DEFAULT);*/
        header('Location: creation_compte2.php');

        /* //Définition du dossier et du chemin du fichier.
        $dossier = "Public/images/ImgArt/";
        $file = $dossier . time() . '-' . basename($_FILES['path_photo']['name']);
        $uploadOk = 1;

        //Récupération de l'extension du fichier.(jpg,png,gif etc...)
        $img_name = strtolower(pathinfo($file, PATHINFO_EXTENSION));

        //Vérifie si le fichier est une image
        $check = getimagesize($_FILES["path_photo"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $photo_error = "Le fichier n'est pas une image.";
            $uploadOk = 0;
        }

        // Vérification de la taille du fichier en Ko (20000000 o=20mo)
        if ($_FILES["path_photo"]["size"] > 20000000) {
            $photo_error = "La photo est trop volumineuse.";
            $uploadOk = 0;
        }

        // Vérification du format de l'image
        if ($img_name != "jpg" && $img_name != "png" && $img_name != "jpeg" && $img_name != "gif") {
            $photo_error = "Seuls les formats JPG, JPEG, PNG & GIF sont autorisés.";
            $uploadOk = 0;
        }

        //Si toutes les vérifications sont correctes, le fichier est déplacé vers le dossier ../../Public/images/ImgProd/
        if ($uploadOk == 0) {
            $photo_error = "Désolé, votre photo n'a pas été enregistrée, réessayez svp!";
        } else {
            if (move_uploaded_file($_FILES["path_photo"]["tmp_name"], $file)) {
                $photo_path = $file;

                require('App/Model/email_existe.php');
            } else {
                $photo_error = "Désolé, une erreur s'est produite lors de l'upload de votre fichier.";
            }
        }*/
    } else {
        if (empty($_POST['nom'])) {
            $nom_error = "Le nom est obligatoire";
        }
        if (empty($_POST['prenom'])) {
            $prenom_error = "Le prénom est obligatoire";
        }
        if (empty($_POST['telephone'])) {
            $telephone_error = "Le numéro de téléphone est obligatoire";
        }
        if (empty($_POST['metier'])) {
            $metier_error = "Votre métier est obligatoire";
        }
        if (empty($_POST['deb_act'])) {
            $deb_act_error = "Votre heure de début est obligatoire";
        }
        if (empty($_POST['fin_act'])) {
            $fin_act_error = "Votre heure de fin est obligatoire";
        }
    }
}