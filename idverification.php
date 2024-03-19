<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'ID Verification';
    $dashboard_page = 'active';
    require_once('./include/head.php');
?>
<body style="display: flex; justify-content:center; align-items:center;">
<div class="text-center"><b></b></div>
    <div>
    <div class="text-center"><img src="../img/logobluee.png" height="100" width="100" alt=""></div>
        <div class="text-center"><b>ID Verification</b></div><br>
        <div style="font-size: 12px;">Choose your ID for verification</div><br>
        
        <div class="mb-2" style="display: flex; justify-content: space-between; border-bottom: 1px solid black;">
            <div class="d-flex flex-start" style="font-size: 12px;"><b>Accepted ID's </b></div>
            <div class="d-flex flex-end"><i class="fa fa-id-card-o" aria-hidden="true"></i></div>
        </div>
        <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
            <div class="d-flex flex-start" style="font-size: 10px;">Driver's License</div>
            <div class="d-flex flex-end"><a href="./IDs/driverslicenseID.php"><i style="color: black;" class="fa fa-angle-right" aria-hidden="true"></i></a></div>
        </div>
        <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
            <div class="d-flex flex-start" style="font-size: 10px;">UMID</div>
            <div class="d-flex flex-end"><a href="./IDs/umidID.php"><i style="color: black;" class="fa fa-angle-right" aria-hidden="true"></i></a></div>
        </div>
        <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
            <div class="d-flex flex-start" style="font-size: 10px;">Postal ID</div>
            <div class="d-flex flex-end"><a href="./IDs/postalID.php"><i style="color: black;" class="fa fa-angle-right" aria-hidden="true"></i></a></div>
        </div>
        <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
            <div class="d-flex flex-start" style="font-size: 10px;">Passport</div>
            <div class="d-flex flex-end"><a href="./IDs/passportID.php"><i style="color: black;" class="fa fa-angle-right" aria-hidden="true"></i></a></div>
        </div>
        <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
            <div class="d-flex flex-start" style="font-size: 10px;">SSS ID</div>
            <div class="d-flex flex-end"><a href="./IDs/sssID.php"><i style="color: black;" class="fa fa-angle-right" aria-hidden="true"></i></a></div>
        </div>
        <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
            <div class="d-flex flex-start" style="font-size: 10px;">PRC ID</div>
            <div class="d-flex flex-end"><a href="./IDs/prcID.php"><i style="color: black;" class="fa fa-angle-right" aria-hidden="true"></i></a></div>
        </div>
        <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
            <div class="d-flex flex-start" style="font-size: 10px;">HDMF (Pag-ibig ID)</div>
            <div class="d-flex flex-end"><a href="./IDs/pagibigID.php"><i style="color: black;" class="fa fa-angle-right" aria-hidden="true"></i></a></div>
        </div>
        <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
            <div class="d-flex flex-start" style="font-size: 10px;">National ID</div>
            <div class="d-flex flex-end"><a href="./IDs/nationalID.php"><i style="color: black;" class="fa fa-angle-right" aria-hidden="true"></i></a></div>
        </div>

        <div style="display: flex; justify-content:space-between;">
            <button type="submit" style="font-size: 12px; border: none; margin-top: 20px; text-align: center; width: 60px;"><i class="fa fa-arrow-left" aria-hidden="true"></i>   Skip</button>
            <button type="submit" style="background-color: #1363DF; color: white; font-size: 12px; border: none; border-radius: 3px; margin-top: 20px; padding: 3px 0; text-align: center; width: 60px;">Next   <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
        </div>
    </div>
</body>
</html>