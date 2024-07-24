<?php
if (isset($_POST['send_message'])) {
    if (
        !empty($_POST['nom_prenom']) && !empty($_POST['phone_number']) && !empty($_POST['sujet']) && !empty($_POST['message'])
        && !empty($_GET['id_artisan'])
    ) {

        $nom_prenom = $_POST['nom_prenom'];
        $phone_number = $_POST['phone_number'];
        $sujet = $_POST['sujet'];
        $message_client = $_POST['message'];
        $id_artisan = $_GET['id_artisan'];

        if ($sujet == "Service") {
            $req = $con->prepare("INSERT INTO services (nom_prenom, phone_number, sujet, message_client,artisan_ID ) VALUES (?, ?, ?, ?, ?)");
            $req->bind_param("ssssi", $nom_prenom, $phone_number, $sujet, $message_client, $id_artisan);
            if ($req->execute()) {
                echo "Message envoyé";
                header("Location: ../../View/Client/publication.php");
            } else {
                $send_error = "Erreur lors de l'envoie, veuillez réessayer";
            }
            exit();
        }
        if ($sujet == "Commande") {
            $req = $con->prepare("INSERT INTO commandes (nom_prenom, phone_number, sujet, message_client,artisan_ID ) VALUES (?, ?, ?, ?, ?)");
            $req->bind_param("ssssi", $nom_prenom, $phone_number, $sujet, $message_client, $id_artisan);
            if ($req->execute()) {
                echo "Message envoyé";
                header("Location: ../../View/Client/publication.php");
            } else {
                $send_error = "Erreur lors de l'envoie, veuillez réessayer";
            }
            exit();
        }
    } else {
        if (empty($_POST['nom_prenom'])) {
            $nom_prenom_error = "Nom et prénom obligatoire";
        }
        if (empty($_POST['phone_number'])) {
            $telephone_error = "Votre numéro de téléphone est obligatoire";
        }
        if (empty($_POST['sujet'])) {
            $sujet_error = "Champs requis";
        }
        if (empty($_POST['message'])) {
            $message_error = "Votre message est obligatoire";
        }
    }
}
