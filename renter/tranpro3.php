<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Transaction Process 1';
require_once('../include/head.user.php');
?>

<body>
<?php
    require_once('../include/cancellation.rent.php');
?>

    <div class="container sm">
        <div class="row border-bottom py-0 mb-0">
            <div class="col">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h1 class="close">Transaction Process</h1>
            </div>
        </div>
    </div>

    <!-- Center the user_data section -->
    <div class="container py-0">
        <section class="user_data">
            <div class="row border-bottom py-0 mb-0">
                <div class="col-3 py-1 px-0">
                    <div class="profile d-flex justify-content-center align-items-center">
                        <img src="../images/photo.png" class="rounded-circle" alt="" srcset=""
                            style="width: 10vw; height: 6vh;">
                    </div>
                </div>
                <div class="col-4 py-1 px-0" style="font-size: 0.5rem;">
                    <div class="row">
                        <label for="Name">Name</label>
                        <p style="font-weight: bold; color: #06283D;">Harolhette Rom</p>
                    </div>
                    <div class="row">
                        <label for="Email">Email</label>
                        <p style="font-weight: bold; color: #06283D;">Harolhette@gmail.com</p>
                    </div>
                </div>
                <div class="col-3 py-1 px-0" style="font-size: 0.5rem;">
                    <div class="row">
                        <label for="Contact">Contact No.</label>
                        <p style="font-weight: bold; color: #06283D;">09786667564</p>
                    </div>
                    <div class="row">
                        <label for="age">Age</label>
                        <p style="font-weight: bold; color: #06283D;">22</p>
                    </div>
                </div>
                <div class="col-2 py-1 px-0" style="font-size: 0.5rem;">
                    <div class="row">
                        <label for="birthdate">Birthdate</label>
                        <p style="font-weight: bold; color: #06283D;">01/22/2003</p>
                    </div>
                    <div class="row">
                        <label for="gender">Gender</label>
                        <p style="font-weight: bold; color: #06283D;">Female</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="container sm py-0">
        <div class="row border-bottom">
            <div class="root">
                <div class="step">
                    <ul class="progressbar">
                        <li class="active">
                            <img src="../images/reserved.png">
                            <p>Reservation</p>
                        </li>
                        <li class="active">
                            <img src="../images/arrival.png">
                            <p>Arrival</p>
                        </li>
                        <li>
                            <img src="../images/currently.png">
                            <p>Currently Renting</p>
                        </li>
                        <li>
                            <img src="../images/complete.png">
                            <p>Completed</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="confirm">
         <p><img src="../images/check.png" alt="Confirmation Image">
        Your arrival has been confirmed!</p>
    </div>

    <div class="container py-0 px-2">
        <div class="card mt-3">
            <div class="row"  style="padding-left: 12px;">
                <div class="col-4 px-0">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner rounded">
                            <div class="carousel-item active">
                                <img src="../images/spaces.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item active">
                                <img src="../images/spaces.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item active">
                                <img src="../images/spaces.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5 px-2 py-0">
                        <h6 class="lotspace mt-1">Mcqueen's Lot</h6>
                    <div class="detail mt-1" style="font-size: 0.4rem;">
                        <p class="mb-1"><i class="fa-solid fa-location-dot" aria-hidden="true" style=" color: #1363DF;"></i> 
                            Purok 2, Gumamela street</p>
                        <p><span class="fa fa-star checked"></span> 1.5k Reviews</p>
                    </div>
                </div>
                <div class="col-3 px-3 d-flex text-center align-items-center mr-0" style="font-size: 0.4rem;  ">
                    <a href="#"> View Details</a>
                </div>
            </div>
        </div>
    </div>

    <section class="ref_detail py-3 pb-0">
        <div class="ms-2 px-3">
            <h6>Reference code</h6>
        </div>
        <div class="ref d-flex justify-content-evenly align-items-end px-2">
            <p class="me-5">Reference code</p>
            <p id="text" class="me-5">12345678
                <button id="copy-text-btn" style="border: none; background: none;"><i class="fa fa-clone" aria-hidden="true"></i></button>
            </p>
        </div>
    </section>
   

    <div class="container mt-1 py-0 ">
        <div class="row">
            <div class="col-md-6 offset-md-1">
                <div class="vehicles-card">
                    <div class="card-body" style="height: 10px;">
                        <!-- Adjust height as needed -->
                        <div class="row">
                            <div class="col-9 text-start align-items-center px-4">
                                <h6 class="card-titles mt-1 px-0" style="font-size: 0.9rem;">Vehicle 1</h6>
                            </div>
                            <div class="col-3 px-3 d-flex text-end align-items-center mr-0"
                                style="font-size: 0.4rem;">
                                <a href="#"> View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-bottom px-3 mt-3">
                    <table style="width: 100%;">
                        <tr>
                            <th style="font-size: 0.6rem;">Vehicle Owner</th>
                            <td style="font-size: 0.6rem;">(You)</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem;">Driver</th>
                            <td style="font-size: 0.6rem;">(You)</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem;">Vehicle</th>
                            <td style="font-size: 0.6rem;">Motorcycle</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem;">Plate Numer</th>
                            <td style="font-size: 0.6rem;">JEFF 123</td>
                        </tr>
                    </table>
                </div>
                <div class="row mb-3 px-3 mt-2">
                    <table style="width: 100%;">
                        <tr>
                            <th style="font-size: 0.6rem;">Picked Rate</th>
                            <td style="font-size: 0.6rem;">Hourly</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem;">Payment Method</th>
                            <td>
                                <img src="../images/gcash.png" alt="Image Description" style="max-width: 10%; height: auto;">
                            </td>

                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem;">Picked Space</th>
                            <td style="font-size: 0.6rem;">M2</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-2 py-0 ">
        <div class="row">
            <div class="col-md-6 offset-md-1">
                <div class="vehicles-card">
                    <div class="card-body" style="height: 10px;">
                        <!-- Adjust height as needed -->
                        <div class="row">
                            <div class="col-9 text-start align-items-center px-4">
                                <h6 class="card-titles mt-1 px-0" style="font-size: 0.9rem;">Vehicle 2</h6>
                            </div>
                            <div class="col-3 px-3 d-flex text-end align-items-center mr-0"
                                style="font-size: 0.4rem;">
                                <a href="#"> View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-bottom px-3 mt-3">
                    <table style="width: 100%;">
                        <tr>
                            <th style="font-size: 0.6rem;">Vehicle Owner</th>
                            <td style="font-size: 0.6rem;">(You)</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem;">Driver</th>
                            <td style="font-size: 0.6rem;">(You)</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem;">Vehicle</th>
                            <td style="font-size: 0.6rem;">Motorcycle</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem;">Plate Numer</th>
                            <td style="font-size: 0.6rem;">JEFF 123</td>
                        </tr>
                    </table>
                </div>
                <div class="row mb-3 px-3 mt-2">
                    <table style="width: 100%;">
                        <tr>
                            <th style="font-size: 0.6rem;">Picked Rate</th>
                            <td style="font-size: 0.6rem;">Hourly</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem;">Payment Method</th>
                            <td>
                                <img src="../images/gcash.png" alt="Image Description" style="max-width: 10%; height: auto;">
                            </td>

                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem;">Picked Space</th>
                            <td style="font-size: 0.6rem;">M2</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-2 py-0 ">
        <div class="row">
            <div class="col-md-6 offset-md-1">
                <div class="vehicles-card">
                    <div class="card-body" style="height: 10px;">
                        <!-- Adjust height as needed -->
                        <div class="row">
                            <div class="col-9 text-start align-items-center px-4">
                                <h6 class="card-titles mt-1 px-0" style="font-size: 0.9rem;">Vehicle 3</h6>
                            </div>
                            <div class="col-3 px-3 d-flex text-end align-items-center mr-0"
                                style="font-size: 0.4rem;">
                                <a href="#"> View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-bottom px-3 mt-3">
                    <table style="width: 100%;">
                        <tr>
                            <th style="font-size: 0.6rem;">Vehicle Owner</th>
                            <td style="font-size: 0.6rem;">(You)</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem;">Driver</th>
                            <td style="font-size: 0.6rem;">(You)</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem;">Vehicle</th>
                            <td style="font-size: 0.6rem;">Motorcycle</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem;">Plate Numer</th>
                            <td style="font-size: 0.6rem;">JEFF 123</td>
                        </tr>
                    </table>
                </div>
                <div class="row mb-3 px-3 mt-2">
                    <table style="width: 100%;">
                        <tr>
                            <th style="font-size: 0.6rem;">Picked Rate</th>
                            <td style="font-size: 0.6rem;">Hourly</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem;">Payment Method</th>
                            <td>
                                <img src="../images/gcash.png" alt="Image Description" style="max-width: 10%; height: auto;">
                            </td>

                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem;">Picked Space</th>
                            <td style="font-size: 0.6rem;">M2</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-2 py-0 ">
        <div class="row">
            <div class="col-md-6 offset-md-1">
                <div class="vehicles-card">
                    <div class="card-body" style="height: 10px;">
                        <!-- Adjust height as needed -->
                        <div class="row">
                            <div class="col-9 text-start align-items-center px-4">
                                <h6 class="card-titles mt-1 px-0" style="font-size: 0.9rem;">Vehicle 4</h6>
                            </div>
                            <div class="col-3 px-3 d-flex text-end align-items-center mr-0"
                                style="font-size: 0.4rem;">
                                <a href="#"> View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-bottom px-3 mt-3" >
                    <table style="width: 100%;">
                        <tr>
                            <th style="font-size: 0.6rem;">Vehicle Owner</th>
                            <td style="font-size: 0.6rem;">(You)</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem;">Driver</th>
                            <td style="font-size: 0.6rem;">(You)</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem;">Vehicle</th>
                            <td style="font-size: 0.6rem;">Motorcycle</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem;">Plate Numer</th>
                            <td style="font-size: 0.6rem;">JEFF 123</td>
                        </tr>
                    </table>
                </div>
                <div class="row mb-3 px-3 mt-2">
                    <table style="width: 100%;">
                        <tr>
                            <th style="font-size: 0.6rem;">Picked Rate</th>
                            <td style="font-size: 0.6rem;">Hourly</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem;">Payment Method</th>
                            <td>
                                <img src="../images/gcash.png" alt="Image Description" style="max-width: 10%; height: auto;">
                            </td>

                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem;">Picked Space</th>
                            <td style="font-size: 0.6rem;">M2</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <?php
        require_once('../scripts/script.php');
    ?>
</body>
</html>

    


    

    


