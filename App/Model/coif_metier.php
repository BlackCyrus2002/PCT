<?php
$coiffs = "SELECT ID,nom,commune,quartier,metier,prenom,telephone,sexe  FROM artisans WHERE metier LIKE '%coif%' LIMIT 10  ";
$coiff = mysqli_query($con, $coiffs);