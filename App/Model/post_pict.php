<?php
if (isset($_POST['post_pict'])) {
    if (!empty($_POST['comment']) && !empty($_FILES['path_photo']['name']) && !empty($_POST['id_artisan'])) {

        $comment = $_POST['comment'];
        $id_artisan = $_POST['id_artisan'];

        //Définition du dossier et du chemin du fichier.
        $dossier = "../../Public/image/ImgProd/";
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

        // Vérification de la taille du fichier en Ko (500000 o =500ko)
        if ($_FILES["path_photo"]["size"] > 500000) {
            $photo_error = "Le fichier est trop volumineux.";
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

                // Insérer les données dans la base de données
                $stmt = $con->prepare("INSERT INTO galerie_photo (comment,id_artisan,  path_photo) VALUES (?, ?, ?)");
                $stmt->bind_param("sis", $comment, $id_artisan, $photo_path);
                if ($stmt->execute()) {
                    $success_message = "Le produit a été ajouté avec succès.";
                } else {
                    $error_message = "Erreur lors de l'enregistrement, réessayez svp!";
                }
                $stmt->close();
            } else {
                $photo_error = "Désolé, une erreur s'est produite lors de l'upload de votre fichier.";
            }
            header('Location: ../../View/Artisan/tableau_de_bord.php');
            exit();
        }
    } else {
        if (empty($_POST['comment'])) {
            $comment_error = "Votre commentaire est obligatoire";
        }
        if (empty($_FILES['path_photo']['name'])) {
            $post_photo = "La photo est obligatoire.";
        }
    }
}
