<?php
session_start();

if (isset($_SESSION['user']) && $_SESSION['user'] == 'user') {
    header("Location: home_page.php");
    exit();
}

require_once('./classes/signin.class.php');

if (isset($_POST['signin'])) {
    $account = new Signin();
    $account->username = htmlentities($_POST['username']);
    $account->email = htmlentities($_POST['username']); // Handle both username and email as input
    $account->password = htmlentities($_POST['password']);

    if ($account->sign_in()) {
        // Set session variables after successful login
        $_SESSION['user_id'] = $account->user_id;

        // Check if it's the user's first login
        if (!isset($_SESSION['first_login'])) {
            // You need to define a method in Signin class to check if it's the first login
            if ($account->is_first_login()) {
                $_SESSION['first_login'] = 1;
                header('Location: vehicledetails.php');
                exit(); // Ensure to exit after redirection
            }
        } else {
            header('Location: home_page.php'); // Redirect to home page for subsequent logins
            exit(); // Ensure to exit after redirection
        }
    } else {
        $error = 'Invalid email/password. Try again.';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Sign In';
    $dashboard_page = 'active';
    require_once('./includes/head.php');
?>
<body style="display: flex; justify-content:center; align-items:center;">
    <div>
        <div class="text-center"><img src="../images/logobluee.png" height="100" width="100" alt=""></div>
        <div class="text-center">Sign Up to your account</div><br>
        <form action="" method="post">
            <div style="font-size: 12px;">
                <label for="username" class="form-label">Username/Email:</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username or Email" style="font-size: 10px;" required value="<?php if(isset($_POST['username'])) { echo $_POST['username']; } ?>">
            </div>
            <div style="font-size: 12px;">
                <label for="password" class="form-label pt-2">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" style="font-size: 10px;" value="<?php if(isset($_POST['password'])) { echo $_POST['password']; } ?>">
            </div>
            <div><a href="#" style="color: black; text-decoration: none; font-size: 8px;">Forgot password?</a></div>
            <button type="submit" id="signup" name="signin" style="background-color: #1363DF;color: White; font-size: 12px; border: none; border-radius: 3px; margin-bottom: 3px; padding: 3px 0; text-align: center; width: 200px;">Sign in</button>
        </form>
        <div><button style="background-color: #E8E8E8; color: grey; font-size: 12px; border: none; border-radius: 3px; padding: 3px 0; text-align: center; width: 200px;" type="submit"><a href="signupas.php" style="text-decoration: none; color: grey;">Create Account</a></button></div>
        <?php
                if (isset($_POST['signin']) && isset($error)) {
                ?> 
                <div class="text-danger my-1 mb-3 text-center" style="font-size:x-small" ><?= $error ?></div>
                <?php
                }
            ?>
        <br><div class="text-center" style="font-size: 12px;">Or sign in with</div><br>
        <div class="text-center" style="font-size: 12px; border: 0.1px groove; padding: 3px; margin-bottom: 10px;"><img src="../images/googleicon.jpg" height="25" width="25" alt=""> Sign in with google</div>
        <div class="text-center" style="font-size: 12px; border: 0.1px groove; padding: 3px;"><img src="../images/fbicon.png" height="25" width="25" alt=""> Sign in with Facebook</div>
    </div>
    <?php
    require_once('./includes/js.php');
    ?>
</body>
</html>
