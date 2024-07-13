<?php
session_start();
require_once('../../App/Config/database.php');
if (isset($_POST['suivant'])) {

    if (
        !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['telephone']) &&
        !empty($_POST['metier']) && !empty($_POST['deb_act']) && !empty($_POST['fin_act'] &&
            !empty($_POST['sexe']))
    ) {
        $_SESSION['nom'] = $_POST['nom'];
        $_SESSION['prenom'] = $_POST['prenom'];
        $_SESSION['sexe'] = $_POST['sexe'];
        $_SESSION['telephone'] = $_POST['telephone'];
        $_SESSION['tel_wa'] = $_POST['tel_wa'];
        $_SESSION['metier'] = $_POST['metier'];
        $_SESSION['deb_act'] = $_POST['deb_act'];
        $_SESSION['fin_act'] = $_POST['fin_act'];
        $_SESSION['longitude'] = $_POST['longitude'];
        $_SESSION['latitude'] = $_POST['latitude'];
        header('Location: creation_compte2.php');
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
        if (empty($_POST['sexe'])) {
            $sexe_error = "La précision de votre sexe est requis";
        }
    }
}