<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('head.php') ?>
    <title>Publication de photo</title>
</head>

<body>
    <!--partie de l'entete-->

    <header>
        <div>
            <div class="logo"><img src="../../Public/image/logo.jpg" alt=""></div>
        </div>
        <?php require('search.php') ?>
        <nav class="menu_icon visibility">
            <a href="publication.php"><i class="fa-solid fa-house-chimney"></i></a>
            <a href="publication_photo.php"><i class="fa-regular fa-image"></i></a>
            <a href="publication_video.php"><i class="fa-brands fa-youtube"></i></a>
            <a href="#"> <i class="fa-solid fa-location-dot"></i></a>
        </nav>
    </header>


    <section>
        <div class="image_arriereplan">
            <p>entrez en contacte avec tout les artizans que vous souhaitez !</p>
        </div>
    </section>

    <section class="multimedia visibility">

        <div class="post photo">
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
            <button class="click-photo">Contacter</button>
            <div class="comments-section">

                <input type="text" id="comment-name" placeholder="Your Name">
                <input type="email" id="comment-email" placeholder="Your Email">
                <input type="text" id="comment-input" placeholder="Add a comment">
                <button>Commenter</button>
                <div class="comments"></div>
            </div>
        </div>

    </section>

    <?php require('footer.php') ?>
</body>

</html>