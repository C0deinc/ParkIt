<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Space</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <header>
        <div class="lot-name pt-5 px-5 pb-4" style="background-color: #06283D; color: aliceblue;">
            <i class="fa-solid fa-x fa-xl me-4 mt-3"></i>
            <p class="fw-bold fs-5">Mcqueen’s Lot</p>
        </div>
    </header>

    <section class="ls-section-one pb-5">
        <div class="row g-0 px-5">
            <div class="col-sm-12 col-lg-6 d-flex justify-content-center">
                <div class="ls-space-owner-profile rounded-circle p-1 mt-5">
                    <img src="" alt="" class="img-fluid">
                </div>
            </div>
            <div class="space-owner-info col-sm-12 col-lg-6 d-flex flex-row pt-5">
                <div class="space-owner-name me-5">
                    <p class="mb-1" style="color: gray">Space Owner</p>
                    <p class="fw-bold fs-5" style="color: #06283D;">Makiling</p>
                </div>
                <div class="space-owner-contact">
                    <p class="mb-1" style="color: gray">Contact Number</p>
                    <p class="fw-bold fs-5" style="color: #06283D;">09123456789</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ls-section-two">

    </section>

    <section class="ls-section-three">

    </section>

    <section class="ls-section-four" style="color: #06283D;">
        <div class="p-5">
            <div class="row">
                <p class="fw-bold fs-5">Rates</p>
                <div class="col-sm-12 col-lg-6 pb-4">
                    <div class="ls-hourly p-4">
                        <p>₱ 100.00 <span class="fw-bold">Hourly</span></p>
                        <p class="ls-small-text m-0">30 minutes allowance for arriving</p>
                    </div>
                    <div class="ls-base-rate p-4">
                        <p>₱ 50.00</p>
                        <p class="ls-small-text m-0">Base rate amount</p>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="ls-daily p-4">
                        <p>₱ 150.00 <span class="fw-bold">Daily</span></p>
                        <p class="ls-small-text m-0">30 minutes allowance for arriving</p>
                    </div>
                    <div class="ls-base-rate p-4">
                        <p>₱ 50.00</p>
                        <p class="ls-small-text m-0">Base rate amount</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-6 pt-4">
                    <div class="ls-weekly p-4">
                        <p>₱ 200.00 <span class="fw-bold">Weekly</span></p>
                        <p class="ls-small-text m-0">1 day allowance for arriving</p>
                    </div>
                    <div class="ls-base-rate p-4">
                        <p>₱ 70.00 </p>
                        <p class="ls-small-text m-0">Down payment amount</p>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 pt-4">
                    <div class="ls-monthly p-4">
                        <p>₱ 250.00 <span class="fw-bold">Monthly</span></p>
                        <p class="ls-small-text m-0">2 days allowance for arriving</p>
                    </div>
                    <div class="ls-base-rate p-4">
                        <p>₱ 90.00 </p>
                        <p class="ls-small-text m-0">Down payment amount</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ls-section-five px-5 pb-5" style="color: #06283D;">
        <div class="row g-0">
            <div class="col-sm-12 col-lg-6">
                <p class="fw-bold fs-5">Descriptions</p>
                <div class="py-3 px-4">
                    <ul>
                        <li>WiFi</li>
                        <li>Security Camera</li>
                        <li>Lighting</li>
                        <li>Gate</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <p class="fw-bold fs-5">Payment methods</p>
                <div class="d-flex flex-row px-4 py-3">
                    <div class="me-5">
                        <img src="./images/pic6.jpg" alt="" class="gcash-img rounded">
                    </div>
                    <div class="ls-cash d-flex flex-row justify-content-center align-items-center p-0">
                        <i class="fa-solid fa-wallet fa-2xl me-3"></i>
                        <p class="mb-0 fs-5">Cash</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ls-section-seven px-5 pb-5" style="color: #06283D;">
        <p class="fw-bold fs-5">Parking Spaces</p>
        <div>
            <div class="dropdown pt-4">
                <button class="btn dropdown-toggle shadow-none" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Floor 1
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Floor 2</a></li>
                  <li><a class="dropdown-item" href="#">Floor 3</a></li>
                </ul>
              </div>
        </div>
        <div>
          <div class="ls-motorcycles mt-5 px-3 py-1" style="color: #06283D; cursor: pointer;" onclick="toggleMotorcycleSection()">
              <p class="m-0 fw-bold fs-1">A <span class="fw-normal fst-italic fs-6 ms-1" style="color: lightgray;">For motorcycles</span></p>
          </div>
          <div id="motorcycleContent" style="display: none;">
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
              <div>
                <div class="row g-0 mt-5">
                    <div class="col-sm-12 col-lg-6 d-flex flex-row justify-content-around">
                        <div class="card mb-4 text-center me-4" style="width: 9rem;">
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

                    <div class="col-sm-12 col-lg-6 d-flex flex-row justify-content-around">
                        <div class="card mb-4 text-center me-4" style="width: 9rem;">

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
                        <div class="card mb-4 me-4" style="width: 9rem;">
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
                        <div class="card mb-4 me-4" style="width: 9rem;">
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
        </div>

        <div>
            <div class="ls-tricycles mt-2 px-3 py-1" style="color: #06283D; cursor: pointer;" onclick="toggleTricycleSection()">
                <p class="m-0 fw-bold fs-1">A1 <span class="fw-normal fst-italic fs-6 ms-1" style="color: lightgray;">For tricycles</span></p>
            </div>
            <div id="tricycleContent" style="display: none;">
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
                <div class="row g-0 mt-5">
                    <div class="col-sm-12 col-lg-6 d-flex flex-row justify-content-around">
                        <div class="card mb-4 text-center me-4" style="width: 9rem;">
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

                    <div class="col-sm-12 col-lg-6 d-flex flex-row justify-content-around">
                        <div class="card mb-4 text-center me-4" style="width: 9rem;">

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
                        <div class="card mb-4 me-4" style="width: 9rem;">
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
                        <div class="card mb-4 me-4" style="width: 9rem;">
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
            // Function to toggle motorcycle section visibility
            function toggleMotorcycleSection() {
                var motorcycleContent = document.getElementById("motorcycleContent");
                var isVisible = motorcycleContent.style.display === "block";
                motorcycleContent.style.display = isVisible ? "none" : "block";
                // Store visibility state in localStorage
                localStorage.setItem("motorcycleContentVisible", isVisible ? "false" : "true");
            }

            // Function to toggle tricycle section visibility
            function toggleTricycleSection() {
                var tricycleContent = document.getElementById("tricycleContent");
                var isVisible = tricycleContent.style.display === "block";
                tricycleContent.style.display = isVisible ? "none" : "block";
                // Store visibility state in localStorage
                localStorage.setItem("tricycleContentVisible", isVisible ? "false" : "true");
            }

            // Check localStorage on page load to set initial visibility
            document.addEventListener("DOMContentLoaded", function () {
                var isMotorcycleContentVisible = localStorage.getItem("motorcycleContentVisible");
                if (isMotorcycleContentVisible === "true") {
                    document.getElementById("motorcycleContent").style.display = "block";
                }

                var isTricycleContentVisible = localStorage.getItem("tricycleContentVisible");
                if (isTricycleContentVisible === "true") {
                    document.getElementById("tricycleContent").style.display = "block";
                }
            });
        </script>

    </section>

    
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a3bf0b829f.js"></script>
</body>
</html>