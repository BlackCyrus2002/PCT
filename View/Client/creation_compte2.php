<?php require_once('../../App/Config/database.php') ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="stylesheet" href="../../Public/css/creation_compte2.css">
</head>

<body>
    <header>
        <div class="head"><img src="../../Public/image/logo.jpg" alt=""></div>
    </header>

    <section>

        <form action="">
            <h3 style="color: orangered;">Suite</h3>
            <div>
                <label for="dur_act">Dépuis combien de temps exercez vous ce metier ?</label>
                <input type="number" name="dur_act" id="dur_act" class="form-control"><br>
            </div>

            <div>
                <label for="jr_act">Jours d'activités</label>
                <select name="jr_act" id="jr_act" class="form-control">
                    <option value="">Veuillez selectionner </option>
                    <option value="Lundi au Vendredi">Lundi au Vendredi</option>
                    <option value="Lundi au Samedi">Lundi au Samedi</option>
                    <option value="Samedi et Dimanche">Samedi et Dimanche</option>
                    <option value="Tous les jours">Tous les jours</option>
                </select><br>
            </div>

            <div class="row"><br>
                <h4>Quelle est votre localisation geographique ?</h4>
                <div class="col-md-6">
                    <label for="pays">Pays</label>
                    <input type="text" name="pays" id="pays" class="form-control"><br>

                </div>
                <div class="col-md-6">
                    <label for="ville">Ville</label>
                    <input type="text" name="ville" id="ville" class="form-control"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="commune">Commune</label>
                    <input type="text" name="commune" id="commune" class="form-control"><br>
                </div>
                <div class="col-md-6">
                    <label for="quartier">Quartier</label>
                    <input type="text" name="quartier" id="quartier" class="form-control"><br>
                </div>
            </div>


            <div>
                <h4>Information de connexion</h4><br>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="gmail">Email</label>
                    <input type="email" name="gmail" id="gmail" class="form-control"><br>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="text" class="form-control" name="password" id="password" placeholder="********" />
                    </div>

                </div>
            </div>
            <div style="display: flex;align-items:center">
                <div>
                    <input type="checkbox" class="form-check-input" style="margin-right:5px" name="accept" id="accept">
                </div>
                <div>
                    <label for="accept">
                        J'ai lu et j'accepte les
                        <a href="#">régles</a> et la
                        <a href="#">politique de confidentialité</a>.
                    </label>
                </div>
            </div>


            <div>
                <center>
                    <button class="btn btn-warning">S'inscrire</button>
                </center>
            </div>

        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>