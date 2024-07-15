<?php
$database = "entreprice44_pct";
$username = "root";
$password = "";
$servername = "localhost";
$con = mysqli_connect($servername, $username, $password, $database);

if ($con) {
    $message = "Server bien configuré";
} else {
    $message = "Echec de la connexion";
}