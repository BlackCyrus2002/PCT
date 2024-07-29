<?php
if (isset($_POST['update_profil'])) {
    $dur_act = !empty($_POST['dur_act']) ? $_POST['dur_act'] : null;
    $jr_act = !empty($_POST['jr_act']) ? $_POST['jr_act'] : null;
    $pays = !empty($_POST['pays']) ? $_POST['pays'] : null;
    $ville = !empty($_POST['ville']) ? $_POST['ville'] : null;
    $commune = !empty($_POST['commune']) ? $_POST['commune'] : null;
    $quartier = !empty($_POST['quartier']) ? $_POST['quartier'] : null;

    if (
        !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['telephone']) &&
        !empty($_POST['metier']) && !empty($_POST['deb_act']) && !empty($_POST['fin_act']) &&
        !empty($_POST['sexe']) && !empty($_POST['situation_matrimoniale']) &&
        !empty($_POST['lieu_travail']) && $dur_act && $jr_act && $pays &&
        $ville && $commune && $quartier
    ) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $sexe = $_POST['sexe'];
        $telephone = $_POST['telephone'];
        $tel_wa = $_POST['tel_wa'];
        $metier = $_POST['metier'];
        $deb_act = $_POST['deb_act'];
        $fin_act = $_POST['fin_act'];
        $situation = $_POST['situation_matrimoniale'];
        $lieu_travail = $_POST['lieu_travail'];

        $req = $con->prepare("UPDATE artisans SET nom = ?,prenom = ?,sexe = ?,telephone = ?,tel_wa = ?,metier = ?,deb_act = ?,fin_act = ?,
        situation_matrimoniale = ?,lieu_travail = ?,dur_act = ?,jr_act = ?,pays = ?,ville = ?,commune = ?,quartier = ? WHERE ID= ? ");
        $req->bind_param(
            "ssssssssssssssssi",
            $nom,
            $prenom,
            $sexe,
            $telephone,
            $tel_wa,
            $metier,
            $deb_act,
            $fin_act,
            $situation,
            $lieu_travail,
            $dur_act,
            $jr_act,
            $pays,
            $ville,
            $commune,
            $quartier,
            $id_art
        );
        if ($req->execute()) {

            header('Location: tableau_de_bord.php');
            exit();
        } else {
            $error_message = "Erreur lors de l'enregistrement, réessayez svp!";
        }
    } else {
        if (empty($_POST['nom'])) {
            $nom_error = "Le nom est obligatoire *";
        }
        if (empty($_POST['prenom'])) {
            $prenom_error = "Le prénom est obligatoire *";
        }
        if (empty($_POST['telephone'])) {
            $telephone_error = "Le numéro de téléphone est obligatoire *";
        }
        if (empty($_POST['metier'])) {
            $metier_error = "Votre métier est obligatoire *";
        }
        if (empty($_POST['deb_act'])) {
            $deb_act_error = "Votre heure de début est obligatoire *";
        }
        if (empty($_POST['fin_act'])) {
            $fin_act_error = "Votre heure de fin est obligatoire *";
        }
        if (empty($_POST['sexe'])) {
            $sexe_error = "La précision de votre sexe est requis *";
        }
        if (empty($_POST['situation_matrimoniale'])) {
            $situation_error = "Votre situation est obligatoire *";
        }
        if (empty($_POST['lieu_travail'])) {
            $lieu_travail_error = "Le nom de votre lieu de travail est obligatoire *";
        }
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