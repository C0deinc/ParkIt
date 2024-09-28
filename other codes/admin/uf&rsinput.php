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
                <!-- User Feedback -->
                <div class="d-flex justify-content-center align-items-center pt-3 text-center">
                    <div class="w-100">
                        <img src="../images/logo1.png" class="img-fluid" alt="User Feedback and Reviews Image">
                    </div>
                </div>

                <!-- Divider -->
                <hr class="my-custom-hr my-4">

                <div class="row justify-content-center">
                    <!-- Left card (Squared) -->
                    <div class="col-md-4">
                        <div class="card shadow-lg" style="height: 177px;"> <!-- Adjust the height value as needed -->
                            <div class="card-body"  style="margin-left: 15px; font-weight:bold;">
                                <h3 class="card-title" style="font-weight: bold;">Mcqueen's Lot</h3>
                                <div class="stars mt-2">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="reviews">4.2 (56 reviews)</span>
                                </div>

                                <div class="street-mark mt-2">
                                    <i class="fas fa-map-marker-alt fa-lg"></i>
                                    <span class="ms-2">Purok 2, Gumamela street</span>
                                </div>

                                <div class="note mt-2">
                                    <p><em>Not for reservation.</em></p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Right card (Rectangle) -->
                    <div class="col-md-8">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <h5 class="card-title" style="margin-left: 15px;">Vehicle sizes that can fit:</h5>
                                <div class="row" style="margin-left: 10px;">
                                    <div class="col-4">
                                        <!-- left side -->
                                        <table style="width:100%">
                                        <tr>
                                                <th>A -</th>
                                                <td>Motorcycles</td>
                                            </tr>
                                            <tr>
                                                <th>A1 -</th>
                                                <td>Tricycles</td>
                                            </tr>
                                            <tr>
                                                <th>B -</th>
                                                <td>Car</td>
                                            </tr>
                                            <tr>
                                                <th>B1 -</th>
                                                <td>Van</td>
                                            </tr>
                                            <tr>
                                                <th>D -</th>
                                                <td>Bus</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-7">
                                        <!-- right side -->
                                        <table style="width:100%">
                                            <tr>
                                                <th>B2 -</th>
                                                <td>Light Commercial Vehicle</td>
                                            </tr>
                                            <tr>
                                                <th>C -</th>
                                                <td>Heavy Commercial Vehicle</td>
                                            </tr>
                                            <tr>
                                                <th>BE -</th>
                                                <td>Light Articulated Vehicle</td>
                                            </tr>
                                            <tr>
                                                <th>CE -</th>
                                                <td>Heavy Articulated Vehicle</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="card shadow-lg mt-3">
                            <div class="card-body">
                                <!-- First Card -->
                                <div class="card shadow-lg mt-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- Column for Person's Picture -->
                                            <div class="col-md-1">
                                                <img src="../images/photo.png" class="card-img-top rounded-circle" alt="Person's Picture" style="width: 50px; height: 50px;">
                                            </div>
                                            <!-- Column for Other Contents -->
                                            <div class="col-md-9">
                                                <!-- Person's Name -->
                                                <h5 class="card-title mt-0" style="font-weight: bold;">Charl's Benedick Martell Inoferio</h5>
                                                
                                                <!-- Rating Stars and Rated Date/Time -->
                                                <div class="d-flex align-items-center">
                                                    <!-- Rating Stars -->
                                                    <div class="rating">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    
                                                    <!-- Day/Time After Being Rated -->
                                                    <p class="card-text ml-3"> 2 days ago</p>
                                                </div>
                                                
                                                <!-- Comment -->
                                                <p class="card-text">
                                                    The parking lot space rental service exceeded my expectations...  
                                                    <span id="see-more-1" style="cursor: pointer; color: #707070; font-weight: bold;">See More</span>
                                                </p>
                                                
                                                <!-- Hidden Content (Initially Hidden) -->
                                                <div id="additional-content-1" style="display: none;">
                                                    <!-- Expanded Comment -->
                                                    <p class="card-text">
                                                        The parking lot space rental service exceeded my expectations. The staff were courteous, and the facilities were well-maintained. I highly recommend this service to anyone looking for reliable parking solutions.
                                                    </p>
                                                </div>

                                                <!-- Like and Dislike Buttons -->
                                                <div class="mt-3">
                                                    <i class="fas fa-thumbs-up"></i> <span>10</span>
                                                    <i class="fas fa-thumbs-down ms-3"></i> <span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Second Card (Added) -->
                                <div class="card shadow-lg mt-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- Column for Person's Picture (Adjust as needed) -->
                                            <div class="col-md-1">
                                                <img src="../images/photo.png" class="card-img-top rounded-circle" alt="Person's Picture" style="width: 50px; height: 50px;">
                                            </div>
                                            <!-- Column for Other Contents -->
                                            <div class="col-md-9">
                                                <!-- Person's Name (Modify as needed) -->
                                                <h5 class="card-title mt-0" style="font-weight: bold;">Janice Celine Chang</h5>
                                                
                                                <!-- Rating Stars and Rated Date/Time (Modify as needed) -->
                                                <div class="d-flex align-items-center">
                                                    <!-- Rating Stars (Modify as needed) -->
                                                    <div class="rating">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    
                                                    <!-- Day/Time After Being Rated (Modify as needed) -->
                                                    <p class="card-text ml-3"> 12 days ago</p>
                                                </div>
                                                
                                                <!-- Comment (Modify as needed) -->
                                                <p class="card-text">
                                                    Another comment goes here...  
                                                    <span id="see-more-2" style="cursor: pointer; color: #707070; font-weight: bold;">See more</span>
                                                </p>
                                                
                                                <!-- Hidden Content (Initially Hidden) (Modify as needed) -->
                                                <div id="additional-content-2" style="display: none;">
                                                    <!-- Expanded Comment (Modify as needed) -->
                                                    <p class="card-text">
                                                        Expanded comment for the second card goes here.
                                                    </p>
                                                </div>

                                                <!-- Like and Dislike Buttons (Modify as needed) -->
                                                <div class="mt-3">
                                                    <i class="fas fa-thumbs-up"></i> <span>5</span>
                                                    <i class="fas fa-thumbs-down ms-3"></i> <span></span>
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
                                <a href="uf&rs.php" class="btn btn-primary" id="return-btn"><i class="fa fa-arrow-left" aria-hidden="true"></i> Return</a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <?php
        require_once('../include/js.php');
        require_once('../scripts/script.input.php');
        require_once('../scripts/script.php');
        ?>
</body>
</html>
