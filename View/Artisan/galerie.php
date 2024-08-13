<div id="galerie" class="menu" style="padding: 5%;">
    <div class="post photo">
        <div class="profile-info" style="display: flex;align-items:center">
            <img src="<?php echo $only_art['path_photo'] ?>" alt="Profile Picture" class="art_photo">
            <h1>
                <?php echo $only_art['nom'] . ' ' . $only_art['prenom'] ?>
            </h1>
        </div><br>
        <hr>
        <h1>Poster une photo</h1><br>
        <form action="" method="post" enctype="multipart/form-data">
            <div hidden>
                <label for="">ID_artisan</label><br>
                <input type="number" name="id_artisan" value="<?php echo $only_art['ID'] ?>">
            </div>
            <div>
                <label for="comment">Description</label><br>
                <textarea name="comment" id="comment" class="form-controle"></textarea>
                <span style="color:red">
                    <?php echo $comment_error ?>
                </span>
            </div><br>
            <div>
                <label for="path_photo">Photo</label><br>
                <input type="file" name="path_photo" class="form-controle" id="path_photo" accept="image/*"
                    onchange="previewImage(event)">
                <span style="color:red">
                    <?php echo $post_photo ?>
                </span>
            </div><br>
            <div><br>
                <img id="preview" src="" alt="" style="width: 200px;" />
            </div>

            <button type="submit" name="post_pict" class="post_photo">Poster</button>
        </form>
        <br>
        <hr>
        <h1>Mes photos</h1><br>
        <?php
        $all_picture = "SELECT id_photo, comment, path_photo,id_artisan, publish_date FROM galerie_photo  WHERE id_artisan= " . $artisan . " ORDER BY publish_date";
        $all_pictures = mysqli_query($con, $all_picture);
        while ($image = $all_pictures->fetch_assoc()) { ?>
            <img src="<?php echo $image['path_photo'] ?>" alt="" class="art_creation">
        <?php } ?>
    </div>
</div>