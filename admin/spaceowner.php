<!DOCTYPE html>
<html lang="en">

<?php
    $title = 'Dashboard';
    $index_page = 'active';
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
                <div class="d-flex justify-content-center align-items-center pt-3 text-center position-relative mt-2">
                    <a href="tps.php" class="text-primary text-decoration-none position-absolute start-0"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                    <div class="position-absolute end-0">
                        <p>Space Owner ID: <span id="idNumber">12345</span></p>
                    </div>
                </div>

                <h1 class="h2 mx-auto mt-4 text-center" style="text-decoration: underline;">
                    <img src="/admin/images/group-of-users.png" alt="Total User Image" class="img-fluid" width="35" height="35">
                    SPACE OWNER NAME
                </h1>

                <div class="row justify-content-center">
                    <!-- Left card (Squared) -->
                    <div class="col-md-4 mt-3 ms-3">
                        <div class="card shadow-lg" style="width: 18rem; background-color:#06283D;">
                            <div class="card-body text-center">
                                <img src="/admin/images/photo.png" class="card-img-top rounded-circle" alt="person details" style="width: 200px; height: 200px;">
                            </div>
                        </div>
                    </div>

                    <!-- Right card (Rectangle) -->
                    <div class="col-md-7 mt-3">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <h5 class="card-title text-center">DETAILS</h5>
                                <hr style="border-top: 2px solid #06283D;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><strong>Name:</strong> Mohammad Jauhari</p>
                                        <p><strong>Gender:</strong> Male</p>
                                        <p><strong>Contact No:</strong> +1234567890</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Province:</strong> Zamboanga Del Sur</p>
                                        <p><strong>City:</strong> Zamboanga City</p>
                                        <p><strong>Barangay:</strong> Upper Calarian</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Divider -->
                <hr class="my-custom-hr my-4">

                <h1 class="h2 mx-auto mt-4 text-center" style="text-decoration: underline;">
                    SPACE OWNED
                </h1>

                <div class="row justify-content-center">
                    <!-- Right card (Rectangle) -->
                    <div class="col-md-7 mt-3">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <h5 class="card-title text-center">DETAILS</h5>
                                <hr style="border-top: 2px solid #06283D;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><strong>Name:</strong> Mohammad Jauhari</p>
                                        <p><strong>Gender:</strong> Male</p>
                                        <p><strong>Contact No:</strong> +1234567890</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Province:</strong> Zamboanga Del Sur</p>
                                        <p><strong>City:</strong> Zamboanga City</p>
                                        <p><strong>Barangay:</strong> Upper Calarian</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Left card (Squared) -->
                    <div class="col-md-4 mt-3 ms-3">
                        <div class="card shadow-lg" style="width: 18rem; background-color:#06283D;">
                            <div class="card-body text-center">
                                <img src="/admin/images/photo.png" class="card-img-top rounded-circle" alt="persons space" style="width: 200px; height: 200px;">
                            </div>
                        </div>
                    </div>
                </div>

                <h1 class="h2 mx-auto mt-5 text-center" style="text-decoration: underline;">
                    OTHER SPACES
                </h1>

                <div class="row mt-4 justify-content-center">
                    <div class="col-md-3">
                        <div class="card shadow-lg text-center" style="width: 15rem; background-color:#06283D;">
                            <img src="/admin/images/photo.png" class="card-img-top rounded-circle mx-auto mt-3" alt="Person's Picture" style="width: 200px; height: 200px;">
                            <div class="card-body mt-3" style="background-color: #D9D9D9;">
                                <h4>PASONANCA</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow-lg text-center" style="width: 15rem; background-color:#06283D;">
                            <img src="/admin/images/photo.png" class="card-img-top rounded-circle mx-auto mt-3" alt="Person's Picture" style="width: 200px; height: 200px;">
                            <div class="card-body mt-3" style="background-color: #D9D9D9;">
                                <h4>UPPER CALARIAN</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow-lg text-center" style="width: 15rem; background-color:#06283D;">
                            <img src="/admin/images/photo.png" class="card-img-top rounded-circle mx-auto mt-3" alt="Person's Picture" style="width: 200px; height: 200px;">
                            <div class="card-body mt-3" style="background-color: #D9D9D9;">
                                <h4>STA. MARIA</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <?php
        require_once('./include/js.php');
    ?>

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
