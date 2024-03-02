<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'About Us';
    $about_page = 'active';
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
      <h1 class="text-center page-top" style="color:#3586ff;">ABOUT US</h1>
      <hr class="hr">
  
      <div class="container">
          <div class="pt-5 pb-md-4 pb-3 flex-lg-row flex-column-reverse flex-md-column-reverse row">
              <div class="mt-lg-0 mt-md-4 mt-4 col-lg-6 col-md-12 col-12">
                  <p class="fs-5">Parking can be a hassle, especially in crowded urban areas. Let us alleviate some of that stress for you.</p>
                  <p class="fs-5"><a class="fw-bold text-decoration-none fs-5" style="color:#3586ff;">ParkIt</a> is an eco-conscious parking solution that:</p>
                  <ul >
                      <li>Provides convenient parking spots at various locations of your choice.</li>
                      <li>Ensures your vehicle is securely parked in trusted facilities nearby.</li>
                      <li>Offers hassle-free booking and payment options.</li>
                  </ul>
                  <p class="fs-5">Think of us as your Airbnb of Parking. Our technology streamlines the process, making it easy and cost-effective for you to find parking without the headache.</p>
  
                  <h3 class="fw-semibold" style="color:#3586ff;">Mission</h3>
                  <p class="fs-5">To simplify parking for our customers with the click of a button.</p>
                  <h3 class="fw-semibold" style="color:#3586ff;">Vision</h3>
                  <p class="fs-5">To be the premier destination for parking rentals in Zamboanga City, while empowering property owners with a sustainable source of income.</p>
              </div>
              <div class="col-lg-6 col-md-12 col-12">
                  <div class="LazyLoad is-visible" style="height: auto;">
                      <img src="./images/aboutUs.png " alt="About Us" width="629" height="602" class="img-fluid w-75 h-auto">
                  </div>
           </div>
      </div>
  </div>
  <?php
      require_once('includes/js.php');
      require_once('includes/footer.php');
      ?>
</body>
</html>