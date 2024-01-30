<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
     <!-- Chart.js -->
     <script defer src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #06283D;">
        <a class="navbar-brand ms-4" href="#">
            <img src="logo1.png" alt="logo" width="60" height="30">
        </a>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <?php
            require_once('./include/sidebar.php');
            ?>
     <!-- Main Content -->
     <main class="col-md-9 ms-sm-auto col-lg-10 px-md-6" style="padding-top: 20px;">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    USER FEEDBACK AND REVIEWS
                                </h5>
                                <p class="card-text text-center" style="font-size: 30px;">100</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    WARNING
                                </h5>
                                <p class="card-text text-center" style="font-size: 30px;">500</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Line Graph and Bar Graph Side by Side -->
                <div class="container mt-4">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h6 class="card-title">TRANSACTION</h6>
                                                    <canvas id="barChart" height="200"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h6 class="card-title">INCIDENTS</h6>
                                                    <canvas id="incident" height="200"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div style="position: relative;">
                                                <canvas id="areaScalingChart" height="200"></canvas>
                                                <div style="position: absolute; top: 50%; right: -500px; transform: translateY(-50%); text-align: right;">
                                                    <h5 class="card-title" style="font-size: 50px;"> AREA SCALING</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </main>
        </div>
    </div>

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Chart.js Script -->
    <script>
      document.addEventListener("DOMContentLoaded", function() {
            // Line Chart
            var lineCtx = document.getElementById("incident").getContext("2d");
            var lineData = {
                labels: ["Jan", "Feb", "Mar", "Apr", "May"],
                datasets: [{
                    label: "INCIDENTS",
                    data: [3, 10, 8, 0, 15],
                    fill: false
                }]
            };
            var lineOptions = {
                responsive: true,
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'MONTHS'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'NO. OF INCIDENT'
                        }
                    }
                }
            };
            new Chart(lineCtx, {
                type: 'line',
                data: lineData,
                options: lineOptions
            });

            // Bar Chart (TRANSACTION)
            var barCtx = document.getElementById("barChart").getContext("2d");
            var barData = {
                labels: ["2021", "2022", "2023", "2024", "2025"],
                datasets: [{
                    label: "TRANSACTION",
                    data: [500, 1000, 800, 400, 900],
                    backgroundColor: ["#FF6384", "#FF5733", "#45B39D", "#AAB7B8", "#9966FF"],
                    borderWidth: 1
                }]
            };
            var barOptions = {
                responsive: true,
                scales: {
                    x: {
                        display: true,
                        title: {
                            display: true,
                            text: 'AREA'
                        }
                    }
                }
            };
            new Chart(barCtx, {
                type: 'bar',
                data: barData,
                options: barOptions
            });

            // Another Bar Chart
            var barCtx = document.getElementById("areaScalingChart").getContext("2d");
            var barData = {
                labels: ["San Roque", "Pasonanca", "Calarian", "Ayala"],
                datasets: [{
                    label: "AREA SCALING",
                    data: [25, 15, 10, 5],
                    backgroundColor: ["#FF6384", "#FF5733", "#45B39D", "#AAB7B8"],
                    borderWidth: 1
                }]
            };
            var barOptions = {
                responsive: true,
                scales: {
                    x: {
                        display: true,
                        title: {
                            display: true,
                            text: 'AREA'
                        }
                    },
                    y: {
                        display: true,
                        title: {
                            display: true,
                            text: 'NO. OF'
                        }
                    }
                }
            };
            new Chart(barCtx, {
                type: 'bar',
                data: barData,
                options: barOptions
            });
        });
    </script>
</body>
</html>


    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
