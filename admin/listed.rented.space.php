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
                    <h3 class="h2" style="font-size: 24px;">LIST OF RENTED SPACES</h3>
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
                    <div class="col-7">
                        <div class="card" style="width: 100%;">
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
                                                <td style="width: 15vw;">5Purok 2, Villa Sta. Maria
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
                    <div class="col-5">

                        <div class="row mb-2">
                            <div class="card py-3 ">
                                <h6>Vehicle Type:</h6>
                                <p>A: Motorcycle</p>
                                <h6>Description Vehicle:</h6>
                                <p>2015 Honda CR-V EX-L
                                    Odometer - 52,315 miles
                                    Fuel Economy - 27.0/34.0 mpg City/Hwy
                                    Exterior Color - Alabaster Silver Metallic
                                    Interior Color - Gray
                                    Body - SUV
                                    Seating - 5 seats
                                    Transmission - Continuously Variable Automatic
                                    Drivetrain - Front-wheel
                                    Engine - 2.4L I-4 cylinder</p>
                                <h6>Reservation Time:</h6>
                                <p>10/13/24</p>
                                <h6>Reservation Date:</h6>
                                <p>9:30 AM</p>
                            </div>
                        </div>
                        <div class="row border border-secondary-subtle rounded py-2 mb-2">
                            <div class="col-6">
                                <table>
                                    <tr>
                                        <th>Arrival Date:</th>
                                        <td>10/13/23</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-6">
                                <table>
                                    <tr>
                                        <th>Arrival Time:</th>
                                        <td>9:30 AM</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row border border-secondary-subtle rounded py-2 mb-2 px-3">
                            <table>
                                <tr>
                                    <th>Running Time:</th>
                                    <td>00 h : 00 m : 00s</td>
                                </tr>
                                <tr>
                                    <th>Accumulated Amount:</th>
                                    <td>₱ 129.00</td>
                                </tr>
                            </table>
                        </div>
                        <div class="row border border-secondary-subtle rounded py-2 mb-2 px-3">
                            <table>
                                <tr>
                                    <th>Reference Code:</th>
                                    <td>01203021</td>
                                </tr>
                            </table>
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