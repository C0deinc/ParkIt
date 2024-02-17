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
                <div class="d-flex justify-content-center align-items-center pt-3 text-center">
                    <div class="d-flex justify-content-center align-items-center pt-4 text-center numbered-heading">
                        <h1 class="h2 mx-auto">
                            <i class="fas fa-money-check-alt fa-1x"></i>
                            TRANSACTION
                        </h1>
                    </div>
                </div>
                
                <!-- Transaction Overview Section -->
                <div class="container mt-3">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="row mb-2">
                                <div class="d-flex align-items-center">
                                    <h5 class="card-title text-left ">TRANSACTION OVERVIEW</h5>
                                    <div class="search-keyword d-flex ms-auto">
                                        <div class="input-group">
                                            <input type="text" name="keyword" id="keyword" placeholder="Search..." class="form-control">
                                            <button class="btn btn-outline-secondary brand-bg-color" type="button">
                                                <i class="fa fa-search color-white" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <div id="MyButtons" class="d-flex mb-md-2 mb-lg-0 col-12 col-md-auto"></div>
                                    <div class="form-group col-2 col-sm-auto flex-sm-grow-1 flex-lg-grow-0 ms-lg-auto">
                                        <select name="staff-role" id="staff-role" class="form-select me-md-2">
                                            <option value="">Sort by</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="commissionTable" class="table table-bordered text-center">
                                            <colgroup>
                                                <col style="width: 5%;">
                                                <col style="width: 20%;">
                                                <col style="width: 20%;">
                                                <col style="width: 15%;">
                                                <col style="width: 10%;">
                                                <col style="width: 10%;">
                                                <col style="width: 10%;">
                                                <col style="width: 10%;">
                                            </colgroup>
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">RENTER NAME</th>
                                                    <th scope="col">SPACE OWNER</th>
                                                    <th scope="col">CONTACT NO.</th>
                                                    <th scope="col">DEPOSIT BASE FEE</th>
                                                    <th scope="col">TOTAL BASE FEE</th>
                                                    <th scope="col">TOTAL AMOUNT</th>
                                                    <th scope="col">REFERENCE CODE</th>
                                                </tr>
                                            </thead>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Divider -->
                <hr class="my-custom-hr my-4">
                
                <!-- Commission Scaling Chart Section -->
                <div class="container mt-4">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div style="position: relative;">
                                                        <canvas id="transactionChart" height="250" style="border: none;"></canvas>
                                                        <div style="position: absolute; top: 50%; right: -500px; transform: translateY(-50%); text-align: right;">
                                                            <div class="card-body text-center">
                                                                <h5 class="card-title" style="font-size: 50px;">
                                                                    TRANSACTION <br> SCALING
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.js"></script>
    
    <!-- Chart.js Script -->
    <script>
        // Unchanged DataTable Initialization
        $(document).ready(function() {
            $('#commissionTable').DataTable();
        });

        // Unchanged Chart.js Script for Commission Bar Chart
        document.addEventListener("DOMContentLoaded", function() {
            var barCtx = document.getElementById("transactionChart").getContext("2d");
            var barData = {
                labels: ["2020", "2021", "2022", "2023", "2024"],
                datasets: [{
                    label: "TRANSACTION",
                    data: [50, 23, 42, 32, 20],
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
                            text: 'NUMBER OF TRANSACTION'
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