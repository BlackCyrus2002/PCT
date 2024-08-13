<?php
if (isset($_POST['change_password'])) {
    if (!empty($_POST['email']) && !empty($_POST['new_password']) && !empty($_POST['confirm_new_password'])) {
        $my_email = $_POST['email'];
        $newPassword = $_POST['new_password'];
        $confirmPassword = $_POST['confirm_new_password'];
        $localtime = time();

        if ($newPassword === $confirmPassword) {

            // Recherche du jeton et de son expiration
            $sql = "SELECT ID FROM connexions WHERE gmail = ?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("s", $my_email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                $sql = "UPDATE connexions SET password_user = ?";
                $stmt = $con->prepare($sql);
                $stmt->bind_param("s", $hashedPassword);

                if ($stmt->execute()) {
                    header("Location: tableau_de_bord.php");
                    exit();
                }
            } else {
                $lien_expire = "Utilisateur non trouvé.";
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