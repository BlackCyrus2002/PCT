<div id="evolution" class="menu">

    <div class="evo-img">
        <div>
            <canvas id="myChart"></canvas>
        </div>
        <?php

        // Récupérer les données de la table commandes
        $commandes = $con->query("SELECT MONTH(publish_date) as mois, COUNT(*) as count FROM commandes WHERE artisan_ID=$artisan GROUP BY MONTH(publish_date)");
        $commandesData = array_fill(0, 12, 0); // Initialiser un tableau avec 12 zéros

        while ($row = $commandes->fetch_assoc()) {
            $commandesData[$row['mois'] - 1] = $row['count']; // Mettre à jour le tableau avec les données réelles
        }

        // Récupérer les données de la table services
        $services = $con->query("SELECT MONTH(publish_date) as mois, COUNT(*) as count FROM services WHERE artisan_ID=$artisan GROUP BY MONTH(publish_date)");
        $servicesData = array_fill(0, 12, 0); // Initialiser un tableau avec 12 zéros

        while ($row = $services->fetch_assoc()) {
            $servicesData[$row['mois'] - 1] = $row['count']; // Mettre à jour le tableau avec les données réelles
        }

        ?>
    </div>
</div>
<script>
    const ctx = document.getElementById('myChart');
    const commandes = <?php echo json_encode($commandesData) ?>;
    const services = <?php echo json_encode($servicesData) ?>;
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre',
                'Octobre', 'Novembre', 'Décembre'
            ],
            datasets: [{
                    label: 'Commande',
                    data: commandes,
                    borderWidth: 1,
                    tension: 0.1,
                    fill: false,
                },
                {
                    label: 'Service',
                    data: services,
                    borderWidth: 1,
                    tension: 0.1,
                    fill: false,
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>