<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publication</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../../Public/css/publication.css">
</head>

<body>

    <!--partie de l'entete-->
    <header>
        <h1>logo</h1>
        <div class=" recherche visibility">
            <form action="">
                <input type="search" placeholder="recherche d'artisans" class="apparaitre">
            </form>
            <i class="fa-solid fa-ellipsis"></i>

        </div>
        <nav class="menu_icon visibility">
            <a href="../../accueil.php"><i class="fa-solid fa-house-chimney"></i></a>
            <a href="publication_photo.php"><i class="fa-regular fa-image"></i></a>
            <a href="publication_video.php"><i class="fa-brands fa-youtube"></i></a>
            <a href="#"> <i class="fa-solid fa-location-dot"></i></a>
        </nav>
    </header>


    <section>
        <div class="image_arriereplan"></div>
    </section>

    <section class="video ou photo visibility">

        <div class="post video">
            <div class="profile-info">
                <img src="../../Public/image/profile1.jpg" alt="Profile Picture">
                <span>Ouedraogo Ibrahim</span>
            </div>
            <p>23 juin 2024 à 16h35</p>
            <iframe src="https://www.youtube.com/embed/b3-BqyvALSg?si=wZfpDIpDvQ00ca0B" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>


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

                <input type="text" id="comment-name" placeholder="Nom">
                <input type="email" id="comment-email" placeholder="Prénom">
                <input type="text" id="comment-input" placeholder="Commentaire...">
                <button>Commenter</button>
                <div class="comments"></div>
            </div>
        </div>


        <div class="post video">
            <div class="profile-info">
                <img src="../../Public/image/profile1.jpg" alt="Profile Picture">
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
                <button>Commenter</button>
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
            <h3>categorie</h3>

            <ul>
                <li>
                    <a href="#">Pays<i class="fa-solid fa-caret-down"></i></a>
                </li>
                <li><a href="#">Ville<i class="fa-solid fa-caret-down"></i></a></li>
                <li><a href="#">Commune<i class="fa-solid fa-caret-down"></i></a></li>
                <li><a href="#">Quartier<i class="fa-solid fa-caret-down"></i></a></li>
            </ul>

            <h3>metier</h3>
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