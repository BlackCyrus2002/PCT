<?php
$users = "SELECT ID,nom,prenom,sexe,telephone,tel_wa,metier,deb_act,fin_act,longitude,
            latitude,dur_act,jr_act,pays,ville,commune,quartier,gmail,path_photo FROM artisans ORDER BY nom ASC";
$user = mysqli_query($con, $users);