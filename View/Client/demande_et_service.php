<?php require_once('../../App/Config/database.php') ?>
<?php require_once('error_message.php') ?>
<?php require_once('../../App/Model/com_serv.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande et servive</title>
    <link rel="stylesheet" href="../../Public/css/demande_et_service">
</head>

<body>

    <form action="" method="post">
        <div class="container">
            <div class="title">
                <h2 style="font-family: Georgia, 'Times New Roman', Times, serif;">Contactez l'artisan</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-controle"><br>
                        <label for="nom_prenom">Entrez votre nom et prénom</label>
                        <input type="text" name="nom_prenom" class="form-control" placeholder="Ex:GUEI">
                        <span style="color: red;">
                            <?php echo $nom_prenom_error ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-controle"><br>
                    <label for="phone_number">Numéro de téléphone</label>
                    <input type="number" name="phone_number" class="form-control" placeholder="+2250000000000">
                    <span style="color: red;">
                        <?php echo $telephone_error ?>
                    </span>

                </div>
            </div>
            <div class="col-md-12"><br>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sujet" id="service" value="Service">
                    <label class="form-check-label" for="service">
                        Service
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sujet" id="commande" value="Commande">
                    <label class="form-check-label" for="commande">
                        Commande
                    </label>
                </div>
                <span style="color: red;">
                    <?php echo $sujet_error ?>
                </span>
            </div>

            <div><br>
                <textarea name="message" maxlength="50" placeholder="Définissez votre message"
                    class="form-control"></textarea>
                <span style="color: red;">
                    <?php echo $message_error ?><br>
                </span>
            </div>
            <div class="btn">
                <button type="submit" name="send_message">Envoyez</button><br>
            </div>
            <span style="color: black;">
                <?php echo $message_error ?>
            </span>
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>