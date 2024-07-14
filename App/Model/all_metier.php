<?php
$metiers = "SELECT ID,nom,gmail,longitude,latitude,metier,prenom  FROM artisans LIMIT 6";
$metier = mysqli_query($con, $metiers);