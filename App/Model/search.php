<?php
if (isset($_GET['research'])) {
    if (!empty($_GET['search'])) {
        $_SESSION['search'] = $_GET['search'];
        $_SESSION['long'] = $_GET['long'];
        $_SESSION['lat'] = $_GET['lat'];
        header('Location: ../../View/Client/result_search');
        exit();
    }
}