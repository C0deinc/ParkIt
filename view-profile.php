<?php
require_once('./classes/database.php');
require_once('./classes/user.class.php');

        try {
            $db = new Database();
            $db->connect();
            $firstname = $db->fetchFullNames();
            $middlename = $db->fetchFullNames();
            $lastname = $db->fetchFullNames();
            $userDetails = $db->fetchUserDetails();

        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
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
                <li class="text-white fs-5" style="padding-left: 50px;"><h4>Profile</h4></li>>
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
                    <?php
                        if ($firstname !== null && $middlename !== null && $lastname !== null) {
                        echo "<a class='text-decoration-none text-white profile-details'>$firstname</a>";
                        }
                    ?>
                    </div>
                    <div class="pt-3">
                    <i class="fa-solid fa-envelope me-4 text-white"></i>
                    <?php
                        if ($userDetails !== null && isset($userDetails['email'])) {
                        $email = $userDetails['email'];
                        echo "<a class='text-decoration-none text-white profile-details'>$email</a>";
                        }
                        ?>
                    </div>
                    <div class="pt-3">
                    <i class="fa-solid fa fa-venus-mars me-4 text-white"></i>
                    <?php
                        if ($userDetails !== null && isset($userDetails['sex'])) {
                        $sex = $userDetails['sex'];
                        echo "<span class='text-decoration-none text-white profile-details'>$sex</span>";
                        }
                        ?>
                    </div>
                    <div class="pt-3">
                    <i class="fa-solid fa fa-mobile me-4 text-white"></i>
                    <?php
                        if ($userDetails !== null && isset($userDetails['contactnumber'])) {
                        $contactnumber = $userDetails['contactnumber'];
                        echo "<span class='text-decoration-none text-white profile-details'>$contactnumber</span>";
                        }
                        ?>
                    </div>
                    <div class="pt-3">
                    <i class="fa-solid fa fa-location-dot me-4 text-white"></i>
                    <?php
                        if ($userDetails !== null && isset($userDetails['barangay']) && isset($userDetails['city']) && isset($userDetails['province']) && isset($userDetails['zipcode'])) {
                        $address = $userDetails['barangay'] . ', ' . $userDetails['city'] . ', ' . $userDetails['province'] . ' ' . $userDetails['zipcode'];
                        echo "<span class='text-decoration-none text-white profile-details'>$address</span>";
                        }
                        ?>
                    </div>
            </div>
    </section>
    <?php
      require_once('includes/js.php');
      ?>
</body>
</html>