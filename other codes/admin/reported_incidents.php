<!DOCTYPE html>
<html lang="en">

<?php
$title = 'Users';
$users_page = 'active';
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
                    <div class="d-flex justify-content-start align-items-center pt-3 text-center">
                        <h3 class="h2" style="font-size: 24px;">LIST OF POSTED SPACES</h3>
                    </div>


                    <div class="tophead">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-3 d-flex justify-content-center">
                                <img src="../images/photo.png" class="rounded-circle" alt=""
                                    style="width: 5vw; height: 8hv;">
                            </div>
                            <div class="col-3 px-3">
                                <p>Charls Benedick Martell W. Inoferio</p>
                                <p style="font-size: 0.8rem;">charls.inoferio@gmal.com</p>
                            </div>
                            <div class="col-3 d-flex align-items-center flex-column text-start">
                                <p>20 Years Old</p>
                                <p style="font-size: 0.8rem;">Male</p>
                            </div>
                            <div class="col-3 d-flex align-items-center flex-column">
                                <p>09776559876</p>
                                <p style="font-size: 0.8rem;">January 07, 2003</p>
                            </div>
                        </div>
                    </div>

                    <!-- Divider -->
                    <hr class="my-custom-hr my-4">
                    <div class="row d-flex justify-content-center">
                        <div class="card" style="width: 80%;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3 d-flex flex-column align-items-center grid row-gap-3">
                                        <div class="row" style="width: 100%;">
                                            <img src="../images/photo.png" alt="">
                                        </div>
                                        <div class="row" style="width: 100%;">
                                            <img src="../images/photo.png" alt="">
                                        </div>
                                        <div class="row" style="width: 100%;">
                                            <img src="../images/photo.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-9 container-md">
                                        <img src="../images/space.jpg" alt="" style="width: 100%; height: 100%;">
                                    </div>
                                </div>
                                <hr class="my-custom-hr my-4">
                                <div class="row">
                                    <div class="col-8">
                                        <table style="width:100%">
                                            <tr>
                                                <th>Rating:</th>
                                                <td>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Location:</th>
                                                <td style="width: 30vw;">5Purok 2, Villa Sta. Maria
                                                    Zamboanga City
                                                    Near the Rick N Remy’s bakery</td>
                                            </tr>
                                            <tr>
                                                <th>Rate:</th>
                                                <td>Hourly 140.00</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-4">
                                        <table style="width:100%">
                                            <tr>
                                                <th>Base Rate:</th>
                                                <td>Php 100.00</td>
                                            </tr>
                                            <tr>
                                                <th>Deposit Base Fee:</th>
                                                <td>Php 55.00</td>
                                            </tr>
                                            <tr>
                                                <th>Payment Mode:</th>
                                                <td>Gcash Cash </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <hr class="my-custom-hr my-4">
                                <div class="row">
                                    <div class="col-5 d-flex align-items-center">
                                        <table style="width:100%">
                                            <tr>
                                                <th>Time Allowance or arriving:</th>
                                                <td>Php 30 minutes</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-7 d-flex align-items-center">
                                    <table style="width:100%">
                                            <tr>
                                                <th>Description:</th>
                                                <td>Security camera <br>
                                                    Wifi <br>
                                                    lighting <br>
                                                    regularly maintainance <br>
                                                    Security personnel <br>
                                                    EV charging station <br>
                                                    Gate <br>
                                                    Emergency call station <br>
                                                </td>
                                            </tr>
                                        </table>
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
    <?php
        require_once('../include/js.php');
        require_once('../scripts/script.php');
    ?>

</body>

</html>