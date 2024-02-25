<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Home';
$home_page = 'active';
require_once('./includes/head.php');
?>
<body>
<?php
require_once('./includes/owner-nav.php');
  ?>
    <section class="background-container p-5 d-flex flex-column justify-content-center">
        <h2 class="fw-bolder fs-1" style="color: #06283D;">Discover your ideal space</h2>
        <p class="fs-4 mt-1 bc-text" style="color: #06283D;">“Unlock convenience, reserve your space. Your hassle-free parking solution is just a click away.”</p>
        <a href="#" class="btn btn-primary btn-lg btn-join mt-3">Join Us Now</a>
    </section>

    <section class="section-one mt-5 p-5">
        <div class="row d-flex g-0">
            <div class="col-md-4 col-lg-6 p-5 d-flex flex-column justify-content-center ">
                <h2>About ParkIt</h2>
                <p class="mt-3">Parkit serves as a platform facilitating a mutually beneficial relationship between renters and space owners. Renters enjoy a user-friendly interface for finding and reserving parking spaces, while space owners can monetize their unused spaces by listing them on the platform.</p>
            </div>
            <div class="col-md-4 col-lg-6 p-0">
            </div>
        </div>
    </section>

    <section class="section-two text-center mt-5 py-5 p-5" style="background-color: #DFF6FF;">
        <h2>Better Way to Find your Perfect Space</h2>
        <p class="d-text mt-3">Our platform connects renters with available spots, providing a user-friendly interface for easy reservations.</p>
        <div class="row mt-5 g-0">
            <div class="col-sm-12 col-md-6 col-lg-4 mt-5">
                <img src="./images/pic4.png" alt="">
                <h3 class="mt-4">Choose your Space</h3>
                <p>Select a space using search.</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mt-5">
                <img src="./images/pic2.png" alt="">
                <h3 class="mt-4">Complete process</h3>
                <p>After you’ve selected a space, book it and the space owner will accept it.</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mt-5">
                <img src="./images/pic3.png" alt="">
                <h3 class="mt-4">Get your Space</h3>
                
                <p>Your rent is booked and waiting for you.</p>
            </div>
        </div>
    </section>
    
    <section class="section-three mt-5 py-5 p-5" style="background-color: #47B5FF;">
        <div class="row d-flex justify-content-center align-items-center g-0">
            <div class="col-sm-12 col-lg-6 p-5 d-flex flex-column justify-content-center">
                <p style="color: #DFF6FF;">Discover the magic of finding your ideal space – a place where comfort meets convenience, and every moment feels uniquely yours. Explore a curated selection designed to cater to your specific needs and preferences. Your perfect space awaits, transforming the ordinary into the extraordinary.</p>
            </div>
            <div class="col-md-4 col-lg-6 p-5 d-flex flex-column justify-content-center align-items-center">
                <img src="./images/pic5.png" alt="">
                <a href="#" class="btn btn-primary btn-lg btn-find mt-4">Fing Your Space</a>
            </div>
        </div>
        <div class="curve"></div>
    </section>
      
    <?php
      require_once('includes/js.php');
      require_once('includes/footer.php');
      ?>
</body>
</html>