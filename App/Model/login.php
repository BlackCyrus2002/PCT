<?php
session_start();
require_once('../../../App/Config/database.php');

if (isset($_POST['login'])) {
    if (!empty($_POST['gmail']) && !empty($_POST['password_user'])) {

        $email = $_POST['gmail'];
        $password_user = $_POST['password_user'];

        $req = $con->prepare("SELECT ID,Artisans, password_user FROM connexions WHERE gmail = ?");
        $req->bind_param("s", $email);
        $req->execute();
        $req->store_result();

        if ($req->num_rows > 0) {
            // L'utilisateur existe, vérifions le mot de passe
            $req->bind_result($id, $artisan, $hashed_password);
            $req->fetch();

            if (password_verify($password_user, $hashed_password)) {
                // Mot de passe correct, démarrage de la session
                $_SESSION['user_id'] = $id;
                $_SESSION['artisan_id'] = $artisan;
                $_SESSION['email'] = $email;

                // Définir des cookies pour se souvenir de l'utilisateur
                setcookie("user_id", $id, time() + (3600), "/"); // 3600 = 1 heure

                // Rediriger l'utilisateur vers la page d'accueil ou tableau de bord
                header("Location: ../../../View/Artisan/tableau_de_bord.php");
                exit();
            } else {
                $error_message = "Email ou mot de passe incorrect.";
            }
        } else {
            $error_message = "Email ou mot de passe incorrect.";
        }

        $req->close();
    } else {
        if (empty($_POST['gmail'])) {
            $email_error_connect = "L'email est obligatoire";
        }
        if (empty($_POST['password_user'])) {
            $password_error_connect = "Le mot de passe est obligatoire";
        }
    }
}