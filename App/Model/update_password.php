<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../vendor/autoload.php';
require '../../View/Client/connexion/config.php';

if (isset($_POST['update_password'])) {
    if (!empty($_POST['email'])) {
        $mail = new PHPMailer(true);
        try {
            $reset_email = $_POST['email'];
            $sql = "SELECT ID FROM connexions WHERE gmail = ?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("s", $reset_email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $token = bin2hex(random_bytes(50)); // Génère un jeton de réinitialisation
                $expTime = time() + 3600; // 1 heure de validité

                // Stocker le jeton et l'heure d'expiration dans la base de données
                $sql = "UPDATE connexions SET remember_token = ?, reset_expire = ? WHERE gmail = ?";
                $stmt = $con->prepare($sql);
                $stmt->bind_param("sis", $token, $expTime, $reset_email);
                $stmt->execute();

                // Envoyer un email avec le lien de réinitialisation
                $resetLink = "http://localhost/PROJET%20PCT/View/Client/reset_my_password.php?token=" . $token;
                $message = "Cliquez sur ce lien pour réinitialiser votre mot de passe : " . $resetLink;

                // Configuration du serveur SMTP
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = USERNAME;
                $mail->Password = APP_PASSWORD;
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                // Destinataire
                $mail->setFrom(USERNAME, $reset_email);
                $mail->addAddress($reset_email);

                // Contenu de l'email
                $mail->isHTML(true);
                $mail->Subject = 'Réinitialisation du mot de passe';
                $mail->Body    = $message;
                $mail->AltBody = $message;

                $mail->send();
                header("Location: ../../View/client/connexion/connexion.php");
                exit();
            }
        } catch (Exception $e) {
            echo "Le message n'a pas pu être envoyé. Erreur de PHPMailer: {$mail->ErrorInfo}";
        }
    } else {
        $email_error = "Mot de passe obligatoire";
    }
}