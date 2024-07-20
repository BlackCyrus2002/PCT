<?php require_once('php_model.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('head.php') ?>
    <title>Publications vidéos</title>
</head>

<body>

    <!--partie de l'entete-->
    <header>
        <div>
            <div class="logo"><img src="../../Public/image//logo.jpg" alt=""></div>
        </div>
        <?php require('search.php') ?>
        <?php require('nav.php') ?>
    </header>


    <section>
        <div class="image_arriereplan">
            <p>entrez en contacte avec tout les artizans que vous souhaitez !</p>
        </div>
    </section>

    <section class="multimedia visibility">

        <div class="post video">
            <div class="profile-info">
                <img src="../../Public/image/profile1.jpg" alt="Profile Picture">
                <span>Ouedraogo Ibrahim</span>
            </div>
            <p>23 juin 2024 à 16h30</p>
            <iframe src="https://www.youtube.com/embed/b3-BqyvALSg?si=wZfpDIpDvQ00ca0B" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

            <div class="actions">
                <i class="fas fa-thumbs-up"></i>
                <i class="fas fa-comment"></i>
                <i class="fas fa-user"></i>
            </div>

            <div class="navbar">
                <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"
                        id="facebook"></i></a>
                <a href="https://wa.me/+22507" target="_blank"><i class="fa-brands fa-whatsapp" id="whatsapp"></i></a>
                <a href="tel:+225"><i class="fa fa-phone" id="instagram"></i></a>
            </div>
            <div><br>
                <a href="demande_et_service.php" style="text-decoration: none;" class="click-video">Contacter</a>
            </div>
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
    <?php require_once('script_maps.php') ?>
</body>

</html>