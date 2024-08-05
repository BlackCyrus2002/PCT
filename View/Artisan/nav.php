<header>
    <div class="head apparaitre">
        <div class="logo visibility delete_logo" style="overflow: hidden;">
            <img src="../../Public/image/mylogo.png" alt="logo">
        </div>
        <div class="recherche"><i class="fa-solid fa-magnifying-glass"></i>
            <form action="">
                <input type="search" placeholder="Que recherchez-vous?">
            </form>
        </div>
        <div style="display: flex;align-items:center">
            <div class="profil">
                <img src="<?php echo $only_art['path_photo'] ?>" alt="user profil" class="art_photo">
                <i class="fa-solid fa-caret-down"></i><br>
            </div>
            <div style="margin-left: 10px;">
                <a href="../../App/Model/logout.php">
                    <i class="fa fa-sign-out" aria-hidden="true" style="font-size: 30px;"></i>
                </a>
            </div>
        </div>

    </div>

    <nav class="nav_icon apparaitre">

        <ul class="button-container apparaitre">
            <li data-target="evenement"><i class="fa-solid fa-calendar-days"></i><span>Evènement</span></li>
            <li data-target="statistique"><i class="fa-solid fa-chart-pie"></i><span>Statistique</span></li>
            <li data-target="evolution"><i class="fa-solid fa-chart-line"></i><span>Evolution</span></li>
            <li data-target="geolocalisation"><i class="fa-solid fa-location-dot"></i><span>Localisation</span>
            </li>
            <li data-target="galerie"><i class="fa-regular fa-image"></i><span>Galeries</span></li>
            <li data-target="message"><i class="fa-brands fa-facebook-messenger"></i><span>Messages</span></li>
            <li data-target="parametre"><i class="fa-solid fa-gears"></i><span>Paramètres</span></li>

        </ul>
    </nav>

</header>