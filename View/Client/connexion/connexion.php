<?php require_once('../../../App/Config/database.php') ?>
<?php require_once('config.php'); ?>
<?php require_once('../error_message.php') ?>
<?php require_once('../../../App/Model/login.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="shortcut icon" href="../../../Public/image/mylogo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../../Public/css/connexion.css">
</head>

<body>
    <section class="form">
        <div class="row">
            <div class="col-md-6" style="padding-right:0px;padding-left:0px">
                <div class="creer_compte">
                    <div class="head">
                        <h2>Pas encore de compte ?</h2>
                        <p>Creez votre compte
                            artisans gratuitement!!</p>
                        <div class="container">
                            <a href="../creation_compte.php">Creer un compte</a>
                        </div>
                    </div>
                    <div class="btn">
                        <div class="devenez">
                            <p>
                                Devenez un artisans dès maintement et profitez de notre offre et aussi des avantage
                                que nous vous proposons
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6" style="padding-left:0px;padding-right:0px;">
                <div class="enregistrement">
                    <div class="container">
                        <h1 style="font-family: 'Times New Roman', Times, serif;font-weight:bold">Connexion</h1><br>

                        <form action="" method="post">
                            <div>
                                <input type="email" name="gmail" id="gmail" placeholder="@Email" class="form-control">
                                <div style="text-align: left;margin-bottom:10px">
                                    <span style="color: red;">
                                        <?php echo $error_message ?>
                                    </span>
                                    <span style="color: red;">
                                        <?php echo $email_error_connect ?>
                                    </span><br>
                                </div>
                                <input type="password" name="password_user" id="password_user" placeholder="********"
                                    class="form-control">
                                <div style="text-align: left;margin-bottom:10px">
                                    <span style="color: red;">
                                        <?php echo $password_error_connect ?>
                                    </span><br>
                                </div>
                            </div>
                            <div style="text-align: left;">
                                <input type="checkbox" class="form-check-input">
                                <label for="coche">Enregistrer le mot de passe</label><br>
                            </div>

                            <div class="google"><br>
                                <img src="../../../Public/image/google-1088004_640.png" alt="">
                                <a
                                    href="https://accounts.google.com/o/oauth2/v2/auth?scope=openid%20profile%20email&access_type=online&response_type=code&redirect_uri=<?php echo urlencode("http://localhost/PROJET%20PCT/View/Client/connexion/connect.php") ?>&client_id=<?php echo GOOGLE_ID ?>">
                                    Continuez avec google
                                </a>
                            </div>
                            <div id="pass_oubie"><a href="../modif_password.php">Mot de passe oublié?</a></div>
                            <div id="connexion">
                                <button name="login">Connexion</button>

                            </div>
                            <a href="../../../accueil.php" class="btn btn-default">Revenir à la page d'accueil</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>