<?php
session_start(); // Start the session to access session variables

require_once('./classes/database.php');

// Check if user is not logged in, then redirect to login page
if (!isset($_SESSION['user_id'])) {
    header("Location: signin.php");
    exit;
}

// Initialize variables to store user details
$firstname = $middlename = $lastname = $email = $sex = $contactnumber = $address = '';

// Retrieve user details from session
if (isset($_SESSION['user_details'])) {
    $userDetails = $_SESSION['user_details'];
    $firstname = $userDetails['firstname'];
    $middlename = $userDetails['middlename'];
    $lastname = $userDetails['lastname'];
    $email = $userDetails['email'];
    $sex = $userDetails['sex'];
    $contactnumber = $userDetails['contactnumber'];
    $address = $userDetails['address'];
}

?>

<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Profile';
$home_page = '';
require_once('./includes/head.php');
?>
<body style="background-color:#47B5FF">
        <div class="container-fluid" style="background-color: #06283D;  width: 100vw; height: 10vh;">
            <ul class="list-group list-group-horizontal" style="padding: 30px 30px;">
                <i><a href="/renter-profile.php" class="bi bi-arrow-left fs-3 text-white text-decoration-none" style="padding-top: 2px;"></a></i>
                <li class="text-white fs-5" style="padding-left: 50px;"><h4>Profile</h4></li>
            </ul>
        </div>

    <section class="profile-section-one mt-5">
            <div class="container pt-5">
                    <div class="profile-picture container">
                            <img src="/images/IMG_0024.jpg" alt="" class="img-responsive rounded-circle border border-black">
                    </div>
            </div>

            <div class="container pt-5 text-center">
                    <div class="">
                    <i class="fa-solid fa-address-card me-4 text-white"></i>
                    <a class="text-decoration-none text-white profile-details">
                    <?php echo $firstname . ' ' . $middlename . ' ' . $lastname; ?>
                    </a>
                    </div>
                    <div class="pt-3">
                    <i class="fa-solid fa-envelope me-4 text-white"></i>
                    <?php echo $email; ?>
                    </div>
                    <div class="pt-3">
                    <i class="fa-solid fa fa-venus-mars me-4 text-white"></i>
                    <?php echo $sex; ?>
                    </div>
                    <div class="pt-3">
                    <i class="fa-solid fa fa-mobile me-4 text-white"></i>
                    <?php echo $contactnumber; ?>
                    </div>
                    <div class="pt-3">
                    <i class="fa-solid fa fa-location-dot me-4 text-white"></i>
                    <?php echo $address; ?>
                    </div>
            </div>
    </section>
    <?php
      require_once('includes/js.php');
      ?>
</body>
</html>
