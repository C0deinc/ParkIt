<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Add Space';
    $dashboard_page = 'active';
    require_once('./include/head.php');
?>
<body>
  <div class="w-100 h-100 d-flex flex-column">
    <!-- Top Bar -->
    <div class="w-100" style="min-height: 64px; background-color: #06283D;"></div>
    <div class="w-100 bg-info" style="min-height: 48px;"></div>
    <div class="w-100 flex-shrink-1 d-flex flex-column">
      <div class="w-100 bg-white p-2 d-flex align-items-center" style="height: 48px; filter: drop-shadow(0px 1px 3px #a6a6a6);">
        <p class="m-0 ms-2 fw-bold" style="font-size: 14px">My Space</p>
      </div>

      <form class="d-flex flex-column gap-2 w-100 h-100 flex-shrink-1 bg-white py-3 px-3" method="POST" action="./modules/createspace.php" enctype="multipart/form-data">
        <input hidden name="a_totalSpace" id="a_totalSpace">
        <input hidden name="a1_totalSpace" id="a1_totalSpace">
        <input hidden name="b_totalSpace" id="b_totalSpace">
        <input hidden name="b1_totalSpace" id="b1_totalSpace">
        <input hidden name="c_totalSpace" id="c_totalSpace">
        <input hidden name="c1_totalSpace" id="c1_totalSpace">
        <input hidden name="d_totalSpace" id="d_totalSpace">
        <input hidden name="d1_totalSpace" id="d1_totalSpace">
        <input hidden name="e_totalSpace" id="e_totalSpace">

        <?php
        if (isset($_GET["action"]) && $_GET["action"] == "success") {
          // Output JavaScript code to show the toast
          echo "<div class='alert alert-success' role='alert'>
          Space successfully added!
        </div>";
        }
        ?>
        <p class="mb-2 fw-bold" style="font-size: 14px">Add New Space</p>

        <div class="w-100 mb-1">
          <label for="spaceName" class="form-label m-0" style="font-size: 12px">Enter space name</label>
          <input type="text" class="form-control" name="spaceName" id="spaceName" placeholder="Space Name" style="font-size: 10px">
        </div>

        <div class="w-100 mb-1">
          <label for="location" class="form-label m-0" style="font-size: 12px">Enter your location</label>
          <input type="text" class="form-control" name="location" id="location" placeholder="Location" style="font-size: 10px" required>
        </div>

        <div class="w-100 mb-1">
          <p class="text-default">Enter the dimension of your space</p>
          <div class="d-flex flex-row gap-2">
            <div class="w-50 flex-shrink-1">
              <label for="width" class="form-label m-0 text-default text-secondary">Width</label>
              <input type="number" min="1" class="form-control" name="width" id="width" placeholder="Meter" style="font-size: 10px" oninput="updateSpaceSlot()" required>
            </div>

            <div class="w-50 flex-shrink-1">
              <label for="length" class="form-label m-0 text-default text-secondary">Length</label>
              <input type="number" min="1" class="form-control" name="length" id="length" placeholder="Meter" style="font-size: 10px" oninput="updateSpaceSlot()" required>
            </div>
          </div>
        </div>

        <div class="w-100 mb-1">
          <p class="text-default">Choose the available spaces you want to display</p>

          <div class="form-check d-flex gap-2 w-100">
            <input class="form-check-input" type="checkbox" value="A" id="a_check" name="spaces[]" onchange="updateDivColor('a_check', 'a_accordion')">
            <div class="w-100 flex-shrink-1">
              <div class="accordion" id="motorcycleParent">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button id="a_accordion" style="background-color: white; position:relative" class="accordion-button px-3 py-2" type="button" data-bs-toggle="collapse" data-bs-target="#motorcycle" aria-expanded="true" aria-controls="motorcycle">
                      <p class="m-0 text-sm" style="color: #06283D;">A - For Motorcycle</p>
                      <p class="m-0 text-sm me-3" style="color: #06283D; position: absolute; right: 0; z-index: 10" id="motorcycleSpace">Total Spaces: 0</p>
                    </button>
                  </h2>
                  <div id="motorcycle" class="accordion-collapse collapse" data-bs-parent="#motorcycleParent">
                    <div class="accordion-body">
                      <div class="scrollable-grid d-flex flex-column gap-3 pb-3" id="motorcycleSpacesContainer">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-check d-flex gap-2 w-100">
            <input class="form-check-input" type="checkbox" value="A1" id="a1_check" name="spaces[]" onchange="updateDivColor('a1_check', 'a1_accordion')">
            <div class="w-100 flex-shrink-1">
              <div class="accordion" id="tricyclesParent">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button id="a1_accordion" style="background-color: white; position:relative" class="accordion-button px-3 py-2" type="button" data-bs-toggle="collapse" data-bs-target="#tricycle" aria-expanded="true" aria-controls="tricycle">
                      <p class="m-0 text-sm" style="color: #06283D;">A1 - For Tricycles</p>
                      <p class="m-0 text-sm me-3" style="color: #06283D; position: absolute; right: 0; z-index: 10" id="tricycleSpace">Total Spaces: 0</p>
                    </button>
                  </h2>
                  <div id="tricycle" class="accordion-collapse collapse" data-bs-parent="#tricyclesParent">
                    <div class="accordion-body">
                      <div class="scrollable-grid d-flex flex-column gap-3 pb-3" id="tricycleSpacesContainer">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-check d-flex gap-2 w-100">
            <input class="form-check-input" type="checkbox" value="B" id="b_check" name="spaces[]" onchange="updateDivColor('b_check', 'b_accordion')">
            <div class="w-100 flex-shrink-1">
              <div class="accordion" id="carsParent">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button id="b_accordion" style="background-color: white; position:relative" class="accordion-button px-3 py-2" type="button" data-bs-toggle="collapse" data-bs-target="#cars" aria-expanded="true" aria-controls="cars">
                      <p class="m-0 text-sm" style="color: #06283D;">B - For Cars</p>
                      <p class="m-0 text-sm me-3" style="color: #06283D; position: absolute; right: 0; z-index: 10" id="carsSpace">Total Spaces: 0</p>
                    </button>
                  </h2>
                  <div id="cars" class="accordion-collapse collapse" data-bs-parent="#carsParent">
                    <div class="accordion-body">
                      <div class="scrollable-grid d-flex flex-column gap-3 pb-3" id="carsSpacesContainer">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-check d-flex gap-2 w-100">
            <input class="form-check-input" type="checkbox" value="B1" id="b1_check" name="spaces[]" onchange="updateDivColor('b1_check', 'b1_accordion')">
            <div class="w-100 flex-shrink-1">
              <div class="accordion" id="vansParent">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button id="b1_accordion" style="background-color: white; position:relative" class="accordion-button px-3 py-2" type="button" data-bs-toggle="collapse" data-bs-target="#vans" aria-expanded="true" aria-controls="vans">
                      <p class="m-0 text-sm" style="color: #06283D;">B1 - For Vans</p>
                      <p class="m-0 text-sm me-3" style="color: #06283D; position: absolute; right: 0; z-index: 10" id="vansSpace">Total Spaces: 0</p>
                    </button>
                  </h2>
                  <div id="vans" class="accordion-collapse collapse" data-bs-parent="#vansParent">
                    <div class="accordion-body">
                      <div class="scrollable-grid d-flex flex-column gap-3 pb-3" id="vansSpacesContainer">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-check d-flex gap-2 w-100">
            <input class="form-check-input" type="checkbox" value="C" id="c_check" name="spaces[]" onchange="updateDivColor('c_check', 'c_accordion')">
            <div class="w-100 flex-shrink-1">
              <div class="accordion" id="busParent">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button id="c_accordion" style="background-color: white; position:relative" class="accordion-button px-3 py-2" type="button" data-bs-toggle="collapse" data-bs-target="#bus" aria-expanded="true" aria-controls="bus">
                      <p class="m-0 text-sm" style="color: #06283D;">C - For Buses</p>
                      <p class="m-0 text-sm me-3" style="color: #06283D; position: absolute; right: 0; z-index: 10" id="busSpace">Total Spaces: 0</p>
                    </button>
                  </h2>
                  <div id="bus" class="accordion-collapse collapse" data-bs-parent="#busParent">
                    <div class="accordion-body">
                      <div class="scrollable-grid d-flex flex-column gap-3 pb-3" id="busSpacesContainer">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-check d-flex gap-2 w-100">
            <input class="form-check-input" type="checkbox" value="C1" id="c1_check" name="spaces[]" onchange="updateDivColor('c1_check', 'c1_accordion')">
            <div class="w-100 flex-shrink-1">
              <div class="accordion" id="lcvParent">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button id="c1_accordion" style="background-color: white; position:relative" class="accordion-button px-3 py-2" type="button" data-bs-toggle="collapse" data-bs-target="#lcv" aria-expanded="true" aria-controls="lcv">
                      <p class="m-0 text-sm" style="color: #06283D;">C1 - For Light Commercial Vehicles</p>
                      <p class="m-0 text-sm me-3" style="color: #06283D; position: absolute; right: 0; z-index: 10" id="lcvSpace">Total Spaces: 0</p>
                    </button>
                  </h2>
                  <div id="lcv" class="accordion-collapse collapse" data-bs-parent="#lcvParent">
                    <div class="accordion-body">
                      <div class="scrollable-grid d-flex flex-column gap-3 pb-3" id="lcvSpacesContainer">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-check d-flex gap-2 w-100">
            <input class="form-check-input" type="checkbox" value="D" id="d_check" name="spaces[]" onchange="updateDivColor('d_check', 'd_accordion')">
            <div class="w-100 flex-shrink-1">
              <div class="accordion" id="hcvParent">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button id="d_accordion" style="background-color: white; position:relative" class="accordion-button px-3 py-2" type="button" data-bs-toggle="collapse" data-bs-target="#hcv" aria-expanded="true" aria-controls="hcv">
                      <p class="m-0 text-sm" style="color: #06283D;">D - For Heavy Commercial Vehicles</p>
                      <p class="m-0 text-sm me-3" style="color: #06283D; position: absolute; right: 0; z-index: 10" id="hcvSpace">Total Spaces: 0</p>
                    </button>
                  </h2>
                  <div id="hcv" class="accordion-collapse collapse" data-bs-parent="#hcvParent">
                    <div class="accordion-body">
                      <div class="scrollable-grid d-flex flex-column gap-3 pb-3" id="hcvSpacesContainer">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-check d-flex gap-2 w-100">
            <input class="form-check-input" type="checkbox" value="D1" id="d1_check" name="spaces[]" onchange="updateDivColor('d1_check', 'd1_accordion')">
            <div class="w-100 flex-shrink-1">
              <div class="accordion" id="lavParent">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button id="d1_accordion" style="background-color: white; position:relative" class="accordion-button px-3 py-2" type="button" data-bs-toggle="collapse" data-bs-target="#lav" aria-expanded="true" aria-controls="lav">
                      <p class="m-0 text-sm" style="color: #06283D;">D1 - For Light Articulated Vehicles</p>
                      <p class="m-0 text-sm me-3" style="color: #06283D; position: absolute; right: 0; z-index: 10" id="lavSpace">Total Spaces: 0</p>
                    </button>
                  </h2>
                  <div id="lav" class="accordion-collapse collapse" data-bs-parent="#lavParent">
                    <div class="accordion-body">
                      <div class="scrollable-grid d-flex flex-column gap-3 pb-3" id="lavSpacesContainer">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-check d-flex gap-2 w-100">
            <input class="form-check-input" type="checkbox" value="E" id="e_check" name="spaces[]" onchange="updateDivColor('e_check', 'e_accordion')">
            <div class="w-100 flex-shrink-1">
              <div class="accordion" id="havParent">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button id="e_accordion" style="background-color: white; position:relative" class="accordion-button px-3 py-2" type="button" data-bs-toggle="collapse" data-bs-target="#hav" aria-expanded="true" aria-controls="hav">
                      <p class="m-0 text-sm" style="color: #06283D;">E - For Heavy Articulated Vehicles</p>
                      <p class="m-0 text-sm me-3" style="color: #06283D; position: absolute; right: 0; z-index: 10" id="havSpace">Total Spaces: 0</p>
                    </button>
                  </h2>
                  <div id="hav" class="accordion-collapse collapse" data-bs-parent="#havParent">
                    <div class="accordion-body">
                      <div class="scrollable-grid d-flex flex-column gap-3 pb-3" id="havSpacesContainer">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="w-100 mb-1">
          <p class="text-default">Choose Rate</p>
          <div class="d-flex flex-column justify-content-between align-items-center mb-1">
            <div class="form-check d-flex gap-2 w-100">
              <input class="form-check-input" type="checkbox" value="hourly" id="hourlyC" name="rates[]" onchange="selectRate('hourlyC', 'rateAmountH', 'timeAllowanceH', 'hourly_accordion')">
              <div class="w-100 flex-shrink-1">
                <div class="accordion" id="hourlyParent">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button id="hourly_accordion" style="background-color: white; position:relative" class="accordion-button px-3 py-2" type="button" data-bs-toggle="collapse" data-bs-target="#hourlyAcc" aria-expanded="true" aria-controls="hourlyAcc">
                        <p class="m-0 text-sm" style="color: #06283D;">Hourly</p>
                      </button>
                    </h2>
                    <div id="hourlyAcc" class="accordion-collapse collapse" data-bs-parent="#hourlyParent">
                      <div class="accordion-body">
                        <div class="scrollable-grid d-flex flex-column gap-3 pb-3">
                          <div class="w-100 mb-2">
                            <label for="rateAmountH" class="form-label m-0" style="font-size: 12px">Enter amount</label>
                            <input type="number" class="form-control" name="rateAmount[]" id="rateAmountH" placeholder="₱0.00" style="font-size: 10px" required>
                          </div>

                          <div class="w-100 mb-2">
                            <label for="timeAllowanceH" class="form-label m-0" style="font-size: 12px">Enter Time Allowance</label>
                            <input type="number" class="form-control" name="timeAllowance[]" id="timeAllowanceH" placeholder="Minutes" style="font-size: 10px" required>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-check d-flex gap-2 w-100">
              <input class="form-check-input" type="checkbox" value="daily" id="dailyC" name="rates[]" onchange="selectRate('dailyC', 'rateAmountD', 'timeAllowanceD', 'daily_accordion')">
              <div class="w-100 flex-shrink-1">
                <div class="accordion" id="dailyParent">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button id="daily_accordion" style="background-color: white; position:relative" class="accordion-button px-3 py-2" type="button" data-bs-toggle="collapse" data-bs-target="#dailyAcc" aria-expanded="true" aria-controls="dailyAcc">
                        <p class="m-0 text-sm" style="color: #06283D;">Daily</p>
                      </button>
                    </h2>
                    <div id="dailyAcc" class="accordion-collapse collapse" data-bs-parent="#dailyParent">
                      <div class="accordion-body">
                        <div class="scrollable-grid d-flex flex-column gap-3 pb-3">
                          <div class="w-100 mb-2">
                            <label for="rateAmountD" class="form-label m-0" style="font-size: 12px">Enter amount</label>
                            <input type="number" class="form-control" name="rateAmount[]" id="rateAmountD" placeholder="₱0.00" style="font-size: 10px" disabled required>
                          </div>

                          <div class="w-100 mb-2">
                            <label for="timeAllowanceD" class="form-label m-0" style="font-size: 12px">Enter Time Allowance</label>
                            <input type="number" class="form-control" name="timeAllowance[]" id="timeAllowanceD" placeholder="Minutes" style="font-size: 10px" disabled required>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-check d-flex gap-2 w-100">
              <input class="form-check-input" type="checkbox" value="weekly" id="weeklyC" name="rates[]" onchange="selectRate('weeklyC', 'rateAmountW', null, 'weekly_accordion')">
              <div class="w-100 flex-shrink-1">
                <div class="accordion" id="weeklyParent">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button id="weekly_accordion" style="background-color: white; position:relative" class="accordion-button px-3 py-2" type="button" data-bs-toggle="collapse" data-bs-target="#weeklyAcc" aria-expanded="true" aria-controls="weeklyAcc">
                        <p class="m-0 text-sm" style="color: #06283D;">Weekly</p>
                      </button>
                    </h2>
                    <div id="weeklyAcc" class="accordion-collapse collapse" data-bs-parent="#weeklyParent">
                      <div class="accordion-body">
                        <div class="scrollable-grid d-flex flex-column gap-3 pb-3">
                          <div class="w-100 mb-2">
                            <label for="rateAmountW" class="form-label m-0" style="font-size: 12px">Enter amount</label>
                            <input type="number" class="form-control" name="rateAmount[]" id="rateAmountW" placeholder="₱0.00" style="font-size: 10px" required>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-check d-flex gap-2 w-100">
              <input class="form-check-input" type="checkbox" value="monthly" id="monthlyC" name="rates[]" onchange="selectRate('monthlyC', 'rateAmountM', null, 'monthly_accordion')">
              <div class="w-100 flex-shrink-1">
                <div class="accordion" id="monthlyParent">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button id="monthly_accordion" style="background-color: white; position:relative" class="accordion-button px-3 py-2" type="button" data-bs-toggle="collapse" data-bs-target="#monthlyAcc" aria-expanded="true" aria-controls="monthlyAcc">
                        <p class="m-0 text-sm" style="color: #06283D;">Monthly</p>
                      </button>
                    </h2>
                    <div id="monthlyAcc" class="accordion-collapse collapse" data-bs-parent="#monthlyParent">
                      <div class="accordion-body">
                        <div class="scrollable-grid d-flex flex-column gap-3 pb-3">
                          <div class="w-100 mb-2">
                            <label for="rateAmountM" class="form-label m-0" style="font-size: 12px">Enter amount</label>
                            <input type="number" class="form-control" name="rateAmount[]" id="rateAmountM" placeholder="₱0.00" style="font-size: 10px" disabled required>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-check d-flex gap-2 w-100">
              <input class="form-check-input" type="checkbox" value="yearly" id="yearlyC" name="rates[]" onchange="selectRate('yearlyC', 'rateAmountY', null, 'yearly_accordion')">
              <div class="w-100 flex-shrink-1">
                <div class="accordion" id="yearlyParent">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button id="yearly_accordion" style="background-color: white; position:relative" class="accordion-button px-3 py-2" type="button" data-bs-toggle="collapse" data-bs-target="#yearlyAcc" aria-expanded="true" aria-controls="yearlyAcc">
                        <p class="m-0 text-sm" style="color: #06283D;">Yearly</p>
                      </button>
                    </h2>
                    <div id="yearlyAcc" class="accordion-collapse collapse" data-bs-parent="#yearlyParent">
                      <div class="accordion-body">
                        <div class="scrollable-grid d-flex flex-column gap-3 pb-3">
                          <div class="w-100 mb-2">
                            <label for="rateAmountY" class="form-label m-0" style="font-size: 12px">Enter amount</label>
                            <input type="number" class="form-control" name="rateAmount[]" id="rateAmountY" placeholder="₱0.00" style="font-size: 10px" disabled required>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="w-100 mb-1">
          <p class="text-default">Payment Method</p>
          <div class="d-flex flex-row gap-3 align-items-center mb-1">
            <div class="form-check d-flex align-items-center gap-1">
              <input class="form-check-input text-sm mb-1" type="radio" name="paymentMethod" id="gcash" value="gcash" required>
              <label class="form-check-label text-sm" for="gcash">
                GCash
              </label>
            </div>

            <div class="form-check d-flex align-items-center gap-1">
              <input class="form-check-input text-sm mb-1" type="radio" name="paymentMethod" id="cash" value="cash" checked required>
              <label class="form-check-label text-sm" for="cash">
                Cash
              </label>
            </div>
          </div>
        </div>

        <div class="w-100 mb-1">
          <label for="description" class="form-label" style="font-size: 12px;"><b>Choose Description</b></label><br>
          <div class="mx-3 d-flex">
            <div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="description" value="securitycamera" id="securitycamera">
                <label class="form-check-label" style="font-size: 10px;" for="securitycamera">Security camera</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="description"  value="securitypersonnel" id="securitypersonnel">
                <label class="form-check-label" style="font-size: 10px;" for="securitypersonnel">Security Personnel</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="description"  value="regularlymaintenance" id="regularlymaintenance">
                <label class="form-check-label" style="font-size: 10px;" for="regularlymaintenance">Regularly maintenance</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="description"  value="wifi" id="wifi">
                <label class="form-check-label" style="font-size: 10px;" for="wifi">Wifi</label>
              </div>
            </div>  
            <div class="ms-5">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="description"  value="lighting" id="lighting">
                <label class="form-check-label" style="font-size: 10px;" for="lighting">Lighting</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="description"  value="gate" id="gate">
                <label class="form-check-label" style="font-size: 10px;" for="gate">Gate</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="description"  value="evchargingstation" id="evchargingstation">
                <label class="form-check-label" style="font-size: 10px;" for="evchargingstation">EV Charging Station</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="description"  value="emergencycallstation" id="emergencycallstation">
                <label class="form-check-label" style="font-size: 10px;" for="emergencycallstation">Emergency call station</label>
              </div>
            </div>
          </div>
        </div>  

        <div class="w-100 mb-1">
          <div class="w-100 mb-2">
            <label for="spaceImage" class="form-label m-0" style="font-size: 12px">Add photos of your space</label>
            <input type="file" class="form-control w-100" name="spaceImage" id="spaceImage" placeholder="₱0.00" style="font-size: 10px">
          </div>
        </div>

        <div class="w-100 d-flex justify-content-around px-4 my-1">
          <button type="button" class="container btn mx-3 text-default px-2" style="font-size: 12px; background-color: #E8E8E8; color: grey;">Cancel</button>
          <button type="submit" name="createspace" class="container mx-3 btn text-default px-2" style="font-size: 12px; background-color: #06283D; color: white">Submit</button>
        </div>
      </form>
    </div>
  </div>
</body>
  <?php
    require_once('./include/js.php');
  ?>
</html>