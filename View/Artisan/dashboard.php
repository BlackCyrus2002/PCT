<?php
session_start();
require_once('../../View/Client/error_message.php');
require_once('../../App/Config/database.php');

if (isset($_SESSION['user_id'])) {
    $id = $_SESSION['user_id'];
    $artisan = $_SESSION['artisan_id'];
    $users = $con->prepare("SELECT ID,nom,prenom,sexe,telephone,tel_wa,metier,deb_act,fin_act,longitude,
            latitude,dur_act,jr_act,pays,ville,commune,quartier,gmail FROM artisans WHERE ID = ?");
    $users->bind_param('i', $artisan);
    $users->execute();
    $result = $users->get_result();

    if ($result->num_rows > 0) {
        $only_user = $result->fetch_assoc();
    } else {
        echo "Utilisateur non trouvé.";
        exit();
    }
}
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../View/Artisan/connexion.php');
    exit();
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>

        <?php echo $only_user['gmail']; ?>
        <br>
        <?php echo $only_user['metier']; ?>
        <br>
        <?php echo $only_user['ville']; ?><br>
        <a href="../../App/Model/logout.php" class="btn btn-primary">
            Se déconnecter
        </a>

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