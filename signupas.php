<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Sign Up';
    $dashboard_page = 'active';
    require_once('./includes/login-head.php');
?>
<body style="display: flex; justify-content:center; align-items:center;">
    <div>
        <div class="text-center"><img src="../images/logobluee.png" height="100" width="100" alt=""></div>
        <div style="font-size: 12px;">Sign up as: </div><br>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group" style="width: 250px;">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
            <label class="btn btn-outline-primary" for="btnradio1" style="font-size: 12px;">Personal</label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio2" style="font-size: 12px;">Company</label>
        </div>
        <div style="display: flex; justify-content:flex-end">
            <button type="button" id="nextButton" style="background-color: #1363DF; color: white; font-size: 12px; border: none; border-radius: 3px; margin-top: 20px; padding: 5px 0; text-align: center; width: 60px;">Next <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
        </div>
    </div>
    <?php
    require_once('./includes/js.php');
    ?>
</body>
</html>
