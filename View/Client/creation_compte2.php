<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../../Public/css/creation_compte2.css">
</head>

<body>

    <form action="">
        <div class="form-control section1">

            <label for="temps">Dépuis combien de temps exercez vous se metier ?</label>
            <input type="number">
            <p>jour d'activité: </p>
            <label for="lundi"><input type="checkbox">lundi</label>
            <label for="mardi"><input type="checkbox">mardi</label>
            <label for="mercredi"><input type="checkbox">mercredi</label>
            <label for="jeudi"><input type="checkbox">jeudi</label>
            <label for="vendredi"><input type="checkbox">vendredi</label>
            <label for="samedi"><input type="checkbox">samedi</label>
            <label for="dimanche"><input type="checkbox">dimanche</label>
        </div>


        <div class="form-control section2">
            <p>Quel est votre localistion geographique ?</p>
            <label for="pays">pays</label>
            <input type="text" name="pays" id="">
            <label for="ville">ville</label>
            <input type="text">

            <label for="commune">commune</label>
            <input type="text">
            <label for="quartier">quartier</label>
            <input type="text">

        </div>
        <h3> Contact professionnel</h3>
        <div class="form-control section3">

            <label for="telephone">telephone<input type="text"></label>
            <label for="email">email<input type="email"></label>
        </div>

        <h3>Information politique utilisateur</h3>
        <div class="form-control section4 ">
            <label for="politique"><input type="checkbox">les conditions d'utilisateurs sonS requis pour la
                protection de vos données et de vos
                informations personnels</label>
        </div>

        <button>Enregistré</button>
    </form>
</body>

</html>