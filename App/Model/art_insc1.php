<?php
session_start();
require_once('../../App/Config/database.php');
if (!$_SESSION['nom']) {
    header('Location: creation_compte.php');
    exit();
}
if (isset($_POST['inscrire'])) {

    $dur_act = !empty($_POST['dur_act']) ? $_POST['dur_act'] : null;
    $jr_act = !empty($_POST['jr_act']) ? $_POST['jr_act'] : null;
    $pays = !empty($_POST['pays']) ? $_POST['pays'] : null;
    $ville = !empty($_POST['ville']) ? $_POST['ville'] : null;
    $commune = !empty($_POST['commune']) ? $_POST['commune'] : null;
    $quartier = !empty($_POST['quartier']) ? $_POST['quartier'] : null;

    //Information de connexion
    $gmail = !empty($_POST['gmail']) ? $_POST['gmail'] : null;
    $password_user = !empty($_POST['password_user']) ? $_POST['password_user'] : null;
    $accept = !empty($_POST['accept']) ? $_POST['accept'] : null;

    if ($dur_act && $jr_act && $pays && $ville && $commune && $quartier && $gmail && $password_user && $accept) {

        // Information sur l'artisan
        $nom = $_SESSION['nom'];
        $prenom = $_SESSION['prenom'];
        $sexe = $_SESSION['sexe'];
        $telephone = $_SESSION['telephone'];
        $tel_wa = $_SESSION['tel_wa'];
        $metier = $_SESSION['metier'];
        $deb_act = $_SESSION['deb_act'];
        $fin_act = $_SESSION['fin_act'];
        $longitude = $_SESSION['longitude'];
        $latitude = $_SESSION['latitude'];
        $password_user = password_hash($password_user, PASSWORD_DEFAULT);

        $req = $con->prepare("SELECT gmail FROM artisans WHERE gmail = ?");
        $req->bind_param("s", $gmail);
        $req->execute();
        $req->store_result();

        if ($req->num_rows > 0) {
            $email_exist = "Cet email est déjà utilisé. Veuillez en choisir un autre.";
        } else {
            // Si l'email n'existe pas, insérez le nouvel utilisateur
            $req->close();
            $req = $con->prepare("INSERT INTO artisans (nom,prenom,sexe,telephone,tel_wa,metier,deb_act,fin_act,longitude,
            latitude,dur_act,jr_act,pays,ville,commune,quartier,gmail) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $req->bind_param(
                "sssssssssssssssss",
                $nom,
                $prenom,
                $sexe,
                $telephone,
                $tel_wa,
                $metier,
                $deb_act,
                $fin_act,
                $longitude,
                $latitude,
                $dur_act,
                $jr_act,
                $pays,
                $ville,
                $commune,
                $quartier,
                $gmail
            );

            if ($req->execute()) {
                $comptes = $con->prepare("SELECT ID FROM artisans WHERE gmail = ?");
                $comptes->bind_param('s', $gmail);
                $comptes->execute();
                $result = $comptes->get_result();

                if ($result->num_rows > 0) {
                    $only_user = $result->fetch_assoc();
                    $req_con = $con->prepare("INSERT INTO connexions (gmail, password_user, accept, Artisans) VALUES (?, ?, ?, ?)");
                    $req_con->bind_param("sssi", $gmail, $password_user, $accept, $only_user['ID']);
                    $req_con->execute();
                    $mess = "Vous avez été bien ajouté, Veuillez vous connecter!";
                } else {
                    echo "Utilisateur non trouvé.";
                    exit();
                }
                header('Location: connexion.php');
                exit();
            } else {
                $error_message = "Erreur lors de l'enregistrement, réessayez svp!";
            }
        }
    } else {
        if (empty($dur_act)) $duree_error = "Votre durée d'activité est obligatoire *";
        if (empty($jr_act)) $jour_error = "Ce champ est obligatoire *";
        if (empty($pays)) $pays_error = "Le pays est obligatoire *";
        if (empty($ville)) $ville_error = "La ville est obligatoire *";
        if (empty($commune)) $commune_error = "La commune est obligatoire *";
        if (empty($quartier)) $quartier_error = "Le quartier est obligatoire *";
        if (empty($gmail)) $email_error = "L'email est requis *";
        if (empty($password_user)) $password_error = "Le mot de passe est obligatoire * ";
        if (empty($accept)) $accept_error = "Validation requise * ";
    }
}