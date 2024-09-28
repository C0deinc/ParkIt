<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Rent3';
require_once('../include/head.user.php');
?>

<body>

    <div class="container sm">
        <div class="row border-bottom py-0 mb-0">
            <div class="col">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h1 class="close">Get Space</h1>
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

    <div class="text-center mt-3">
        <h6 class="details" style="font-weight: bold;">Review Details</h6>
    </div>

      <!--- VEHICLE 1  --->

    <div class="container mt-3 py-0">
        <div class="row">
            <div class="col-md-6 offset-md-1">
                <div class="vehicle-card">
                    <div class="card-body" style="height: 10px;">
                        <!-- Adjust height as needed -->
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h6 class="card-title mt-1" style="font-weight: bold;">Vehicle 1</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-1">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <div class="profile d-flex flex-column align-items-center justify-content-center"
                                    style="font-size: 1.2rem;">
                                    <i class="fas fa-motorcycle"></i>
                                    <label for="vehicle" style="margin-top: 5px; font-size: 0.5rem;">Owned</label>
                                </div>
                            </div>
                            <div class="col-6" style="font-size: 0.5rem;">
                                <div class="row">
                                    <label for="vehicle">Vehicle</label>
                                    <p style="font-weight: bold; color: #06283D;">Motorcycle</p>
                                </div>
                                <div class="row">
                                    <label for="description">Vehicle Description</label>
                                    <p style="font-weight: bold; color: #06283D;">color, pink, scooter, honda</p>
                                </div>
                            </div>
                            <div class="col-4" style="font-size: 0.5rem;">
                                <div class="row">
                                    <label for="platenum">Plate Number</label>
                                    <p style="font-weight: bold; color: #06283D;">JEF 123</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-1">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="col-7" style="font-size: 0.5rem;">
                            <div class="row">
                                <label for="vehicle" style="font-size: 0.9rem; font-weight: bold; color: #06283D;">Picked rate</label>
                            </div>
                            <div class="row mt-2">
                                <label for="time" style="font-size: 0.7rem; font-weight: bold; color: #06283D;">Hourly</label>
                                <div class="note">
                                    <p>30 minutes allowance for arriving <br>
                                    Includes base rate <strong>₱50.00</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mt-5" style="font-size: 0.7rem; font-weight: bold; color: #06283D; text-align: right;">
                            <div class="row">
                                <p>₱100.00</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-1">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="col-7" style="font-size: 0.5rem;">
                            <div class="row">
                                <label for="payment-method" style="font-size: 0.9rem; font-weight: bold; color: #06283D;">Payment Method</label>
                                <img src="../images/gcash.png" alt="GCASH Logo" style="width: 90px; height: 50px;">
                            </div>
                        </div>
                    </div>
                </div>
           
                <div class="card mt-1">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="col-7" style="font-size: 0.5rem;">
                            <div class="row">
                                <label for="payment-method" style="font-size: 0.9rem; font-weight: bold; color: #06283D;">Payment Method</label>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--- VEHICLE 2 --->
    <div class="container mt-3 py-0">
        <div class="row">
            <div class="col-md-6 offset-md-1">
                <div class="vehicle-card">
                    <div class="card-body" style="height: 10px;">
                        <!-- Adjust height as needed -->
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h6 class="card-title mt-1" style="font-weight: bold;">Vehicle 2</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-1">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <div class="profile d-flex flex-column align-items-center justify-content-center"
                                    style="font-size: 1.2rem;">
                                    <i class="fas fa-motorcycle"></i>
                                    <label for="vehicle" style="margin-top: 5px; font-size: 0.5rem;"></label>
                                </div>
                            </div>
                            <div class="col-6" style="font-size: 0.5rem;">
                                <div class="row">
                                    <label for="vehicle">Vehicle</label>
                                    <p style="font-weight: bold; color: #06283D;">Motorcycle</p>
                                </div>
                                <div class="row">
                                    <label for="description">Vehicle Description</label>
                                    <p style="font-weight: bold; color: #06283D;">color, pink, scooter, honda</p>
                                </div>
                            </div>
                            <div class="col-4" style="font-size: 0.5rem;">
                                <div class="row">
                                    <label for="platenum">Plate Number</label>
                                    <p style="font-weight: bold; color: #06283D;">JEF 123</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-1">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <div class="profile d-flex flex-column align-items-center justify-content-center"
                                    style="font-size: 1.2rem;">
                                    <i class="fa-regular fa-user"></i>
                                    <label for="vehicle" style="margin-top: 5px; font-size: 0.5rem;">Owned</label>
                                </div>
                            </div>
                            <div class="col-5" style="font-size: 0.5rem;">
                                <div class="row">
                                    <label for="vehicle">Vehicle Owner's Name</label>
                                    <p style="font-weight: bold; color: #06283D;">Marikit Bia</p>
                                </div>
                                <div class="row">
                                    <label for="age">Age</label>
                                    <p style="font-weight: bold; color: #06283D;">25 yrs. old</p>
                                </div>
                            </div>
                            <div class="col-5" style="font-size: 0.5rem;">
                                <div class="row">
                                    <label for="contactnum">Contact Number</label>
                                    <p style="font-weight: bold; color: #06283D;">+63094028598</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-1">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="col-7" style="font-size: 0.5rem;">
                            <div class="row">
                                <label for="vehicle" style="font-size: 0.9rem; font-weight: bold; color: #06283D;">Picked rate</label>
                            </div>
                            <div class="row mt-2">
                                <label for="time" style="font-size: 0.7rem; font-weight: bold; color: #06283D;">Hourly</label>
                                <div class="note">
                                    <p>30 minutes allowance for arriving <br>
                                    Includes base rate <strong>₱50.00</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mt-5" style="font-size: 0.7rem; font-weight: bold; color: #06283D; text-align: right;">
                            <div class="row">
                                <p>₱100.00</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-1">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="col-7" style="font-size: 0.5rem;">
                            <div class="row">
                                <label for="payment-method" style="font-size: 0.9rem; font-weight: bold; color: #06283D;">Payment Method</label>
                                <img src="../images/gcash.png" alt="GCASH Logo" style="width: 90px; height: 50px;">
                            </div>
                        </div>
                    </div>
                </div>
           
                <div class="card mt-1">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="col-7" style="font-size: 0.5rem;">
                            <div class="row">
                                <label for="payment-method" style="font-size: 0.9rem; font-weight: bold; color: #06283D;">Payment Method</label>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--- VEHICLE 3 --->
    <div class="container mt-3 py-0">
        <div class="row">
            <div class="col-md-6 offset-md-1">
                <div class="vehicle-card">
                    <div class="card-body" style="height: 10px;">
                        <!-- Adjust height as needed -->
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h6 class="card-title mt-1" style="font-weight: bold;">Vehicle 3</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-1">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <div class="profile d-flex flex-column align-items-center justify-content-center"
                                    style="font-size: 1.2rem;">
                                    <i class="fas fa-motorcycle"></i>
                                    <label for="vehicle" style="margin-top: 5px; font-size: 0.5rem;"></label>
                                </div>
                            </div>
                            <div class="col-6" style="font-size: 0.5rem;">
                                <div class="row">
                                    <label for="vehicle">Vehicle</label>
                                    <p style="font-weight: bold; color: #06283D;">Motorcycle</p>
                                </div>
                                <div class="row">
                                    <label for="description">Vehicle Description</label>
                                    <p style="font-weight: bold; color: #06283D;">color, pink, scooter, honda</p>
                                </div>
                            </div>
                            <div class="col-4" style="font-size: 0.5rem;">
                                <div class="row">
                                    <label for="platenum">Plate Number</label>
                                    <p style="font-weight: bold; color: #06283D;">JEF 123</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-1">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <div class="profile d-flex flex-column align-items-center justify-content-center"
                                    style="font-size: 1.2rem;">
                                    <i class="fa-regular fa-user"></i>
                                    <label for="vehicle" style="margin-top: 5px; font-size: 0.5rem;">Owned</label>
                                </div>
                            </div>
                            <div class="col-5" style="font-size: 0.5rem;">
                                <div class="row">
                                    <label for="vehicle">Vehicle Owner's Name</label>
                                    <p style="font-weight: bold; color: #06283D;">Marikit Bia</p>
                                </div>
                                <div class="row">
                                    <label for="age">Age</label>
                                    <p style="font-weight: bold; color: #06283D;">25 yrs. old</p>
                                </div>
                            </div>
                            <div class="col-5" style="font-size: 0.5rem;">
                                <div class="row">
                                    <label for="contactnum">Contact Number</label>
                                    <p style="font-weight: bold; color: #06283D;">+63094028598</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-1">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <div class="profile d-flex flex-column align-items-center justify-content-center"
                                    style="font-size: 1.2rem;">
                                    <i class="fas fa-car"></i>
                                    <label for="vehicle" style="margin-top: 5px; font-size: 0.5rem;">Driver</label>
                                </div>
                            </div>
                            <div class="col-3 py-0 px-0" style="font-size: 0.5rem;">
                                <div class="row">
                                    <label for="vehicle">Driver's Name</label>
                                    <p style="font-weight: bold; color: #06283D;">Juan Tamad</p>
                                </div>
                            </div>
                            <div class="col-4" style="font-size: 0.5rem; padding-left: 2px;">
                                <div class="row">
                                    <label for="contactnum">Contact Number</label>
                                    <p style="font-weight: bold; color: #06283D;">+630940285980</p>
                                </div>
                            </div>
                            <div class="col-3" style="font-size: 0.5rem;">
                                <div class="row">
                                    <label for="age">Age</label>
                                    <p style="font-weight: bold; color: #06283D;">25 yrs. old</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-1">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="col-7" style="font-size: 0.5rem;">
                            <div class="row">
                                <label for="vehicle" style="font-size: 0.9rem; font-weight: bold; color: #06283D;">Picked rate</label>
                            </div>
                            <div class="row mt-2">
                                <label for="time" style="font-size: 0.7rem; font-weight: bold; color: #06283D;">Hourly</label>
                                <div class="note">
                                    <p>30 minutes allowance for arriving <br>
                                    Includes base rate <strong>₱50.00</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mt-5" style="font-size: 0.7rem; font-weight: bold; color: #06283D; text-align: right;">
                            <div class="row">
                                <p>₱100.00</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-1">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="col-7" style="font-size: 0.5rem;">
                            <div class="row">
                                <label for="payment-method" style="font-size: 0.9rem; font-weight: bold; color: #06283D;">Payment Method</label>
                                <img src="../images/gcash.png" alt="GCASH Logo" style="width: 90px; height: 50px;">
                            </div>
                        </div>
                    </div>
                </div>
           
                <div class="card mt-1">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="col-7" style="font-size: 0.5rem;">
                            <div class="row">
                                <label for="payment-method" style="font-size: 0.9rem; font-weight: bold; color: #06283D;">Payment Method</label>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!--- VEHICLE 4 --->
    <div class="container mt-3 py-0">
        <div class="row">
            <div class="col-md-6 offset-md-1">
                <div class="vehicle-card">
                    <div class="card-body" style="height: 10px;">
                        <!-- Adjust height as needed -->
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h6 class="card-title mt-1" style="font-weight: bold;">Vehicle 4</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-1">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <div class="profile d-flex flex-column align-items-center justify-content-center"
                                    style="font-size: 1.2rem;">
                                    <i class="fas fa-motorcycle"></i>
                                    <label for="vehicle" style="margin-top: 5px; font-size: 0.5rem;">Owned</label>
                                </div>
                            </div>
                            <div class="col-6" style="font-size: 0.5rem;">
                                <div class="row">
                                    <label for="vehicle">Vehicle</label>
                                    <p style="font-weight: bold; color: #06283D;">Motorcycle</p>
                                </div>
                                <div class="row">
                                    <label for="description">Vehicle Description</label>
                                    <p style="font-weight: bold; color: #06283D;">color, pink, scooter, honda</p>
                                </div>
                            </div>
                            <div class="col-4" style="font-size: 0.5rem;">
                                <div class="row">
                                    <label for="platenum">Plate Number</label>
                                    <p style="font-weight: bold; color: #06283D;">JEF 123</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card mt-1">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <div class="profile d-flex flex-column align-items-center justify-content-center"
                                    style="font-size: 1.2rem;">
                                    <i class="fas fa-car"></i>
                                    <label for="vehicle" style="margin-top: 5px; font-size: 0.5rem;">Driver</label>
                                </div>
                            </div>
                            <div class="col-3 py-0 px-0" style="font-size: 0.5rem;">
                                <div class="row">
                                    <label for="vehicle">Driver's Name</label>
                                    <p style="font-weight: bold; color: #06283D;">Juan Tamad</p>
                                </div>
                            </div>
                            <div class="col-4" style="font-size: 0.5rem; padding-left: 2px;">
                                <div class="row">
                                    <label for="contactnum">Contact Number</label>
                                    <p style="font-weight: bold; color: #06283D;">+630940285980</p>
                                </div>
                            </div>
                            <div class="col-3" style="font-size: 0.5rem;">
                                <div class="row">
                                    <label for="age">Age</label>
                                    <p style="font-weight: bold; color: #06283D;">25 yrs. old</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-1">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="col-7" style="font-size: 0.5rem;">
                            <div class="row">
                                <label for="vehicle" style="font-size: 0.9rem; font-weight: bold; color: #06283D;">Picked rate</label>
                            </div>
                            <div class="row mt-2">
                                <label for="time" style="font-size: 0.7rem; font-weight: bold; color: #06283D;">Hourly</label>
                                <div class="note">
                                    <p>30 minutes allowance for arriving <br>
                                    Includes base rate <strong>₱50.00</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mt-5" style="font-size: 0.7rem; font-weight: bold; color: #06283D; text-align: right;">
                            <div class="row">
                                <p>₱100.00</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-1">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="col-7" style="font-size: 0.5rem;">
                            <div class="row">
                                <label for="payment-method" style="font-size: 0.9rem; font-weight: bold; color: #06283D;">Payment Method</label>
                                <img src="../images/gcash.png" alt="GCASH Logo" style="width: 90px; height: 50px;">
                            </div>
                        </div>
                    </div>
                </div>
           
                <div class="card mt-1">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="col-7" style="font-size: 0.5rem;">
                            <div class="row">
                                <label for="payment-method" style="font-size: 0.9rem; font-weight: bold; color: #06283D;">Payment Method</label>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Back button aligned left -->
                <a href="#" class="btn" style="font-size: 0.7rem; border: 1px solid #000;">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>
            <div class="col text-end">
                <!-- Process button aligned right -->
                <a href="tranpro1.php" class="btn" style="font-size: 0.7rem; background-color: #06283D; color: white;">
                    Process <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

<!---Footer--->


</body>
</html>