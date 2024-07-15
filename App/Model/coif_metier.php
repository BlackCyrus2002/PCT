<?php
$coiffs = "SELECT ID,nom,commune,quartier,metier,prenom,telephone  FROM artisans WHERE metier LIKE '%coif%' LIMIT 10  ";
$coiff = mysqli_query($con, $coiffs);