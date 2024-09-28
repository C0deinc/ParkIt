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
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-6">
                <!-- Overall Users -->
                <div class="d-flex justify-content-center align-items-center pt-3 text-center">
                        <h1 class="h2 mx-auto" style="font-weight: bold;">
                            USER FEEDBACK AND REVIEWS
                        </h1>
                </div>

                <!-- Feedback Chart -->
                <div class="container mt-3">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="row mb-2">
                                <div class="d-flex align-items-center">
                                    <h5 class="card-title text-left" style="font-weight: bold;">TOP 5 HIGHEST</h5>
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
                                                                <h5 class="card-title" style="font-size: 50px; font-weight:bold;">
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
                                    <h5 class="card-title text-left " style="font-weight: bold;">TOP 5 HIGHEST</h5>
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
                                                                <h5 class="card-title" style="font-size: 50px; font-weight:bold;">
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
                                                <h5 class="card-title text-left " style="font-weight: bold;">COMPANY</h5>
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
                                                        <td><a href="uf&rsinput.php" class="butm">
                                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                            </a>

                                                        </td>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-6 d-flex justify-content-end align-items-center">
                                <a href="reports.php" class="btn btn-primary" id="return-btn"><i class="fa fa-arrow-left" aria-hidden="true"></i> Return</a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <?php
        require_once('../include/js.php');
        require_once('../scripts/script.uf&rs.php');
        require_once('../scripts/script.php');
    ?>
</body>
</html>