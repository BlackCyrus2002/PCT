<?php require_once('../../App/Config/database.php') ?>
<?php require_once('../../App/Model/update_password.php') ?>
<?php require_once('error_message.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réinitialiser mon mot de passe</title>
    <link rel="shortcut icon" href="../../Public/image/mylogo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../Public/css/parametre_de_connexion.css">
</head>

<body>

    <form action="" method="post">

        <h2>Réinitialiser le mot de passe </h2>
        <p>(Vérifier votre email après la soumission)</p>
        <div class="form-controle">
            <input type="email" name="email" placeholder="myemail@gmail.com" required><br>
            <span style="color:red">
                <?php echo $email_error ?>
            </span>
        </div>
        <div><br>
            <button name="update_password">Envoyer</button>
        </div>
    </form>





</body>

</html>