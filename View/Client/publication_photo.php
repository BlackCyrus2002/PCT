<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>publication photo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../../Public/css/publication.css">
</head>

<body>

    <!--partie de l'entete-->
    <header>
        <h1>Logo</h1>
        <div class=" recherche visibility"><input type="search" placeholder="recherche d'artisans" class="apparaitre">
            <i class="fa-solid fa-ellipsis"></i>

        </div>
        <nav class="menu_icon visibility">
            <a href="../../accueil.php"><i class="fa-solid fa-house-chimney"></i></a>
            <a href="publication_video.php"><i class="fa-brands fa-youtube"></i></a>
            <a href="#"> <i class="fa-solid fa-location-dot"></i></a>
        </nav>
    </header>


    <section>
        <div class="image_arriereplan"></div>
    </section>

    <section class="video ou photo visibility">


        <div class="post photo">
            <div class="profile-info">
                <img src="profile1.jpg" alt="Profile Picture">
                <span>Ouedraogo Ibrahim</span>
            </div>
            <p>23 juin 2024 à 16h30</p>

            <div class="photo">

            </div>
            <div class="actions">
                <i class="fas fa-thumbs-up"></i>
                <i class="fas fa-comment"></i>
                <i class="fas fa-share"></i>
            </div>

            <div class="navbar">
                <a href="https://www.facebook.com/share/V1k6Tfk4BZSK94P7/?mibextid=qi2Omg" target="_blank"><i
                        class="fa-brands fa-facebook" id="facebook"></i></a>
                <a href="https://wa.me/message/5I3ZLUZS6PZTO1" target="_blank"><i class="fa-brands fa-whatsapp"
                        id="whatsapp"></i></a>
                <a href="#"><i class="fa-brands fa-instagram" id="instagram"></i></a>
            </div>
            <button class="contacter">Contacter</button>
            <div class="comments-section">

                <input type="text" id="comment-name" placeholder="Your Name">
                <input type="email" id="comment-email" placeholder="Your Email">
                <input type="text" id="comment-input" placeholder="Add a comment">
                <button>Comment</button>
                <div class="comments"></div>
            </div>
        </div>

    </section>

    <sidebar>
        <div class="sidebar">
            <p><i class="fa-solid fa-xmark" id="closemenu"></i></p>

            <div class="photo">


            </div>

            <h2> Option de triage</h2>
            <i class="fa-solid fa-filter"></i>
            <h3>Catégorie</h3>

            <ul>
                <li><a href="#">pays<i class="fa-solid fa-caret-down"></i></a></li>
                <li><a href="#">ville<i class="fa-solid fa-caret-down"></i></a></li>
                <li><a href="#">commune<i class="fa-solid fa-caret-down"></i></a></li>
                <li><a href="#">quartier<i class="fa-solid fa-caret-down"></i></a></li>
            </ul>

            <h3>Métier</h3>
            <ul>
                <li><a href="#">menuisiers<i class="fa-solid fa-caret-down"></i></a></li>
                <li><a href="#">coiffeurs<i class="fa-solid fa-caret-down"></i></a></li>
                <li><a href="#">coutures<i class="fa-solid fa-caret-down"></i></a></li>
                <li><a href="#">poissonniers<i class="fa-solid fa-caret-down"></i></a></li>
            </ul>

            <div class="voir_plus">
                <a href="#">Voir plus</a>
            </div>
        </div>
    </sidebar>
    <script src="../../Public/js/publication.js"></script>
</body>

</html>