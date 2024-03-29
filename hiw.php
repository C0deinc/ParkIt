<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'How It Works';
    $hiw_page = 'active';
    require_once('./includes/head.php');
?>
<body>
<?php
require_once('./includes/renter-nav.php');
  ?>
    <div class="breadcrumb">
        <div class="container">
          <div class="row">
            <div class="breadcrumbs">
              <div class="container">
                <div class="row"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h1 class="text-center page-top m-0" style="color:#3586ff;">HOW IT WORKS</h1>
      <hr class="hr">
      <div class="container mx-auto">
            <div class="container row py-5 ">
                <div class="container col-6 d-flex justify-content-center align-items-center" >
                  <img src="./images/choose.png" alt="" class="hiw-img">
                </div>
                <div class="container col-6" >
                  <h1 style="color: #06283D;">1. Choose your space</h1>
                  <p style="color: #06283D;">Search your desired rental space and click "Rent Now.</p>
                </div>
            </div>
            <div class="container row  py-5">
            <div class="container col-6" >
                  <h1 style="color: #06283D;">2. Fill out the renting form</h1>
                  <p style="color: #06283D;">Fill out the provided form for parking space selection.  And you can add another vehicle by clicking "Add Another Rent" and complete the form.</p>
                </div>
                <div class="container col-6 d-flex justify-content-center align-items-center" >
                  <img src="./images/fillup.png" alt="" class="hiw-img">
                </div>
            </div>
            <div class="container row  py-5">
                <div class="container col-6 d-flex justify-content-center align-items-center" >
                  <img src="./images/search.png" alt="" class="hiw-img">
                </div>
                <div class="container col-6" >
                  <h1 style="color: #06283D;">3. Review details</h1>
                  <p style="color: #06283D;">Carefully examine the details of your rental space to ensure accuracy.</p>
                </div>
            </div>
            <div class="container row py-5">
            <div class="container col-6" >
                  <h1 style="color: #06283D;">4. Process Payment</h1>
                  <p style="color: #06283D;">Complete the payment process to finalize your transaction.</p>
                </div>
                <div class="container col-6 d-flex justify-content-center align-items-center" >
                  <img src="./images/payment-system.png" alt="" class="hiw-img">
                </div>
            </div>
            <div class="container row py-5">
                <div class="container col-6 d-flex justify-content-center align-items-center" >
                  <img src="./images/parking-car.png" alt="" class="hiw-img">
                </div>
                <div class="container col-6" >
                  <h1 style="color: #06283D;">5. Arrival</h1>
                  <p style="color: #06283D;">After receiving confirmation from the space owner, you are eligible to utilize the rented space. Upon arriving at the designated location, you can immediately commence using the rented space.</p>
                </div>
            </div>
      </div>
  <?php
      require_once('includes/js.php');
      require_once('includes/footer.php');
      ?>
</body>
</html>