<!DOCTYPE html>
<html lang="en">

<?php
    $title = 'Reports';
    $report_page = 'active';
    require_once('../include/head.php');
?>
<body>
    <!-- Page Content -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <?php
            require_once('../include/sidebar.php');
            ?>
                    <!-- Main Content -->
                    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-6" >
                        <div class="row d-flex justify-content-center align-items-center pt-3">
                            <div class="col-md-5">
                                <a href="uf&rs.php" class="card-link">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title text-center" style="font-weight: bold;">
                                                USER FEEDBACK AND REVIEWS
                                            </h5>
                                            <p class="card-text text-center" style="font-size: 30px; font-weight:bold;">100</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-5">
                                <a href="warning.account.php" class="card-link">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title text-center" style="font-weight: bold;">
                                                WARNING
                                            </h5>
                                            <p class="card-text text-center" style="font-size: 30px; font-weight:bold;">500</p>
                                        </div>
                                    </div>
                                </a>
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
                                                    <a href="ts.php" class="card-link">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h6 class="card-title" style="font-weight: bold;">TRANSACTION</h6>
                                                                <canvas id="transaction" height="200"></canvas>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                            
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h6 class="card-title" style="font-weight: bold;">INCIDENTS</h6>
                                                                <canvas id="incident" height="200"></canvas>
                                                            </div>
                                                        </div>
                                                    </a>
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
                                                    <a href="tps.php" class="card-link">
                                                        <div style="position: relative;">
                                                            <canvas id="areaScalingChart" height="200"></canvas>
                                                            <div style="position: absolute; top: 50%; right: -500px; transform: translateY(-50%); text-align: right;">
                                                                <h5 class="card-title" style="font-size: 50px; font-weight: bold;"> AREA SCALING</h5>
                                                            </div>
                                                        </div>
                                                    </a>
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
        require_once('../include/js.php');
        require_once('../scripts/script.php');
        require_once('../scripts/script.reports.php');
    ?>


    
</body>
</html>


