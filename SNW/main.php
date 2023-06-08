<!DOCTYPE html>
<html>
<head>
    <title>Your Application Name</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div style="width: 800px; height: 600px;">
        <canvas id="myChart"></canvas>
    </div>

    <script>
        // Example sales data
        var salesData = [2, 3, 12, 7, 9, 5];
        var months = ['January', 'February', 'March', 'April', 'May', 'June'];

        // Replace this with your code to fetch the actual sales data from your backend or database

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: months,
                datasets: [{
                    label: 'Sales',
                    data: salesData,
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 5
                        }
                    }
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Monthly Sales',
                        font: {
                            size: 18
                        }
                    },
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>
</body>
</html>