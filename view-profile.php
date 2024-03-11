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
                    <a class="text-decoration-none text-white profile-details">Mohammad Sali Jauhari</a>
                    </div>
                    <div class="pt-3">
                    <i class="fa-solid fa-envelope me-4 text-white"></i>
                    <a class="text-decoration-none text-white profile-details">mohammadsali@gmail.com</a>
                    </div>
                    <div class="pt-3">
                    <i class="fa-solid fa fa-venus-mars me-4 text-white"></i>
                    <a class="text-decoration-none text-white profile-details">Male</a>
                    </div>
                    <div class="pt-3">
                    <i class="fa-solid fa fa-mobile me-4 text-white"></i>
                    <a class="text-decoration-none text-white profile-details">09557651889</a>
                    </div>
                    <div class="pt-3">
                    <i class="fa-solid fa fa-location-dot me-4 text-white"></i>
                    <a class="text-decoration-none text-white profile-details">Zamboanga del sur, Zamoanga City,Upper Calarian, Southcom Village</a>
                    </div>
            </div>
    </section>
    <?php
      require_once('includes/js.php');
      ?>
</body>
</html>