<?php require_once('php_model.php');
require_once('../../App/Model/art_picture.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('head.php'); ?>
    <title>Publications photos</title>
</head>

<body>
    <!-- Partie de l'entête -->
    <header>
        <div>
            <div class="logo"><img src="../../Public/image/new_logo.jpg" alt=""></div>
        </div>
        <?php require('search.php'); ?>
        <?php require('nav.php'); ?>
    </header>

    <section>
        <div class="image_arriereplan">
            <p>Entrez en contact avec tous les artisans que vous souhaitez !</p>
        </div>
    </section>

    <section class="multimedia visibility">
        <?php while ($picture = $all_pictures->fetch_assoc()) {
            $users = "SELECT ID, nom, prenom, path_photo, tel_wa, telephone FROM artisans WHERE ID = " . $picture['id_artisan'];
            $user = mysqli_query($con, $users);

            while ($artisan = $user->fetch_assoc()) { ?>
        <div class="post photo" data-photo-id="<?php echo $picture['id_photo']; ?>">
            <div class="profile-info">
                <img src="<?php echo $artisan['path_photo']; ?>" alt="Profile Picture">
                <div>
                    <div>
                        <a href="profil_artisans?id_art=<?php echo $artisan['ID']; ?>">
                            <span>
                                <?php echo $artisan['nom'] . ' ' . $artisan['prenom']; ?>
                            </span>
                        </a>
                    </div>
                    <div>
                        <span style="font-size: 15px;">
                            <?php echo (new DateTime($picture['publish_date']))->format('d-M-Y'); ?>
                            <?php echo (new DateTime($picture['publish_date']))->format('H:i'); ?>
                        </span>
                    </div>
                </div>
            </div>

            <p><?php echo $picture['comment']; ?></p><br>

            <div class="photo">
                <img src="<?php echo $picture['path_photo']; ?>" alt="" style="height: 100%;">
            </div>
            <div class="actions">
                <div class="good" data-photo-id="<?php echo $picture['id_photo']; ?>">
                    <i class="fas fa-thumbs-up"></i>
                </div>
                <i class="fas fa-comment"></i>
                <i class="fas fa-user"></i>
            </div>

            <div class="navbar">
                <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"
                        id="facebook"></i></a>
                <a href="https://wa.me/+225<?php echo $artisan['tel_wa']; ?>" target="_blank"><i
                        class="fa-brands fa-whatsapp" id="whatsapp"></i></a>
                <a href="tel:+225<?php echo $artisan['telephone']; ?>" target="_blank"><i class="fa fa-phone"
                        id="instagram"></i></a>
            </div>
            <div><br>
                <a href="demande_et_service.php?id_artisan=<?php echo $artisan['ID']; ?>&id_photo=<?php echo $picture['id_photo']; ?>"
                    style="text-decoration: none;" class="click-photo">Contacter</a>
            </div>
            <form action="" method="post">
                <div class="comments-section">
                    <input type="text" name="id_photo" value="<?php echo $picture['id_photo']; ?>" hidden>
                    <input type="text" name="id_artisan" value="<?php echo $artisan['ID']; ?>" hidden>
                    <input type="text" id="comment-name" name="name" placeholder="Votre nom">
                    <input type="email" id="comment-email" name="email" placeholder="Votre email">
                    <textarea name="comment" id="comment-input" class="commentaire"
                        placeholder="Commentaire"></textarea>
                    <button type="submit">Commenter</button>
                </div>
            </form>
        </div>
        <?php
            }
        }
        ?>
    </section>

    <style>
    .post .actions .fa-thumbs-up.active {
        color: #ff7e00;
    }
    </style>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.fa-user').forEach(function(partage) {
            partage.addEventListener('click', function() {
                let post = this.closest('.post');
                let navbar = post.querySelector('.navbar');
                navbar.classList.toggle('active');
            });
        });

        document.querySelectorAll('.fa-thumbs-up').forEach(function(liker) {
            liker.addEventListener('click', function() {
                this.classList.toggle('active');
            });
        });
    });
    </script>

    <?php require('footer.php'); ?>
    <?php require_once('script_maps.php'); ?>

</body>

</html>