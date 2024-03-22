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
try {
        $db = new Database();
        $db->connect();
    
        // Fetch username and profile picture of the logged-in user
        $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
        if ($user_id) {
            $username = $db->fetchUsername($user_id);
            $profile_pic = $db->fetchProfileImage($user_id);
        } else {
            // Handle the case where user_id is not set
            // You may redirect the user to login page or display an error message
        }
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
<body style="background-color:#fff;" class="profile-body" >
<div class="container-fluid d-flex justify-content-center align-items-center" style="background-color: #06283D;  width: 100vw; height: 10vh;">
            <a class="text-white text-decoration-none"><h3>Edit profile</h3></a>
</div>

<div class="mt-5 mx-auto container">
            <div class="container py-4 rounded-4 pb-0 shadow-lg" style="background-color: #ffff; ">
                    <div class="profile-picture container d-flex justify-content-center align-items-center">
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        <label for="fileToUpload">
                        <div class="profile-pic" style="background-image: url('./images/id-pic.jpg')">
                            <span class="bi bi-camera fs-6"></span>
                            <span>Change Image</span>
                        </div>
                        </label>
                        <input type="File" name="fileToUpload" id="fileToUpload">
                    </form>
                    </div>
                    <div class="container d-flex justify-content-center align-items-center py-3">
                    <input type="text" class="form-control mx-auto" placeholder="Username" id="Uname">
                    </div>
            </div>
            <form class="row g-3 py-4 px-4 rounded-4 pb-0 shadow-lg mt-3 pb-3 mx-auto" style="background-color: #ffff; ">
                <div class="col-md-4">
                    <label for="Fname" class="form-label">First name</label>
                    <input type="text" class="form-control" id="Fname">
                </div>
                <div class="col-md-4">
                    <label for="Mname" class="form-label">Middle name</label>
                    <input type="text" class="form-control" id="Mname">
                </div>
                <div class="col-md-4">
                    <label for="Lname" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="Lname">
                </div>
                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12 container d-flex justify-content-center align-items-center py-4 px-3 pb-3">
                    <button button type="submit" class="btn text-white rounded-4" style="background-color: #06283D; margin-right: 10px; ">Save changes</button>
                    <button type="button" class="btn btn-secondary rounded-4" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
    </div>
   
    <?php
      require_once('includes/js.php');
      ?>
</body>
</html>
