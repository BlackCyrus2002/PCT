<?php
$all_picture = "SELECT id_photo, comment, path_photo,id_artisan, publish_date FROM galerie_photo;  ";
$all_pictures = mysqli_query($con, $all_picture);
