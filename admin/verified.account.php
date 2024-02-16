<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verified Account Page</title>

    <?php 
        require_once('./include/head.php');
        ?>
    <!-- Chart.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-6" style="padding-top: 5px;">
                <div class="d-flex ms-5 mt-4">
                    <h4 class="h3 m">Verified Account</h1>
                </div>
                <div class="box_main d-flex justify-content-around" id="MyButtons" class="d-flex mb-md-2 mb-lg-0 col-12 col-md-auto">
                    ContentPDF
                    <div class="search-keyword d-flex">
                        <div class="input-group pe-4">
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
                <div class="table-box">
                    <div class="table-row-header">
                        <div class="table-cell">
                            <h5></h5>
                        </div>
                        <div class="table-cell">
                            <h5>Name</h5>
                        </div>
                        <div class="table-cell">
                            <h5>Account</h5>
                        </div>
                        <div class="table-cell">
                            <h5>Date Applied</h5>
                        </div>
                        <div class="table-cell">
                            <h5>More</h5>
                        </div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell">
                            <img class="rounded-circle" style="width: 50px; height: 50px;" src="../admin/images/jau.jpg" alt="">
                        </div>
                        <div class="table-cell">
                            <p>Mohammad Jauhari Sali S.</p>
                        </div>
                        <div class="table-cell">
                            <p>0012457</p>
                        </div>
                        <div class="table-cell">
                            <p>01/24/24</p>
                        </div>
                        <div class="table-cell">
                            <p><i class="fa fa-ellipsis-h" aria-hidden="true"></i></p>
                        </div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell">
                            <img class="rounded-circle" style="width: 50px; height: 50px;" src="../admin/images/jau.jpg" alt="">
                        </div>
                        <div class="table-cell">
                            <p>Mohammad Jauhari Sali S.</p>
                        </div>
                        <div class="table-cell">
                            <p>0012457</p>
                        </div>
                        <div class="table-cell">
                            <p>01/24/24</p>
                        </div>
                        <div class="table-cell">
                            <p><i class="fa fa-ellipsis-h" aria-hidden="true"></i></p>
                        </div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell">
                            <img class="rounded-circle" style="width: 50px; height: 50px;" src="../admin/images/jau.jpg" alt="">
                        </div>
                        <div class="table-cell">
                            <p>Mohammad Jauhari Sali S.</p>
                        </div>
                        <div class="table-cell">
                            <p>0012457</p>
                        </div>
                        <div class="table-cell">
                            <p>01/24/24</p>
                        </div>
                        <div class="table-cell">
                            <p><i class="fa fa-ellipsis-h" aria-hidden="true"></i></p>
                        </div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell">
                            <img class="rounded-circle" style="width: 50px; height: 50px;" src="../admin/images/jau.jpg" alt="">
                        </div>
                        <div class="table-cell">
                            <p>Mohammad Jauhari Sali S.</p>
                        </div>
                        <div class="table-cell">
                            <p>0012457</p>
                        </div>
                        <div class="table-cell">
                            <p>01/24/24</p>
                        </div>
                        <div class="table-cell">
                            <p><i class="fa fa-ellipsis-h" aria-hidden="true"></i></p>
                        </div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell">
                            <img class="rounded-circle" style="width: 50px; height: 50px;" src="../admin/images/jau.jpg" alt="">
                        </div>
                        <div class="table-cell">
                            <p>Mohammad Jauhari Sali S.</p>
                        </div>
                        <div class="table-cell">
                            <p>0012457</p>
                        </div>
                        <div class="table-cell">
                            <p>01/24/24</p>
                        </div>
                        <div class="table-cell">
                            <p><i class="fa fa-ellipsis-h" aria-hidden="true"></i></p>
                        </div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell">
                            <img class="rounded-circle" style="width: 50px; height: 50px;" src="../admin/images/jau.jpg" alt="">
                        </div>
                        <div class="table-cell">
                            <p>Mohammad Jauhari Sali S.</p>
                        </div>
                        <div class="table-cell">
                            <p>0012457</p>
                        </div>
                        <div class="table-cell">
                            <p>01/24/24</p>
                        </div>
                        <div class="table-cell">
                            <p><i class="fa fa-ellipsis-h" aria-hidden="true"></i></p>
                        </div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell">
                            <img class="rounded-circle" style="width: 50px; height: 50px;" src="../admin/images/jau.jpg" alt="">
                        </div>
                        <div class="table-cell">
                            <p>Mohammad Jauhari Sali S.</p>
                        </div>
                        <div class="table-cell">
                            <p>0012457</p>
                        </div>
                        <div class="table-cell">
                            <p>01/24/24</p>
                        </div>
                        <div class="table-cell">
                            <p><i class="fa fa-ellipsis-h" aria-hidden="true"></i></p>
                        </div>
                    </div>
                    
                    
                </div>
                <!-- Overview Content Goes Here -->


            </main>
        </div>
    </div>

    <!-- Include Bootstrap JS and jQuery -->
    <?php
    require_once('../admin/scripts/script.php');

    ?>

</body>

</html>