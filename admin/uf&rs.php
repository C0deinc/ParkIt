<!DOCTYPE html>
<html lang="en">

<?php
    $title = 'Reports';
    $report_page = 'active';
    require_once('./include/head.php');
?>

<body>

    <!-- Page Content -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <?php
            require_once('./include/sidebar.php');
            ?>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-6">
                <!-- Overall Users -->
                <div class="d-flex justify-content-center align-items-center pt-3 text-center">
                        <h1 class="h2 mx-auto">
                            USER FEEDBACK AND REVIEWS
                        </h1>
                </div>

                <!-- Feedback Chart -->
                <div class="container mt-3">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="row mb-2">
                                <div class="d-flex align-items-center">
                                    <h5 class="card-title text-left ">TOP 5 HIGHEST</h5>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div style="position: relative;">
                                                        <canvas id="feedback" height="200" style="border: none;"></canvas>
                                                        <div style="position: absolute; top: 50%; right: -450px; transform: translateY(-50%); text-align: right;">
                                                            <div class="card-body text-center">
                                                                <h5 class="card-title" style="font-size: 50px;">
                                                                    FEEDBACK
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Divider -->
                            <hr class="my-custom-hr my-4">
                            
                             <!-- Feedback Chart -->
                            <div class="row mb-2">
                                <div class="d-flex align-items-center">
                                    <h5 class="card-title text-left ">TOP 5 HIGHEST</h5>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div style="position: relative;">
                                                        <canvas id="star" height="200" style="border: none;"></canvas>
                                                        <div style="position: absolute; top: 50%; right: -400px; transform: translateY(-50%); text-align: right;">
                                                            <div class="card-body text-center">
                                                                <h5 class="card-title" style="font-size: 50px;">
                                                                    5 STAR
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Divider -->
                            <hr class="my-custom-hr my-4">

                            <!-- Company Users -->
                            <div class="container mt-4">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <div class="row mb-2">
                                            <div class="d-flex align-items-center">
                                                <h5 class="card-title text-left ">COMPANY</h5>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered text-center">
                                                        <colgroup>
                                                            <col style="width: 5%;">
                                                            <col style="width: 25%;"> <!-- Adjust the width as needed -->
                                                            <col style="width: 15%;">
                                                            <col style="width: 20%;">
                                                            <col style="width: 20%;">
                                                            <col style="width: 15%;">
                                                        </colgroup>
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">ID</th>
                                                                <th scope="col">SPACE OWNER</th>
                                                                <th scope="col">GENDER</th>
                                                                <th scope="col">PHONE NO.</th>
                                                                <th scope="col">EMAIL</th>
                                                                <th scope="col">MORE</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <td>2</td>
                                                        <td>Jane Doe</td>
                                                        <td>Jane Doe</td>
                                                        <td>Jane Doe</td>
                                                        <td>Jane Doe</td>
                                                        <td><a href="uf&rsinput.php">...</a></td>
                                                    </table>
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

    <?php
        require_once('./include/js.php')
    ?>
    
    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Chart.js Script -->
    <script>
        $(document).ready(function() {
    $('#commissionTable').DataTable();
    });
    document.addEventListener("DOMContentLoaded", function() {

            // FEEDBACK Bar Chart
            var barCtx = document.getElementById("feedback").getContext("2d");
            var barData = {
                labels: ["JAUHARI", "JANICE", "MARK", "CHARL'S", "KATHLEEN"],
                datasets: [{
                    label: "SPACE OWNER FEEDBACK",
                    data: [40, 15, 25, 13, 22],
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
                            text: 'SPACE OWNER'
                        }
                    },
                    y: {
                        display: true,
                        title: {
                            display: true,
                            text: 'NUMBER OF FEEDBACK'
                        }
                    }
                }
            };
            new Chart(barCtx, {
                type: 'bar',
                data: barData,
                options: barOptions
            });

            // 5 STAR Bar Chart
            var barCtx = document.getElementById("star").getContext("2d");
            var barData = {
                labels: ["2020", "2021", "2022", "2023", "2024"],
                datasets: [{
                    label: "COMMISSION",
                    data: [1000, 800, 580, 500, 200],
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
                            text: 'YEAR'
                        }
                    },
                    y: {
                        display: true,
                        title: {
                            display: true,
                            text: 'COMMISSION AMOUNT'
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