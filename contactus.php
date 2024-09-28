<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Contact Us';
$home_page = 'active';
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
  <h1 class="text-center page-top m-0" style="color:#3586ff;">CONTACT US</h1>
  <hr class="hr">

  <h3 class="wp-block-heading m-0">&nbsp;</h3>
  <form class="container">
      <div class="row">
      <div class="col-md-6 d-flex justify-content-center align-content-center">
              <img src="./images/contactUs.gif" class="card-img-bottom card-i p-3 w-75" alt="...">
          </div>
          <div class="col-md-6 rounded-3 p-5">
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label fs-4 custom-font-size">Email</label>
                  <input type="email" class="form-control border-info" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text fs-6">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label fs-4 custom-font-size">Name</label>
                  <input class="form-control border-info">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label fs-4 custom-font-size">Your message</label>
                    <textarea class="form-control border-info" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <div class="d-flex justify-content-center align-items-center">
                      <button type="submit" class="btn btn-primary rounded-5 fw-semibold" style="padding: 10px 50px 10px 50px;">Submit</button>  
                  </div>
          </div>
          
      </div>
    </form>
    <?php
      require_once('includes/js.php');
      require_once('includes/footer.php');
      ?>
</body>
</html>