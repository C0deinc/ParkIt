<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Login';
    require_once('../include/head.php');
?>
<body>
<main>
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="admin-login-page card shadow-lg p-3 mb-5 bg-white rounded" style="width: 400px; height: 350px;">
            <h1 class="h2 my-3 mb-4 text-center brand-color" style="font-weight: bold; color: #06283D;">Admin Login</h1>
            <form method="post" action="index.php">
                <div class="mb-3">
                    <label for="email" class="form-label" style="font-weight: bold; color: #06283D;">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email">
                </div>
                <div class="mb-2">
                    <label for="password" class="form-label" style="font-weight: bold; color: #06283D;">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                </div>
                <button type="submit" class="btn btn-primary mt-3 w-100" style="background-color: #06283D; font-weight: bold; border-radius: 5px;" name="login">Login</button>
            </form>
        </div>
    </div>
</main>

<?php
    require_once('../include/js.php');
    require_once('../scripts/script.php');
?>

</body>
</html>