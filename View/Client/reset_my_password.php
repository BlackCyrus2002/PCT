<?php
require_once('../../App/Config/database.php');
require_once('error_message.php');
require_once('../../App/Model/change_password.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réinitialiser mot mot de passe</title>
    <link rel="shortcut icon" href="../../Public/image/mylogo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../Public/css/parametre_de_connexion.css">
</head>

<body>

    <form action="" method="post">

        <h2>Réinitialiser le mot de passe </h2>

        <div class="form-controle" hidden>
            <label for="email">Nouveau mot de passe:</label>
            <input type="text" name="token" value="<?php echo $_GET['token'] ?>">
        </div><br>
        <div class="form-controle">
            <label for="new_password">Nouveau mot de passe:</label>
            <input type="password" name="new_password" placeholder="********"><br>
            <span style="color: red;">
                <?php echo $password_error ?>
            </span>
            <span style="color: red;">
                <?php echo $different_password ?>
            </span>
            <br>
        </div><br>
        <div class="form-controle">
            <label for="confirm_new_password">Confirmer le mot de passe:</label>
            <input type="password" name="confirm_new_password" placeholder="Confirmer le mot de passe"><br>
            <span style="color: red;">
                <?php echo $confirm_new_password ?>
            </span>
            <br>
        </div>
        <div><br>
            <button name="change_password">Envoyer</button>
        </div><br>
        <span style="color: black;">
            <?php echo $lien_expire ?>
        </span>
    </form>





</body>

</html>