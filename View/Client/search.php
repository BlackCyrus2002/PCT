<div class=" recherche visibility">
    <div style="margin-right: 10%;">
        <form action="" method="get">
            <input type=" search" placeholder="Recherche d'artisans (nom, métier, commune, quartier)" class="apparaitre"
                name="search" required>
            <div hidden>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" name="long" id="long" class="form-control" required readonly><br>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="lat" id="lat" class="form-control" required readonly>
                    </div>

                </div><br>
                <div id="maptest"
                    style="height: 400px;border-radius:10px;box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.267);z-index:1">
                </div>
            </div>
            <div hidden>
                <button type="submit" name="research" id="research"></button>
            </div>
        </form>
    </div>
    <i class="fa-solid fa-ellipsis"></i>
</div>