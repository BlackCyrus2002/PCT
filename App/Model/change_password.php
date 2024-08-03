<?php
if (isset($_POST['change_password'])) {
    if (!empty($_POST['token']) && !empty($_POST['new_password']) && !empty($_POST['confirm_new_password'])) {
        $token = $_POST['token'];
        $newPassword = $_POST['new_password'];
        $confirmPassword = $_POST['confirm_new_password'];
        $localtime = time();

        if ($newPassword === $confirmPassword) {

            // Recherche du jeton et de son expiration
            $sql = "SELECT ID FROM connexions WHERE remember_token = ? AND reset_expire > ?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("si", $token, $localtime);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                $sql = "UPDATE connexions SET password_user = ?, remember_token = NULL, reset_expire = NULL WHERE remember_token = ?";
                $stmt = $con->prepare($sql);
                $stmt->bind_param("ss", $hashedPassword, $token);

                if ($stmt->execute()) {
                    header("Location: connexion/connexion.php");
                    exit();
                }
            } else {
                $lien_expire = "Le lien de réinitialisation est invalide ou a expiré.";
            }
        } else {
            $different_password = "Les mots de passe ne correspondent pas.";
        }
    } else {
        if (empty($_POST['new_password'])) {
            $password_error = "Le mot de passe est obligatoire";
        }
        if (empty($_POST['confirm_new_password'])) {
            $confirm_new_password = "Confirmer le mot de passe";
        }
    }
}