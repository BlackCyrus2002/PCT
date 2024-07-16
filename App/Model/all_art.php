<?php
$users = "SELECT ID,nom,gmail,longitude,latitude,metier,prenom,telephone,ville,quartier,commune FROM artisans";
$user = mysqli_query($con, $users);
