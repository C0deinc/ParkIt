<?php
session_start();

if (isset($_SESSION['user']) && $_SESSION['user'] == 'user'){
    header('location: home.php');
}

    //if the login button is clicked
    require_once('./classes/signin.class.php');
    
    if (isset($_POST['signin'])) {
        $account = new Signin();
        $account->username = htmlentities($_POST['username']);
        $account->email = htmlentities($_POST['username']); // Handle both username and email as input
        $account->password = htmlentities($_POST['password']);

        if ($account->sign_in()){
            $_SESSION['user'] = 'user';
            header('location: home.php');
        }else{
            $error =  'Invalid email/password. Try again.';
        }
    }
    
    //if the above code is false then html below will be displayed
?>

<?php
    require_once './tools/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Sign In';
    $dashboard_page = 'active'; 
    require_once('./include/head.php');
?>
<body>
    <div class="container">
        <div class="text-center"><img src="../img/logobluee.png" height="100" width="100" alt=""></div>
        <div class="text-center">Sign Up to your account</div><br>
        <form action="" method="post">
            <div style="font-size: 12px;">
                <label for="username" class="form-label">Username/Email:</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username or Email" style="font-size: 10px;" required value="<?php if(isset($_POST['username'])) { echo $_POST['username']; } ?>">
            </div>
            <div style="font-size: 12px;">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" style="font-size: 10px;" value="<?php if(isset($_POST['password'])) { echo $_POST['password']; } ?>">
            </div>
            <div><a href="#" style="color: black; text-decoration: none; font-size: 8px;">Forgot password?</a></div>
            <button type="submit" name="signin" class="container" style="background-color: #1363DF;color: White; font-size: 12px; border: none; border-radius: 3px; margin-bottom: 3px; padding: 3px 0; text-align: center;">Sign in</button>
            <?php
                if (isset($_POST['signin']) && isset($error)) {
                ?> 
                <div class="text-danger my-1 mb-3 text-center"><?= $error ?></div>
                <?php
                }
            ?>
        </form>
        <div><button class="container" style="background-color: #E8E8E8; color: grey; font-size: 12px; border: none; border-radius: 3px; padding: 3px 0; text-align: center;" type="submit"><a href="signupas.php" style="text-decoration: none; color: grey;">Create Account</a></button></div>
        <br><div class="text-center" style="font-size: 12px;">Or sign in with</div><br>
        <div class="text-center" style="font-size: 12px; border: 0.1px groove; padding: 3px; margin-bottom: 10px;"><img src="../img/googleicon.jpg" height="25" width="25" alt=""> Sign in with google</div>
        <div class="text-center" style="font-size: 12px; border: 0.1px groove; padding: 3px;"><img src="../img/fbicon.png" height="25" width="25" alt=""> Sign in with Facebook</div>
    </div>
    <?php
    require_once('./include/js.php');
    ?>
</body>
</html>