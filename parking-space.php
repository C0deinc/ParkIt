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
        <div class="motorcycles">
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

        <div class="tricycles">
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

        <div class="cars">
            <div class="ls-cars mt-2 px-3 py-1" style="color: #06283D; cursor: pointer;" onclick="toggleCarsSection()">
                <p class="m-0 fw-bold fs-1">B <span class="fw-normal fst-italic fs-6 ms-1" style="color: lightgray;">For cars</span></p>
            </div>
            <div id="carsContent" style="display: none;">
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

        <div class="vans-jeepneys">
            <div class="ls-vj mt-2 px-3 py-1" style="color: #06283D; cursor: pointer;" onclick="toggleVJSection()">
                <p class="m-0 fw-bold fs-1">B1 <span class="fw-normal fst-italic fs-6 ms-1" style="color: lightgray;">For van or jeepney</span></p>
            </div>
            <div id="vjContent" style="display: none;">
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

        <div class="light-commercial-vehicle">
            <div class="ls-vj mt-2 px-3 py-1" style="color: #06283D; cursor: pointer;" onclick="toggleLCVehicleSection()">
                <p class="m-0 fw-bold fs-1">B2 <span class="fw-normal fst-italic fs-6 ms-1" style="color: lightgray;">For light commercial vehicle</span></p>
            </div>
            <div id="lcvehicleContent" style="display: none;">
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

        <div class="heavy-commercial-vehicle">
            <div class="ls-vj mt-2 px-3 py-1" style="color: #06283D; cursor: pointer;" onclick="toggleHCVehicleSection()">
                <p class="m-0 fw-bold fs-1">C <span class="fw-normal fst-italic fs-6 ms-1" style="color: lightgray;">For heavy commercial vehicle</span></p>
            </div>
            <div id="hcvehicleContent" style="display: none;">
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

        <div class="buses">
            <div class="ls-vj mt-2 px-3 py-1" style="color: #06283D; cursor: pointer;" onclick="toggleBusesSection()">
                <p class="m-0 fw-bold fs-1">D <span class="fw-normal fst-italic fs-6 ms-1" style="color: lightgray;">For buses</span></p>
            </div>
            <div id="busesContent" style="display: none;">
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

        <div class="light-articulated-vehicle">
            <div class="ls-vj mt-2 px-3 py-1" style="color: #06283D; cursor: pointer;" onclick="toggleLAVehicleSection()">
                <p class="m-0 fw-bold fs-1">BE <span class="fw-normal fst-italic fs-6 ms-1" style="color: lightgray;">For light articulated vehicle</span></p>
            </div>
            <div id="lavehicleContent" style="display: none;">
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

        <div class="heavy-articulated-vehicle">
            <div class="ls-vj mt-2 px-3 py-1" style="color: #06283D; cursor: pointer;" onclick="toggleHAVehicleSection()">
                <p class="m-0 fw-bold fs-1">CE <span class="fw-normal fst-italic fs-6 ms-1" style="color: lightgray;">For heavy articulated vehicle</span></p>
            </div>
            <div id="havehicleContent" style="display: none;">
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

        <div class="reviews pt-5">
            <p class="fw-bold fs-5">Reviews</p>
            <div class="stars d-flex flex-row">
                <div class="d-flex align-items-center me-4">
                    <p class="fs-1 fw-bold">4.5</p>
                </div>
                <div class="d-flex justify-content-center align-items-center me-2">
                    <i class="fa-solid fa-star fs-4 mb-3" style="color: yellow;"></i>
                    <i class="fa-solid fa-star fs-4 mb-3" style="color: yellow;"></i>
                    <i class="fa-solid fa-star fs-4 mb-3" style="color: lightgray;"></i>
                    <i class="fa-solid fa-star fs-4 mb-3" style="color: lightgray;"></i>
                    <i class="fa-solid fa-star fs-4 mb-3" style="color: lightgray;"></i>
                </div>
                <div class="d-flex align-items-center">
                    <p style="font-size: 0.8rem;">498 reviews</p>
                </div>
            </div>
            <div class="row d-flex flex-row justify-content-evenly">
                <div class="col-sm-12 col-lg-4 d-flex flex-row p-4 mb-3" style="border: 1px solid lightgray; border-radius: 1rem;">
                    <div class="me-4">
                        <img src="./images/bg.jpg" alt="" style="width: 4rem; height: 4rem; border-radius: 3rem;">
                    </div>
                    <div>
                        <p class="fw-bold m-0 mb-1">harolet rom</p>
                        <div class="mb-1">
                            <i class="fa-solid fa-star" style="color: lightgray;"></i>
                            <i class="fa-solid fa-star" style="color: lightgray;"></i>
                            <i class="fa-solid fa-star" style="color: lightgray;"></i>
                            <i class="fa-solid fa-star" style="color: lightgray;"></i>
                            <i class="fa-solid fa-star" style="color: lightgray;"></i>
                        </div>
                        <p style="font-size: 0.8rem; color: gray;">25 - 08 - 2023  |  09:59</p>
                        <p>The parking lot space rental service exceeded my expectations. The process was seamless, and the reserved spot was easily accessible. The rates were... <span class="fw-bold">More</span></p>
                        <p></p>
                        <div class="d-flex flex-row ">
                            <div class="d-flex flex-row me-5">
                                <i class="fa-solid fa-thumbs-up fs-4 me-2"></i>
                                <p>Like</p>
                            </div>
                            <div class="d-flex flex-row">
                                <i class="fa-solid fa-thumbs-down fs-4 me-2" style="color: gray;"></i>
                                <p>Dislike</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 d-flex flex-row p-4 mb-3" style="border: 1px solid lightgray; border-radius: 1rem;">
                    <div class="me-4">
                        <img src="./images/bg.jpg" alt="" style="width: 4rem; height: 4rem; border-radius: 3rem;">
                    </div>
                    <div>
                        <p class="fw-bold m-0 mb-1">harolet rom</p>
                        <div class="mb-1">
                            <i class="fa-solid fa-star" style="color: lightgray;"></i>
                            <i class="fa-solid fa-star" style="color: lightgray;"></i>
                            <i class="fa-solid fa-star" style="color: lightgray;"></i>
                            <i class="fa-solid fa-star" style="color: lightgray;"></i>
                            <i class="fa-solid fa-star" style="color: lightgray;"></i>
                        </div>
                        <p style="font-size: 0.8rem; color: gray;">25 - 08 - 2023  |  09:59</p>
                        <p>The parking lot space rental service exceeded my expectations. The process was seamless, and the reserved spot was easily accessible. The rates were... <span class="fw-bold">More</span></p>
                        <p></p>
                        <div class="d-flex flex-row ">
                            <div class="d-flex flex-row me-5">
                                <i class="fa-solid fa-thumbs-up fs-4 me-2"></i>
                                <p>Like</p>
                            </div>
                            <div class="d-flex flex-row">
                                <i class="fa-solid fa-thumbs-down fs-4 me-2" style="color: gray;"></i>
                                <p>Dislike</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 d-flex flex-row p-4 mb-3" style="border: 1px solid lightgray; border-radius: 1rem;">
                    <div class="me-4">
                        <img src="./images/bg.jpg" alt="" style="width: 4rem; height: 4rem; border-radius: 3rem;">
                    </div>
                    <div>
                        <p class="fw-bold m-0 mb-1">harolet rom</p>
                        <div class="mb-1">
                            <i class="fa-solid fa-star" style="color: lightgray;"></i>
                            <i class="fa-solid fa-star" style="color: lightgray;"></i>
                            <i class="fa-solid fa-star" style="color: lightgray;"></i>
                            <i class="fa-solid fa-star" style="color: lightgray;"></i>
                            <i class="fa-solid fa-star" style="color: lightgray;"></i>
                        </div>
                        <p style="font-size: 0.8rem; color: gray;">25 - 08 - 2023  |  09:59</p>
                        <p>The parking lot space rental service exceeded my expectations. The process was seamless, and the reserved spot was easily accessible. The rates were... <span class="fw-bold">More</span></p>
                        <p></p>
                        <div class="d-flex flex-row ">
                            <div class="d-flex flex-row me-5">
                                <i class="fa-solid fa-thumbs-up fs-4 me-2"></i>
                                <p>Like</p>
                            </div>
                            <div class="d-flex flex-row">
                                <i class="fa-solid fa-thumbs-down fs-4 me-2" style="color: gray;"></i>
                                <p>Dislike</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script>
            function toggleMotorcycleSection() {
                var motorcycleContent = document.getElementById("motorcycleContent");
                var isVisible = motorcycleContent.style.display === "block";
                motorcycleContent.style.display = isVisible ? "none" : "block";

                localStorage.setItem("motorcycleContentVisible", isVisible ? "false" : "true");
            }

            function toggleTricycleSection() {
                var tricycleContent = document.getElementById("tricycleContent");
                var isVisible = tricycleContent.style.display === "block";
                tricycleContent.style.display = isVisible ? "none" : "block";

                localStorage.setItem("tricycleContentVisible", isVisible ? "false" : "true");
            }

            function toggleCarsSection() {
                var carsContent = document.getElementById("carsContent");
                var isVisible = carsContent.style.display === "block";
                carsContent.style.display = isVisible ? "none" : "block";

                localStorage.setItem("carsContentVisible", isVisible ? "false" : "true");
            }

            function toggleVJSection() {
                var vjContent = document.getElementById("vjContent");
                var isVisible = vjContent.style.display === "block";
                vjContent.style.display = isVisible ? "none" : "block";

                localStorage.setItem("vjContentVisible", isVisible ? "false" : "true");
            }

            function toggleLCVehicleSection() {
                var lcvehicleContent = document.getElementById("lcvehicleContent");
                var isVisible = lcvehicleContent.style.display === "block";
                lcvehicleContent.style.display = isVisible ? "none" : "block";

                localStorage.setItem("lcvehicleContentVisible", isVisible ? "false" : "true");
            }

            function toggleHCVehicleSection() {
                var hcvehicleContent = document.getElementById("hcvehicleContent");
                var isVisible = hcvehicleContent.style.display === "block";
                hcvehicleContent.style.display = isVisible ? "none" : "block";

                localStorage.setItem("hcvehicleContentVisible", isVisible ? "false" : "true");
            }

            function toggleBusesSection() {
                var busesContent = document.getElementById("busesContent");
                var isVisible = busesContent.style.display === "block";
                busesContent.style.display = isVisible ? "none" : "block";

                localStorage.setItem("busesContentVisible", isVisible ? "false" : "true");
            }

            function toggleLAVehicleSection() {
                var lavehicleContent = document.getElementById("lavehicleContent");
                var isVisible = lavehicleContent.style.display === "block";
                lavehicleContent.style.display = isVisible ? "none" : "block";

                localStorage.setItem("lavehicleContentVisible", isVisible ? "false" : "true");
            }

            function toggleHAVehicleSection() {
                var havehicleContent = document.getElementById("havehicleContent");
                var isVisible = havehicleContent.style.display === "block";
                havehicleContent.style.display = isVisible ? "none" : "block";

                localStorage.setItem("havehicleContentVisible", isVisible ? "false" : "true");
            }

            document.addEventListener("DOMContentLoaded", function () {
                var isMotorcycleContentVisible = localStorage.getItem("motorcycleContentVisible");
                if (isMotorcycleContentVisible === "true") {
                    document.getElementById("motorcycleContent").style.display = "block";
                }

                var isTricycleContentVisible = localStorage.getItem("tricycleContentVisible");
                if (isTricycleContentVisible === "true") {
                    document.getElementById("tricycleContent").style.display = "block";
                }

                var isCarsContentVisible = localStorage.getItem("carsContentVisible");
                if (isCarsContentVisible === "true") {
                    document.getElementById("carsContent").style.display = "block";
                }

                var isVJContentVisible = localStorage.getItem("vjContentVisible");
                if (isVJContentVisible === "true") {
                    document.getElementById("vjContent").style.display = "block";
                }

                var isLCVehicleContentVisible = localStorage.getItem("lcvehicleContentVisible");
                if (isLCVehicleContentVisible === "true") {
                    document.getElementById("lcvehicleContent").style.display = "block";
                }

                var isHCVehicleContentVisible = localStorage.getItem("hcvehicleContentVisible");
                if (isHCVehicleContentVisible === "true") {
                    document.getElementById("hcvehicleContent").style.display = "block";
                }

                var isBusesContentVisible = localStorage.getItem("busesContentVisible");
                if (isBusesContentVisible === "true") {
                    document.getElementById("busesContent").style.display = "block";
                }

                var isLAVehicleContentVisible = localStorage.getItem("lavehicleContentVisible");
                if (isLAVehicleContentVisible === "true") {
                    document.getElementById("lavehicleContent").style.display = "block";
                }

                var isHAVehicleContentVisible = localStorage.getItem("havehicleContentVisible");
                if (ishAVehicleContentVisible === "true") {
                    document.getElementById("havehicleContent").style.display = "block";
                }
            });
        </script>

    </section>

    
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a3bf0b829f.js"></script>
</body>
</html>