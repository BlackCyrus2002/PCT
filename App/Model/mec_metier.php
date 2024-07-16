<?php
$menus = "SELECT ID,nom,commune,quartier,metier,prenom,telephone  FROM artisans WHERE metier LIKE '%men%' LIMIT 10  ";
$menu = mysqli_query($con, $menus);
