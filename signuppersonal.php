<?php

    require_once './classes/personal.class.php';
    require_once  './tools/functions.php';

    if(isset($_POST['personal'])){

        $account = new Personal();
        //sanitize
        $account->firstname = htmlentities($_POST['firstname']);
        $account->middlename = htmlentities($_POST['middlename']);
        $account->lastname = htmlentities($_POST['lastname']);
        $account->birthday = htmlentities($_POST['birthday']);
        $account->barangay = htmlentities($_POST['barangay']);
        $account->city = htmlentities($_POST['city']);
        $account->province = htmlentities($_POST['province']);
        $account->zipcode = htmlentities($_POST['zipcode']);
        $account->contactnumber = htmlentities($_POST['contactnumber']);
        $account->email = htmlentities($_POST['email']);
        $account->username = htmlentities($_POST['username']);
        $account->password = htmlentities($_POST['password']);
        $account->confirmpassword = htmlentities($_POST['confirmpassword']);
        if(isset($_POST['sex'])) {
            $account->sex = htmlentities($_POST['sex']);
        } else {
            $account->sex = ''; 
        }

        //validate
        if (validate_field($account->firstname) &&
        validate_field($account->lastname) &&
        validate_field($account->birthday) &&
        validate_field($account->sex) &&
        validate_field($account->barangay) &&
        validate_field($account->city) &&
        validate_field($account->province) &&
        validate_field($account->zipcode) &&
        validate_contact($account->contactnumber) &&
        validate_field($account->username) &&   
        validate_password($account->password) &&
        validate_cpw($account->password, $_POST['confirmpassword'])) {
            if($account-> add()){
                $message = 'Account successfully created! Please prceed to signing in.';
                header("Location: vehicledetails.php");
                die(); 
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
          if(isset($_POST['personal']) && isset($message)){
          ?>
            <div class="alert alert-success my-1 mb-3 text-center" style="font-size: 12px;" role="alert">
              <?= $message ?>
            </div>
          <?php
          }
          ?> 
        <div class="row">
            <form action="" method="post">
                <div class="mb-2 " style="font-size: 12px;">
                    <label for="firstname" class="form-label">First name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter firstname" style="font-size: 10px;" value="<?php if(isset($_POST['firstname'])){ echo $_POST['firstname']; } ?>">
                    <?php
                    if(isset($_POST['firstname']) && !validate_field($_POST['firstname'])){
                    ?>
                    <p class="text-danger my-1">Please enter valid First name.</p>
                    <?php
                    }
                    ?>
                </div>
                <div class="mb-2" style="font-size: 12px;">
                    <label for="middlename" class="form-label">Middle name <i>(Optional)</i></label>
                    <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Enter middlename" style="font-size: 10px;" value="<?php if(isset($_POST['middlename'])){ echo $_POST['middlename']; } ?>">
                </div>
                
                <div class="mb-2" style="font-size: 12px;">
                    <label for="lastname" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter lastname" style="font-size: 10px;" value="<?php if(isset($_POST['lastname'])){ echo $_POST['lastname']; } ?>">
                    <?php
                    if(isset($_POST['lastname']) && !validate_field($_POST['lastname'])){
                    ?>
                    <p class="text-danger my-1">Please enter valid Last name.</p>
                    <?php
                    }
                    ?>
                </div>
                <div class="mb-2" style="font-size: 12px;">
                    <label for="birthday"  class="form-label">Birth Date:</label>
                    <input type="date" class="form-control" id="birthday" name="birthday" style="font-size: 10px;" value="<?php if(isset($_POST['birthday'])){ echo $_POST['birthday']; } ?>">
                    <?php
                    if(isset($_POST['birthday']) && !validate_field($_POST['birthday'])){
                    ?>
                    <p class="text-danger my-1">Please enter valid Birth date.</p>
                    <?php
                    }
                    ?>
                </div>
                <div class="form-group mb-2" style="font-size: 12px;">
                    <label class="form-label">Sex:</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sex" id="male" value="male" <?php if(isset($_POST['sex']) && $_POST['sex'] == 'male') echo 'checked'; ?>>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sex" id="female" value="female" <?php if(isset($_POST['sex']) && $_POST['sex'] == 'female') echo 'checked'; ?>>
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    <?php
                    if(isset($_POST['personal']) && !validate_radio($_POST)){
                    ?>
                    <p class="text-danger my-1">Please select Sex.</p>
                    <?php
                    } 
                    ?>
                </div>

                <div class="mb-2" style="font-size: 12px;">
                    <label for="address" class="form-label">Address</label>
                    <div>
                        <select name="province" id="province" class="form-select mb-2" style="font-size: 10px;">
                            <option value="">Select Province</option>
                            <option value="delsur" <?php if(isset($_POST['province']) && $_POST['province'] == 'delsur') { echo 'selected'; } ?>>Zamboanga Del Sur</option>
                            <option value="delnorte" <?php if(isset($_POST['province']) && $_POST['province'] == 'delnorte') { echo 'selected'; } ?>>Zamboanga Del Norte</option>
                            <option value="sibugay" <?php if(isset($_POST['province']) && $_POST['province'] == 'sibugay') { echo 'selected'; } ?>>Zamboanga Sibugay</option>
                            <option value="isabela" <?php if(isset($_POST['province']) && $_POST['province'] == 'isabela') { echo 'selected'; } ?>>City of Isabela</option>
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
                            <option value="zambocity" <?php if(isset($_POST['city']) && $_POST['city'] == 'zambocity') { echo 'selected'; } ?>>Zamboanga City</option>
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
                            <option value="southcom" <?php if(isset($_POST['barangay']) && $_POST['barangay'] == 'southcom') { echo 'selected'; } ?>>Southcom Village</option>
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
                    <label for="contactnumber" class="form-label">Contact</label>
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
                </div>
                <div class="mb-2" style="font-size: 12px;">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Create unique username" style="font-size: 10px;" value="<?php if(isset($_POST['username'])){echo $_POST['username'];} ?>">
                    <?php
                    if(isset($_POST['username']) && !validate_field($_POST['username'])){
                    ?>
                    <div class="invalid-feedback d-block">
                        Please enter valid Username.
                    </div>
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
                </div>
                <button type="submit" name="personal" id="personal" style="background-color: #1363DF;color: White; font-size: 12px; border: none; border-radius: 3px; margin-bottom: 5px; padding: 10px 0; text-align: center; width: 200px;">Sign up</button>
            </form>
        </div>
        <br><div class="text-center" style="font-size: 12px;">Or sign up with</div><br>
        <div class="text-center" style="font-size: 12px; border: 0.1px groove; padding: 3px; margin-bottom: 10px;"><img src="../img/googleicon.jpg" height="25" width="25" alt=""> Sign in with google</div>
        <div class="text-center" style="font-size: 12px; border: 0.1px groove; padding: 3px;"><img src="../img/fbicon.png" height="25" width="25" alt=""> Sign in with Facebook</div><br>
        <div class="text-center" style="font-size: 12px;">Already have an account? <a href="signin.php" style="font-size: 12px; color: black;">Sign In</a></div>
    </div>
    <?php
    require_once('./include/js.php');
    ?>
</body>
</html>