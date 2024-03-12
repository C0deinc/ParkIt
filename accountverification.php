<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Account Verification';
    $dashboard_page = 'active';
    require_once('./include/head.php');
?>
<body style="display: flex; justify-content:center; align-items:center;">
<div class="text-center"><b></b></div>
    <div>
    <div class="text-center"><img src="../img/logobluee.png" height="100" width="100" alt=""></div>
        <div class="text-center"><b>Account Verification</b></div><br>
        <div class="form-group mb-2" style="font-size: 12px;">
            <label class="form-label"><b>Send verification code via:</b></label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="accountverification" id="phonenumber" value="phonenumber" <?php if(isset($_POST['accountverification']) && $_POST['accountverification'] == 'phonenumber') echo 'checked'; ?>>
                <label class="form-check-label" for="phonenumber">Phone Number:</label>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="accountverification" id="email" value="email" <?php if(isset($_POST['accountverification']) && $_POST['accountverification'] == 'email') echo 'checked'; ?>>
                <label class="form-check-label" for="email">Email:</label>
            </div>
            <?php
            if(isset($_POST['personal']) && !validate_radio1($_POST)){
            ?>
            <p class="text-danger my-1">Please select Email or Phone number.</p>
            <?php
            } 
            ?>
        </div>

        <div style="display: flex; justify-content:space-between;">
            <button type="skip" style="font-size: 12px; border: none; margin-top: 20px; text-align: center; width: 60px;"><i class="fa fa-arrow-left" aria-hidden="true"></i>   Skip</button>
            <button type="submit" style="background-color: #1363DF; color: white; font-size: 12px; border: none; border-radius: 3px; margin-top: 20px; padding: 3px 0; text-align: center; width: 60px;">Next   <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
        </div>
    </div>
</body>
</html>