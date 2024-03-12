<?php

    require_once './classes/company.class.php';
    require_once  './tools/functions.php';

    if(isset($_POST['company'])){

        $company = new Company();
        //sanitize
        $company->companyname = htmlentities($_POST['companyname']);
        $company->barangay = htmlentities($_POST['barangay']);
        $company->city = htmlentities($_POST['city']);
        $company->province = htmlentities($_POST['province']);
        $company->zipcode = htmlentities($_POST['zipcode']);
        $company->contactnumber = htmlentities($_POST['contactnumber']);
        $company->email = htmlentities($_POST['email']);
        $company->contactpersonname = htmlentities($_POST['contactpersonname']);
        $company->contactpersonposition = htmlentities($_POST['contactpersonposition']);
        $company->password = htmlentities($_POST['password']);
        $company->confirmpassword = htmlentities($_POST['confirmpassword']);

        //validate
        if (validate_field($company->companyname) &&
        validate_field($company->barangay) &&
        validate_field($company->city) &&
        validate_field($company->province) && 
        validate_field($company->zipcode) &&
        validate_field($company->contactnumber) &&
        validate_field($company->email) &&
        validate_field($company->contactpersonname) &&
        validate_field($company->contactpersonposition) &&
        validate_password($company->password) &&
        validate_cpw($company->password, $_POST['confirmpassword']) &&
        validate_email($company->email) && !$company->is_email_exist()){
            if($company-> add()){
                $message = 'Account successfully created! Please prceed to signing in.';
            }else{
                echo 'An error occured while adding in the database.';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Sign Up';
    $dashboard_page = 'active';
    require_once('./include/head.php');
?>
<body style="display: flex; justify-content:center; align-items:center;">
    <div>
        <div>
            <div class="text-center"><img src="../img/logobluee.png" height="100" width="100" alt=""></div>
            <div class="text-center">Sign in to your account</div><br>
        </div>
        <?php
          if(isset($_POST['company']) && isset($message)){
          ?>
           <div class="alert alert-success my-1 mb-3 text-center" style="font-size: 12px;" role="alert">
              <?= $message ?>
            </div>
          <?php
          }
          ?>
        <form action="" method="post">
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
                        <option value="Del Norte" <?php if(isset($_POST['province']) && $_POST['province'] == 'Del Norte') { echo 'selected'; } ?>>Zamboanga Del Norte</option>
                        <option value="Sibugay" <?php if(isset($_POST['province']) && $_POST['province'] == 'Sibugay') { echo 'selected'; } ?>>Zamboanga Sibugay</option>
                        <option value="Isabela" <?php if(isset($_POST['province']) && $_POST['province'] == 'Isabela') { echo 'selected'; } ?>>City of Isabela</option>
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
                        <option value="pagadiancity" <?php if(isset($_POST['city']) && $_POST['city'] == 'pagadiancity') { echo 'selected'; } ?>>Pagadian City</option>
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

            <button type="submit" name="company" style="background-color: #1363DF;color: White; font-size: 12px; border: none; border-radius: 3px; margin-bottom: 5px; padding: 10px 0; text-align: center; width: 200px;">Sign up</button>
            <div><button style="background-color: #E8E8E8; color: grey; font-size: 12px; border: none; border-radius: 3px; padding: 10px 0; text-align: center; width: 200px;" type="submit">Cancel</button></div>
        </form>
        <br><div class="text-center" style="font-size: 12px;">Or sign up with</div><br>
        <div class="text-center" style="font-size: 12px; border: 0.1px groove; padding: 3px; margin-bottom: 10px;"><img src="../img/googleicon.jpg" height="25" width="25" alt=""> Sign in with google</div>
        <div class="text-center" style="font-size: 12px; border: 0.1px groove; padding: 3px;"><img src="../img/fbicon.png" height="25" width="25" alt=""> Sign in with Facebook</div><br>
        <div class="text-center" style="font-size: 12px;">Already have an account? <a href="signin.php" style="font-size: 10px; color: black;">Sign In</a></div>
    </div>
</body>
</html>