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

<div class="mt-5 container">
            <div class="container py-4 rounded-4 pb-0 shadow-lg" style="background-color: #ffff; ">
                    <div class="profile-picture container">
                            <img src="/images/default-pic.jpg" alt="" class="img-responsive rounded-circle border border-black">
                    </div>
                    <div class="container d-flex justify-content-center align-items-center py-3">
                        <?php if ($username !== null): ?>
                        <h4><?php echo $username; ?></h4>
                        <?php else: ?>
                        <h4>No username found.</h4>
                        <?php endif; ?>
                    </div>
            </div>
            <div class="p-lists-container rounded-4 mt-2 shadow-lg"  style="background-color: #ffff;">
            <div class="p-view-profile px-5 py-4 d-flex">
            <i class="fa-solid fa-address-card me-4"></i>
                    <a class="text-decoration-none text-white profile-details" style="color: #06283D;">
                    <?php echo $firstname . ' ' . $middlename . ' ' . $lastname; ?>
                    </a>
            </div>
            <div class="p-my-vehicle px-5 py-4">
                <i class="fa-solid fa-envelope me-4"></i>
                <input value="<?= $email ?>" type="email" class="form-control w-50 pb-1 border-0 10px" id="email" placeholder="" name="email" style="background-color: #fff;">
            </div>
            <div class="p-my-rentals px-5 py-4">
            <i class="fa-solid fa fa-venus-mars me-4"></i>
                    <span style="color: #06283D;"><?php echo $sex; ?></span>
            </div>

            <div class="p-history px-5 py-4">
            <i class="fa-solid fa fa-mobile me-4"></i>
                    <span style="color: #06283D;"><?php echo $contactnumber; ?></span>

            </div>
            <div class="p-help-center px-5 py-4">
            <i class="fa-solid fa fa-location-dot me-4"></i>
                    <span style="color: #06283D;"><?php echo $address; ?></span>
            </div>
        </div>
        <div class="container d-flex justify-content-center  align-items-center py-3 px-3">
            <button button type="submit" class="btn text-white" style="background-color: #47B5FF; margin-right: 10px; ">Save changes</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>
    </div>
   
    <?php
      require_once('includes/js.php');
      ?>
</body>
</html>
