<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Our Story';
$about_page = '';
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
    <h1 class="text-center page-top m-0" style="color:#3586ff;">OUR STORY</h1>
    <hr class="hr">

    <div class="container">
        <div class="pb-md-4 pb-3 flex-lg-row flex-column-reverse flex-md-column-reverse row">
            <div class="mt-lg-0 mt-md-4 mt-4 col-lg-6 col-md-12 col-12">
                <p class="responsive-font-example">At ParkIt, our story is deeply rooted in the recognition of the everyday challenges faced by urban dwellers when it comes to parking. Our journey began with a simple yet profound idea: to revolutionize the parking experience by providing a seamless and eco-conscious solution.</p>
                <p class="responsive-font-example">Driven by a passion for innovation and a commitment to sustainability, ParkIt emerged as more than just a parking service; it became a trusted partner in urban mobility. Our mission is clear: to simplify parking for our customers with the click of a button.</p>
                <p class="responsive-font-example">From providing convenient parking spots at various locations of choice to ensuring vehicles are securely parked in trusted facilities nearby, ParkIt stands as a beacon of reliability in the bustling urban landscape. We believe in offering hassle-free booking and payment options, making the entire process as effortless as possible for our users.</p>
                <p class="responsive-font-example">As the premier destination for parking rentals in Zamboanga City, our vision extends beyond mere convenience. We aspire to empower property owners with a sustainable source of income, fostering a community-driven approach to urban development. At ParkIt, our story is one of innovation, sustainability, and a relentless pursuit of excellence in urban mobility.</p>
            </div>
            <div class="col-lg-6 col-md-12 col-12 d-flex justify-content-center align-items-center">
            <lord-icon
                src="https://cdn.lordicon.com/iikoxwld.json"
                trigger="loop"
                delay="500"
                state="in-jump-dynamic"
                style="width:400px;height:400px"
                alt="Responsive Image"
                class="img-fluid">
            </lord-icon>
            </div>
        </div>
    </div>
    <?php
    require_once('includes/js.php');
    require_once('includes/footer.php');
    ?>
</body>
</html>
