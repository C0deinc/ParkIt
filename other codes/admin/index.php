<!DOCTYPE html>
<html lang="en">

<?php
    $title = 'Dashboard';
    $index_page = 'active';
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
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-6">
                <div class="d-flex justify-content-center align-items-center pt-3 text-center">
                    <h1 class="h2 mx-auto" style="font-weight: bold;">Overview</h1>
                </div>

                <!-- Overview Content Goes Here -->
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <a href="tus.php" class="card-link">
                            <div class="card" style="font-weight: bold;">
                                <div class="card-body">
                                    <h5 class="card-title text-center" style="font-weight: bold;">
                                        <img src="../images/user.png" alt="Image" class="img-fluid mr-2" width="30" height="30">
                                        Total Users
                                    </h5>
                                    <p class="card-text text-center" style="font-size: 25px">100</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="tps.php" class="card-link">
                            <div class="card" style="font-weight: bold;">
                                 <div class="card-body">
                                    <h5 class="card-title text-center" style="font-weight: bold;">
                                        <img src="../images/space.png" alt="Image" class="img-fluid mr-2" width="30" height="30">
                                        Total Space
                                    </h5>
                                    <p class="card-text text-center" style="font-size: 25px">500</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="tcs.php" class="card-link">
                            <div class="card" style="font-weight: bold;">
                                <div class="card-body" >
                                    <h5 class="card-title text-center" style="font-weight: bold;">
                                        <img src="../images/commission.png" alt="Image" class="img-fluid mr-2" width="30" height="30">
                                        Total Commission
                                    </h5>
                                    <p class="card-text text-center" style="font-size: 25px">100</p>
                                </div>
                            </div>
                        </a>
                    </div>                    
                </div>

                <div class="container mt-4">
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <div class="card">
                                <div class="card-header text-center">
                                    <h5 class="card-title" style="font-weight: bold;">Parking Space Survey</h5>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <canvas id="myPieChart" width="300" height="300"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card" style="height: 175px;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <!-- Left side: Price, Time, and Additional Info -->
                                        <div>
                                            <h5 class="card-title" style="font-weight: bold;">Today's Profit</h5>
                                            <p class="card-text" style="font-size: 30px;">
                                                &#8369;2,510 
                                                <i class="fas fa-clock" style="font-size: 15px;"></i>
                                                <span style="font-size: 15px;">Updated:</span> 
                                                <span id="updatedTime">12:30 PM</span>
                                            </p>
                                            <p class="card-text"><span id="raisedAmount">Raised up to 89 rents</span></p>
                                        </div>
                                            
                                
                                        <!-- Right side: Image -->
                                        <div class="ml-5">
                                            <img src="../images/profit.png" alt="Image" class="img-fluid" width="70" height="70">
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                
                                <div class="col-md-13 mt-4">
                                    <div class="card" style="height: 175px;">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h5 class="card-title" style="font-weight: bold;">Total Profit</h5>
                                                    <p class="card-text" style="font-size: 30px;">
                                                        &#8369;12,054 
                                                        <i class="fas fa-clock" style="font-size: 15px;"></i>
                                                        <span style="font-size: 15px;">Updated:</span> 
                                                        <span id="updatedTime">12:30 PM</span>
                                                    </p>
                                                </div>
                        
                                                <!-- Right side: Image -->
                                                <div class="ml-5">
                                                    <img src="../images/wallets.png" alt="Image" class="img-fluid" width="70" height="70">
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
        require_once('../scripts/script.index.php');
        require_once('../include/js.php');
        require_once('../scripts/script.php');
    ?>
    
</body>
</html>