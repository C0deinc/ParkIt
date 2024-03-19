<?php
session_start();

// Check if user is logged in
if (isset($_SESSION['username'])) {
    // Redirect to login page
    header("Location: signin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Home';
$home_page = 'active';
require_once('./includes/head.php');
?>
<body>
<?php
require_once('./includes/renter-nav.php');
  ?>
    <section class="background-container p-5 d-flex flex-column justify-content-center">
        <h2 class="fw-bolder fs-1" style="color: #06283D;">Discover your ideal space</h2>
        <p class="custom-font-size mt-1 m-0 bc-text" style="color: #06283D;">“Unlock convenience, reserve your space. Your hassle-free parking solution is just a click away.”</p>
        <a href="#" class="btn btn-primary btn-lg btn-join mt-3 shadow-lg">Join Us Now</a>
    </section>

    <section class="section-one mt-5 p-5">
        <div class="row d-flex g-0">
            <div class="col-md-6 col-lg-6 p-3 d-flex flex-column justify-content-center ">
                <h2 class="text-center" >About ParkIt</h2>
                <p class="mt-3 text-center">Parkit serves as a platform facilitating a mutually beneficial relationship between renters and space owners. Renters enjoy a user-friendly interface for finding and reserving parking spaces, while space owners can monetize their unused spaces by listing them on the platform.</p>
            </div>
            <div class="col-md-6 col-lg-6 p-0 d-flex justify-content-center align-items-center">
                 <img class="w-50 rounded-5 gif" src="./images/car-parking.gif" alt="">
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
    
    <section class="section-three" >
    <div class="row g-0 d-flex justify-content-evenly align-items-evenly " style="background-color: #47B5FF;">
    <svg class="line" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 180"><path fill="#fff" fill-opacity="1" d="M0,128L34.3,144C68.6,160,137,192,206,176C274.3,160,343,96,411,85.3C480,75,549,117,617,144C685.7,171,754,181,823,160C891.4,139,960,85,1029,90.7C1097.1,96,1166,160,1234,170.7C1302.9,181,1371,139,1406,117.3L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>
            <div class="col-lg-6 col-sm-12 p-5 d-flex flex-column justify-content-center">
            <p style="color: #DFF6FF;" class="custom-text text-center m-0">
                Discover the magic of finding your ideal space – a place where comfort meets convenience, and every moment feels uniquely yours. Explore a curated selection designed to cater to your specific needs and preferences. Your perfect space awaits, transforming the ordinary into the extraordinary.
            </p>
            </div>
            <div class="col-lg-6 col-md-4 p-5 d-flex flex-column justify-content-center align-items-center">
                <img src="./images/pic5.png" alt="" class="img-fluid" style="width: 150px; height: auto;">
                <a href="#" class="btn btn-primary btn-lg btn-find mt-4 shadow-lg">Find Your Space</a>
            </div>
            <svg class="line" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200"><path fill="#fff" fill-opacity="1" d="M0,32L30,58.7C60,85,120,139,180,149.3C240,160,300,128,360,117.3C420,107,480,117,540,133.3C600,149,660,171,720,165.3C780,160,840,128,900,96C960,64,1020,32,1080,53.3C1140,75,1200,149,1260,149.3C1320,149,1380,75,1410,37.3L1440,0L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
    </div>
    </section>

    <?php
      require_once('includes/js.php');
      require_once('includes/footer.php');
      ?>
</body>
</html>