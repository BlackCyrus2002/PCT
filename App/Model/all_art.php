<?php
$users = "SELECT ID,nom,gmail,longitude,latitude,metier,prenom FROM artisans";
$user = mysqli_query($con, $users);