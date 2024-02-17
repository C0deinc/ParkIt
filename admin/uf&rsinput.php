<!DOCTYPE html>
<html lang="en">

<?php
    $title = 'Reports';
    $report_page = 'active';
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
                <!-- User Feedback -->
                <div class="d-flex justify-content-center align-items-center pt-3 text-center">
                    <div class="w-100">
                        <img src="/admin/images/logo1.png" class="img-fluid" alt="User Feedback and Reviews Image">
                    </div>
                </div>

                <!-- Divider -->
                <hr class="my-custom-hr my-4">

                <div class="row justify-content-center">
                    <!-- Left card (Squared) -->
                    <div class="col-md-4">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <h4 class="card-title">Mcqueen's Lot</h4>
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="reviews">4.2 (56 reviews)</span>
                                </div>

                                <div>
                                    <i class="fas fa-map-marker-alt fa-lg"></i>
                                    <span class="ms-2">Purok 2, Gumamela street</span>
                                </div>

                                <div class="note">
                                    <p><em>Not for reservation.</em></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right card (Rectangle) -->
                    <div class="col-md-8">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <h5 class="card-title">Vehicle sizes that can fit:</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul>
                                            <li>Parking Space 1</li>
                                            <li>Parking Space 2</li>
                                            <li>Parking Space 3</li>
                                            <li>Parking Space 4</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li>Parking Space 5</li>
                                            <li>Parking Space 6</li>
                                            <li>Parking Space 7</li>
                                            <li>Parking Space 8</li>
                                        </ul>
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
                                                <img src="/admin/images/photo.png" class="card-img-top rounded-circle" alt="Person's Picture" style="width: 50px; height: 50px;">
                                            </div>
                                            <!-- Column for Other Contents -->
                                            <div class="col-md-9">
                                                <!-- Person's Name -->
                                                <h5 class="card-title mt-0">Charl's Benedick Martell Inoferio</h5>
                                                
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
                                                    <span id="see-more-1" style="cursor: pointer; color: #06283D;">See more</span>
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
                                                <img src="/admin/images/photo.png" class="card-img-top rounded-circle" alt="Person's Picture" style="width: 50px; height: 50px;">
                                            </div>
                                            <!-- Column for Other Contents -->
                                            <div class="col-md-9">
                                                <!-- Person's Name (Modify as needed) -->
                                                <h5 class="card-title mt-0">Janice Celine Chang</h5>
                                                
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
                                                    <span id="see-more-2" style="cursor: pointer; color: #06283D;">See more</span>
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

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    // JavaScript to toggle visibility of additional content for the first card
    document.getElementById("see-more-1").addEventListener("click", function() {
        var additionalContent = document.getElementById("additional-content-1");
        if (additionalContent.style.display === "none") {
            additionalContent.style.display = "block";
            document.getElementById("see-more-1").innerText = "See less";
        } else {
            additionalContent.style.display = "none";
            document.getElementById("see-more-1").innerText = "See more";
        }
    });

    // JavaScript to toggle visibility of additional content for the second card
    document.getElementById("see-more-2").addEventListener("click", function() {
        var additionalContent = document.getElementById("additional-content-2");
        if (additionalContent.style.display === "none") {
            additionalContent.style.display = "block";
            document.getElementById("see-more-2").innerText = "See less";
        } else {
            additionalContent.style.display = "none";
            document.getElementById("see-more-2").innerText = "See more";
        }
    });
</script>

</body>
</html>
