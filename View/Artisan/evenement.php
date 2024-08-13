<div id="evenement" class="menu active">
    <h2>Ajouter un évènement</h2>
    <form action="" method="post">
        <div hidden>
            <input type="text" name="id_artisan" value="<?php echo $only_art['ID'] ?>">
        </div>
        <div class="form-control">
            <label for="title">Titre</label>
            <input type="text" name="title" class="form-controle">
        </div>
        <span style="color:red">
            <?php echo $title_error ?>
        </span>
        <div class="form-control">
            <label for="lieu">Lieu</label>
            <input type="text" name="lieu" class="form-controle">
        </div>
        <span style="color:red">
            <?php echo $lieu_error ?>
        </span>
        <div class="form-control">
            <label for="checkboxInput">Jour entier</label>
            <select name="jr_entier" id="jr_entier" class="form-select">
                <option value="">Veuillez selectionner</option>
                <option value="Oui">Oui</option>
                <option value="Non">Non</option>
            </select>
        </div>
        <span style="color:red">
            <?php echo $jr_entier_error ?>
        </span>
        <div class="form-control">
            <label for="date_event">Date</label>
            <input type="date" name="date_event" class="form-controle">
        </div>
        <span style="color:red">
            <?php echo $date_event_error ?>
        </span>
        <div class="form-control">
            <label for="deb">Début</label>
            <input type="time" name="deb" class="form-controle" style="width: 25%;">
        </div>
        <span style="color:red">
            <?php echo $deb_error ?>
        </span>
        <div class="form-control">
            <label for="fin">Fin</label>
            <input type="time" name="fin" class="form-controle" style="width: 25%;">
        </div>
        <span style="color:red">
            <?php echo $fin_error ?>
        </span>
        <div class="btn">
            <button name="send_event">Enregistrer</button>
        </div>
    </form>
    <?php
    if ($add_event_success) { ?>
    <script>
    Swal.fire({
        imageUrl: "../../Public/image/512 (3).webp",
        title: "Félicitation",
        text: "<?php echo $add_event_success ?>",
        imageWidth: 100,
        imageHeight: 100,
    });
    </script>
    <?php } ?>
</div>