<?php
$couts = "SELECT ID,nom,commune,quartier,metier,prenom,telephone  FROM artisans WHERE metier LIKE '%cout%' LIMIT 10  ";
$cout = mysqli_query($con, $couts);