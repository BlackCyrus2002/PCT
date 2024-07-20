<?php
if (isset($_POST['abonne_send'])) {
    if (!empty($_POST['email_client'])) {
        $email_client = $_POST['email_client'];

        $req = $con->prepare("SELECT email FROM abonne WHERE email = ?");
        $req->bind_param("s", $email_client);
        $req->execute();
        $req->store_result();

        if ($req->num_rows > 0) {
            $email_exist = "Vous êtes déjà abonné à notre page !";
        } else {
            // Si l'email n'existe pas, insérez le nouvel utilisateur
            $req->close();
            $req = $con->prepare("INSERT INTO abonne (email) VALUES (?)");
            $req->bind_param("s", $email_client);

            if ($req->execute()) {
                $email_save = "Vous êtes désormais abonné à notre site !";
            } else {
                $error_message = "Erreur lors de l'enregistrement, réessayez svp!";
            }
        }
    } else {
        if (empty($_POST['email_client'])) {
            $email_error = "Votre email est obligatoire pour l'abonnement !";
        }
    }
}