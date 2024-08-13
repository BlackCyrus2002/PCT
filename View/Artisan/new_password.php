<?php
require_once('../../App/Config/database.php');
require_once('../Client/error_message.php');
require_once('../../App/Model/valid_password.php');
if (isset($_GET['id_art'])) {
    $only_artisan = $con->prepare("SELECT gmail from connexions WHERE Artisans = ? ");
    $only_artisan->bind_param("i", $_GET['id_art']);
    $only_artisan->execute();
    $result = $only_artisan->get_result();

    if ($result->num_rows > 0) {
        $only_user = $result->fetch_assoc();
    } else {
        echo "Utilisateur non trouvé.";
        exit();
    }
} else {
    header('Location: tableau_de_bord.php');
    exit();
}


?>
<!doctype html>
<html lang="en">

<head>
    <title>Modifier mon mot de passe</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="shortcut icon" href="../../Public/image/mylogo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../Public/css/parametre_de_connexion.css">
</head>

<body>
    <form action="" method="post" style="display:block;padding-bottom:0%;padding-top:2%;">
        <div class="container">
            <h2 style="font-weight: bold;font-family:Georgia, 'Times New Roman', Times, serif;">Réinitialiser
                le mot de
                passe </h2>
            <div style="text-align: left;" hidden>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="@"
                        value="<?php echo $only_user['gmail'] ?>" readonly />
                </div>
            </div>
            <div style="text-align: left;">
                <div class="mb-3">
                    <label for="new_password" class="form-label">Nouveau mot de passe :</label>
                    <input type="password" class="form-control" name="new_password" id="new_password"
                        placeholder="********" />
                    <span style="color: red;">
                        <?php echo $password_error ?>
                    </span>
                    <span style="color: red;">
                        <?php echo $different_password ?>
                    </span>
                </div>

            </div>
            <div style="text-align: left;">
                <label for="confirm_new_password">Confirmer le mot de passe:</label>
                <input type="password" id="confirm_new_password" name="confirm_new_password" class="form-control"
                    placeholder="********"><br>
                <span style="color: red;">
                    <?php echo $confirm_new_password ?>
                </span>
                <br>
            </div>
            <div><br>
                <button type="submit" name="change_password">Réinitialiser</button>
            </div><br>
            <span style="color: black;">
                <?php echo $lien_expire ?>
            </span>
        </div>
    </form>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>