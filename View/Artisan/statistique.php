<div id="statistique" class="menu">
    <div class="stat-image">
        <?php
        $all_picture_sum = "SELECT id_photo, comment, path_photo,id_artisan, publish_date,COUNT(*) as number_pict FROM galerie_photo  WHERE id_artisan= " . $artisan . " ORDER BY publish_date";
        $all_pictures_sums = mysqli_query($con, $all_picture_sum);
        while ($picture_sum = $all_pictures_sums->fetch_assoc()) {
            $pict = $picture_sum['number_pict'];
        ?>
        <?php } ?>
        <div>
            <canvas id="stats" width="400" height="400" style="height:50%">
            </canvas>
        </div><br>

        <span style="font-weight: bold;font-size:18px">
            Nombres de photo :
            <?php echo $pict ?>
        </span>

    </div>
</div>
<script>
const stats = document.getElementById('stats');
const number = <?php echo json_encode($pict) ?>;
new Chart(stats, {
    type: 'pie',
    data: {
        labels: ['Nombres de photos postées'],
        datasets: [{
            label: 'Nombres',
            data: [number],
            borderWidth: 1
        }]
    },
    options: {
        responsive: false,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>