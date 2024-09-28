<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Transaction Process 6';
require_once('../include/head.user.php');
?>

<body>

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
                <div class="col-3 py-0 d-flex text-center align-items-center mr-0" style="font-size: 0.4rem; padding-right:0;">
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
                <span id="text-content" style="color: #06283D; font-weight: bold;">12345678</span>
                <button id="copy-text-btn" style="border: none; background: none;" onclick="copyText()">
                    <i class="fa-regular fa-clone" style="color: #74C0FC;"></i>
                </button>
            </p>
        </div>
    </section>

    <div class="container mt-0 py-0">
        <div class="d-flex justify-content-end">
            <button type="button" data-bs-toggle="modal" data-bs-target="#payall" style="border: none; background: none; color:#D9D9D9; font-weight:bold; font-size:0.6rem;">Pay All</button>
        </div>
    </div>

    <div class="container mt-1 py-0">
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
                <div class="row px-4 mt-2">
                    <h5 class="card-titles mt-1 px-0 mb-2" style="font-size: 0.7rem; text-align: left; font-weight: bold; color: #06283D ">Base Rate</h5>
                    <table style="width: 100%;">
                        <tr>
                        <th style="font-size: 0.6rem; text-align: left; color:#707070;">
                            Base Rate <span style="color: #1363DF;">(Not paid)</span>
                        </th>

                        </tr>
                        <tr>
                            <th style="font-size: 0.5rem; text-align: left; font-weight:lighter;color:#707070;">Total Amount</th>
                            <td style="font-size: 0.6rem; text-align: right; font-weight:bold; color:#707070">&#8369;50.00</td>

                        </tr>
                    </table>
                    <hr>
                    <h5 class="card-titles mt-0 px-0 py-0 mb-2" style="font-size: 0.7rem; text-align: left; font-weight: bold; color: #06283D ">Running Time</h5>
                    <table style="width: 100%;">
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;  color:#707070;">Accumulated Time</th>
                            <td  id="timer" style="font-size: 0.6rem; text-align: right; font-weight:bold; color:#06283D;">00:00:00</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.5rem; text-align: left; font-weight:lighter; color:#707070;">Total Accumulated Time</th>
                            <td  id="timer" style="font-size: 0.5rem; text-align: right; font-weight:bold; color:#707070;">00:00:00</td>
                        </tr>
                    </table>
                <hr style="margin: 5px 0;">
                    <table style="width: 100%;">
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;  color:#707070;">Accumulated Amount</th>
                            <td style="font-size: 0.6rem; text-align: right; font-weight:bold; color:#06283D;">&#8369;50.00</td>

                        </tr>
                        <tr>
                            <th style="font-size: 0.5rem; text-align: left; font-weight:lighter; color:#707070;">Total Accumulated Amount</th>
                            <td style="font-size: 0.5rem; text-align: right; font-weight:bold; color:#707070;">&#8369;50.00</td>

                        </tr>
                    </table>
                <hr style="margin: 5px 0;">
                    <table style="width: 100%;">
                        <tr>
                            <th style="font-size: 0.5rem; text-align: left; color:#707070;">Base Rate</th>
                            <td style="font-size: 0.5rem; text-align: right; font-weight:bold; color:#707070;"> + &#8369;50.00</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;  color:#06283D;">Total</th>
                            <td style="font-size: 0.6rem; text-align: right; font-weight:bold; color:#06283D;">&#8369;50.00</td>

                        </tr>
                    </table>
                </div>
                <div class="row mt-3 ">
                    <div class="col-sm-6 offset-sm-6 text-end"> <!-- Offset to push buttons to the right -->
                        <button type="button" data-bs-toggle="modal" data-bs-target="#pay" class="btn paying me-2">Pay</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 py-0">
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
                <div class="row px-4 mt-2">
                    <h5 class="card-titles mt-1 px-0 mb-2" style="font-size: 0.7rem; text-align: left; font-weight: bold; color: #06283D ">Base Rate</h5>
                    <table style="width: 100%;">
                        <tr>
                        <th style="font-size: 0.6rem; text-align: left; color:#707070;">
                            Base Rate <span style="color: #1363DF;">(Paid)</span>
                        </th>
                        <td style="font-size: 0.6rem; text-align: right; font-weight:bold; color:#707070">
                            <a href="#" class="see-attachment">See Attachment</a>
                        </td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.5rem; text-align: left; font-weight:lighter;color:#707070;">Total Amount</th>
                            <td style="font-size: 0.6rem; text-align: right; font-weight:bold; color:#707070">&#8369;50.00</td>

                        </tr>
                    </table>
                    <hr>
                    <h5 class="card-titles mt-0 px-0 py-0 mb-2" style="font-size: 0.7rem; text-align: left; font-weight: bold; color: #06283D ">Running Time</h5>
                    <table style="width: 100%;">
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;  color:#707070;">Accumulated Time</th>
                            <td  id="timer" style="font-size: 0.6rem; text-align: right; font-weight:bold; color:#06283D;">00:00:00</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.5rem; text-align: left; font-weight:lighter; color:#707070;">Total Accumulated Time</th>
                            <td  id="timer" style="font-size: 0.5rem; text-align: right; font-weight:bold; color:#707070;">00:00:00</td>
                        </tr>
                    </table>
                <hr style="margin: 5px 0;">
                    <table style="width: 100%;">
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;  color:#707070;">Accumulated Amount</th>
                            <td style="font-size: 0.6rem; text-align: right; font-weight:bold; color:#06283D;">&#8369;50.00</td>

                        </tr>
                        <tr>
                            <th style="font-size: 0.5rem; text-align: left; font-weight:lighter; color:#707070;">Total Accumulated Amount</th>
                            <td style="font-size: 0.5rem; text-align: right; font-weight:bold; color:#707070;">&#8369;50.00</td>

                        </tr>
                    </table>
                <hr style="margin: 5px 0;">
                    <table style="width: 100%;">
                        <tr>
                            <th style="font-size: 0.5rem; text-align: left; color:#707070;">Base Rate</th>
                            <td style="font-size: 0.5rem; text-align: right; font-weight:bold; color:#707070;"> + &#8369;50.00</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;  color:#06283D;">Total</th>
                            <td style="font-size: 0.6rem; text-align: right; font-weight:bold; color:#06283D;">&#8369;50.00</td>

                        </tr>
                    </table>
                </div>
                <div class="row mt-3 ">
                    <div class="col-sm-6 offset-sm-6 text-end"> <!-- Offset to push buttons to the right -->
                        <button type="button" data-bs-toggle="modal" data-bs-target="#pay" class="btn paying me-2">Pay</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 py-0">
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
                <div class="row px-4 mt-2">
                    <h5 class="card-titles mt-1 px-0 mb-2" style="font-size: 0.7rem; text-align: left; font-weight: bold; color: #06283D ">Base Rate</h5>
                    <table style="width: 100%;">
                        <tr>
                        <th style="font-size: 0.6rem; text-align: left; color:#707070;">
                            Base Rate <span style="color: #1363DF;">(not paid)</span>
                        </th>

                        </tr>
                        <tr>
                            <th style="font-size: 0.5rem; text-align: left; font-weight:lighter;color:#707070;">Total Amount</th>
                            <td style="font-size: 0.6rem; text-align: right; font-weight:bold; color:#707070">&#8369;50.00</td>

                        </tr>
                    </table>
                    <hr>
                    <h5 class="card-titles mt-0 px-0 py-0 mb-2" style="font-size: 0.7rem; text-align: left; font-weight: bold; color: #06283D ">Running Time</h5>
                    <table style="width: 100%;">
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;  color:#707070;">Accumulated Time</th>
                            <td  id="timer" style="font-size: 0.6rem; text-align: right; font-weight:bold; color:#06283D;">00:00:00</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.5rem; text-align: left; font-weight:lighter; color:#707070;">Total Accumulated Time</th>
                            <td  id="timer" style="font-size: 0.5rem; text-align: right; font-weight:bold; color:#707070;">00:00:00</td>
                        </tr>
                    </table>
                <hr style="margin: 5px 0;">
                    <table style="width: 100%;">
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;  color:#707070;">Accumulated Amount</th>
                            <td style="font-size: 0.6rem; text-align: right; font-weight:bold; color:#06283D;">&#8369;50.00</td>

                        </tr>
                        <tr>
                            <th style="font-size: 0.5rem; text-align: left; font-weight:lighter; color:#707070;">Total Accumulated Amount</th>
                            <td style="font-size: 0.5rem; text-align: right; font-weight:bold; color:#707070;">&#8369;50.00</td>

                        </tr>
                    </table>
                <hr style="margin: 5px 0;">
                    <table style="width: 100%;">
                        <tr>
                            <th style="font-size: 0.5rem; text-align: left; color:#707070;">Base Rate</th>
                            <td style="font-size: 0.5rem; text-align: right; font-weight:bold; color:#707070;"> + &#8369;50.00</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;  color:#06283D;">Total</th>
                            <td style="font-size: 0.6rem; text-align: right; font-weight:bold; color:#06283D;">&#8369;50.00</td>

                        </tr>
                    </table>
                </div>
                <div class="row mt-3 ">
                    <div class="col-sm-6 offset-sm-6 text-end"> <!-- Offset to push buttons to the right -->
                        <button type="button" data-bs-toggle="modal" data-bs-target="#pay" class="btn paying me-2">Pay</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 py-0">
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
                <div class="row px-4 mt-2">
                    <h5 class="card-titles mt-1 px-0 mb-2" style="font-size: 0.7rem; text-align: left; font-weight: bold; color: #06283D ">Base Rate</h5>
                    <table style="width: 100%;">
                        <tr>
                        <th style="font-size: 0.6rem; text-align: left; color:#707070;">
                            Base Rate <span style="color: #1363DF;">(Paid)</span>
                        </th>
                        <td style="font-size: 0.6rem; text-align: right; font-weight:bold; color:#707070">
                            <a href="#" class="see-attachment">See Attachment</a>
                        </td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.5rem; text-align: left; font-weight:lighter;color:#707070;">Total Amount</th>
                            <td style="font-size: 0.6rem; text-align: right; font-weight:bold; color:#707070">&#8369;50.00</td>

                        </tr>
                    </table>
                    <hr>
                    <h5 class="card-titles mt-0 px-0 py-0 mb-2" style="font-size: 0.7rem; text-align: left; font-weight: bold; color: #06283D ">Running Time</h5>
                    <table style="width: 100%;">
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;  color:#707070;">Accumulated Time</th>
                            <td  id="timer" style="font-size: 0.6rem; text-align: right; font-weight:bold; color:#06283D;">00:00:00</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.5rem; text-align: left; font-weight:lighter; color:#707070;">Total Accumulated Time</th>
                            <td  id="timer" style="font-size: 0.5rem; text-align: right; font-weight:bold; color:#707070;">00:00:00</td>
                        </tr>
                    </table>
                <hr style="margin: 5px 0;">
                    <table style="width: 100%;">
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;  color:#707070;">Accumulated Amount</th>
                            <td style="font-size: 0.6rem; text-align: right; font-weight:bold; color:#06283D;">&#8369;50.00</td>

                        </tr>
                        <tr>
                            <th style="font-size: 0.5rem; text-align: left; font-weight:lighter; color:#707070;">Total Accumulated Amount</th>
                            <td style="font-size: 0.5rem; text-align: right; font-weight:bold; color:#707070;">&#8369;50.00</td>

                        </tr>
                    </table>
                <hr style="margin: 5px 0;">
                    <table style="width: 100%;">
                        <tr>
                            <th style="font-size: 0.5rem; text-align: left; color:#707070;">Base Rate</th>
                            <td style="font-size: 0.5rem; text-align: right; font-weight:bold; color:#707070;"> + &#8369;50.00</td>
                        </tr>
                        <tr>
                            <th style="font-size: 0.6rem; text-align: left;  color:#06283D;">Total</th>
                            <td style="font-size: 0.6rem; text-align: right; font-weight:bold; color:#06283D;">&#8369;50.00</td>

                        </tr>
                    </table>
                </div>
                <div class="row mt-3 ">
                    <div class="col-sm-6 offset-sm-6 text-end"> <!-- Offset to push buttons to the right -->
                        <button type="button" data-bs-toggle="modal" data-bs-target="#pay" class="btn paying me-2">Pay</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        require_once('../scripts/script.php');
        require_once('../scripts/script.timer.php');
    ?>
</body>
</html>
