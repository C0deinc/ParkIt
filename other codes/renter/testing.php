<?php
require_once('./include/head.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="custom.css">
    <title>Testing Testing</title>
</head>

<body>
    <div class=" container-sm card border border-0">
        <div class="card-header d-flex ">
            <button type="button" class="btn-close pe-3" aria-label="Close"></button>
            <div class="current_page">Transaction Process</div>
        </div>
        <div class="card-body py-1 px-0">
            <section class="user_data">
                <div class="row border-bottom">
                    <div class="col-2 py-1 px-0">
                        <div class="profile d-flex justify-content-center align-items-center">
                            <img src="/imahe/jau.jpg" class="rounded-circle" alt="" srcset=""
                                style="width: 10vw; height: 4vh;">
                        </div>

                    </div>
                    <div class="col-4 py-1 px-0" style="font-size: 0.4rem;">
                        <div class="row py-1">
                            <label for="Name">Name</label>
                            <span>Harolhette Rom</span>
                        </div>
                        <div class="row py-1">
                            <label for="Email">Email</label>
                            <span>Harolhette@gmail.com</span>
                        </div>


                    </div>
                    <div class="col-3 py-1 px-0" style="font-size: 0.4rem;">
                        <div class="row py-1">
                            <label for="Contact">Contact No.</label>
                            <span>09786667564</span>
                        </div>
                        <div class="row py-1">
                            <label for="age">Age</label>
                            <span>22</span>
                        </div>

                    </div>
                    <div class="col-3 py-1 px-0" style="font-size: 0.4rem;">
                        <div class="row py-1">
                            <label for="birthdate">Birthdate</label>
                            <span>01/22/2003</span>
                        </div>
                        <div class="row py-1">
                            <label for="gender">Gender</label>
                            <span>Cisfemale</span>
                        </div>
                    </div>

                </div>
            </section>
            <section class="receipt px-2 py-3 border-0 shadow-none">
                <div class="card">
                    <div class="row">
                        <div class="col-4 px-0">

                            <div id="carouselExampleSlidesOnly" class="carousel slide" style="height: 10vh;"
                                data-bs-ride="carousel">
                                <div class="carousel-inner rounded">
                                    <div class="carousel-item active">
                                        <img src="/imahe/rent_sample.jpg" class="d-block w-100 h-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/imahe/rent_sample.jpg" class="d-block w-100 h-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/imahe/rent_sample.jpg" class="d-block w-100 h-100" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 px-2">
                            <h6>Mcqueen's Lot</h6>
                            <div class="detail" style="font-size: 0.6rem;">
                                <span><i class="fa fa-map-marker" aria-hidden="true"></i> Purok 2, Gumamela
                                    street</span>
                                <span><span class="fa fa-star checked" style="font-size: 0.5rem;"></span> 1.5k
                                    Reviews</span>
                            </div>
                        </div>
                        <div class="col-2 px-0 d-flex text-center align-items-center" style="font-size: 0.4rem;">
                            <a href="#"> View Details</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ref_detail py-3">
                <div class="ms-2">
                    <h6>Reference code</h6>
                </div>
                <div class="ref d-flex justify-content-evenly justify-content-center align-items-center">
                    <span>Reference Code</span>
                    <span id="text">12345678</span>
                    <button id="copy-text-btn" style="border: none; background: none;"><i class="fa fa-clone"
                            aria-hidden="true"></i></button>
                </div>
            </section>
            <section class="vehicle">
                <form action="POST">
                    <div class="d-flex justify-content-end">
                        <button type="button" style="border: none; background: none;">Pay All</button>
                    </div>
                    <div class=" border rounded p-2 my-3 d-flex justify-content-between">
                        <h3>Vehicle 1</h3>
                        <a href="#">See details</a>
                    </div>
                    <div class="container-sm">
                        <div class="row border-bottom mb-3">
                            <span class="ps-0" style="font-weight: bold;">Base rate</span>
                            <span class="ps-0">Base rate (Not Paid)</span>
                            <table style="width: 100%;">
                                <tr>
                                    <th style="font-size: 0.7rem;">Total Amount</th>
                                    <td>50.00</td>
                                </tr>
                            </table>
                        </div>
                        <div class="row border-bottom mb-3">
                            <span class="ps-0" style="font-weight: bold;">Running Time</span>
                            <table style="width: 100%;">
                                <tr>
                                    <th>Accumulated Time</th>
                                    <td>00:10:18</td>
                                </tr>
                                <tr>
                                    <th style="font-size: 0.7rem;">Total Accumulated Time</th>
                                    <td>00:00:00</td>
                                </tr>
                            </table>
                        </div>
                        <div class="row border-bottom mb-3">
                            <table style="width: 100%;">
                                <tr>
                                    <th>Accumulated Amount</th>
                                    <td>00:00</td>
                                </tr>
                                <tr>
                                    <th style="font-size: 0.7rem;">Total Accumulated Amount</th>
                                    <td>00.00</td>
                                </tr>
                            </table>
                        </div>
                        <div class="row border-bottom mb-3">
                            <table style="width: 100%;">
                                <tr>
                                    <th>Base rate:</th>
                                    <td>00:00</td>
                                </tr>
                                <tr>
                                    <th style="font-size: 1rem;">Total:</th>
                                    <td>00.00</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="pay d-flex justify-content-end">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#payall">
                            <span>Pay Now</span>
                        </button>
                    </div>
                </form>
            </section>



        </div>
    </div>

    <?php
    require_once('./include/footer.php');
    ?>
    <!-- modal -->
    <div class="modal fade" id="payall" data-bs-backdrop="static" tabindex="-1" aria-labelledby="payallmodal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content p-4">
                <div class="modal-header justify-content-center flex-column">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h1 class="modal-title fs-5" id="payallmodal">Pay All</h1>
                </div>
                <div class="Paying section">
                    <div class="table-box mt-4">

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

</body>

</html>