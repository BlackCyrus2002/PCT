<div id="parametre" class="menu">
    <ul>
        <a href="page_profile.php?id_art=<?php echo $only_art['ID'] ?>&& nom=<?php echo $only_art['nom'] . ' ' . $only_art['prenom'] ?>"
            style="text-decoration: none;color:black">
            <li>
                Mon profil
                <i class="fa-solid fa-angle-right"></i>
            </li>
        </a>


        <a style="text-decoration: none;color:black"
            href="new_password.php?id_art=<?php echo $only_art['ID'] ?>&& nom=<?php echo $only_art['nom'] . ' ' . $only_art['prenom'] ?>">
            <li>
                Changer le mot de passe
                <i class="fa-solid fa-angle-right"></i>
            </li>
        </a>
        <li>
            <a href="#">Historique d'activité</a>
            <i class="fa-solid fa-angle-right"></i>
        </li>
        <li>
            <a href="#">Gérer les publications</a>
            <i class="fa-solid fa-angle-right"></i>
        </li>
        <li>
            <a href="#">A propos</a>
            <i class="fa-solid fa-angle-right"></i>
        </li>
    </ul>
</div>