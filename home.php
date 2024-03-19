<?php
    //resume session here to fetch session values
    session_start();
    /*
        if user is not login then redirect to login page,
        this is to prevent users from accessing pages that requires
        authentication such as the dashboard
    */
    if (!isset($_SESSION['user']) || $_SESSION['user'] != 'user'){
        header('location: signin.php');
    }
    //if the above code is false then html below will be displayed
?>
<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Home';
    $dashboard_page = 'active';
    require_once('./include/head.php');
?>
<body style="background-color: #06283D; height: 100vh; width: 100vw; display: flex; justify-content:center; align-items:center;">
    <a href="signin.php"><img src="../img/logowhite.png" height="200" width="200" alt=""></a>
    <div> 
        <a href="./logout.php">LOG OUT</a>
    </div>
</body>
</html>