<!DOCTYPE html>
<html lang="en">

<?php
$title = 'personal_information';
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
                <div class="d-flex ms-5 mt-4">
                    <h4 class="h3 m">Verified Account</h1>
                </div>
                <div class="card">
                    <div class="row ">
                        <div class="col-2 d-flex flex-column align-items-center border-secondary pt-3 my-4" style="border-right: 2px solid #06283D;">
                            <img src="../images/jau.jpg" alt="Personal" srcset="" class="rounded-circle" style="width: 5vw; height: 10vh;">
                            <h6>Personal</h4>
                        </div>
                        <div class="col-10 py-3">
                            <section>
                                <hr class="line mx-3" style="border-top: 2px solid #06283D;">
                                <div class="PI_title text-center">
                                    <h4>PERSONAL INFORMATION</h4>
                                </div>
                                <div class="datas px-4">
                                    <table style="width:100%">
                                        <tr>
                                            <th>Name:</th>
                                            <td>Janice Celine C. Chang</td>
                                        </tr>
                                        <tr>
                                            <th>Birthdate:</th>
                                            <td>01/28/2002</td>
                                        </tr>
                                        <tr>
                                            <th>Gender:</th>
                                            <td>Cismale</td>
                                        </tr>
                                        <tr>
                                            <th>Address:</th>
                                            <td>555 77 855</td>
                                        </tr>
                                        <tr>
                                            <th>Contact Number:</th>
                                            <td>09874551398</td>
                                        </tr>
                                        <tr>
                                            <th>Email:</th>
                                            <td>ItsTheJau@gmail.com</td>
                                        </tr>
                                    </table>
                                </div>

                            </section>
                            <section>
                                <hr class="line mx-3" style="border-top: 2px solid #06283D;">
                                <div class="PI_title text-center">
                                    <h4>VEHICLE INFORMATION</h4>
                                </div>
                                <div class="datas px-4">
                                    <table style="width:100%">
                                        <tr>
                                            <th>Vehicle Type:</th>
                                            <td>Motorcycle</td>
                                        </tr>
                                        <tr>
                                            <th>Vehicle Plate Number:</th>
                                            <td>JEM272</td>
                                        </tr>
                                        <tr>
                                            <th>Vehicle Description:</th>
                                            <td>Matte Gray with red and black <br>
                                                MT Serie CC 150 <br>
                                                Model Year 2019
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                            </section>
                            <section>
                                <hr class="line mx-3" style="border-top: 2px solid #06283D;">
                                <div class="PI_title text-center">
                                    <h4>ID INFORMATION</h4>
                                </div>
                                <div class="datas px-4">
                                    <table style="width:100%">
                                        <tr>
                                            <th style="width: 30%;">ID Type:</th>
                                            <td style="width: 70%;">Driver's Licence</td>
                                        </tr>
                                        <tr>
                                            <th>ID Photo:</th>
                                            <td><img src="../images/license.png" alt="Driver's License"></td>
                                        </tr>
                                    </table>
                                </div>
                            </section>

                            <hr class="line mx-3" style="border-top: 2px solid #06283D;">

                            <div class="modal-footer d-flex justify-content-center">
                                <button type="button" class="btn" style="background-color: #06283D; color: white;" data-bs-toggle="modal" data-bs-target="#rentedSpacesModal">RENTED SPACES</button>
                                <button type="button" class="btn" style="background-color: #06283D; color: white; margin-left:10px;" data-bs-toggle="modal" data-bs-target="#postedSpacesModal">POSTED SPACES</button>
                                <button type="button" class="btn" style="background-color: #06283D; color: white; margin-left:10px;" data-bs-toggle="modal" data-bs-target="#cancellationsModal">CANCELLATIONS</button>
                                <button type="button" class="btn" style="background-color: #06283D; color: white; margin-left:10px;" data-bs-toggle="modal" data-bs-target="#reportsModal">REPORTS</button>
                            </div>
                            <div class="location_info">
                                <div class="table-box mt-4">
                                    <div class="table-row-header">
                                        <div class="table-cell">
                                            <h5>Location</h5>
                                        </div>
                                        <div class="table-cell">
                                            <h5>Price</h5>
                                        </div>
                                        <div class="table-cell">
                                            <h5>Date Rented</h5>
                                        </div>
                                        <div class="table-cell">
                                            <h5>More</h5>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-cell">
                                            <p>Pasonanca, Zamboanga City.</p>
                                        </div>
                                        <div class="table-cell">
                                            <p>Php20.00</p>
                                        </div>
                                        <div class="table-cell">
                                            <p>01/04/2024</p>
                                        </div>
                                        <div class="table-cell">
                                            <button type="button" class="butm" data-bs-toggle="modal" data-bs-target="#reported">
                                                <p><i class="fa fa-ellipsis-h" aria-hidden="true"></i></p>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <form action="ban_account.php" method="post">
                    <!-- Other form elements -->
                    <div class="row mb-2 d-flex flex-column mt-4">
                        <div class="col-sm-12 text-end">
                            <button type="submit" name="ban_account" class="btn" style="background-color: #06283D; color: white;">Ban Account</button>
                        </div>
                    </div>
                </form>
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