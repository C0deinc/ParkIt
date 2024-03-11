<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Profile';
$home_page = '';
require_once('./includes/head.php');
?>
<body>
        <div class="container-fluid" style="background-color: #06283D;  width: 100vw; height: 10vh;">
            <ul class="list-group list-group-horizontal" style="padding: 30px 30px;">
                <i><a href="/index.php" class="bi bi-arrow-left fs-3 text-white text-decoration-none" style="padding-top: 2px;"></a></i>
                <li class="text-white fs-5" style="padding-left: 50px;"><h4>My account</h4></li>>
            </ul>
        </div>

    <section class="profile-section-one">
            <div class="container d-flex justify-content-center align-items-center pt-4">
                    <div class="profile-picture container">
                            <img src="/images/IMG_0024.jpg" alt="" class="img-responsive rounded-circle border border-black">
                    </div>
            </div>
            <div class="container d-flex justify-content-center align-items-center py-4">
                <a href="" class="text-decoration-none text-white profile-details fs-2">Mohammad Sali Jauhari</a>
            </div>
    </section>


    <section class="profile-section-two">
        <div class="parkit-wallet-container px-5 py-4">
            <div class="d-flex flex-row justify-content-between">
                <div class="parkit-wallet">
                    <p class="fs-5" style="color: #06283D;">parkit<span class="fw-bold fst-italic" style="color: #47B5FF">wallet</span></p>
                </div>
                <div class="p-amount mb-0 text-center rounded">
                    <p style="color: #06283D;">₱0.00</p>
                </div>
            </div>
            <div>
                <p style="color: gray">Balance</p>
            </div>
        </div>
        <div class="p-lists-container">
            <div class="p-view-profile px-5 py-4">
                <i class="fa-solid fa-user fa-lg me-4" style="color: #06283D;"></i>
                <a href="view-profile.php" class="text-decoration-none" style="color: #06283D;">View profile</a>
            </div>
            <div class="p-my-reviews px-5 py-4">
                <i class="fa-solid fa-star fa-lg me-4" style="color: #06283D;"></i>
                <a href="" class="text-decoration-none" style="color: #06283D;">My reviews</a>
            </div>
            <div class="p-my-vehicle px-5 py-4">
                <i class="fa-solid fa-car fa-lg me-4" style="color: #06283D;"></i>
                <a href="" class="text-decoration-none" style="color: #06283D;">My vehicle</a>
            </div>
            <div class="p-my-rentals px-5 py-4">
                <i class="fa-solid fa-key fa-lg me-4" style="color: #06283D;"></i>
                <a href="" class="text-decoration-none" style="color: #06283D;">My rentals</a>
            </div>
            <div class="p-history px-5 py-4">
                <i class="fa-solid fa-book fa-lg me-4" style="color: #06283D;"></i>
                <a href="" class="text-decoration-none" style="color: #06283D;">History</a>
            </div>
            <div class="p-help-center px-5 py-4">
                <i class="fa-solid fa-circle-info fa-lg me-4" style="color: #06283D;"></i>
                <a href="" class="text-decoration-none" style="color: #06283D;">Help center</a>
            </div>
            <div class="p-settings px-5 py-4">
                <a href="" class="text-decoration-none" style="color: #06283D;">Settings</a>
            </div>
            <div class="p-switch-to-space-owner px-5 py-4 d-flex flex-row justify-content-between align-items-center">
                <p>Switch to <span style="color: #06283D" class="fw-bold">Space Owner</span></p>
                <i><a href="" class="fa-solid fa-repeat fa-lg me-4 mb-3 text-decoration-none" style="color: #06283D;"></a></i>
            </div>
            <div class="p-logout px-5 py-4">
               <a href="" class="text-decoration-none" style="color: #06283D;">Log Out</a>
            </div>
        </div>
    </section>
    <?php
      require_once('includes/js.php');
      ?>
</body>
</html>