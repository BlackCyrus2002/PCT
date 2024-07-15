<sidebar>
    <div class="sidebar">
        <p><i class="fa-solid fa-xmark" id="closemenu"></i></p>

        <div class="photo">


        </div>

        <h2> Option de triage</h2>
        <i class="fa-solid fa-filter"></i>
        <h3 style="font-family: 'Times New Roman', Times, serif;font-weight:bold">Catégorie</h3>

        <ul>
            <li>
                <a href="#">
                    <div style="display: flex;align-items:center;justify-content:space-between">
                        <div style="padding-left: 10px;">
                            Pays
                        </div>
                        <div>
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div style="display: flex;align-items:center;justify-content:space-between">
                        <div style="padding-left: 10px;">
                            Ville
                        </div>
                        <div>
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div style="display: flex;align-items:center;justify-content:space-between">
                        <div style="padding-left: 10px;">
                            Commune
                        </div>
                        <div>
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div style="display: flex;align-items:center;justify-content:space-between">
                        <div style="padding-left: 10px;">
                            Quartier
                        </div>
                        <div>
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                    </div>
                </a>
            </li>
        </ul><br>


        <h3 style="font-family: 'Times New Roman', Times, serif;font-weight:bold">Métier</h3>
        <ul>
            <?php while ($fil = mysqli_fetch_array($metier)) { ?>

            <li>
                <a href="#">
                    <div style="display: flex;align-items:center;justify-content:space-between">
                        <div style="padding-left: 10px;">
                            <?php echo $fil['metier'] ?>
                        </div>
                        <div>
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                    </div>

                </a>
            </li>

            <?php } ?>
        </ul>

        <div class="voir_plus">
            <a href="#">Voir plus</a><br><br>
            <a href="../../accueil.php" style="color: black;font-weight:bold;display:block">
                <div style="display: flex;align-items:center;justify-content:space-around">
                    <div>
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                    </div>
                    <div>
                        Revenir à l'accueil
                    </div>
                </div>
            </a>
        </div>
    </div>
</sidebar>
<script src="../../Public/js/publication.js"></script>