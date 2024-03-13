<?php
    // Assuming you have session management in place and the user's ID is stored in $_SESSION['user_id']
    session_start();

    require_once './classes/signin.class.php';

    // Ensure user is logged in and the user ID is available in the session
    if(!isset($_SESSION['user_id'])) {
        // Redirect to login page or handle unauthorized access
        header("Location: signin.php");
        exit();
    }


    require_once './classes/vehicles.class.php';
    require_once  './tools/functions.php';

    if(isset($_POST['vehicle'])){
        $vehicle = new Vehicle();
    
        // Retrieve user ID from session
        $userId = $_SESSION['user_id'];
        // Ensure user is logged in and the user ID is available in the session
    if(!isset($_SESSION['user_id'])) {
        // Redirect to login page or handle unauthorized access
        header("Location: vehicledetails.php");
        exit();
    }
        // Assign user's ID to the vehicle
        $vehicle->account_ID = $userId; // Adjust property name to match your class definition
    
        // Sanitize and assign vehicle information
        $vehicle->vehicletype = htmlentities($_POST['vehicletype']);
        $vehicle->platenumber = htmlentities($_POST['platenumber']);
        $vehicle->model = htmlentities($_POST['model']);
        $vehicle->engine = htmlentities($_POST['engine']);
        $vehicle->transmission = htmlentities($_POST['transmission']);
        $vehicle->exterior = htmlentities($_POST['exterior']);
        $vehicle->bodystyle = htmlentities($_POST['bodystyle']);
        $vehicle->seating = htmlentities($_POST['seating']);
        $vehicle->interior = htmlentities($_POST['interior']);
    
        // Validate
        if (validate_field($vehicle->vehicletype) &&
            validate_field($vehicle->platenumber) &&
            validate_field($vehicle->model) &&
            validate_field($vehicle->engine) &&
            validate_field($vehicle->transmission) &&
            validate_field($vehicle->exterior) &&
            validate_field($vehicle->bodystyle) &&
            validate_field($vehicle->seating) &&
            validate_field($vehicle->interior)) {
    
            if($vehicle->add()){
                $message = 'Vehicle successfully added';
            } else {
                echo 'An error occurred while adding in the database.';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Vehicle Information';
    $dashboard_page = 'active';
    require_once('./includes/head.php');
?>
<body style="display: flex; justify-content:center; align-items:center;">
<div class="text-center"><b></b></div>
    <div>
        <div>
            <div class="text-center"><img src="../images/logobluee.png" height="100" width="100" alt=""></div>
            <div class="text-center"><b>For Renter</b></div><br>
        </div>
        <?php
          if(isset($_POST['vehicle']) && isset($message)){
          ?>
            <div class="alert alert-success my-1 mb-3 text-center" style="font-size: 12px;" role="alert">
              <?= $message ?>
              <br><br>Would you like to continue? <a href="idverification.php" class="text-center" style="color: black; font-size: 12px;"> Proceed</a>
            </div>
          <?php
          }
          ?>
        <div style="font-size: 12px;">Fill out vehicle details</div><br>
        <div class="row">
            <form action="" method="post">
                <div class="mb-2" style="font-size: 12px;">
                    <label for="vehicletype" class="form-label"><b>Vehicle Type:</b></label>
                    <select name="vehicletype" id="vehicletype" class="form-select mb-2" style="font-size: 10px;" >
                        <option value="">Select Vehicle Type</option>
                        <option value="motorcycle" <?php if(isset($_POST['vehicletype']) && $_POST['vehicletype'] == 'motorcycle') { echo 'selected'; } ?>>Motorcycle</option>
                        <option value="tricycle" <?php if(isset($_POST['vehicletype']) && $_POST['vehicletype'] == 'tricycle') { echo 'selected'; } ?>>Tricycle</option>
                        <option value="car" <?php if(isset($_POST['vehicletype']) && $_POST['vehicletype'] == 'car') { echo 'selected'; } ?>>Car</option>
                        <option value="van" <?php if(isset($_POST['vehicletype']) && $_POST['vehicletype'] == 'van') { echo 'selected'; } ?>>Van</option>
                        <option value="bus" <?php if(isset($_POST['vehicletype']) && $_POST['vehicletype'] == 'bus') { echo 'selected'; } ?>>Bus</option>
                        <option value="lightcommercialvehicle" <?php if(isset($_POST['vehicletype']) && $_POST['vehicletype'] == 'lightcommercialvehicle') { echo 'selected'; } ?>>Light Commercial Vehicle</option>
                        <?php
                            if((!isset($_POST['vehicletype']) && isset($_POST['vehicle'])) || (isset($_POST['vehicletype']) && !validate_field($_POST['vehicletype']))){
                            ?>
                            <p class="text-danger my-1">Please select Vehicle Type.</p>
                            <?php
                            }
                            ?>
                    </select>
                </div>
                <div class="mb-2" style="font-size: 12px;">
                    <label for="platenumber" class="form-label"><b>Plate Number:</b></label>
                    <input type="text" class="form-control" id="platenumber" name="platenumber" placeholder="Enter Plate Number" style="font-size: 10px;" value="<?php if(isset($_POST['platenumber'])){ echo $_POST['platenumber']; } ?>">
                    <?php
                    if(isset($_POST['platenumber']) && !validate_field($_POST['platenumber'])){
                    ?>
                    <p class="text-danger my-1">Please enter valid Plate Number.</p>
                    <?php
                    }
                    ?>
                </div>
                <div class="mb-2" style="font-size: 12px;"><b>Vehicle description:</b><br>
                    <div>
                        <label for="model" class="form-label"  style="font-size: 10px;">Model</label>
                        <input type="text" class="form-control mb-2" id="model" name="model" placeholder="Enter vehicle model" style="font-size: 10px;"  value="<?php if(isset($_POST['model'])){ echo $_POST['model']; } ?>">
                        <?php
                        if(isset($_POST['model']) && !validate_field($_POST['model'])){
                        ?>
                        <p class="text-danger my-1">Please enter Vehicle Model.</p>
                        <?php
                        }
                        ?>
                    </div>
                    <div>
                        <label for="engine" class="form-label"  style="font-size: 10px;">Engine</label>
                        <input type="text" class="form-control" id="engine" name="engine" placeholder="Enter vehicle engine" style="font-size: 10px;"  value="<?php if(isset($_POST['engine'])){ echo $_POST['engine']; } ?>">
                        <?php
                        if(isset($_POST['engine']) && !validate_field($_POST['engine'])){
                        ?>
                        <p class="text-danger my-1">Please enter Vehicle Engine.</p>
                        <?php
                        }
                        ?>
                    </div>
                    <div>
                        <label for="transmission" class="form-label"  style="font-size: 10px;">Transmission</label>
                        <input type="text" class="form-control" id="transmission" name="transmission" placeholder="Enter vehicle transmission" style="font-size: 10px;"  value="<?php if(isset($_POST['transmission'])){ echo $_POST['transmission']; } ?>">
                        <?php
                        if(isset($_POST['transmission']) && !validate_field($_POST['transmission'])){
                        ?>
                        <p class="text-danger my-1">Please enter Vehicle Transmission.</p>
                        <?php
                        }
                        ?>
                    </div>
                    <div>
                        <label for="exterior" class="form-label"  style="font-size: 10px;">Exterior</label>
                        <input type="text" class="form-control" id="exterior" name="exterior" placeholder="Enter vehicle exterior" style="font-size: 10px;"  value="<?php if(isset($_POST['exterior'])){ echo $_POST['exterior']; } ?>">
                        <?php
                        if(isset($_POST['exterior']) && !validate_field($_POST['exterior'])){
                        ?>
                        <p class="text-danger my-1">Please enter Vehicle Exterior.</p>
                        <?php
                        }
                        ?>
                    </div>
                    <div> 
                        <label for="bodystyle" class="form-label"  style="font-size: 10px;">Body Style</label>
                        <input type="text" class="form-control" id="bodystyle" name="bodystyle" placeholder="Enter vehicle body style" style="font-size: 10px;"  value="<?php if(isset($_POST['bodystyle'])){ echo $_POST['bodystyle']; } ?>">
                        <?php
                        if(isset($_POST['bodystyle']) && !validate_field($_POST['bodystyle'])){
                        ?>
                        <p class="text-danger my-1">Please enter Vehicle Body Style.</p>
                        <?php
                        }
                        ?>
                    </div>  
                    <div>
                        <label for="seating" class="form-label"  style="font-size: 10px;">Seating</label>
                        <input type="text" class="form-control" id="seating" name="seating" placeholder="Enter vehicle seating" style="font-size: 10px;"  value="<?php if(isset($_POST['seating'])){ echo $_POST['seating']; } ?>">
                        <?php
                        if(isset($_POST['seating']) && !validate_field($_POST['seating'])){
                        ?>
                        <p class="text-danger my-1">Please enter Vehicle Seating.</p>
                        <?php
                        }
                        ?>
                    </div> 
                    <div>
                        <label for="interior" class="form-label"  style="font-size: 10px;">Interior</label>
                        <input type="text" class="form-control" id="interior" name="interior" placeholder="Enter vehicle interior" style="font-size: 10px;" value="<?php if(isset($_POST['interior'])){ echo $_POST['interior']; } ?>">
                        <?php
                        if(isset($_POST['interior']) && !validate_field($_POST['interior'])){
                        ?>
                        <p class="text-danger my-1">Please enter Vehicle Interior.</p>
                        <?php
                        }
                        ?>
                    </div>
                </div>    
                <button type="submit" name="vehicle" style="background-color: #47B5FF;color: White; font-size: 12px; border: none; border-radius: 3px; margin-bottom: 5px; padding: 10px 0; text-align: center; width: 200px;">Save</button><br>
                <button style="background-color: #47B5FF;color: White; font-size: 12px; border: none; border-radius: 3px; margin-bottom: 5px; padding: 10px 0; text-align: center; width: 200px;" type="submit">Add more</button>
            </form>
        </div>
        <div style="display: flex; justify-content:space-between;">
            <button type="skip" style="font-size: 12px; border: none; margin-top: 20px; text-align: center; width: 60px;"><i class="fa fa-arrow-left" aria-hidden="true"></i>   Skip</button>
            <button type="submit" style="background-color: #1363DF; color: white; font-size: 12px; border: none; border-radius: 3px; margin-top: 20px; padding: 3px 0; text-align: center; width: 60px;">Next   <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
        </div>
    </div>
    <?php
    require_once('./includes/js.php');
    ?>
</body>
</html>
