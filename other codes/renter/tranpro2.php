<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Transaction Process 2';
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
                <div class="col-2 py-1 px-0">
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
        Your reservation has been confirmed!</p>
    </div>

    <div class="message">
        <p>The space owner will be waiting for your arrival.</p>
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
                    <a href="#" class="view-details">View Details</a>
                </div>
            </div>
        </div>
    </div>

    <section class="ref_detail py-3 pb-0">
        <div class="ms-2 px-2">
            <h6 style="color: #06283D; font-weight: bold;">Reference code</h6>
        </div>
        <div class="ref d-flex justify-content-between align-items-end px-3">
            <p class="me-5" style="color: #707070; font-weight: bold;">Reference code</p>
                <p id="text" class="ms-auto me-0">
                    <span style="color: #06283D; font-weight: bold;">12345678</span>
                    <button id="copy-text-btn" style="border: none; background: none;">
                        <i class="fa-regular fa-clone" style="color: #74C0FC;"></i>
                    </button>
                </p>
        </div>
    </section>
    
    <div class="container py-1">
        <div class="ref_detail">
            <div class="ms-0 px-0">
                <h6 style="color: #06283D; font-weight: bold;">Waiting Time</h6>
            </div>
            <div class="ref d-flex justify-content-between align-items-end px-0">
                <p class="me-0 mb-0" style="color: #707070;">Time Allowance</p>
                <p id="timer" class="mb-0" style="color: #06283D; font-weight: bold;">00:00:00</p>
            </div>
        </div>   
        <hr style="margin: 10px 0;">
    </div>

    <div class="container py-0 mt-3">
        <div class="d-flex justify-content-end">
            <button type="button" style="border: none; background: none; color:#1363DF; font-weight:bold; font-size:0.6rem;">Cancel All</button>
        </div>
    </div>

    <div class="container mt-1 py-0 ">
        <div class="row">
            <div class="col-md-6 offset-md-1">
                <div class="vehicles-card">
                    <div class="card-body" style="height: 10px;">
                        <!-- Adjust height as needed -->
                        <div class="row">
                            <div class="col-9 text-start align-items-center px-4">
                                <h6 class="card-titles mt-2 px-0" style="font-size: 0.8rem;">Vehicle 1</h6>
                            </div>
                            <div class="col-3 px-3 d-flex text-end align-items-center mr-0" style="font-size: 0.4rem;">
                                <a href="#" class="view-details">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row px-4 mt-3">
                    <table style="width: 100%;">
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;">Vehicle Owner</th>
                            <td style="font-size: 0.6rem; text-align: right;">(You)</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;">Driver</th>
                            <td style="font-size: 0.6rem; text-align: right;">(You)</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;">Vehicle</th>
                            <td style="font-size: 0.6rem; text-align: right;">Motorcycle</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;">Plate Number</th>
                            <td style="font-size: 0.6rem; text-align: right;">JEFF 123</td>
                        </tr>
                    </table>
                    <hr style="margin: 10px 0;">
                </div>
        
                <div class="row mb-3 px-4">
                    <table style="width: 100%;">
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;">Picked Rate</th>
                            <td style="font-size: 0.6rem; text-align: right;">Hourly</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;">Payment Method</th>
                            <td style="text-align: right;">
                                <img src="../images/gcash.png" alt="Image Description" style="max-width: 10%; height: auto;">
                            </td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;">Picked Space</th>
                            <td style="font-size: 0.6rem; text-align: right;">M2</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="row mb-2 d-flex flex-column mt-0">
            <div class="col-sm-12 text-center">
                <button type="button" class="btn w-100" data-bs-toggle="modal" data-bs-target="#cancellation"
                    style="background-color: #1363DF; color: white; font-size:0.7rem;">Cancel Arrival</button>
            </div>
        </div>
    </div>

    <div class="container mt-4 py-0 ">
        <div class="row">
            <div class="col-md-6 offset-md-1">
                <div class="vehicles-card">
                    <div class="card-body" style="height: 10px;">
                        <!-- Adjust height as needed -->
                        <div class="row">
                            <div class="col-9 text-start align-items-center px-4">
                                <h6 class="card-titles mt-2 px-0" style="font-size: 0.8rem;">Vehicle 2</h6>
                            </div>
                            <div class="col-3 px-3 d-flex text-end align-items-center mr-0" style="font-size: 0.4rem;">
                                <a href="#" class="view-details">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row px-4 mt-3">
                    <table style="width: 100%;">
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;">Vehicle Owner</th>
                            <td style="font-size: 0.6rem; text-align: right;">(You)</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;">Driver</th>
                            <td style="font-size: 0.6rem; text-align: right;">(You)</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;">Vehicle</th>
                            <td style="font-size: 0.6rem; text-align: right;">Motorcycle</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;">Plate Number</th>
                            <td style="font-size: 0.6rem; text-align: right;">JEFF 123</td>
                        </tr>
                    </table>
                    <hr style="margin: 10px 0;">
                </div>
                
                <div class="row mb-3 px-4">
                    <table style="width: 100%;">
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;">Picked Rate</th>
                            <td style="font-size: 0.6rem; text-align: right;">Hourly</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;">Payment Method</th>
                            <td style="text-align: right;">
                                <img src="../images/gcash.png" alt="Image Description" style="max-width: 10%; height: auto;">
                            </td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;">Picked Space</th>
                            <td style="font-size: 0.6rem; text-align: right;">M2</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="row mb-2 d-flex flex-column mt-0">
            <div class="col-sm-12 text-center">
                <button type="button" class="btn w-100" data-bs-toggle="modal" data-bs-target="#cancellation"
                    style="background-color: #1363DF; color: white; font-size:0.7rem;">Cancel Arrival</button>
            </div>
        </div>
    </div>

    <div class="container mt-4 py-0 ">
        <div class="row">
            <div class="col-md-6 offset-md-1">
                <div class="vehicles-card">
                    <div class="card-body" style="height: 10px;">
                        <!-- Adjust height as needed -->
                        <div class="row">
                            <div class="col-9 text-start align-items-center px-4">
                                <h6 class="card-titles mt-2 px-0" style="font-size: 0.8rem;">Vehicle 3</h6>
                            </div>
                            <div class="col-3 px-3 d-flex text-end align-items-center mr-0" style="font-size: 0.4rem;">
                                <a href="#" class="view-details">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row px-4 mt-3">
                    <table style="width: 100%;">
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;">Vehicle Owner</th>
                            <td style="font-size: 0.6rem; text-align: right;">(You)</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;">Driver</th>
                            <td style="font-size: 0.6rem; text-align: right;">(You)</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;">Vehicle</th>
                            <td style="font-size: 0.6rem; text-align: right;">Motorcycle</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;">Plate Number</th>
                            <td style="font-size: 0.6rem; text-align: right;">JEFF 123</td>
                        </tr>
                    </table>
                    <hr style="margin: 10px 0;">
                </div>
                
                <div class="row mb-3 px-4">
                    <table style="width: 100%;">
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;">Picked Rate</th>
                            <td style="font-size: 0.6rem; text-align: right;">Hourly</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;">Payment Method</th>
                            <td style="text-align: right;">
                                <img src="../images/gcash.png" alt="Image Description" style="max-width: 10%; height: auto;">
                            </td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;">Picked Space</th>
                            <td style="font-size: 0.6rem; text-align: right;">M2</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="row mb-2 d-flex flex-column mt-0">
            <div class="col-sm-12 text-center">
                <button type="button" class="btn w-100" data-bs-toggle="modal" data-bs-target="#cancellation"
                    style="background-color: #1363DF; color: white; font-size:0.7rem;">Cancel Arrival</button>
            </div>
        </div>
    </div>

    <div class="container mt-4 py-0 ">
        <div class="row">
            <div class="col-md-6 offset-md-1">
                <div class="vehicles-card">
                    <div class="card-body" style="height: 10px;">
                        <!-- Adjust height as needed -->
                        <div class="row">
                            <div class="col-9 text-start align-items-center px-4">
                                <h6 class="card-titles mt-2 px-0" style="font-size: 0.8rem;">Vehicle 4</h6>
                            </div>
                            <div class="col-3 px-3 d-flex text-end align-items-center mr-0" style="font-size: 0.4rem;">
                                <a href="#" class="view-details">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row px-4 mt-3">
                    <table style="width: 100%;">
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;">Vehicle Owner</th>
                            <td style="font-size: 0.6rem; text-align: right;">(You)</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;">Driver</th>
                            <td style="font-size: 0.6rem; text-align: right;">(You)</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;">Vehicle</th>
                            <td style="font-size: 0.6rem; text-align: right;">Motorcycle</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;">Plate Number</th>
                            <td style="font-size: 0.6rem; text-align: right;">JEFF 123</td>
                        </tr>
                    </table>
                    <hr style="margin: 10px 0;">
                </div>
                
                <div class="row mb-3 px-4">
                    <table style="width: 100%;">
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;">Picked Rate</th>
                            <td style="font-size: 0.6rem; text-align: right;">Hourly</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;">Payment Method</th>
                            <td style="text-align: right;">
                                <img src="../images/gcash.png" alt="Image Description" style="max-width: 10%; height: auto;">
                            </td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;">Picked Space</th>
                            <td style="font-size: 0.6rem; text-align: right;">M2</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="row mb-2 d-flex flex-column mt-0">
            <div class="col-sm-12 text-center">
                <button type="button" class="btn w-100" data-bs-toggle="modal" data-bs-target="#cancellation"
                    style="background-color: #1363DF; color: white; font-size:0.7rem;">Cancel Arrival</button>
            </div>
        </div>
    </div>
    
    <?php
        require_once('../scripts/script.php');
        require_once('../scripts/script.timer.php');
    ?>
</body>
</html>

    


    

    


