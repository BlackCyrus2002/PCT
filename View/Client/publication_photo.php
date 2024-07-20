<?php require_once('php_model.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('head.php') ?>
    <title>Publications photos</title>
</head>

<body>
    <!--partie de l'entete-->

    <header>
        <div>
            <div class="logo"><img src="../../Public/image/logo.jpg" alt=""></div>
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

        <div class="post photo">
            <div class="profile-info">
                <img src="../../Public/image/profile1.jpg" alt="Profile Picture">
                <span>Ouedraogo Ibrahim</span>
            </div>
            <p>23 juin 2024 à 16h30</p>

            <div class="photo">
                <img src="../../Public/image/couverture_accueil.jpg" alt="">
            </div>
            <div class="actions">
                <i class="fas fa-thumbs-up"></i>
                <i class="fas fa-comment"></i>
                <i class="fas fa-user"></i>
            </div>

            <div class="navbar">
                <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"
                        id="facebook"></i></a>
                <a href="https://wa.me/+225" target="_blank"><i class="fa-brands fa-whatsapp" id="whatsapp"></i></a>
                <a href="tel:+225" target="_blank"><i class="fa fa-phone" id="instagram"></i></a>
            </div>
            <div><br>
                <a href="demande_et_service.php" style="text-decoration: none;" class="click-photo">Contacter</a>
            </div>
            <form action="">
                <div class="comments-section">
                    <input type="text" id="comment-name" placeholder="Votre nom">
                    <input type="email" id="comment-email" placeholder="Votre email">
                    <textarea name="" id="comment-input" class="commentaire" placeholder="commentaire">
                    </textarea>
                    <button>Commenter</button>
                </div>
            </form>
        </div>
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
                <i class="fas fa-user"></i>
            </div>

            <div class="navbar">
                <a href="https://www.facebook.com/share/V1k6Tfk4BZSK94P7/?mibextid=qi2Omg" target="_blank"><i
                        class="fa-brands fa-facebook" id="facebook"></i></a>
                <a href="https://wa.me/+225" target="_blank"><i class="fa-brands fa-whatsapp" id="whatsapp"></i></a>
                <a href="tel:+225"><i class="fa fa-phone" id="instagram"></i></a>
            </div>
            <div><br>
                <a href="demande_et_service.php" style="text-decoration: none;" class="click-photo">Contacter</a>
            </div>
            <form action="">
                <div class="comments-section">
                    <input type="text" id="comment-name" placeholder="Votre nom">
                    <input type="email" id="comment-email" placeholder="Votre email">
                    <textarea name="" id="comment-input" class="commentaire" placeholder="commentaire">
                    </textarea>
                    <button>Commenter</button>
                </div>
            </form>
        </div>


    </section>

    <?php require('footer.php') ?>
    <?php require_once('script_maps.php') ?>
</body>

</html>