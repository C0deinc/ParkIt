<?php
    require_once  './tools/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Sign Up';
    $dashboard_page = 'active';
    require_once('./include/head.php');
?>
<body>
    <div class="container">
        <div>
            <div class="text-center"><img src="../img/logobluee.png" height="100" width="100" alt=""></div>
            <div class="text-center">Sign in to your account</div><br>
            <div class="mt-3" style="border-top: 2px groove gray;"></div><br>
        </div>
        <form action="./modules/company.php" method="post">
            <div class="mb-2 " style="font-size: 12px;">
                <label for="companyname" class="form-label">Company name:</label>
                <input type="text" class="form-control" id="companyname" name="companyname" placeholder="Enter Company Name" style="font-size: 10px;" value="<?php if(isset($_POST['companyname'])){ echo $_POST['companyname']; } ?>">
                <?php
                if(isset($_POST['companyname']) && !validate_field($_POST['companyname'])){
                ?>
                <p class="text-danger my-1">Please enter valid Company Name.</p>
                <?php
                }
                ?>
            </div>
            <div class="mb-2" style="font-size: 12px;">
                <label for="address" class="form-label">Address</label>
                <div>
                    <select name="province" id="province" class="form-select mb-2" style="font-size: 10px;">
                        <option value="">Select Province</option>
                        <option value="Del Sur" <?php if(isset($_POST['province']) && $_POST['province'] == 'Del Sur') { echo 'selected'; } ?>>Zamboanga Del Sur</option>
                    </select>
                    <?php
                    if(isset($_POST['province']) && !validate_field($_POST['province'])){
                    ?>
                    <p class="text-danger my-1">Please select Province.</p>
                    <?php
                    }
                    ?>
                </div>
                    
                <div>
                    <select name="city" id="city" class="form-select mb-2" style="font-size: 10px;">
                        <option value="">Select City</option>
                        <option value="Zambo City" <?php if(isset($_POST['city']) && $_POST['city'] == 'Zambo City') { echo 'selected'; } ?>>Zamboanga City</option>
                    </select>
                    <?php
                    if(isset($_POST['city']) && !validate_field($_POST['city'])){
                    ?>
                    <p class="text-danger my-1">Please select City.</p>
                    <?php
                    }
                    ?>
                </div>

                <div>
                    <select name="barangay" id="barangay" class="form-select mb-2" style="font-size: 10px;">
                        <option value="">Select Barangay</option>
                        <option value="arenablanco" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'arenablanco') { echo 'selected'; } ?>>Arena Blanco</option>
                        <option value="ayala" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'ayala') { echo 'selected'; } ?>>Ayala</option>
                        <option value="baliwasan" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'baliwasan') { echo 'selected'; } ?>>Baliwasan</option>
                        <option value="baluno" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'baluno') { echo 'selected'; } ?>>Baluno</option>
                        <option value="zone1" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'zone1') { echo 'selected'; } ?>>Barangay Zone 1</option>
                        <option value="zone2" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'zone2') { echo 'selected'; } ?>>Barangay Zone 2</option>
                        <option value="zone3" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'zone3') { echo 'selected'; } ?>>Barangay Zone 3</option>
                        <option value="zone4" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'zone4') { echo 'selected'; } ?>>Barangay Zone 4</option>
                        <option value="boalan" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'boalan') { echo 'selected'; } ?>>Boalan</option>
                        <option value="bolong" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'bolong') { echo 'selected'; } ?>>Bolong</option>
                        <option value="buenavista" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'buenavista') { echo 'selected'; } ?>>Buenavista</option>
                        <option value="bunguiao" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'bunguiao') { echo 'selected'; } ?>>Bunguiao</option>
                        <option value="busay" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'busay') { echo 'selected'; } ?>>Busay</option>
                        <option value="cabaluay" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'cabaluay') { echo 'selected'; } ?>>Cabaluay</option>
                        <option value="cabatangan" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'cabatangan') { echo 'selected'; } ?>>Cabatangan</option>
                        <option value="cacao" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'cacao') { echo 'selected'; } ?>>Cacao</option>
                        <option value="calabasa" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'calabasa') { echo 'selected'; } ?>>Calabasa</option>
                        <option value="calarian" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'calarian') { echo 'selected'; } ?>>Calarian</option>
                        <option value="caminonuevo" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'caminonuevo') { echo 'selected'; } ?>>Camino Nuevo</option>
                        <option value="capisan" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'capisan') { echo 'selected'; } ?>>Capisan</option>
                        <option value="canelar" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'canelar') { echo 'selected'; } ?>>Canelar</option>
                        <option value="cawit" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'cawit') { echo 'selected'; } ?>>Cawit</option>
                        <option value="culianan" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'culianan') { echo 'selected'; } ?>>Culianan</option>
                        <option value="curuan" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'curuan') { echo 'selected'; } ?>>Curuan</option>
                        <option value="dita" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'dita') { echo 'selected'; } ?>>Cabatangan</option>
                        <option value="divisoria" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'divisoria') { echo 'selected'; } ?>>Divisoria</option>
                        <option value="dulian" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'dulian') { echo 'selected'; } ?>>Dulian</option>
                        <option value="guisao" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'guisao') { echo 'selected'; } ?>>Guisao</option>
                        <option value="guiwan" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'guiwan') { echo 'selected'; } ?>>Guiwan</option>
                        <option value="kasanyangan" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'kasanyangan') { echo 'selected'; } ?>>Kasanyangan</option>
                        <option value="lapaz" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'lapaz') { echo 'selected'; } ?>>La Paz</option>
                        <option value="labuan" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'labuan') { echo 'selected'; } ?>>Labuan</option>
                        <option value="lamisahan" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'lamisahan') { echo 'selected'; } ?>>Lamisahan</option>
                        <option value="landanggua" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'landanggua') { echo 'selected'; } ?>>Landanggua</option>
                        <option value="landanglaum" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'landanglaum') { echo 'selected'; } ?>>Landanglaum</option>
                        <option value="lanzones" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'lanzones') { echo 'selected'; } ?>>Lanzones</option>
                        <option value="lapakan" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'lapakan') { echo 'selected'; } ?>>Lapakan</option>
                        <option value="licomo" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'licomo') { echo 'selected'; } ?>>Licomo</option>
                        <option value="latuan" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'latuan') { echo 'selected'; } ?>>Latuan</option>
                        <option value="limpapa" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'limpapa') { echo 'selected'; } ?>>Limpapa</option>
                        <option value="lubigan" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'lubigan') { echo 'selected'; } ?>>Lubigan</option>
                        <option value="lumayang" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'lumayang') { echo 'selected'; } ?>>Lumayang</option>
                        <option value="lumbangan" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'lumbangan') { echo 'selected'; } ?>>Lumbangan</option>
                        <option value="lunzuran" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'lunzuran') { echo 'selected'; } ?>>Lunzuran</option>
                        <option value="maasin" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'maasin') { echo 'selected'; } ?>>Maasin</option>
                        <option value="malagutay" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'malagutay') { echo 'selected'; } ?>>Malagutay</option>
                        <option value="mampang" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'mampang') { echo 'selected'; } ?>>Mampang</option>
                        <option value="manalita" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'manalita') { echo 'selected'; } ?>>Manalita</option>
                        <option value="mangusu" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'mangusu') { echo 'selected'; } ?>>Mangusu</option>
                        <option value="manicahan" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'manicahan') { echo 'selected'; } ?>>Manicahan</option>
                        <option value="mariki" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'mariki') { echo 'selected'; } ?>>Mariki</option>
                        <option value="mercedes" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'mercedes') { echo 'selected'; } ?>>Mercedes</option>
                        <option value="muti" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'muti') { echo 'selected'; } ?>>Muti</option>
                        <option value="pamucutan" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'pamucutan') { echo 'selected'; } ?>>Pamucutan</option>
                        <option value="pangapuyan" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'pangapuyan') { echo 'selected'; } ?>>Pangapuyan</option>
                        <option value="panubigan" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'panubigan') { echo 'selected'; } ?>>Panubigan</option>
                        <option value="pasilmanta" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'pasilmanta') { echo 'selected'; } ?>>Pasilmanta</option>
                        <option value="pasobolong" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'pasobolong') { echo 'selected'; } ?>>Pasobolong</option>
                        <option value="pasonanca" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'pasonanca') { echo 'selected'; } ?>>Pasonanca</option>
                        <option value="patalon" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'patalon') { echo 'selected'; } ?>>Patalon</option>
                        <option value="putik" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'putik') { echo 'selected'; } ?>>Putik</option>
                        <option value="quiniput" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'quiniput') { echo 'selected'; } ?>>Quiniput</option>
                        <option value="recodo" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'recodo') { echo 'selected'; } ?>>recodo</option>
                        <option value="riohondo" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'riohondo') { echo 'selected'; } ?>>Rio Hondo</option>
                        <option value="salaan" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'salaan') { echo 'selected'; } ?>>Salaan</option>
                        <option value="cawacawa" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'cawacawa') { echo 'selected'; } ?>>San Jose Cawa-Cawa</option>
                        <option value="gusu" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'gusu') { echo 'selected'; } ?>>San Jose Gusu</option>
                        <option value="sanroque" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'sanroque') { echo 'selected'; } ?>>San Roque</option>
                        <option value="sangali" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'sangali') { echo 'selected'; } ?>>Sangali</option>
                        <option value="stabarbara" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'stabarbara') { echo 'selected'; } ?>>Santa Barbara</option>
                        <option value="stacatalina" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'stacatalina') { echo 'selected'; } ?>>Santa Catalina</option>
                        <option value="stamaria" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'stamaria') { echo 'selected'; } ?>>Santa Maria</option>
                        <option value="stonino" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'stonino') { echo 'selected'; } ?>>Santo Nino</option>
                        <option value="sibulao" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'sibulao') { echo 'selected'; } ?>>Sibulao</option>
                        <option value="sinubong" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'sinubong') { echo 'selected'; } ?>>Sinubong</option>
                        <option value="sinunuc" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'sinunuc') { echo 'selected'; } ?>>Sinunuc</option>
                        <option value="tagasilay" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'tagasilay') { echo 'selected'; } ?>>Tagasilay</option>
                        <option value="taguiti" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'taguiti') { echo 'selected'; } ?>>Taguiti</option>
                        <option value="talabaan" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'talabaan') { echo 'selected'; } ?>>Talabaan</option>
                        <option value="talisayan" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'talisayan') { echo 'selected'; } ?>>Talisayan</option>
                        <option value="talontalon" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'talontalon') { echo 'selected'; } ?>>Talontalon</option>
                        <option value="taluksangay" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'taluksangay') { echo 'selected'; } ?>>Taluksangay</option>
                        <option value="tetuan" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'tetuan') { echo 'selected'; } ?>>Tetuan</option>
                        <option value="tictapul" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'tictapul') { echo 'selected'; } ?>>Tictapul</option>
                        <option value="tigbalabag" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'tigbalabag') { echo 'selected'; } ?>>Tigbalabag</option>
                        <option value="tigtabon" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'tigtabon') { echo 'selected'; } ?>>Tigtabon</option>
                        <option value="tolosa" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'tolosa') { echo 'selected'; } ?>>Tolosa</option>
                        <option value="tubgbungan" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'tubgbungan') { echo 'selected'; } ?>>Tubgbungan</option>
                        <option value="tulungatung" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'tulungatung') { echo 'selected'; } ?>>Tulungatung</option>
                        <option value="tumaga" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'tumaga') { echo 'selected'; } ?>>Tumaga</option>
                        <option value="tumalutab" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'tumalutab') { echo 'selected'; } ?>>Tumalutab</option>
                        <option value="tumitus" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'tumitus') { echo 'selected'; } ?>>Tumitus</option>
                        <option value="victoria" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'victoria') { echo 'selected'; } ?>>Victoria</option>
                        <option value="vitali" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'vitali') { echo 'selected'; } ?>>Vitali</option>
                        <option value="zambowood" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'zambowood') { echo 'selected'; } ?>>Zambowood</option>
                    </select>    
                    <?php
                    if(isset($_POST['barangay']) && !validate_field($_POST['barangay'])){
                    ?>
                    <p class="text-danger my-1">Please select Barangay.</p>
                    <?php
                    }
                    ?>
                </div>
                <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Enter Zip code" style="font-size: 10px;" value="<?php if(isset($_POST['zipcode'])){ echo $_POST['zipcode']; } ?>">
                <?php
                if(isset($_POST['zipcode']) && !validate_field($_POST['zipcode'])){
                ?>
                <p class="text-danger my-1">Please enter valid Zip code.</p>
                <?php
                }
                ?>
            </div>
            <div class="mb-2" style="font-size: 12px;">
                <label for="contactnumber" class="form-label">Contact number:</label>
                <input type="text" class="form-control" id="contactnumber" name="contactnumber" placeholder="Enter contact no." style="font-size: 10px;" value="<?php if(isset($_POST['contactnumber'])){echo $_POST['contactnumber'];} ?>">
                <?php
                if(isset($_POST['contactnumber']) && !validate_contact($_POST['contactnumber'])){
                ?>
                <p class="text-danger my-1">Please enter valid phone number.</p>
                <?php
                }
                ?>
            </div>
            <div class="mb-2" style="font-size: 12px;">
                <label for="email" class="form-label">Email <i>(Optional)</i></label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter email" style="font-size: 10px;" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>">
                <?php
                if(isset($_POST['company']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                ?>
                <div class="invalid-feedback d-block">
                    Email already exists, try different email.
                </div>
                <?php
                }
                ?>
            </div>
            <div class="mb-2" style="font-size: 12px;">
                <label for="contactpersonname" class="form-label">Contact person's Name:</label>
                <input type="text" class="form-control mb-2" id="contactpersonname" name="contactpersonname" placeholder="Enter contact person's name" style="font-size: 10px;" value="<?php if(isset($_POST['contactpersonname'])){echo $_POST['contactpersonname'];} ?>">
                <?php
                if(isset($_POST['contactpersonname']) && !validate_field($_POST['contactpersonname'])){
                ?>
                <p class="text-danger my-1">Please enter valid Contact Person's Name.</p>
                <?php
                }
                ?>
            </div>
            <div class="mb-2" style="font-size: 12px;">
                <label for="contactpersonposition" class="form-label">Contact Person's Position:</label>
                <input type="text" class="form-control mb-2" id="contactpersonposition" name="contactpersonposition" placeholder="Enter contact person's position" style="font-size: 10px;" value="<?php if(isset($_POST['contactpersonposition'])){echo $_POST['contactpersonposition'];} ?>">
                <?php
                if(isset($_POST['contactpersonposition']) && !validate_field($_POST['contactpersonposition'])){
                ?>
                <p class="text-danger my-1">Please enter valid Contact Person's Position.</p>
                <?php
                }
                ?>
            </div>
            <div class="mb-2" style="font-size: 12px;">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" style="font-size: 10px;" value="<?php if(isset($_POST['password'])){echo $_POST['password'];} ?>">
                <?php
                if(isset($_POST['password']) && validate_password($_POST['password']) !== "success"){
                ?>
                <p class="text-danger my-1"><?= validate_password($_POST['password']) ?></p>
                <?php
                }
                ?>
            </div>
            <div class="mb-2" style="font-size: 12px;">
                <label for="confirmpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Reconfirm password" style="font-size: 10px;" value="<?php if(isset($_POST['confirmpassword'])){echo $_POST['confirmpassword'];} ?>">
                <?php
                if(isset($_POST['password']) && isset($_POST['confirmpassword']) && !validate_cpw($_POST['password'], $_POST['confirmpassword'])){
                ?>
                <p class="text-danger my-1">Your confirm password didn't match.</p>
                <?php
                }
                ?>
            </div><br>
            <div class="mt-5 text-center"><b>Fill out vehicle details</b></div><br>
            <div id="vehicleForm" style="border-top: 2px groove gray;">
                <div class="mb-2" style="font-size: 12px;">
                    <label for="vehicletype" class="form-label pt-3"><b>Vehicle Type:</b></label>
                    <select name="vehicletype[]" id="vehicletype" class="form-select mb-2" style="font-size: 10px;" required >
                        <option value="">Select Vehicle Type</option>
                        <option value="motorcycle">Motorcycle</option>
                        <option value="tricycle">Tricycle</option>
                        <option value="car">Car</option>
                        <option value="van">Van</option>
                        <option value="bus">Bus</option>
                        <option value="lightcommercialvehicle">Light Commercial Vehicle</option>
                    </select>
                </div>
                <div class="mb-2" style="font-size: 12px;">
                    <label for="platenumber" class="form-label"><b>Plate Number:</b></label>
                    <input type="text" class="form-control" id="platenumber" name="platenumber[]" placeholder="Enter Plate Number" required style="font-size: 10px;">
                </div>
                <div class="mb-2 pb-3" style="font-size: 12px;"><b>Vehicle description:</b><br>
                    <div>
                        <label for="model" class="form-label"  style="font-size: 10px;">Model</label>
                        <input type="text" class="form-control mb-2" id="model" name="model[]" placeholder="Enter vehicle model" required style="font-size: 10px;">
                    </div>
                    <div>
                        <label for="color" class="form-label"  style="font-size: 10px;">Color</label>
                        <input type="text" class="form-control" id="color" name="color[]" placeholder="Enter vehicle color" required style="font-size: 10px;">
                    </div>
                </div>
            </div>      
            <div id="additionalFieldsContainer"></div>  
            <button class="container" type="button" onclick="addMore()" style="background-color: #47B5FF;color: White; font-size: 12px; border: none; border-radius: 3px; margin-bottom: 5px; padding: 3px 0; text-align: center;">Add more</button>
        
            <div class="mt-5 text-center"><b>ID Verification</b></div><br>
            <div class="mt-3" style="border-top: 2px groove gray;"></div><br>
            <div class="mb-3 text-center" style="font-size: 12px;"><b>Choose your ID for verification</b></div>
            <div class="mb-2" style="display: flex; justify-content: space-between;">
                <div class="d-flex flex-start" style="font-size: 12px;"><b>Accepted ID's </b></div>
                <div class="d-flex flex-end"><i class="fa fa-id-card-o" aria-hidden="true"></i></div>
            </div>
            <div class="mb-2">
                <button type="button" class="container py-2 px-0 d-flex justify-content-between align-items-center" style="border: none; background-color: white; font-size: 12px;" data-bs-toggle="modal" data-bs-target="#driverslicense">
                    Driver's License <i style="color: black;" class="fa fa-angle-right" aria-hidden="true"></i>
                </button>
                <div class="modal fade" id="driverslicense" aria-hidden="true" aria-labelledby="driverslicenseLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" style="font-size: 12px;" id="driverslicenseLabel">Driver's License</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center"><b></b></div>
                                <div>
                                    <div class="text-center"><b>Account Verification</b></div><br>
                                    <div class="text-center" style="font-size: 12px;">Sample ID</div><br>
                                    <div style="display: flex; justify-content: space-around; flex-direction: column; align-items: center;">
                                        <img src="../img/DL-front.jpg" height="120px" width="200px" alt="">
                                    </div>
                                    <br><br>
                                    <div style="border: 1px groove grey; border-radius: 10px; padding: 10px;">
                                        <i class="fa fa-id-card-o" aria-hidden="true"></i><b style="font-size: 12px;">   Driver's License ID</b><br>
                                        <i style="font-size: 10px;"> makesure to follow these tips!</i><br><br>
                                        <div>
                                            <div style="font-size: 10px;"><i class="fa fa-dot-circle-o" style="margin-right: 10px;" aria-hidden="true"></i>   Words/letters written should be clear and readable. </div>
                                            <div style="font-size: 10px;"><i class="fa fa-dot-circle-o" style="margin-right: 10px;" aria-hidden="true"></i>   Take a photo of your real and valid ID, not photocopied. </div>
                                            <div style="font-size: 10px;"><i class="fa fa-dot-circle-o" style="margin-right: 10px;" aria-hidden="true"></i>   Personal Information on th ID should be correct and complete. </div><br>
                                            <div class="text-center"><button style="font-size: 12px; border: 1px solid black; border-radius: 20px; padding: 5px 0; text-align: center; width: 200px;" type="button"  data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Select ID</button></div>
                                        </div>
                                    </div><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="driverslicenseLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" style="font-size: 12px;" id="driverslicenseLabel">Driver's License</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="container modal-body">
                                <video id="video" class="container" autoplay></video>
                                <button class="container" id="capture-btn" style="border: none; background-color: white;"><i class="fa fa-dot-circle-o fa-3x" aria-hidden="true"></i></button>
                                <canvas id="canvas" style="display:none;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="button" class="container py-2 px-0 d-flex justify-content-between align-items-center" style="border: none; background-color: white; font-size: 12px;" data-bs-toggle="modal" data-bs-target="#umid">
                    UMID <i style="color: black;" class="fa fa-angle-right" aria-hidden="true"></i>
                </button>
                <!-- Modal -->
                <div class="modal fade" id="umid" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" style="font-size: 12px;" id="staticBackdropLabel">UMID ID</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center"><b></b></div>
                                <div>
                                    <div class="text-center"><b>Account Verification</b></div><br>
                                    <div class="text-center" style="font-size: 12px;">Sample ID</div><br>
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
                                            <div class="text-center"><button style="font-size: 12px; border: 1px solid black; border-radius: 20px; padding: 5px 0; text-align: center; width: 200px;" type="button" data-bs-target="#umidtoggle" data-bs-toggle="modal" data-bs-dismiss="modal">Select ID</button></div>
                                        </div>
                                    </div><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="umidtoggle" aria-hidden="true" aria-labelledby="umidLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" style="font-size: 12px;" id="umidLabel">UMID ID</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="container modal-body">
                                <video id="video" class="container" autoplay></video>
                                <button class="container" id="capture-btn" style="border: none; background-color: white;"><i class="fa fa-dot-circle-o fa-3x" aria-hidden="true"></i></button>
                                <canvas id="canvas" style="display:none;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="button" class="container py-2 px-0 d-flex justify-content-between align-items-center" style="border: none; background-color: white; font-size: 12px;" data-bs-toggle="modal" data-bs-target="#postal">
                Postal ID <i style="color: black;" class="fa fa-angle-right" aria-hidden="true"></i>
                </button>
                <!-- Modal -->
                <div class="modal fade" id="postal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" style="font-size: 12px;" id="staticBackdropLabel">Postal ID</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center"><b></b></div>
                                <div>
                                    <div class="text-center"><b>Account Verification</b></div><br>
                                    <div class="text-center" style="font-size: 12px;">Sample ID</div><br>
                                    <div style="display: flex; justify-content: space-around; flex-direction: column; align-items: center;">
                                        <img src="../img/postal-front.jpg" height="120px" width="200px" alt="">
                                    </div>
                                    <br><br>
                                    <div style="border: 1px groove grey; border-radius: 10px; padding: 10px;">
                                        <i class="fa fa-id-card-o" aria-hidden="true"></i><b style="font-size: 12px;">  Postal ID ID</b><br>
                                        <i style="font-size: 10px;"> makesure to follow these tips!</i><br><br>
                                        <div>
                                            <div style="font-size: 10px;"><i class="fa fa-dot-circle-o" style="margin-right: 10px;" aria-hidden="true"></i>   Words/letters written should be clear and readable. </div>
                                            <div style="font-size: 10px;"><i class="fa fa-dot-circle-o" style="margin-right: 10px;" aria-hidden="true"></i>   Take a photo of your real and valid ID, not photocopied. </div>
                                            <div style="font-size: 10px;"><i class="fa fa-dot-circle-o" style="margin-right: 10px;" aria-hidden="true"></i>   Personal Information on th ID should be correct and complete. </div><br>
                                            <div class="text-center"><button style="font-size: 12px; border: 1px solid black; border-radius: 20px; padding: 5px 0; text-align: center; width: 200px;" type="button" data-bs-target="#postaltoggle" data-bs-toggle="modal" data-bs-dismiss="modal">Select ID</button></div>
                                        </div>
                                    </div><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="postaltoggle" aria-hidden="true" aria-labelledby="postalLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" style="font-size: 12px;" id="postalLabel">Postal ID</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="container modal-body">
                                <video id="video" class="container" autoplay></video>
                                <button class="container" id="capture-btn" style="border: none; background-color: white;"><i class="fa fa-dot-circle-o fa-3x" aria-hidden="true"></i></button>
                                <canvas id="canvas" style="display:none;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="container py-2 px-0 d-flex justify-content-between align-items-center" style="border: none; background-color: white; font-size: 12px;" data-bs-toggle="modal" data-bs-target="#passport">
                Passport ID <i style="color: black;" class="fa fa-angle-right" aria-hidden="true"></i>
                </button>
                <!-- Modal -->
                <div class="modal fade" id="passport" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" style="font-size: 12px;" id="staticBackdropLabel">Passport ID</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center"><b></b></div>
                                <div>
                                    <div class="text-center"><b>Account Verification</b></div><br>
                                    <div class="text-center" style="font-size: 12px;">Sample ID</div><br>
                                    <div style="display: flex; justify-content: space-around; flex-direction: column; align-items: center;">
                                        <img src="../img/passport-front.png" height="120px" width="200px" alt="">
                                    </div>
                                    <br><br>
                                    <div style="border: 1px groove grey; border-radius: 10px; padding: 10px;">
                                        <i class="fa fa-id-card-o" aria-hidden="true"></i><b style="font-size: 12px;">  Passport ID</b><br>
                                        <i style="font-size: 10px;"> makesure to follow these tips!</i><br><br>
                                        <div>
                                            <div style="font-size: 10px;"><i class="fa fa-dot-circle-o" style="margin-right: 10px;" aria-hidden="true"></i>   Words/letters written should be clear and readable. </div>
                                            <div style="font-size: 10px;"><i class="fa fa-dot-circle-o" style="margin-right: 10px;" aria-hidden="true"></i>   Take a photo of your real and valid ID, not photocopied. </div>
                                            <div style="font-size: 10px;"><i class="fa fa-dot-circle-o" style="margin-right: 10px;" aria-hidden="true"></i>   Personal Information on th ID should be correct and complete. </div><br>
                                            <div class="text-center"><button style="font-size: 12px; border: 1px solid black; border-radius: 20px; padding: 5px 0; text-align: center; width: 200px;" type="button" data-bs-target="#passporttoggle" data-bs-toggle="modal" data-bs-dismiss="modal">Select ID</button></div>
                                        </div>
                                    </div><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="passporttoggle" aria-hidden="true" aria-labelledby="passportLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" style="font-size: 12px;" id="passportLabel">Passport ID</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="container modal-body">
                                <video id="video" class="container" autoplay></video>
                                <button class="container" id="capture-btn" style="border: none; background-color: white;"><i class="fa fa-dot-circle-o fa-3x" aria-hidden="true"></i></button>
                                <canvas id="canvas" style="display:none;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="container py-2 px-0 d-flex justify-content-between align-items-center" style="border: none; background-color: white; font-size: 12px;" data-bs-toggle="modal" data-bs-target="#sss">
                SSS ID <i style="color: black;" class="fa fa-angle-right" aria-hidden="true"></i>
                </button>
                <!-- Modal -->
                <div class="modal fade" id="sss" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" style="font-size: 12px;" id="staticBackdropLabel">SSS ID</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center"><b></b></div>
                                <div>
                                    <div class="text-center"><b>Account Verification</b></div><br>
                                    <div class="text-center" style="font-size: 12px;">Sample ID</div><br>
                                    <div style="display: flex; justify-content: space-around; flex-direction: column; align-items: center;">
                                        <img src="../img/sss-front.jpg" height="120px" width="200px" alt="">
                                    </div>
                                    <br><br>
                                    <div style="border: 1px groove grey; border-radius: 10px; padding: 10px;">
                                        <i class="fa fa-id-card-o" aria-hidden="true"></i><b style="font-size: 12px;">  SSS ID</b><br>
                                        <i style="font-size: 10px;"> make sure to follow these tips!</i><br><br>
                                        <div>
                                            <div style="font-size: 10px;"><i class="fa fa-dot-circle-o" style="margin-right: 10px;" aria-hidden="true"></i>   Words/letters written should be clear and readable. </div>
                                            <div style="font-size: 10px;"><i class="fa fa-dot-circle-o" style="margin-right: 10px;" aria-hidden="true"></i>   Take a photo of your real and valid ID, not photocopied. </div>
                                            <div style="font-size: 10px;"><i class="fa fa-dot-circle-o" style="margin-right: 10px;" aria-hidden="true"></i>   Personal Information on th ID should be correct and complete. </div><br>
                                            <div class="text-center"><button style="font-size: 12px; border: 1px solid black; border-radius: 20px; padding: 5px 0; text-align: center; width: 200px;" type="button" data-bs-target="#ssstoggle" data-bs-toggle="modal" data-bs-dismiss="modal">Select ID</button></div>
                                        </div>
                                    </div><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="ssstoggle" aria-hidden="true" aria-labelledby="sssLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" style="font-size: 12px;" id="sssLabel">SSS ID</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="container modal-body">
                                <video id="video" class="container" autoplay></video>
                                <button class="container" id="capture-btn" style="border: none; background-color: white;"><i class="fa fa-dot-circle-o fa-3x" aria-hidden="true"></i></button>
                                <canvas id="canvas" style="display:none;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="container py-2 px-0 d-flex justify-content-between align-items-center" style="border: none; background-color: white; font-size: 12px;" data-bs-toggle="modal" data-bs-target="#prc">
                PRC ID <i style="color: black;" class="fa fa-angle-right" aria-hidden="true"></i>
                </button>
                <!-- Modal -->
                <div class="modal fade" id="prc" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" style="font-size: 12px;" id="staticBackdropLabel">PRC ID</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center"><b></b></div>
                                <div>
                                    <div class="text-center"><b>Account Verification</b></div><br>
                                    <div class="text-center" style="font-size: 12px;">Sample ID</div><br>
                                    <div style="display: flex; justify-content: space-around; flex-direction: column; align-items: center;">
                                        <img src="../img/prc.jpg" height="120px" width="200px" alt="">
                                    </div>
                                    <br><br>
                                    <div style="border: 1px groove grey; border-radius: 10px; padding: 10px;">
                                        <i class="fa fa-id-card-o" aria-hidden="true"></i><b style="font-size: 12px;">  PRC ID</b><br>
                                        <i style="font-size: 10px;"> makesure to follow these tips!</i><br><br>
                                        <div>
                                            <div style="font-size: 10px;"><i class="fa fa-dot-circle-o" style="margin-right: 10px;" aria-hidden="true"></i>   Words/letters written should be clear and readable. </div>
                                            <div style="font-size: 10px;"><i class="fa fa-dot-circle-o" style="margin-right: 10px;" aria-hidden="true"></i>   Take a photo of your real and valid ID, not photocopied. </div>
                                            <div style="font-size: 10px;"><i class="fa fa-dot-circle-o" style="margin-right: 10px;" aria-hidden="true"></i>   Personal Information on th ID should be correct and complete. </div><br>
                                            <div class="text-center"><button style="font-size: 12px; border: 1px solid black; border-radius: 20px; padding: 5px 0; text-align: center; width: 200px;" type="button" data-bs-target="#prctoggle" data-bs-toggle="modal" data-bs-dismiss="modal">Select ID</button></div>
                                        </div>
                                    </div><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="prctoggle" aria-hidden="true" aria-labelledby="prcLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" style="font-size: 12px;" id="prcLabel">PRC ID</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="container modal-body">
                                <video id="video" class="container" autoplay></video>
                                <button class="container" id="capture-btn" style="border: none; background-color: white;"><i class="fa fa-dot-circle-o fa-3x" aria-hidden="true"></i></button>
                                <canvas id="canvas" style="display:none;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="container py-2 px-0 d-flex justify-content-between align-items-center" style="border: none; background-color: white; font-size: 12px;" data-bs-toggle="modal" data-bs-target="#pagibig">
                HDMF (Pag-ibig ID) <i style="color: black;" class="fa fa-angle-right" aria-hidden="true"></i>
                </button>
                <!-- Modal -->
                <div class="modal fade" id="pagibig" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" style="font-size: 12px;" id="staticBackdropLabel">HDMF (Pag-ibig ID)</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center"><b></b></div>
                                <div>
                                    <div class="text-center"><b>Account Verification</b></div><br>
                                    <div class="text-center" style="font-size: 12px;">Sample ID</div><br>
                                    <div style="display: flex; justify-content: space-around; flex-direction: column; align-items: center;">
                                        <img src="../img/HDMF.png" height="120px" width="200px" alt="">
                                    </div>
                                    <br><br>
                                    <div style="border: 1px groove grey; border-radius: 10px; padding: 10px;">
                                        <i class="fa fa-id-card-o" aria-hidden="true"></i><b style="font-size: 12px;">  HDMF (Pag-ibig ID)</b><br>
                                        <i style="font-size: 10px;"> makesure to follow these tips!</i><br><br>
                                        <div>
                                            <div style="font-size: 10px;"><i class="fa fa-dot-circle-o" style="margin-right: 10px;" aria-hidden="true"></i>   Words/letters written should be clear and readable. </div>
                                            <div style="font-size: 10px;"><i class="fa fa-dot-circle-o" style="margin-right: 10px;" aria-hidden="true"></i>   Take a photo of your real and valid ID, not photocopied. </div>
                                            <div style="font-size: 10px;"><i class="fa fa-dot-circle-o" style="margin-right: 10px;" aria-hidden="true"></i>   Personal Information on th ID should be correct and complete. </div><br>
                                            <div class="text-center"><button style="font-size: 12px; border: 1px solid black; border-radius: 20px; padding: 5px 0; text-align: center; width: 200px;" type="button" data-bs-target="#pagibigtoggle" data-bs-toggle="modal" data-bs-dismiss="modal">Select ID</button></div>
                                        </div>
                                    </div><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="pagibigtoggle" aria-hidden="true" aria-labelledby="pagibigLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" style="font-size: 12px;" id="pagibigLabel">Pag-ibig ID</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="container modal-body">
                                <video id="video" class="container" autoplay></video>
                                <button class="container" id="capture-btn" style="border: none; background-color: white;"><i class="fa fa-dot-circle-o fa-3x" aria-hidden="true"></i></button>
                                <canvas id="canvas" style="display:none;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="container py-2 px-0 d-flex justify-content-between align-items-center" style="border: none; background-color: white; font-size: 12px;" data-bs-toggle="modal" data-bs-target="#national">
                National ID <i style="color: black;" class="fa fa-angle-right" aria-hidden="true"></i>
                </button>
                <!-- Modal -->
                <div class="modal fade" id="national" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" style="font-size: 12px;" id="staticBackdropLabel">National ID</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center"><b></b></div>
                                <div>
                                    <div class="text-center"><b>Account Verification</b></div><br>
                                    <div class="text-center" style="font-size: 12px;">Sample ID</div><br>
                                    <div style="display: flex; justify-content: space-around; flex-direction: column; align-items: center;">
                                        <img src="../img/passport-front.png" height="120px" width="200px" alt="">
                                    </div>
                                    <br><br>
                                    <div style="border: 1px groove grey; border-radius: 10px; padding: 10px;">
                                        <i class="fa fa-id-card-o" aria-hidden="true"></i><b style="font-size: 12px;">  National ID</b><br>
                                        <i style="font-size: 10px;"> makesure to follow these tips!</i><br><br>
                                        <div>
                                            <div style="font-size: 10px;"><i class="fa fa-dot-circle-o" style="margin-right: 10px;" aria-hidden="true"></i>   Words/letters written should be clear and readable. </div>
                                            <div style="font-size: 10px;"><i class="fa fa-dot-circle-o" style="margin-right: 10px;" aria-hidden="true"></i>   Take a photo of your real and valid ID, not photocopied. </div>
                                            <div style="font-size: 10px;"><i class="fa fa-dot-circle-o" style="margin-right: 10px;" aria-hidden="true"></i>   Personal Information on th ID should be correct and complete. </div><br>
                                            <div class="text-center"><button style="font-size: 12px; border: 1px solid black; border-radius: 20px; padding: 5px 0; text-align: center; width: 200px;" type="button" data-bs-target="#nationaltoggle" data-bs-toggle="modal" data-bs-dismiss="modal">Select ID</button></div>
                                        </div>
                                    </div><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="nationaltoggle" aria-hidden="true" aria-labelledby="nationalLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" style="font-size: 12px;" id="nationalLabel">National ID</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="container modal-body">
                                <video id="video" class="container" autoplay></video>
                                <button class="container" id="capture-btn" style="border: none; background-color: white;"><i class="fa fa-dot-circle-o fa-3x" aria-hidden="true"></i></button>
                                <canvas id="canvas" style="display:none;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="container" style="background-color: #1363DF;color: White; font-size: 12px; border: none; border-radius: 3px; margin-bottom: 5px; padding: 5px 0; text-align: center;">Sign up</button>
        </form>
        <div class="container">
            <br><div class="text-center" style="font-size: 12px;">Or sign up with</div><br>
            <div class="text-center" style="font-size: 12px; border: 0.1px groove; padding: 3px; margin-bottom: 10px;"><img src="../img/googleicon.jpg" height="25" width="25" alt=""> Sign in with google</div>
            <div class="text-center" style="font-size: 12px; border: 0.1px groove; padding: 3px;"><img src="../img/fbicon.png" height="25" width="25" alt=""> Sign in with Facebook</div><br><br>
            <div class="text-center" style="font-size: 12px;">Already have an account? <a href="signin.php" style="font-size: 12px; color: black;">Sign In</a></div><br><br>
        </div>
    </div>
    <?php
    require_once('./include/js.php');
    ?>
</body>
</html>