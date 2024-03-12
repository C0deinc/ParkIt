<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'UMID ID';
    $dashboard_page = 'active';
    require_once('../include/head.php');
?>
<body style="display: flex; justify-content:center; align-items:center;">
<div class="text-center"><b></b></div>
    <div>
        <div class="text-center"><img src="../img/logobluee.png" height="100" width="100" alt=""></div>
        <div class="text-center"><b>Account Verification</b></div><br>
        <div style="font-size: 12px;">Sample ID</div><br>
        <div style="display: flex; justify-content: space-around; flex-direction: column; align-items: center;">
            <img src="../img/UMID-front.jpg" height="120px" width="200px" alt="">
        </div>
        <br><br>
        <div style="border: 1px groove grey; border-radius: 10px; padding: 10px;">
            <i class="fa fa-id-card-o" aria-hidden="true"></i><b style="font-size: 12px;">   UMID ID</b><br>
            <i style="font-size: 10px;"> makesure to follow these tips!</i><br><br>
            <div>
                <div style="font-size: 10px;"><i class="fa fa-dot-circle-o" style="margin-right: 10px;" aria-hidden="true"></i>   Words/letters written should be clear and readable. </div>
                <div style="font-size: 10px;"><i class="fa fa-dot-circle-o" style="margin-right: 10px;" aria-hidden="true"></i>   Take a photo of your real and valid ID, not photocopied. </div>
                <div style="font-size: 10px;"><i class="fa fa-dot-circle-o" style="margin-right: 10px;" aria-hidden="true"></i>   Personal Information on th ID should be correct and complete. </div><br>
                <div class="text-center"><button style="font-size: 12px; border: 1px solid black; border-radius: 20px; padding: 5px 0; text-align: center; width: 200px;" type="submit">Select ID</button></div>
            </div>
        </div><br>
        <div style="display: flex; justify-content:space-between;">
            <button type="skip" style="font-size: 12px; border: none; margin-top: 20px; text-align: center; width: 60px;"><i class="fa fa-arrow-left" aria-hidden="true"></i>   Skip</button>
            <button type="submit" style="background-color: #1363DF; color: white; font-size: 12px; border: none; border-radius: 3px; margin-top: 20px; padding: 3px 0; text-align: center; width: 60px;">Next   <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
        </div>
    </div>
</body>
</html>