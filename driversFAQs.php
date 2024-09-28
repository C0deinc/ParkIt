<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Drivers FAQs';
$home_page = 'active';
require_once('./includes/head.php');
?>
<body class="bg-primary faq-body">
<?php
require_once('./includes/renter-nav.php');
  ?>
    <div class="wrapper bg-white rounded shadow">
        <div class="h2 text-center fw-bold page-top">Drivers FAQs</div>
        <div class="h3 text-primary text-center pb-3">How can we help you?</div>
        <div class="accordion accordion-flush border-top border-start border-end" id="myAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"> Popular Drivers Queries </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                    <div class="accordion-body p-0">
                        <ul class="list-unstyled m-0">
                            <li><a href="#">How to sign up as a driver</a></li>
                            <li><a href="#">Understanding driver payment methods</a></li>
                            <li><a href="#">Handling passenger requests and feedback</a></li>
                            <li><a href="#">Driver safety tips</a></li>
                            <li><a href="#">Dealing with navigation and route issues</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"> Account and Profile Management </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingTwo" data-bs-parent="#myAccordion">
                    <div class="accordion-body p-0">
                        <ul class="list-unstyled m-0">
                            <li><a href="#">Updating driver profile information</a></li>
                            <li><a href="#">Changing account settings and preferences</a></li>
                            <li><a href="#">Managing documents and certifications</a></li>
                        </ul>
                    </div>
                </div>
            </div>  
        </div>
    </div>   
    <?php
      require_once('includes/js.php');
      ?>
</body>
</html>
