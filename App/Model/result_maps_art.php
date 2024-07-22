<?php
if (isset($_POST['art_search'])) {
    if (!empty($_POST['art_job'])) {
        $art_job = $_POST['art_job'];
        $_SESSION['art_job'] = $art_job;
        header("location:../../View/Client/result_maps_art.php");
    } else {
        echo "<script>alert('Entrer un métier')</script>";
    }
}
