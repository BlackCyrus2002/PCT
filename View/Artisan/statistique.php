<div id="statistique" class="menu">
    <div class="stat-image">
        <div>
            <canvas id="stats"></canvas>
        </div>
    </div>
</div>
<script>
    const stats = document.getElementById('stats');

    new Chart(stats, {
        type: 'doughnut',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
            }]
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