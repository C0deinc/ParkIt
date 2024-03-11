<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Space</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <header>

        <div class="gs-get-space pt-5 px-5 pb-4" style="background-color: #06283D; color: aliceblue;">
            <i class="fa-solid fa-arrow-left fa-xl me-4 mt-3"></i>
            <p class="fw-bold fs-5">Get Space</p>
        </div>

    </header>

    <section class="gs-section-one pb-5" style="border-bottom: 1px solid lightgray;">

        <div class="row g-0 px-5">
            <div class="col-sm-12 col-lg-4 d-flex justify-content-center">
                <div class="gs-renter-profile rounded-circle p-1 mt-5">
                    <img src="" alt="" class="img-fluid">
                </div>
            </div>
        </div>

    </section>

    <section class="gs-section-two px-5 pb-3" style="color: #06283D;">
        <p class="fw-bold fs-4 mt-5" id="pickYourSpace">Pick your space</p>
        <div class="dropdown mt-4">
            <button class="btn dropdown-toggle shadow-none" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Floor 1
            </button>
            
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Floor 2</a></li>
                <li><a class="dropdown-item" href="#">Floor 3</a></li>
            </ul>
        </div>

        <div class="ls-motorcycles mt-4 px-3 py-1" style="color: #06283D; cursor: pointer;" onclick="toggleMotorcycleSection()">
            <p class="m-0 fw-bold fs-3">A <span class="fw-normal fst-italic fs-6 ms-1" style="color: lightgray;">For motorcycles</span></p>
        </div>

            <div id="motorcycleSection" style="display: none;">
                <div>
                    <div class="row g-0 mt-4">
                        <div class="col-sm-12 col-lg-6">
                            <div class="row g-0 text-center">
                                <div class="col-6">
                                    <p>Available = 0</p>
                                </div>

                                <div class="col-6">
                                    <p>Occupied = 0</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-lg-6">
                            <div class="row g-0 text-center">
                                <div class="col-6">
                                    <p>Reserved = 0</p>
                                </div>

                                <div class="col-6">
                                    <p>Unavailable = 0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="row g-0 mt-5">
                        <div class="col-sm-12 col-lg-6 d-flex flex-row justify-content-around">
                            <div class="card mb-4 text-center" style="width: 9rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#modalC1">
                                <div class="py-3">
                                    <p class="fw-bold">C1</p>
                                </div>

                                <div class="py-3" style="border-top: 1px solid lightgray;">
                                    <p>Occupied</p>
                                </div>
                            </div>

                            <div class="modal fade" id="modalC1" tabindex="-1" aria-labelledby="modalC1Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalC1Label">C1 Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="d-flex justify-content-between">
                                                <p class="fw-bold">Pick your vehicle</p>
                                                <p class="fw-bold" style="color: #47B5FF;">Not your vehicle?</p>
                                            </div>

                                            <div class="row d-flex justify-content-evenly">
                                                <div class="col-lg-2 mb-3 d-flex justify-content-center align-items-center" style="border: 1px solid #06283D; width: 5rem; height: 4.5rem; border-radius: 0.5rem;">
                                                    <i class="fa-solid fa-motorcycle fa-2xl"></i>
                                                </div>

                                                <div class="col-lg-2 mb-3 d-flex justify-content-center align-items-center" style="border: 1px solid #06283D; width: 5rem; height: 4.5rem; border-radius: 0.5rem;">
                                                    <i class="fa-solid fa-car fa-2xl"></i>
                                                </div>

                                                <div class="col-lg-2 mb-3 d-flex justify-content-center align-items-center" style="border: 1px solid #06283D; width: 5rem; height: 4.5rem; border-radius: 0.5rem;">
                                                    <i class="fa-solid fa-motorcycle fa-2xl"></i>
                                                </div>

                                                <div class="col-lg-2 mb-3 d-flex justify-content-center align-items-center" style="border: 1px solid #06283D; width: 5rem; height: 4.5rem; border-radius: 0.5rem;">
                                                    <i class="fa-solid fa-van-shuttle fa-2xl"></i>
                                                </div>

                                                <div class="col-lg-2 mb-4 d-flex justify-content-center align-items-center" style="border: 1px solid #06283D; width: 5rem; height: 4.5rem; border-radius: 0.5rem;">
                                                    <i class="fa-solid fa-truck fa-2xl"></i>
                                                </div>
                                            </div>

                                            <div class="p-3" style="border: 1px solid lightgray; border-radius: 0.5rem;">
                                                <p>Your motorcycles</p>
                                                <div class="d-flex mb-2">
                                                    <input class="me-3" type="radio"><label for="">JEFF 123</label>
                                                </div>

                                                <div class="d-flex mb-2">
                                                    <input class="me-3" type="radio"><label for="">JEFF 123</label>
                                                </div>

                                                <div class="d-flex mb-2">
                                                    <input class="me-3" type="radio"><label for="">JEFF 123</label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="modal-footer">
                                            <button type="button" class="btn" data-bs-dismiss="modal" style="background-color: #1363DF; color: #DFF6FF">Next <i class="fa-solid fa-arrow-right ms-1"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="newModal" tabindex="-1" aria-labelledby="newModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="newModalLabel">C1 Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <div>
                                                <div class="row g-0" style="border-bottom: 1px solid lightgray;">
                                                    <div class="col-sm-12 col-lg-6 p-4 d-flex flex-row align-items-center justify-content-evenly">
                                                        <div>
                                                            <i class="fa-solid fa-motorcycle fa-2xl"></i>
                                                            <p>Owned</p>
                                                        </div>

                                                        <div>
                                                            <p class="m-0" style="font-size: smaller;">Vehicle</p>
                                                            <p>Motorcycle</p>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12 col-lg-6 p-4 d-flex flex-row align-items-center justify-content-evenly">
                                                        <div>
                                                            <p class="m-0" style="font-size: smaller;">Vehicle Description</p>
                                                            <p class="m-0">Model: <span></span></p>
                                                            <p class="m-0">Engine: <span></span></p>
                                                            <p class="m-0">Transmission: <span></span></p>
                                                        </div>

                                                        <div>
                                                            <p class="m-0" style="font-size: smaller;">Plate Number</p>
                                                            <p>JEFF 123</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <div class="row d-flex flex-column p-3">
                                                    <div class="col-sm-12 col-lg-6">
                                                        <p>Driver</p>
                                                    </div>

                                                    <div class="col-sm-12 col-lg-6 d-flex justify-content-evenly">
                                                        <div class="p-2">
                                                            <input type="radio" class="me-2"><label for="">I'm the driver</label>
                                                        </div>

                                                        <div class="p-2">
                                                            <input type="radio" class="me-2"><label for="">I'm not the driver</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <div class="row d-flex flex-column p-3">
                                                    <div class="col-sm-12 col-lg-6">
                                                        <p>Pick your rate</p>
                                                    </div>

                                                    <div class="col-sm-12 col-lg-6 d-flex justify-content-evenly">
                                                        <div class="p-2">
                                                            <input type="radio" class="me-2"><label for="">₱ 100.00 Hourly</label>
                                                            <p class="m-0 ms-3" style="font-size: 0.6rem; color: darkgray;">30 minutes allowance for arriving</p>
                                                            <p class="m-0 ms-3" style="font-size: 0.6rem; color: darkgray;">With a base rate of ₱50.00</p>
                                                        </div>

                                                        <div class="p-2">
                                                            <input type="radio" class="me-2"><label for="">₱ 100.00 Hourly</label>
                                                            <p class="m-0 ms-3" style="font-size: 0.6rem; color: darkgray;">30 minutes allowance for arriving</p>
                                                            <p class="m-0 ms-3" style="font-size: 0.6rem; color: darkgray;">With a base rate of ₱50.00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div>
                                                <div class="row p-3">
                                                    <div class="col-sm-12 col-lg-6">
                                                        <p>Choose payment method</p>
                                                    </div>

                                                    <div class="col-sm-12 col-lg-6 d-flex flex-row">
                                                        <div class="p-2 me-4">
                                                            <img class="rounded" src="./images/pic6.jpg" alt="" style="width: 5rem; height: 3rem;">
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <i class="fa-solid fa-money-bill me-2"></i>
                                                            <p class="m-0">Cash</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn" data-bs-dismiss="modal" style="background-color: #1363DF; color: #DFF6FF">Next <i class="fa-solid fa-arrow-right ms-1"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="newModal" tabindex="-1" aria-labelledby="newModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="newModalLabel">C1 Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        
                                        <div class="modal-body">
                                            <!-- Content for the third modal goes here -->
                                        </div>

                                        <div class="modal-footer">
                                            <!-- Add any footer buttons or controls here -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4 text-center" style="width: 9rem;">
                                <div class="py-3">
                                    <p class="fw-bold">C1</p>
                                </div>

                                <div style="border-top: 1px solid lightgray;">
                                    <p class="mt-3">Occupied</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-lg-6 d-flex flex-row justify-content-around">
                            <div class="card mb-4 text-center" style="width: 9rem;">

                                <div class="py-3">
                                    <p class="fw-bold">C1</p>
                                </div>
                                
                                <div class="py-3" style="border-top: 1px solid lightgray;">
                                    <p>Occupied</p>
                                </div>
                            </div>

                            <div class="card mb-4 text-center" style="width: 9rem;">
                                <div class="py-3">
                                    <p class="fw-bold">C1</p>
                                </div>

                                <div style="border-top: 1px solid lightgray;">
                                    <p class="mt-3">Occupied</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row g-0 mt-2 text-center">
                        <div class="col-sm-12 col-lg-6 d-flex flex-row justify-content-around">
                            <div class="card mb-4" style="width: 9rem;">

                                <div class="py-3">
                                    <p class="fw-bold">C1</p>
                                </div>

                                <div class="py-3" style="border-top: 1px solid lightgray;">
                                    <p>Occupied</p>
                                </div>
                            </div>

                            <div class="card mb-4" style="width: 9rem;">
                                <div class="py-3">
                                    <p class="fw-bold">C1</p>
                                </div>

                                <div style="border-top: 1px solid lightgray;">
                                    <p class="mt-3">Occupied</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-lg-6 d-flex flex-row justify-content-around">
                            <div class="card mb-4" style="width: 9rem;">

                                <div class="py-3">
                                    <p class="fw-bold">C1</p>
                                </div>

                                <div class="py-3" style="border-top: 1px solid lightgray;">
                                    <p>Occupied</p>
                                </div>
                            </div>

                            <div class="card mb-4" style="width: 9rem;">
                                <div class="py-3">
                                    <p class="fw-bold">C1</p>
                                </div>

                                <div style="border-top: 1px solid lightgray;">
                                    <p class="mt-3">Occupied</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <script>
                function toggleMotorcycleSection() {
                    var motorcycleSection = document.getElementById("motorcycleSection");
                    var isVisible = motorcycleSection.style.display === 'block' || motorcycleSection.style.display === '';

                    if (isVisible) {
                        motorcycleSection.style.display = 'none';
                        localStorage.setItem('motorcycleSectionVisible', 'false');
                    } else {
                        motorcycleSection.style.display = 'block';
                        localStorage.setItem('motorcycleSectionVisible', 'true');
                    }
                }

                document.addEventListener('DOMContentLoaded', function () {
                    var motorcycleSection = document.getElementById("motorcycleSection");
                    var isMotorcycleSectionVisible = localStorage.getItem('motorcycleSectionVisible');

                    if (isMotorcycleSectionVisible === 'true') {
                        motorcycleSection.style.display = 'block';
                    }

                    $('#modalC1').on('hidden.bs.modal', function () {
                        // Close the modal completely when the first modal is hidden
                        $('#modalC1').modal('hide');
                    });

                    // Add event listener to the "Next" button in the first modal
                    $('#modalC1').on('click', '.modal-footer button', function() {
                        // Show the second modal when the "Next" button is clicked
                        $('#newModal').modal('show');
                    });
                });
            </script>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a3bf0b829f.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>