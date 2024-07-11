<?php require_once('../../App/Config/database.php') ?>
<?php require_once('error_message.php') ?>
<?php require_once('../../App/Model/art_insc.php') ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../Public/css/creation_de_compte.css">

    <title>Inscription</title>

</head>

<body>

    <form method="post" enctype="multipart/form-data">
        <div class="container"><br>
            <h2>Creation de compte</h2>
            <h3>Information sur l'artisan</h3>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" name="nom" id="nom">
                        <span style="color:red">
                            <?php echo $nom_error ?>
                        </span><br>
                    </div>
                    <div class="col-md-6">
                        <label for="prenom"> Prénom</label>
                        <input type="text" class="form-control" name="prenom" id="prenom">
                        <span style="color:red">
                            <?php echo $prenom_error ?>
                        </span><br>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="telephone">Téléphone</label>
                        <input type="text" class="form-control" name="telephone" id="telephone">
                        <span style="color:red">
                            <?php echo $telephone_error ?>
                        </span><br>
                    </div>
                    <div class="col-md-6">
                        <label for="tel_wa">WhatsApp</label>
                        <input type="number" class="form-control" name="tel_wa" id="tel_wa"><br>
                    </div>
                </div>
            </div>
            <h3>Information sur votre métier</h3>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <label for="metier"> Votre métier</label>
                        <input type="text" name="metier" id="metier" class="form-control">
                        <span style="color:red">
                            <?php echo $metier_error ?>
                        </span><br>
                    </div>
                </div>
                <div>
                    <label>Heure d'activité ?</label>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="deb_act">Début (H)</label>
                            <input type="number" class="form-control" name="deb_act" id="deb_act" />
                            <span style="color:red">
                                <?php echo $deb_act_error ?>
                            </span><br>
                        </div>
                        <div class="col-sm-6">
                            <label for="fin_act">Fin (m)</label>
                            <input type="number" class="form-control" name="fin_act" id="fin_act">
                            <span style="color:red">
                                <?php echo $fin_act_error ?>
                            </span><br>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <center>
                    <button type="submit" name="suivant">Suivant</button>
                </center>
            </div>
        </div>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>