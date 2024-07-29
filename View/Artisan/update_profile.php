<?php
require_once '../../App/Config/database.php';
require_once("../Client/error_message.php");

if (!empty($_GET['id_art'])) {
    $id_art = $_GET['id_art'];
    $art = $con->prepare("SELECT ID,nom,prenom,sexe,telephone,tel_wa,metier,deb_act,fin_act,longitude,
            latitude,dur_act,jr_act,pays,ville,commune,quartier,gmail,path_photo,situation_matrimoniale,lieu_travail FROM artisans WHERE ID=?");
    $art->bind_param('i', $id_art);
    $art->execute();
    $result = $art->get_result();

    if ($result->num_rows > 0) {
        $only_art = $result->fetch_assoc();
    } else {
        echo "Artisan non trouvé.";
        exit();
    }
}
if (empty($_GET['id_art'])) {
    header("Location: tableau_de_bord.php");
    exit();
}

require_once("../../App/Model/update_profil.php");

?>
<!doctype html>
<html lang="en">

<head>
    <title>Modifier mes informations</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header><br>
        <div class="container">
            <h1 style="font-family: 'Times New Roman', Times, serif;font-weight:bold;color:blue">
                Modifer mon profil
            </h1><br>
            <form action="" method="post">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nom" class="form-label">Nom </label>
                                    <input type="text" class="form-control" name="nom" id="nom" placeholder="" m
                                        value="<?php echo $only_art['nom'] ?>" />
                                    <span style="color:red">
                                        <?php echo $nom_error; ?>
                                    </span>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="prenom" class="form-label">Prénom </label>
                                    <input type="text" class="form-control" name="prenom" id="prenom" placeholder=""
                                        value="<?php echo $only_art['prenom'] ?>" />
                                    <span style="color:red">
                                        <?php echo $prenom_error; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="sexe" class="form-label">Sexe </label>
                                    <select class="form-select" name="sexe" id="sexe">
                                        <option value="<?php echo $only_art['sexe'] ?>"><?php echo $only_art['sexe'] ?>
                                        </option>
                                        <option value="H">Homme</option>
                                        <option value="F">Femme</option>
                                    </select>
                                    <span style="color:red">
                                        <?php echo $sexe_error; ?>
                                    </span>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="telephone" class="form-label">Téléphone </label>
                                    <input type="number" class="form-control" name="telephone" id="telephone"
                                        placeholder="" value="<?php echo $only_art['telephone'] ?>" />
                                    <span style="color:red">
                                        <?php echo $telephone_error; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="tel_wa" class="form-label">WhatsApp </label>
                                    <input type="number" class="form-control" name="tel_wa" id="tel_wa" placeholder=""
                                        value="<?php echo $only_art['tel_wa'] ?>" />
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="situation_matrimoniale" class="form-label">Situation matrimoniale
                                    </label>
                                    <select name="situation_matrimoniale" id="situation_matrimoniale"
                                        class="form-select">
                                        <option value="<?php echo $only_art['situation_matrimoniale'] ?>">
                                            <?php echo $only_art['situation_matrimoniale'] ?></option>
                                        <option value="Célibataire">Célibataire</option>
                                        <option value="Marié(e)">Marié(e)</option>
                                        <option value="Veuf(ve)">Veuf(ve)</option>
                                        <option value="Divorcé(e)">Divorcé(e)</option>
                                        <option value="Compliqué(e)">Compliqué(e)</option>
                                    </select>
                                    <span style="color:red">
                                        <?php echo $situation_error; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="lieu_travail" class="form-label">Nom du lieu de travail</label>
                                    <input type="text" class="form-control" name="lieu_travail" id="lieu_travail"
                                        placeholder="" value="<?php echo $only_art['lieu_travail'] ?>" />
                                    <span style="color:red">
                                        <?php echo $lieu_travail_error; ?>
                                    </span>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="metier" class="form-label">Votre métier </label>
                                    <input type="text" class="form-control" name="metier" id="metier" placeholder=""
                                        value="<?php echo $only_art['metier'] ?>" />
                                    <span style="color:red">
                                        <?php echo $metier_error; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="deb_act" class="form-label">A quelle heure vous débutez?</label>
                                    <input type="time" class="form-control" name="deb_act" id="deb_act" placeholder=""
                                        value="<?php echo $only_art['deb_act'] ?>" />
                                    <span style="color:red">
                                        <?php echo $deb_act_error; ?>
                                    </span>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="fin_act" class="form-label">A quelle heure vous terminez? </label>
                                    <input type="time" class="form-control" name="fin_act" id="fin_act" placeholder=""
                                        value="<?php echo $only_art['fin_act'] ?>" />
                                    <span style="color:red">
                                        <?php echo $fin_act_error; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">
                                        Depuis combien de temps vous faites ce métier?
                                    </label>
                                    <input type="number" class="form-control" name="dur_act" id="dur_act" placeholder=""
                                        value="<?php echo $only_art['dur_act'] ?>" />
                                    <span style="color:red">
                                        <?php echo $duree_error; ?>
                                    </span>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="jr_act" class="form-label">Jours d'activités? </label>
                                    <select name="jr_act" id="jr_act" class="form-select">
                                        <option value="<?php echo $only_art['jr_act'] ?>">
                                            <?php echo $only_art['jr_act'] ?> </option>
                                        <option value="Lundi au Vendredi">Lundi au Vendredi</option>
                                        <option value="Lundi au Samedi">Lundi au Samedi</option>
                                        <option value="Samedi et Dimanche">Samedi et Dimanche</option>
                                        <option value="Tous les jours">Tous les jours</option>
                                    </select>
                                    <span style="color:red">
                                        <?php echo $jour_error; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="pays" class="form-label">Pays </label>
                                    <input type="text" class="form-control" name="pays" id="pays" placeholder=""
                                        value="<?php echo $only_art['pays'] ?>" />
                                    <span style="color:red">
                                        <?php echo $pays_error; ?>
                                    </span>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="ville" class="form-label">Ville </label>
                                    <input type="text" class="form-control" name="ville" id="ville" placeholder=""
                                        value="<?php echo $only_art['ville'] ?>" />
                                    <span style="color:red">
                                        <?php echo $ville_error; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="commune" class="form-label">Commune </label>
                                    <input type="text" class="form-control" name="commune" id="commune" placeholder=""
                                        value="<?php echo $only_art['commune'] ?>" />
                                    <span style="color:red">
                                        <?php echo $commune_error; ?>
                                    </span>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="quartier" class="form-label">Quartier </label>
                                    <input type="text" class="form-control" name="quartier" id="quartier" placeholder=""
                                        value="<?php echo $only_art['quartier'] ?>" />
                                    <span style="color:red">
                                        <?php echo $quartier_error; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <center>
                                <button type="submit" class="btn btn-primary" name="update_profil">
                                    Modifer mon profil
                                </button>
                            </center>
                            <span style="color:red">
                                <?php echo $error_message; ?>
                            </span>
                        </div>
                        <div style="margin-bottom: 20px;">
                            <center><br>
                                <img src="<?php echo $only_art['path_photo'] ?>" alt=""
                                    style="height: 200px;width:200px;border-radius:50%;box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.219)">
                            </center>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </header>
    <main></main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>