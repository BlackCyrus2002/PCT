<div id="galerie" class="menu" style="padding: 5%;">
    <div class="post photo">
        <div class="profile-info" style="display: flex;align-items:center">
            <img src="<?php echo $only_art['path_photo'] ?>" alt="Profile Picture" style="height: 200px;width: 200px;border-radius:50%">
            <h1>Ouedraogo Ibrahim</h1>
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
                <textarea name="comment" id="comment"></textarea>
                <span style="color:red">
                    <?php echo $comment_error ?>
                </span>
            </div><br>
            <div>
                <label for="path_photo">Photo</label><br>
                <input type="file" name="path_photo" id="path_photo" accept="image/*" onchange="previewImage(event)">
                <span style="color:red">
                    <?php echo $post_photo ?>
                </span>
            </div><br>
            <div><br>
                <img id="preview" src="" alt="" style="width: 50%;" />
            </div>

            <button type="submit" name="post_pict">Poster</button>
        </form>
    </div>
</div>