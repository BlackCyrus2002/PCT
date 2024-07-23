<?php
if (isset($_POST['send_event'])) {
    if (
        !empty($_POST['title']) && !empty($_POST['lieu']) && !empty($_POST['jr_entier'])
        && !empty($_POST['date_event']) && !empty($_POST['deb']) && !empty($_POST['fin'])
        && !empty($_POST['id_artisan'])
    ) {
        $title = $_POST['title'];
        $lieu = $_POST['lieu'];
        $jr_entier = $_POST['jr_entier'];
        $date_event = $_POST['date_event'];
        $deb = $_POST['deb'];
        $fin = $_POST['fin'];
        $id_artisan = $_POST['id_artisan'];
        $req = $con->prepare("INSERT INTO evenement (title, lieu, jr_entier, date_event, deb, fin, id_artisan) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $req->bind_param(
            "ssssssi",
            $title,
            $lieu,
            $jr_entier,
            $date_event,
            $deb,
            $fin,
            $id_artisan
        );
        if ($req->execute()) {
            $add_event_success = "Evènement bien ajouté";
            header("Location: tableau_de_bord.php");
            exit();
        } else {
            echo 'Erreur';
        }
    } else {
        if (empty($_POST['title'])) {
            $title_error = "Titre obligatoire";
        }
        if (empty($_POST['lieu'])) {
            $lieu_error = "Lieu obligatoire";
        }
        if (empty($_POST['jr_entier'])) {
            $jr_entier_error = "Case requise";
        }
        if (empty($_POST['date_event'])) {
            $date_event_error = "Date obligatoire";
        }
        if (empty($_POST['deb'])) {
            $deb_error = "Heure de debut obligatoire";
        }
        if (empty($_POST['fin'])) {
            $fin_error = "Heure de fin obligatoire";
        }
    }
}
