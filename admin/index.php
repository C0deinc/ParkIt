<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Chart.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body style="overflow: hidden;">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #06283D;">
        <a class="navbar-brand ms-4" href="#">
            <img src="logo1.png" alt="logo" width="60" height="30">
        </a>
    </nav>

    <!-- Page Content -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <?php
            require_once('./include/sidebar.php');
            ?>
            <!-- Main Content -->
        </div>
    </div>

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Chart.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get the context of the canvas element
            var ctx = document.getElementById("myPieChart").getContext("2d");

            // Data for the donut chart
            var data = {
                labels: ["Total Spaces", "Verified Spaces", "Unverified Spaces"],
                datasets: [{
                    data: [35, 35, 10],
                    backgroundColor: ["#FF6384", "#36A2EB", "#FFCE56"],
                    borderWidth: 1 // Add border width for the donut effect
                }]
            };

            // Configuration options
            var options = {
                responsive: true,
                maintainAspectRatio: false,
                cutoutPercentage: 50 // Adjust the cutoutPercentage for the donut effect (50 for a classic donut)
            };

            // Create the donut chart
            var myDonutChart = new Chart(ctx, {
                type: 'doughnut', // Specify the chart type as doughnut
                data: data,
                options: options
            });
        });
    </script>

</body>

</html>