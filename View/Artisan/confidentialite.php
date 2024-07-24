<div id="confidentialite" class="translation">
    <div class="img-user">

        <div class="user">
            <img src="<?php echo $only_art['path_photo'] ?>" alt="" class="art_photo">
            <p><?php echo $only_art['nom'] . ' ' . $only_art['prenom'] ?></p>
            <P><?php echo $only_art['gmail'] ?></P>
        </div>
    </div>
    <ul>
        <li>
            <i class="fa-solid fa-camera-retro"></i>
            <a href="photo.php?id_artisan=<?php echo $only_art['ID'] ?>">Charger une photo</a>
        </li>
        <li><i class="fa-solid fa-address-card"></i><a href="#">A propos de moi</a></li>
        <li><i class="fa-solid fa-right-to-bracket"></i>
            <a href="../../App/Model/logout.php">Deconnexion</a>
        </li>
        <li><i class="fa-solid fa-user-plus"></i><a href="#">Creer un compte</a></li>
    </ul>
    <h2>Confidentialité de compte</h2>
    <div class="gerer">Gérer les parametres</div>
</div>